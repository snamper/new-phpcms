<?php
defined('IN_PHPCMS') or exit('No permission resources.');//检查一个变量是否存在
pc_base::load_app_class('admin','admin',0);
class forecast extends admin {
    function __construct()
    {
        parent::__construct();
        $this->db = pc_base::load_model('forecast_model');
    }
    
    function  init ()
    {
        $hash = $_SESSION['pc_hash'];
        $row = $this->db->select();
        //print_r($row);
        include $this->admin_tpl('index');
    }
    function add()
    {
        $hash=$_SESSION['pc_hash'];
        include $this->admin_tpl('add');
    }
    function insert()
    {
        $this->db->insert($_POST);
        showmessage('添加成功','?m=forecast&c=forecast&a=init');
    }

    function edit()
    {
        $row=$this->db->get_one("id={$_GET['id']}");
        $hash=$_SESSION['pc_hash'];
        include $this->admin_tpl('edit');

    }
    function  update()
    {
        $where=array_splice($_POST,-1);
        $this->db->update($_POST,$where);
        showmessage('修改成功','?m=forecast&c=forecast&a=init');
    }
    function delete()
    {
        $id=$_GET['id'];
        $this->db->delete("id={$id}");
        showmessage("删除成功","?m=forecast&c=forecast&a=init");
    }

}