<?php /* Smarty version 2.6.26, created on 2020-12-28 14:07:47
         compiled from index.tpl */ ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />

<?php include BASE_PATH."/modules/assets/templates/top.tpl"; ?>

<title>菜单列表</title>
<?php echo '
<style>
   	td a{
        width: 44%;
        margin: 2%!important;
        float: left;
    }
</style>
'; ?>

</head>
<body>

<nav class="breadcrumb">
        配置管理 <span class="c-gray en">&gt;</span> 
        菜单列管理
    </nav>


<div class="pd-20">
    <div class="text-c">
        <form name="form1" action="index.php" method="get" style="background: #fff;">
            <input type="hidden" name="module" value="menu" />
            <input type="hidden" name="pagesize" value="<?php echo $this->_tpl_vars['pagesize']; ?>
" id="pagesize" />

           <input type="text" name="title" size='8' value="<?php echo $this->_tpl_vars['title']; ?>
" id="" placeholder="菜单名称" autocomplete="off" style="width:200px" class="input-text">
            <input name="" id="btn1" class="btn btn-success" type="submit" value="查询">
            
        </form>
        
    </div>
    <a style="margin-top: 10px;" class="btn newBtn radius"  onclick="location.href='index.php?module=menu&action=add';">
            	<div style="height: 100%;display: flex;align-items: center;font-size: 14px;">
                <img src="images/icon1/add.png"/>&nbsp;添加菜单
           		</div>
    </a>
    <div style="clear:both;">
    </div>
    <div class="mt-10">
        <div class="mt-20 table-scroll" style="overflow: scroll; width: 100%; height: 495px;">
        <table class="table table-border table-bordered table-bg table-hover">
            <thead>
                <tr class="text-c">
                    <th style="width:100px">菜单id</th>
                    <th>菜单名称</th>
                    <th style="width:100px">所属id</th>
                    <th>添加时间</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
            <?php $_from = $this->_tpl_vars['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['f1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['f1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['f1']['iteration']++;
?>
                <tr class="text-c">
                    <td style="text-align: left;padding-left:38px;"><?php echo $this->_tpl_vars['item']->id_id; ?>
</td>
                    <td><?php echo $this->_tpl_vars['item']->title; ?>
</td>
                    <td style="text-align: left;padding-left:38px;"><?php echo $this->_tpl_vars['item']->s_id; ?>
</td>
                    <td><?php echo $this->_tpl_vars['item']->add_time; ?>
</td>
                    <td>
                        <a style="text-decoration:none" class="ml-5" href="index.php?module=menu&action=modify&id=<?php echo $this->_tpl_vars['item']->id; ?>
" title="修改" >
                        	<div style="align-items: center;font-size: 12px;display: flex;">
                            	<div style="margin:0 auto;;display: flex;align-items: center;"> 
                                <img src="images/icon1/xg.png"/>&nbsp;修改
                            	</div>
            				</div>
                        </a>
                        <a title="删除" href="javascript:;" onclick="del(this,<?php echo $this->_tpl_vars['item']->id; ?>
)" class="ml-5" style="text-decoration:none">
                        	<div style="align-items: center;font-size: 12px;display: flex;">
                            	<div style="margin:0 auto;;display: flex;align-items: center;"> 
                                <img src="images/icon1/del.png"/>&nbsp;删除
                            	</div>
            				</div>
                        </a>
                    </td>
                </tr>
            <?php endforeach; endif; unset($_from); ?>
            </tbody>
        </table>
    </div>
    </div>
    <div style="text-align: center;display: flex;justify-content: center;"><?php echo $this->_tpl_vars['pages_show']; ?>
</div>
</div>
<?php include BASE_PATH."/modules/assets/templates/footer.tpl"; ?>



<?php echo '
<script type="text/javascript">
/*删除*/
function del(obj,id){
    confirm(\'确认要删除吗？\',id);
}
function confirm (content,id){
    $("body").append(`
        <div class="maskNew">
            <div class="maskNewContent">
                <a href="javascript:void(0);" class="closeA" onclick=closeMask1() ><img src="images/icon1/gb.png"/></a>
                <div class="maskTitle">删除</div>
                <div style="text-align:center;margin-top:30px"><img src="images/icon1/ts.png"></div>
                <div style="height: 50px;position: relative;top:20px;font-size: 22px;text-align: center;">
                    ${content}
                </div>
                <div style="text-align:center;margin-top:30px">
                    <button class="closeMask" style="margin-right:20px" onclick=closeMask(\'${id}\') >确认</button>
                    <button class="closeMask" onclick=closeMask1() >取消</button>
                </div>
            </div>
        </div>
    `)
}
function closeMask1(){
    $(".maskNew").remove();
}
function closeMask(id){
    $.get("index.php?module=menu&action=del",{\'id\':id},function(res){
        if(res.status=="1"){
            appendMask("删除成功","cg");
            location.replace(location.href);
        }else{
            appendMask("删除失败","ts");
            location.replace(location.href);
        }
    },"json");
    $(".maskNew").remove();
}
function appendMask(content,src){
    $("body").append(`
        <div class="maskNew">
            <div class="maskNewContent">
                <a href="javascript:void(0);" class="closeA" onclick=closeMask1() ><img src="images/icon1/gb.png"/></a>
                <div class="maskTitle">删除</div>
                <div style="text-align:center;margin-top:30px"><img src="images/icon1/${src}.png"></div>
                <div style="height: 50px;position: relative;top:20px;font-size: 22px;text-align: center;">
                    ${content}
                </div>
                <div style="text-align:center;margin-top:30px">
                    <button class="closeMask" onclick=closeMask1() >确认</button>
                </div>
            </div>
        </div>
    `)
}
</script>
'; ?>

</body>
</html>