<?php /* Smarty version 2.6.26, created on 2020-12-28 14:07:45
         compiled from index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'index.tpl', 515, false),)), $this); ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport"
          content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <link rel="stylesheet" href="style/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/assets/vendor/chartist/css/chartist-custom.css">
    <link rel="stylesheet" href="style/assets/css/main.css">
    <link href="style/css/style.css" rel="stylesheet"/>
    <script src="style/assets/vendor/jquery/jquery.min.js"></script>
    <script src="style/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="style/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="style/assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="style/assets/vendor/chartist/js/chartist.min.js"></script>
    <script src="style/js/echarts.min.js" type="text/javascript" charset="utf-8"></script>
    <title>我的桌面</title>
    <?php echo '
        <style type="text/css">
            .leftIcon {
                float: left;
                width: 35%;
                height: 100%;
                text-align: center;
                line-height: 100px;
                border-bottom-left-radius: 5px;
                border-top-left-radius: 5px;
                -moz-border-radius-topleft: 5px;
                -moz-border-radius-bottomleft: 5px;
            }

            .row_a .col-md-2 {
                padding: 0 5px;
            }

            .rightNum {
                float: left;
                width: 65%;
                height: 100%;
                display: flex;
                align-items: center;
                background: #fff;
                border-bottom-right-radius: 5px;
                border-top-right-radius: 5px;
                -moz-border-radius-topright: 5px;
                -moz-border-radius-bottomright: 5px;
            }

            .rightNum div {
                width: 100%;
            }

            .rightNum div span {
                display: block;
                width: 100%;
                text-align: center;
            }

            .metric {
                height: 100px;
                padding: 0px;
                border: none;
                margin-bottom: 10px;
            }

            .number, .title {
                font-weight: 600 !important;
            }

            .percentage {
                display: none;
            }

            .main-content {
                padding: 0 5px;
            }

            .mainLeft {
                height: 100%;
                float: left;
                width: 40%;
                padding: 0 5px;
            }

            .mainRight {
                height: 100%;
                float: left;
                width: 60%;
                padding: 0 5px;
            }

            .realDiv {
                width: 100%;
                background: #fff;
                border-radius: 5px;
                height: 240px;
                margin-bottom: 10px;
            }

            .tjtDiv {
                width: 100%;
                background: #fff;
                border-radius: 5px;
                margin-bottom: 10px;
            }

            .panel-body {
                padding-left: 0px !important;
                padding-right: 0px !important;
            }

            .realDivTitle {
                padding: 0px 20px;
                font-size: 16px;
                font-weight: bold;
                font-family: "微软雅黑";
                color: #414658;
                height: 60px;
                line-height: 60px;
            }

            .realDivMainNum {
                height: 100px;
                padding: 30px;
                text-align: center;
                vertical-align: bottom;
                border-bottom: 1px solid #eee;
            }

            .realDiv3Num {
                height: 60px;
                line-height: 60px;
                margin: 10px 0px;
            }

            .realNum3 {
                height: 100%;
                width: 33.33%;
                box-sizing: border-box;
                border-right: 1px solid #eee;
                float: left;
                text-align: center;
                display: flex;
                align-items: center;
            }

            .realNum3 p {
                height: 20px;
                line-height: 20px;
                margin-bottom: 5px;
            }

            .number {
                font-size: 32px;
                color: #0880ff;
            }

            .upText {
                color: #23bf08;
            }

            .downText {
                color: #dc3545;
            }

            .num {
                font-size: 22px;
                color: #414658;
            }

            .numText {
                color: #888f9e;
                font-size: 14px;
            }

            .member {
                width: 67%;
                height: 100%;
                border-radius: 5px;
                float: left;
                margin-right: 0.5%;
                background: #fff;
            }

            .news {
                width: 32%;
                height: 49%;
                border-radius: 5px;
                float: left;
                margin-left: 0.5%;
                background: #fff;
            }

            .title1 {
                position: relative;
                top: -30px;
            }

            .title1 a {
                color: #6a7076;
                font-size: 14px;
                font-family: "微软雅黑";
                display: inline-block;
                margin-right: 10px;
            }

            .activeTJTBtn {
                color: #0880ff !important;
            }

            .tjtDivIn {
                padding: 10px;
            }

            .news ul {
                list-style: none;
                padding: 10px;
            }

            .news ul li {
                padding: 10px;
                border-bottom: 1px solid #eee;
                height: 70px;
                position: relative;
            }

            .news ul li a {
                display: inline-block;
                height: 100%;
                width: 100%;
                position: relative;
            }

            .news ul li span {
                color: #414658;
                font-size: 14px;
                overflow: hidden;
                text-overflow: ellipsis;
                display: -webkit-box;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical
            }

            .newsDate {
                position: absolute;
                right: 0px;
                bottom: -5px;
                font-size: 12px;
                color: #888f9e;
            }

            .realNum3 div {
                width: 100%;
            }

            .numText {
                margin-bottom: 0px !important;
            }
        </style>
    '; ?>

</head>
<body>

<div class="main" style="background: #edf1f5;">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <!-- OVERVIEW -->
            <div class="panel panel-headline"
                 style="background-color: transparent;box-shadow: none;margin-bottom: 0px;">
                <div class="panel-body">
                    <input type="hidden" name="day1" value="<?php echo $this->_tpl_vars['today']; ?>
">
                    <input type="hidden" name="day2" value="<?php echo $this->_tpl_vars['yesterday']; ?>
">
                    <input type="hidden" name="day3" value="<?php echo $this->_tpl_vars['qiantian']; ?>
">
                    <input type="hidden" name="day4" value="<?php echo $this->_tpl_vars['sitian']; ?>
">
                    <input type="hidden" name="day5" value="<?php echo $this->_tpl_vars['wutian']; ?>
">
                    <input type="hidden" name="day6" value="<?php echo $this->_tpl_vars['liutian']; ?>
">
                    <input type="hidden" name="day7" value="<?php echo $this->_tpl_vars['qitian']; ?>
">

                    <input type="hidden" name="couhuiyuan01" value="<?php echo $this->_tpl_vars['couhuiyuan01']; ?>
">
                    <input type="hidden" name="couhuiyuan02" value="<?php echo $this->_tpl_vars['couhuiyuan02']; ?>
">
                    <input type="hidden" name="couhuiyuan03" value="<?php echo $this->_tpl_vars['couhuiyuan03']; ?>
">
                    <input type="hidden" name="couhuiyuan04" value="<?php echo $this->_tpl_vars['couhuiyuan04']; ?>
">
                    <input type="hidden" name="couhuiyuan05" value="<?php echo $this->_tpl_vars['couhuiyuan05']; ?>
">
                    <input type="hidden" name="couhuiyuan06" value="<?php echo $this->_tpl_vars['couhuiyuan06']; ?>
">
                    <input type="hidden" name="couhuiyuan07" value="<?php echo $this->_tpl_vars['couhuiyuan07']; ?>
">
                    <input type="hidden" name="couhuiyuan" value="<?php echo $this->_tpl_vars['couhuiyuan']; ?>
">

                    <input type="hidden" name="order01" value="<?php echo $this->_tpl_vars['order01']; ?>
">
                    <input type="hidden" name="order02" value="<?php echo $this->_tpl_vars['order02']; ?>
">
                    <input type="hidden" name="order03" value="<?php echo $this->_tpl_vars['order03']; ?>
">
                    <input type="hidden" name="order04" value="<?php echo $this->_tpl_vars['order04']; ?>
">
                    <input type="hidden" name="order05" value="<?php echo $this->_tpl_vars['order05']; ?>
">
                    <input type="hidden" name="order06" value="<?php echo $this->_tpl_vars['order06']; ?>
">
                    <input type="hidden" name="order07" value="<?php echo $this->_tpl_vars['order07']; ?>
">

                    <div class="row">
                        <a class="row_a" href="index.php?module=orderslist&status=0&sNo=">
                            <div class="col-md-2">
                                <div class="metric">

                                    <div class="leftIcon" style="background: #68c8c7;"><img
                                                src="../LKT/images/fukuan.png"/></div>
                                    <div class="rightNum">
                                        <div>
                                            <span class="number" style="color:#68c8c7 ;"><?php echo $this->_tpl_vars['dfk']; ?>
</span>
                                            <span class="title">待付款</span>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </a>
                        <a class="row_a" href="index.php?module=orderslist&status=1&sNo=">
                            <div class="col-md-2">
                                <div class="metric">
                                    <div class="leftIcon" style="background: #ff6c60;"><img
                                                src="../LKT/images/fahuo.png"/></div>
                                    <div class="rightNum">
                                        <div>
                                            <span class="number" style="color:#ff6c60 ;"><?php echo $this->_tpl_vars['dp']; ?>
</span>
                                            <span class="title">待发货</span>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </a>
                        <a class="row_a" href="index.php?module=orderslist&status=2&sNo=">
                            <div class="col-md-2">
                                <div class="metric">
                                    <div class="leftIcon" style="background: #feb04c;"><img
                                                src="../LKT/images/shouhuo.png"/></div>
                                    <div class="rightNum">
                                        <div>
                                            <span class="number" style="color:#feb04c ;"><?php echo $this->_tpl_vars['yth']; ?>
</span>
                                            <span class="title">待收货</span>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </a>
                        <a class="row_a" href="index.php?module=orderslist&status=3&sNo=">
                            <div class="col-md-2">
                                <div class="metric">
                                    <div class="leftIcon" style="background: #a6d867;"><img
                                                src="../LKT/images/pingjia.png"/></div>
                                    <div class="rightNum">
                                        <div>
                                            <span class="number" style="color:#a6d867 ;"><?php echo $this->_tpl_vars['pj']; ?>
</span>
                                            <span class="title">待评价</span>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </a>
                        <a class="row_a" href="index.php?module=return">
                            <div class="col-md-2">
                                <div class="metric">
                                    <div class="leftIcon" style="background: #57c8f2;"><img
                                                src="../LKT/images/tuihuo.png"/></div>
                                    <div class="rightNum">
                                        <div>
                                            <span class="number" style="color:#57c8f2 ;"><?php echo $this->_tpl_vars['th']; ?>
</span>
                                            <span class="title">退货</span>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="row">
                        <div class="mainLeft">
                            <div class="realDiv">
                                <div class="realDivTitle">实时营业额</div>
                                <div class="realDivMainNum">
                                    <span class="number"><?php echo $this->_tpl_vars['day_yy']; ?>
 </span>
                                    <span class="percentage">
		                                <?php if ($this->_tpl_vars['yingye_day'] > 0): ?>
                                            <i class="fa fa-caret-up text-success"></i>

<?php else: ?>

                                            <i class="fa fa-caret-down text-danger"></i>
                                        <?php endif; ?>
                                        <span class="<?php if ($this->_tpl_vars['yingye_day'] > 0): ?>upText<?php else: ?>downText<?php endif; ?>">
		                                	<?php echo $this->_tpl_vars['yingye_day']; ?>

		                                </span>
		                            </span>
                                </div>
                                <div class="realDiv3Num">
                                    <div class="realNum3">
                                        <div>
                                            <p class="num"><?php echo $this->_tpl_vars['yes_yy']; ?>
</p>
                                            <p class="numText">昨日营业额</p>
                                        </div>

                                    </div>
                                    <div class="realNum3">
                                        <div>
                                            <p class="num"><?php echo $this->_tpl_vars['tm01']; ?>
</p>
                                            <p class="numText">本月营业额</p>
                                        </div>
                                    </div>
                                    <div class="realNum3" style="border:none">
                                        <div>
                                            <p class="num"><?php echo $this->_tpl_vars['tm02']; ?>
</p>
                                            <p class="numText">累计营业额</p>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="realDiv">
                                <div class="realDivTitle">实时订单数</div>
                                <div class="realDivMainNum">
                                    <span class="number"><?php echo $this->_tpl_vars['daydd']; ?>
</span>
                                    <span class="percentage">
		                                <?php if ($this->_tpl_vars['dingdan_day'] > 0): ?>
                                            <i class="fa fa-caret-up text-success"></i>

<?php else: ?>

                                            <i class="fa fa-caret-down text-danger"></i>
                                        <?php endif; ?>
                                        <span class="<?php if ($this->_tpl_vars['dingdan_day'] > 0): ?>upText<?php else: ?>downText<?php endif; ?>">
		                                	<?php echo $this->_tpl_vars['dingdan_day']; ?>

		                                </span>
		                            </span>
                                </div>
                                <div class="realDiv3Num">
                                    <div class="realNum3">
                                        <div>
                                            <p class="num"><?php echo $this->_tpl_vars['yesdd']; ?>
</p>
                                            <p class="numText">昨日订单</p>
                                        </div>
                                    </div>
                                    <div class="realNum3">
                                        <div>
                                            <p class="num"><?php echo $this->_tpl_vars['tm']; ?>
</p>
                                            <p class="numText">本月订单</p>
                                        </div>
                                    </div>
                                    <div class="realNum3" style="border:none">
                                        <div>
                                            <p class="num"><?php echo $this->_tpl_vars['leiji_dd']; ?>
</p>
                                            <p class="numText">累计订单</p>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="realDiv">
                                <div class="realDivTitle">实时访客数</div>
                                <div class="realDivMainNum">
                                    <span class="number"><?php echo $this->_tpl_vars['fangke01']; ?>
</span>
                                    <span class="percentage">
		                                <?php if ($this->_tpl_vars['fangkebizhi'] > 0): ?>
                                            <i class="fa fa-caret-up text-success"></i>

<?php else: ?>

                                            <i class="fa fa-caret-down text-danger"></i>
                                        <?php endif; ?>
                                        <span class="<?php if ($this->_tpl_vars['fangkebizhi'] > 0): ?>upText<?php else: ?>downText<?php endif; ?>">
		                                	<?php echo $this->_tpl_vars['fangkebizhi']; ?>

		                                </span>
		                            </span>
                                </div>
                                <div class="realDiv3Num">
                                    <div class="realNum3">
                                        <div>
                                            <p class="num"><?php echo $this->_tpl_vars['fangke02']; ?>
</p>
                                            <p class="numText">昨日访客</p>
                                        </div>
                                    </div>
                                    <div class="realNum3">
                                        <div>
                                            <p class="num"><?php echo $this->_tpl_vars['fangke03']; ?>
</p>
                                            <p class="numText">本月访客</p>
                                        </div>
                                    </div>
                                    <div class="realNum3" style="border:none">
                                        <div>
                                            <p class="num"><?php echo $this->_tpl_vars['fangke']; ?>
</p>
                                            <p class="numText">累计访客</p>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="mainRight">
                            <div class="tjtDiv" style="height: 315px;background: transparent;">
                                <div class="member">
                                    <div class="realDivTitle">会员统计</div>
                                    <div class="title1" style="float: right; margin-right: 20px">累计会员: <?php echo $this->_tpl_vars['couhuiyuan']; ?>
人
                                    </div>
                                    <div class="tjtDivIn" id="memberTJT" style="height:240px;margin: 0 auto;">

                                    </div>
                                </div>
                                <div class="news" style="margin-bottom: 6px">
                                    <div class="realDivTitle" style="border-bottom: 2px solid #eee;">公告</div>
                                    <ul style="height: 91px;overflow: auto;">
                                        <?php $_from = $this->_tpl_vars['res_notice']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['f1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['f1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item1']):
        $this->_foreach['f1']['iteration']++;
?>
                                            <li>
                                                <a href="index.php?module=notice&action=article&id=<?php echo $this->_tpl_vars['item1']->id; ?>
">
                                                    <span><?php echo ((is_array($_tmp=$this->_tpl_vars['item1']->time)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y/%m/%d") : smarty_modifier_date_format($_tmp, "%Y/%m/%d")); ?>
 <?php echo $this->_tpl_vars['item1']->name; ?>
</span>
                                                </a>
                                            </li>
                                        <?php endforeach; endif; unset($_from); ?>
                                    </ul>
                                </div>
                                <div class="news">
                                    <div class="realDivTitle" style="border-bottom: 2px solid #eee;">武林秘籍</div>

                                    <div style="padding:15px;">
                                    <a href="https://www.laiketui.com/help" target="_blank">
                                                开发文档
                                            </a>|

                                            <a href="https://gitee.com/laiketui/open/issues" target="_blank">
                                                BUG提交
                                            </a>|

                                        <a href="http://p.qiao.baidu.com/cps/chat?siteId=15106774&userId=30631139&siteToken=32a2acb5b7f7fcbeb81f3e3a043379b0" target="_blank">
                                            定制开发
                                        </a>|
                                        <a href="https://www.laiketui.com/question" target="_blank">
                                            论坛
                                        </a><br/>
<a href="//shang.qq.com/wpa/qunwpa?idkey=e608e87cf657e7f0d0a6fe85b127784efd373f6e1e18d21b590af85f2612df55" target="_blank" rel="noopener"> 631252151</a> | <a href="//shang.qq.com/wpa/qunwpa?idkey=2bc690569245606dcfbf7e67a9abcd8086cd825b4d946bb122ba3b091044a6e4" target="_blank" rel="noopener"> 615981686</a>

                                    </div>


                                </div>

                                <div class="tjtDivIn" class="clearfix"></div>
                            </div>
                            <div class="tjtDiv" style="height: 415px;">
                                <div class="realDivTitle">订单统计</div>
                                <div class="title1" style="float: right; margin-right: 20px">
                                    <a href="javacript:void(0)" class="activeTJTBtn">本周</a>
                                </div>
                                <div class="tjtDivIn" id="ddTJT" style="height:345px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?php echo '
    <script type="text/javascript">
        $(function () {
            var data, options;

            var day1 = $(\'input[name=day1]\').val(); // 今天
            var day2 = $(\'input[name=day2]\').val(); // 昨天
            var day3 = $(\'input[name=day3]\').val(); // 前天
            var day4 = $(\'input[name=day4]\').val(); // 4天
            var day5 = $(\'input[name=day5]\').val(); // 5天
            var day6 = $(\'input[name=day6]\').val(); // 6天
            var day7 = $(\'input[name=day7]\').val(); // 7天

            var couhuiyuan01 = $(\'input[name=couhuiyuan01]\').val(); // 今天注册人数
            var couhuiyuan02 = $(\'input[name=couhuiyuan02]\').val(); // 昨天注册人数
            var couhuiyuan03 = $(\'input[name=couhuiyuan03]\').val(); // 前天注册人数
            var couhuiyuan04 = $(\'input[name=couhuiyuan04]\').val(); // 4天前注册人数
            var couhuiyuan05 = $(\'input[name=couhuiyuan05]\').val(); // 5天前注册人数
            var couhuiyuan06 = $(\'input[name=couhuiyuan06]\').val(); // 6天前注册人数
            var couhuiyuan07 = $(\'input[name=couhuiyuan07]\').val(); // 7天前注册人数
            var couhuiyuan = $(\'input[name=couhuiyuan]\').val(); // 会员总数

            var order01 = $(\'input[name=order01]\').val(); // 今天订单数
            var order02 = $(\'input[name=order02]\').val(); // 昨天订单数
            var order03 = $(\'input[name=order03]\').val(); // 前天订单数
            var order04 = $(\'input[name=order04]\').val(); // 4天前订单数
            var order05 = $(\'input[name=order05]\').val(); // 5天前订单数
            var order06 = $(\'input[name=order06]\').val(); // 6天前订单数
            var order07 = $(\'input[name=order07]\').val(); // 7天前订单数
            var myChart = echarts.init(document.getElementById(\'memberTJT\'), null, {renderer: \'svg\'});
            myChart.setOption({
                xAxis: {data: [day7, day6, day5, day4, day3, day2, day1]},
                yAxis: {
                    splitLine: {show: false},
                    min: 0,
                },
                grid: {
                    top: 10,
                    bottom: 20,
                    left: 40,
                    right: 20,
                },
                tooltip: {
                    formatter: " {a} <br/> {c} "
                },
                series: {
                    name: "会员人数",
                    data: [
                        [day7, couhuiyuan07],
                        [day6, couhuiyuan06],
                        [day5, couhuiyuan05],
                        [day4, couhuiyuan04],
                        [day3, couhuiyuan03],
                        [day2, couhuiyuan02],
                        [day1, couhuiyuan01],
                    ],
                    type: "bar",

                },
                color: "#0880ff",

            });
            var myChart1 = echarts.init(document.getElementById(\'ddTJT\'), null, {renderer: \'svg\'});
            myChart1.setOption({
                xAxis: {data: [day7, day6, day5, day4, day3, day2, day1]},
                yAxis: {
                    splitLine: {show: false},
                    min: 0,
                },
                grid: {
                    top: 10,
                    bottom: 20,
                    left: 40,
                    right: 20,
                },
                tooltip: {
                    formatter: " {a} <br/> {c} "
                },
                color: "#0880ff",
                series: {
                    name: "会员人数",
                    data: [
                        [day7, order07],
                        [day6, order06],
                        [day5, order05],
                        [day4, order04],
                        [day3, order03],
                        [day2, order02],
                        [day1, order01],
                    ],
                    type: "line",
                }
            });

        });


    </script>
'; ?>

</body>
</html>