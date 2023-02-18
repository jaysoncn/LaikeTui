<!DOCTYPE HTML><html><head>    <meta charset="utf-8">    <meta name="renderer" content="webkit|ie-comp|ie-stand">    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">    <meta name="viewport"          content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>    <meta http-equiv="Cache-Control" content="no-siteapp"/>    {php}include BASE_PATH."/modules/assets/templates/top.tpl";{/php}    <link href="style/css/lbtselect.css" rel="stylesheet" type="text/css"/>    {literal}        <style type="text/css">            .modal .modal-dialog {                overflow: hidden;                background: white;                z-index: -1;            }        </style>    {/literal}    <title>修改轮播图</title></head><body><nav class="breadcrumb">    小程序 <span class="c-gray en">&gt;</span>    <a href="index.php?module=banner">轮播图管理</a> <span class="c-gray en">&gt;</span>    修改轮播图 <span class="c-gray en">&gt;</span>    <a href="javascript:history.go(-1)">返回</a></nav><div class="page-container">    <form name="form1" action="index.php?module=banner&action=modify&id={$id}" class="form form-horizontal"          method="post" enctype="multipart/form-data">        <div id="tab-system" class="HuiTab">            <div class="row cl">                <label class="form-label col-xs-4 col-sm-4"><span class="c-red">*</span>轮播图：</label>                <div class="formControls col-xs-8 col-sm-6">                    <img id="thumb_url" src='{$uploadImg}{$image}' style="height:100px;width:150">                    <input type="hidden" id="picurl" name="image" datatype="*" nullmsg="请选择图片"/>                    <input type="hidden" name="oldpic" value="{$image}">                    <button class="btn btn-success" id="image" style="z-index:3000" type="button">选择图片</button>                    <div>图片尺寸: 320*200</div>                </div>                <div class="col-4"></div>            </div>            <div class="row cl">                <label class="form-label col-xs-4 col-sm-4"><span class="c-red">*</span>链接：</label>                <div class="formControls col-xs-8 col-sm-6">                    <input type="text" class="input-text" value="{$url}" placeholder="" id="banner_url" name="url"                           style="width: 80%;">                    <a data-toggle="modal" data-target="#myModal">[点我选择]</a>                </div>            </div>            <div class="row cl">                <label class="form-label col-xs-4 col-sm-4"><span class="c-red">*</span>排序号：</label>                <div class="formControls col-xs-8 col-sm-6">                    <input style="width:50px" type="text" class="input-text" value="{$sort}" placeholder="" id=""                           name="sort">                </div>            </div>            <div class="row cl">                <label class="form-label col-xs-4 col-sm-4"></label>                <div class="formControls col-xs-8 col-sm-6">                    <button class="btn btn-primary radius" type="submit" name="Submit">                        <i class="Hui-iconfont">&#xe632;</i>                        保存                    </button>                    <button class="btn btn-default radius" type="reset">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>                </div>            </div>        </div>    </form></div></div><div id="outerdiv"     style="position:fixed;top:0;left:0;background:rgba(0,0,0,0.7);z-index:2;width:100%;height:100%;display:none;">    <div id="innerdiv" style="position:absolute;"><img id="bigimg" src=""/></div></div><!-- 轮播图链接弹窗 start--><div class="modal fade" style="display:none" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"     aria-hidden="true">    <div class="modal-dialog">        <div class="modal-content">            <div class="modal-header clearfix mid">                <button type="button" class="close mid" data-dismiss="modal" aria-hidden="true">×</button>                <h4 class="modal-title shortcut-modal-title mid" id="myModalLabel">添加链接</h4>                <div class="shortcut-search-form mid">                </div>            </div>            <div class="modal-body shortcut-add-box">                <div class="shortcut-add-box-left">                    <ul>                        <li class="active" id="li1">                            <span>全部</span>                        </li>                        <li>                            <span>商品</span>                        </li>                        <li>                            <span>个人中心</span>                        </li>                        <li>                            <span>优惠券</span>                        </li>                        <li>                            <span>签到</span>                        </li>                        <li>                            <span>公告</span>                        </li>                        <li>                            <span>拼团</span>                        </li>                        <li>                            <span>其他</span>                        </li>                        <div class="lanPos"></div>                    </ul>                </div>                <div class="shortcut-add-box-right">                    <div class="car-info-shortcut shortcut-element-list">                        <h5><span>全部</span></h5>                        <ul class="shortcut-element-box clearfix">                            <li>                                <i class="fa fa-check-square-o"></i>                                <span>无</span>                            </li>                        </ul>                    </div>                    <div class="person-shortcut shortcut-element-list">                        <h5><span>商品</span></h5>                        <ul class="shortcut-element-box clearfix">                            {foreach from=$products item=item name=f1}                                <li>                                    <i class="fa fa-check-square-o"></i>                                    <input type="hidden" value="../product/detail?productId={$item->id}">                                    <span>{$item->product_title}</span>                                </li>                            {/foreach}                        </ul>                    </div>                    <div class="enterprise-info-shortcut shortcut-element-list">                        <h5><span>个人中心</span></h5>                        <ul class="shortcut-element-box clearfix">                            <li>                                <i class="fa fa-check-square-o"></i>                                <input type="hidden" value="../user/user">                                <span>个人中心</span>                            </li>                        </ul>                    </div>                    <div class="enterprise-server-shortcut shortcut-element-list">                        <h5><span>优惠券</span></h5>                        <ul class="shortcut-element-box clearfix">                            <li>                                <i class="fa fa-user-plus"></i>                                <input type="hidden" value="../coupon/index?currentTab=0&type=receive">                                <span>领券中心</span>                            </li>                            <li>                                <i class="fa fa-check-square-o"></i>                                <input type="hidden" value="../coupon/index?currentTab=1">                                <span>我的优惠券</span>                            </li>                        </ul>                    </div>                    <div class="enterprise-server-shortcut shortcut-element-list">                        <h5><span>签到</span></h5>                        <ul class="shortcut-element-box clearfix">                            <li>                                <i class="fa fa-check-square-o"></i>                                <input type="hidden" value="../sign_in/sign_in">                                <span>签到</span>                            </li>                        </ul>                    </div>                    <div class="repair-info-shortcut shortcut-element-list">                        <h5><span>公告</span></h5>                        <ul class="shortcut-element-box clearfix">                            {foreach from=$notices item=item name=f1}                                <li>                                    <i class="fa fa-check-square-o"></i>                                    <input type="hidden" value="../notice/index?Id={$item->id}">                                    <span>{$item->name}</span>                                </li>                            {/foreach}                        </ul>                    </div>                    <div class="examine-shortcut shortcut-element-list">                        <h5><span>拼团</span></h5>                        <ul class="shortcut-element-box clearfix">                            <li>                                <i class="fa fa-check-square-o"></i>                                <input type="hidden" value="../group_buy/group">                                <span>拼团中心</span>                            </li>                        </ul>                    </div>                    <div class="examine-shortcut shortcut-element-list">                        <h5><span>其他</span></h5>                        <ul class="shortcut-element-box clearfix">                            <li>                                <i class="fa fa-check-square-o"></i>                                <input type="hidden" value="#">                                <span>无</span>                            </li>                        </ul>                    </div>                </div>            </div>            <div class="modal-footer">                <button type="button" class="btn btn-primary" id="shortcutEnter">确认</button>            </div>        </div>    </div></div>{php}include BASE_PATH."/modules/assets/templates/footer.tpl";{/php}<script src="style/js/bootstrap.min.js"></script><script src="style/js/lbt.js"></script>{literal}    <script type="text/javascript">        KindEditor.ready(function (K) {            var editor = K.editor({                allowFileManager: true,                uploadJson: "index.php?module=system&action=uploadImg", //上传功能                fileManagerJson: 'style/kindeditor/php/file_manager_json.php', //网络空间            });            //上传背景图片            K('#image').click(function () {                editor.loadPlugin('image', function () {                    editor.plugin.imageDialog({                        showRemote: true, //网络图片不开启                        //showLocal : false, //不开启本地图片上传                        imageUrl: K('#picurl').val(),                        clickFn: function (url, title, width, height, border, align) {                            K('#picurl').val(url);                            $('#thumb_url').attr("src", url);                            editor.hideDialog();                        }                    });                });            });        });        //选择链接        $(".select_link").click(function () {            $(this).hide();        });    </script>{/literal}</body></html>