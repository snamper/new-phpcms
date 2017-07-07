<?php
defined('IN_ADMIN') or exit('No permission resources.');
include $this->admin_tpl('header');?>

<div class="pad_10">
    <div class="table-list">
<body>


<table align="center" width="100%" cellspacing="0">
     <a href="?m=reply&c=reply&a=add&pc_hash=<?php echo $hash?>">添加直播</a>
    <tr >

        <th width="5%" align="left">回放ID</th>
        <th width="15%" align="center">回放封面</th>
        <th width="10%" align="left">回放名称</th>
        <th width="10%" align="left">回放时间</th>
        <th width="10%" align="left">回放发起人</th>
        <th  width="15%" align="center">回放地址</th>
        <th  width="5%" align="left">回放分类</th>
        <th width="5%" align="left">回放观看人数</th>
        <th width="5%" align="left"> 关键字</th>
        <th width="10%" align="left">修改</th>
        <th width="10%" align="left">删除</th>
        <?php
        foreach ($row as $value)
        {
            echo '<tr >';
            echo "<td width='5%'>{$value['id']}</td>";
            echo "<td width='15%'>{$value['img']}</td>";
            echo "<td width='10%'>{$value['title']}</td>";
            echo "<td width='10%'>{$value['starttime']}</td>";
            echo "<td width='10%'>{$value['owner']}</td>";
            echo "<td width='15%' >{$value['url']}</td>";
            echo "<td width='5%'>{$value['category']}</td>";
            echo "<td width='5%'>{$value['audience']}</td>";
            echo "<td width='5%'>{$value['keyword']}</td>";
            echo "<td width='10%'><a href='?m=reply&c=reply&a=edit&id={$value[id]}&pc_hash={$hash}'>修改</a></td>";
            echo "<td width='10%'><a href='?m=reply&c=reply&a=delete&id={$value[id]}&pc_hash={$hash}'>删除</a></td>";
            echo '</tr>';
        }

        ?>

    </tr>

</table>
       
</body>
</div>
    </div>
</html>
