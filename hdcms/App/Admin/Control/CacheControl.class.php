<?php
class CacheControl extends CommonControl
{
    /**
     * 更新所有缓存
     */
    public function all()
    {
        if (!$this->model()) {
            $this->error("缓存目录./data/model不可写，请修改权限");
        }
        if (!$this->category()) {
            $this->error("缓存目录./data/category不可写，请修改权限");
        }
        $this->success("缓存更新成功");
    }

    /**
     * 更新栏目缓存
     */
    public function category()
    {
        $db = M("category");
        $data = Data::channel($db->all(), $fieldPri = 'cid', $fieldPid = 'pid', $pid = 0, $sid = null, $type = 2, '─');
        return F("category", $data, './data/category');
    }

    /**
     * 更新模型缓存
     */
    public function model()
    {
        $db = M("model");
        return F("model", $db->all(), './data/model');

    }
}

?>