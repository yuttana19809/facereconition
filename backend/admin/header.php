<?php session_start();?>
<?php include('../../class_conn.php');?>
<?php $cls_conn=new class_conn;?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <!-- Meta, title, CSS, favicons, etc. -->
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>ระบบเลือกตั้ง</title>
            <!-- Bootstrap -->
            <link href="../template/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
            <!-- Font Awesome -->
            <link href="../template/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
            <!-- NProgress -->
            <link href="../template/vendors/nprogress/nprogress.css" rel="stylesheet">
            <!-- iCheck -->
            <link href="../template/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
            <!-- bootstrap-progressbar -->
            <link href="../template/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
            <!-- JQVMap -->
            <link href="../template/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
            <!-- bootstrap-daterangepicker -->
            <link href="../template/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
            <!-- Custom Theme Style -->
            <link href="../template/build/css/custom.min.css" rel="stylesheet"> </head>

        <body class="nav-md">
            <div class="container body">
                <div class="main_container">
                    <div class="col-md-3 left_col">
                        <div class="left_col scroll-view">
                            <div class="navbar nav_title" style="border: 0;"> <a href="index.html" class="site_title"><i class="fa fa-cutlery"></i> <span>ระบบเลือกตั้ง</span></a> </div>
                            <div class="clearfix"></div>
                            <!-- menu profile quick info -->
                            <div class="profile clearfix" style="margin-left:20px;" >
                                <!-- <div class="profile_pic"> </div> --> 
                                <div class="profile_info" style="text-align :left;"> <span>ยินดีต้อนรับ</span>
                                    <h2 style="text-align :center; font-size: 18px;"><?=$_SESSION['user_name'];?></h2> </div>
                            </div>
                            <!-- /menu profile quick info -->
                            <br />
                            <!-- sidebar menu -->
                            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                                <div class="menu_section">
                                    <h3>เมนู</h3>
                                    <ul class="nav side-menu">
                                         <li><a><i class="fa fa-cutlery"></i>ข้อมูลผู้ดูแลระบบ<span class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu">
                                                <li><a href="insert_admin.php"><i class="fa fa-plus"></i>เพิ่มข้อมูลผู้ดูแลระบบ</a></li>
                                                <li><a href="show_admin.php"><i class="fa fa-list"></i>ข้อมูลผู้ดูแลระบบ</a></li>
                                                
                                            </ul>
                                        </li>
                                        <li><a><i class="fa fa-cutlery"></i>ข้อมูลอาจารย์<span class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu">
                                                <li><a href="insert_teacher.php"><i class="fa fa-plus"></i>เพิ่มข้อมูลอาจารย์</a></li>
                                                <li><a href="show_teacher.php"><i class="fa fa-list"></i>ข้อมูลอาจารย์</a></li>
                                                
                                            </ul>
                                        </li>
                                        
                                        <li><a><i class="fa fa-cutlery"></i>ข้อมูลนักศึกษา<span class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu">
                                                <li><a href="insert_student.php"><i class="fa fa-plus"></i>เพิ่มข้อมูลนักศึกษา</a></li>
                                                <li><a href="show_student.php"><i class="fa fa-list"></i>ข้อมูลนักศึกษา</a></li>
                                                
                                            </ul>
                                        </li>
                                        
                                        <li><a><i class="fa fa-cutlery"></i>ข้อมูลผู้ลงสมัครเลือกตั้ง<span class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu">
                                                <li><a href="insert_elector.php"><i class="fa fa-plus"></i>เพิ่มข้อมูลผู้ลงสมัครเลือกตั้ง</a></li>
                                                <li><a href="show_elector.php"><i class="fa fa-list"></i>ข้อมูลผู้ลงสมัครเลือกตั้ง</a></li>
                                                
                                            </ul>
                                        </li>
                                        
                                        <li><a><i class="fa fa-cutlery"></i>ข้อมูลกรรมการเลือกตั้ง<span class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu">
                                                <li><a href="insert_commission.php"><i class="fa fa-plus"></i>เพิ่มข้อมูลกรรมการเลือกตั้ง</a></li>
                                                <li><a href="show_commission.php"><i class="fa fa-list"></i>ข้อมูลกรรมการเลือกตั้ง</a></li>
                                                
                                            </ul>
                                        </li>
                                        
                                       <li><a><i class="fa fa-cutlery"></i>ข้อมูลประชาสัมพันธ์<span class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu">
                                                <li><a href="insert_information.php"><i class="fa fa-plus"></i>เพิ่มข้อมูลประชาสัมพันธ์</a></li>
                                                <li><a href="show_information.php"><i class="fa fa-list"></i>ข้อมูลประชาสัมพันธ์</a></li>
                                                
                                            </ul>
                                        </li>
                                        <li><a><i class="fa fa-cutlery"></i>คะแนน<span class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu">
                                                <li><a href="insert_score.php"><i class="fa fa-plus"></i>เพิ่มคะแนน</a></li>
                                                <li><a href="show_score.php"><i class="fa fa-list"></i>คะแนน</a></li>
                                                
                                            </ul>
                                        </li>
                                        
                                        
                                        
                                        
                                         
                                        
                                         
                            
                                        
                                        
                                        
                                       
                                        
                                        
                                        <li><a href="../../index.php"><i class="fa fa-sign-out"></i>ออกจากระบบ</a></li>
         
                                    </ul>
                                </div>
                            </div>
                            <!-- /sidebar menu -->
                            <!-- /menu footer buttons -->
                            <!--  <div class="sidebar-footer hidden-small">
                                <a data-toggle="tooltip" data-placement="top" title="Settings"> <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> </a>
                                <a data-toggle="tooltip" data-placement="top" title="FullScreen"> <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span> </a>
                                <a data-toggle="tooltip" data-placement="top" title="Lock"> <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span> </a>
                                <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html"> <span class="glyphicon glyphicon-off" aria-hidden="true"></span> </a>
                            </div> -->
                            <!-- /menu footer buttons -->
                        </div>
                    </div>
                    <!-- top navigation -->
                    <div class="top_nav">
                        <div class="nav_menu">
                            <nav>
                                <div class="nav toggle"> <a id="menu_toggle"><i class="fa fa-bars"></i></a> </div>
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="">
                                        <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">  <?=$_SESSION['user_name'];?> <span class=" fa fa-angle-down"></span> </a>
                                        <ul class="dropdown-menu dropdown-usermenu pull-right">
                                            <li><a href="javascript:;">แก้ไขข้อมูลส่วนตัว</a></li>
                                            <li><a href="../../index.php"><i class="fa fa-sign-out pull-right"></i>ออกจากระบบ</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- /top navigation -->
                    <!-- page content -->