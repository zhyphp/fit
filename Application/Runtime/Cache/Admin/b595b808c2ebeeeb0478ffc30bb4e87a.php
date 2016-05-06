<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Bootstrap 3.3.5 -->
<link rel="stylesheet" href="/Public/common/lib/bootstrap/css/bootstrap.min.css">
<!-- Font Awesome -->
<link href="/Public/common/lib/adminlte/css/font-awesome.min.css" rel="stylesheet">

<link href="//cdn.bootcss.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
<!-- Theme style -->
<link rel="stylesheet" href="/Public/common/lib/adminlte/css/AdminLTE.min.css">
<!-- AdminLTE Skins. Choose a skin from the css/skins
     folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href="/Public/common/lib/adminlte/css/skins/_all-skins.min.css">
<!-- iCheck -->
<link rel="stylesheet" href="/Public/common/lib/iCheck/flat/blue.css">
<!-- Morris chart -->
<link rel="stylesheet" href="/Public/common/lib/morris/morris.css">
<!-- jvectormap -->
<link rel="stylesheet" href="/Public/common/lib/jvectormap/jquery-jvectormap-1.2.2.css">
<!-- Date Picker -->
<link rel="stylesheet" href="/Public/common/lib/datepicker/datepicker3.css">
<!-- Daterange picker -->
<link rel="stylesheet" href="/Public/common/lib/daterangepicker/daterangepicker-bs3.css">
<!-- bootstrap wysihtml5 - text editor -->
<link rel="stylesheet" href="/Public/common/lib/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

<link rel="stylesheet" type="text/css" href="/Public/common/lib/amazeui/css/amazeui.min.css"/>

<link rel="stylesheet" href="/Public/admin/css/admin.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo $this->resource;?>index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b><?php echo C('project_name');?></b> 管理</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b><?php echo C('project_name');?></b> 管理</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="<?php echo $this->resource;?>#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">



                <div class="pull-right" style="padding: 5px;">
                    <a href="<?php echo U('Public/logout');?>" class="btn btn-default btn-flat">退出登录</a>
                </div>

            </div>
        </nav>
    </header>

    
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <!--<div class="user-panel">
          <div class="pull-left image">
            <img src="<?php echo $this->resource;?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Alexander Pierce</p>
            <a href="<?php echo $this->resource;?>#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>-->
        <!-- search form -->

        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header"></li>
            <li  class="manage-site">
                <a href="/manage/site">
                    <i class="fa fa-th"></i> <span>站点管理</span> <small class="label pull-right bg-green"></small>
                </a>
            </li>
            <!--<li  class="manage-data">
              <a href="/manage/data">
                <i class="fa fa-pie-chart"></i> <span>查看数据</span> <small class="label pull-right bg-green"></small>
              </a>
            </li>-->
            <li class="treeview">
                <a href="">
                    <i class="fa fa-pie-chart"></i> <span>查看数据</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li  class="data-user"><a href="/data/user"><i class="fa fa-circle-o"></i>用户注册</a></li>
                    <li  class="data-order"><a href="/data/order"><i class="fa fa-circle-o"></i>订单</a></li>
                    <li  class="data-balance"><a href="/data/balance"><i class="fa fa-circle-o"></i>收支</a></li>

                </ul>
            </li>

            <li class="treeview">
                <a href="">
                    <i class="fa fa-inbox"></i> <span>商品管理</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li  class="product-category"><a href="/product/category"><i class="fa fa-circle-o"></i>商品分类</a></li>
                    <li  class="product-lists"><a href="/product/lists"><i class="fa fa-circle-o"></i>超币商品列表</a></li>
                    <li  class="product-cash_list"><a href="/product/cash_list"><i class="fa fa-circle-o"></i>云购商品列表</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="">
                    <i class="fa fa-inbox"></i> <span>广告管理</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li  class="ad-lists"><a href="/ad/lists"><i class="fa fa-circle-o"></i>广告列表</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="">
                    <i class="fa fa-inbox"></i> <span>机构管理</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li  class="agency-area"><a href="/agency/area"><i class="fa fa-circle-o"></i>省市级机构</a></li>
                    <li  class="agency-lists"><a href="/agency/lists"><i class="fa fa-circle-o"></i>机构成员</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="">
                    <i class="fa fa-dashboard"></i> <span>用户管理</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li  class="user-lists"><a href="/user/lists"><i class="fa fa-circle-o"></i>用户列表</a></li>
                    <li  class="user-partner_list"><a href="/user/partner_list"><i class="fa fa-circle-o"></i>合伙人列表</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="">
                    <i class="fa fa-files-o"></i>
                    <span>订单管理</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="order-lists"><a href="/order/lists"><i class="fa fa-circle-o"></i>Pos 订单列表</a></li>

                </ul>
            </li>

            <li class="treeview">
                <a href="">
                    <i class="fa fa-files-o"></i>
                    <span>提现管理</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="cash-lists"><a href="/cash/lists"><i class="fa fa-circle-o"></i>合伙人提现列表</a></li>

                </ul>
            </li>

            <li class="treeview">
                <a href="">
                    <i class="fa fa-inbox"></i> <span>微信管理</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li  class="wechat-menu"><a href="/wechat/menu"><i class="fa fa-circle-o"></i>微信菜单</a></li>

                </ul>
            </li>

            <li class="treeview">
                <a href="">
                    <i class="fa fa-inbox"></i> <span>文章管理</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li  class="article-lists"><a href="/article/lists"><i class="fa fa-circle-o"></i>文章列表</a></li>

                </ul>
            </li>



        </ul>
    </section>
    <!-- /.sidebar -->
</aside>



    <div class="content-wrapper">
        


    </div>



    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy;  <a href=""><?php echo C('project_name');?></a>.</strong> All rights reserved.
    </footer>

    <div class="am-modal am-modal-confirm" tabindex="-1" id="my-confirm">
        <div class="am-modal-dialog">
            <div class="am-modal-hd"><?php echo C('project_name');?>管理</div>
            <div class="am-modal-bd title" style="font-weight: bold;">

            </div>
            <div class="am-modal-footer">
                <span class="am-modal-btn" data-am-modal-cancel>取消</span>
                <span class="am-modal-btn" data-am-modal-confirm>确定</span>
            </div>
        </div>
    </div>

    <!-- Control Sidebar -->

    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div><!-- ./wrapper -->



<!-- jQuery 2.1.4 -->
<script src="/Public/common/lib/jQuery/jQuery-2.1.4.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/Public/common/lib/jQueryUI/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<!-- Bootstrap 3.3.5 -->
<script src="/Public/common/lib/bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="/Public/common/lib/morris/morris.js"></script>-->
<!-- Sparkline -->
<script src="/Public/common/lib/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="/Public/common/lib/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/Public/common/lib/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="/Public/common/lib/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="/Public/common/lib/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="/Public/common/lib/moment/moment.min.js"></script>
<script src="/Public/common/lib/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="/Public/common/lib/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="/Public/common/lib/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/Public/common/lib/fastclick/fastclick.min.js"></script>


<!-- AdminLTE App -->
<script src="/Public/admin/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!--<script src="<?php echo $this->resource;?>dist/js/pages/dashboard.js"></script>-->
<!-- AdminLTE for demo purposes -->
<!--<script src="<?php echo $this->resource;?>dist/js/demo.js"></script>-->
<script src="/Public/common/lib/amazeui/amazeui.min.js"></script>


<script src="/Public/common/lib/pinyin.js"></script>

</body>
</html>