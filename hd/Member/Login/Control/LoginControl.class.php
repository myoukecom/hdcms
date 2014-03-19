<?php

/**
 * 用户登录与注册模块
 * Class UserControl
 */
class LoginControl extends CommonControl
{
    //模型
    private $_db;

    //构造函数
    public function __init()
    {
        if (session("uid") && METHOD != 'quit') {
            go(U("Home/Home/Index", array('g' => "Member")));
        }
        //实例模型对象
        $this->_db = K("User");
    }

    //登录
    public function login()
    {
        if (IS_POST) {
            if ($this->_db->user_login()) {
                $this->ajax('success');
            } else {
                $this->ajax($this->_db->error);
            }
        } else {
            $this->display();
        }
    }

    //注册
    public function reg()
    {
        if (IS_POST) {
            if ($uid = $this->_db->add_user()) {
                //储存SESSION数据
                $this->_db->record_user($uid);
                $this->ajax('success');
            } else {
                $this->ajax($this->_db->error);
            }
        } else {
            $this->display();
        }
    }

    /**
     * 退出登录
     */
    public function quit()
    {
        session(NULL);
        go(__ROOT__);
    }

}


































