<?php

/**
 * 文章管理
 * Class ContentControl
 */
class ContentControl extends MemberAuthControl
{
    //栏目缓存
    private $_category;
    //模型缓存
    private $_model;
    //模型mid
    private $_mid;
    //栏目cid
    private $_cid;
    //文章aid
    private $_aid;
    //模型对象
    private $_db;

    //构造函数
    public function __init()
    {
        $this->_model = cache("model", false);
        $this->_category = cache("category", false);
        $this->_mid = Q('mid', null, 'intval');
        $this->_cid = Q("cid", NULL, "intval");
        $this->_aid = Q("aid", NULL, "intval");

        if (!isset($this->_model[$this->_mid])) {
            $this->error("模型不存在！");
        }
        if ($this->_cid && !isset($this->_category[$this->_cid])) {
            $this->error("栏目不存在！");
        }
        $this->_db = K("Content");
        //验证权限
        if (!$this->check_auth()) {
            if (IS_AJAX) {
                $this->_ajax(0, '没有操作权限');
            } else {
                $this->error('没有操作权限');
            }
        }
    }

    /**
     * 验证权限
     */
    public function check_auth()
    {
        if ($this->_cid) {
            return check_category_access($this->_cid, METHOD);
        } else {
            return true;
        }
    }

    /**
     * 文章列表
     */
    public function index()
    {
        /**
         * 分配数据
         * page=>页码
         * data=>文章内容
         */
        $db = K('ContentView');
        $this->assign($db->get_content());
        $this->display();
    }

    /**
     * 选择发表文章栏目
     */
    public function get_category()
    {
        $rid = session('rid');
        $cat = cache("category");
        //分配栏目
        $category = Data::tree($cat, 'catname');
        if ($this->_cid) {
            $category = Data::channelList($category, $this->_cid);
            array_unshift($category, $cat[$this->_cid]);
        }
        $data = array();
        /**
         * 只选择有权限的栏目，过滤掉没有发表权限的栏目
         */
        foreach ($category as $n => $v) {
            $v['disabled'] = $v['cattype'] == 1 ? '' : ' disabled="disabled" ';
            if (check_category_access($v['cid'], 'add')) {
                $data[$n] = $v;
            }
        }
        return $data;
    }

    /**
     * 发表文章
     */
    public function add()
    {
        if (IS_POST) {
            if ($result = $this->_db->add_content()) {
                //添加动态表记录
                $content = '发表了文章: <a href="' . __WEB__ . '?a=Index&c=Article&m=show&mid=' . $this->_mid
                    . '&cid=' . $this->_cid . "&aid=" . $result[$this->_db->table] . '" target="_blank">' . mb_substr(Q('title'), 0, 30, 'utf-8') . "</a>";
                $this->add_dynamic($content);
                $credits = $this->_category[$this->_cid]['add_reward'];
                $this->_ajax(1, "发表成功！增加{$credits}个金币");
                exit;
            } else {
                $this->_ajax(0, $this->_db->error);
            }
        } else {
            //分配栏目
            $this->category = $this->get_category();
            //模型type为1时即标准模型，显示编辑器、关键字等字段
            $this->model = $this->_model[$this->_mid];
            //自定义字段
            import('FieldModel', 'hd/Hdcms/Field/Model');
            //FieldModel模型使用mid参数
            $_REQUEST['mid'] = $this->_mid;
            $fieldModel = new FieldModel();
            $this->custom_field = $fieldModel->field_view();
            $this->display();
        }
    }


    /**
     * keditor 编辑器图片上传处理方法
     */
    public function hd_uploadify()
    {
        //文件保存目录
        $_POST['upload_dir'] = "./upload/" . Q("get.dir", "content") . "/" . date("Y") . '/' . date("m") . '/' . date("d") . '/';
        import('UploadControl', 'hd.Hdcms.Upload.Control');
        O('UploadControl', __FUNCTION__);
    }

    /**
     * 修改文章
     */
    public function edit()
    {
        //修改文章
        if (IS_POST) {
            if ($this->_db->edit_content()) {
                $this->_ajax(1, '修改文章成功');
            }
        } else {
            $aid = Q("aid", null, "intval");
            if ($aid) {
                //文章字段数据
                $field = $this->_db->get_one_content($aid);
                //FLAG属性
                $this->flag = cache('flag');
                //自定义字段处理
                $this->custom_field = $this->_db->get_current_field_view($aid);
                //分配缩略图数据
                if (!empty($field['thumb']) && is_file($field['thumb'])) {
                    $thumb = array(
                        0 => array(
                            'path' => $field['thumb'], //原图路径
                            'thumb' => array( //缩略图列表
                                $field['thumb']
                            )
                        )
                    );
                    $this->thumb = $thumb;
                }
                $this->field = $field;
                $this->display();
            }
        }
    }

    /**
     * 删除文章
     */
    public function del()
    {
        $aid = Q('aid', null, 'intval');
        $cid = Q('cid', null, 'intval');
        if ($aid) {
            if ($this->_db->del_content($cid, $aid, session('uid'))) {
                $this->_ajax(1, '删除成功');
            }
        } else {
            $this->_ajax(0, 'aid参数错误');
        }
    }
}