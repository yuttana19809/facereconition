<?php session_start();?>
<?php include('../class_conn.php');?>
<?php $cls_conn=new class_conn();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>ลงชื่อเข้าใช้งาน</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="template_login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="template_login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="template_login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="template_login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="template_login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="template_login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="template_login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="template_login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="template_login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="template_login/css/util.css">
	<link rel="stylesheet" type="text/css" href="template_login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">
				<form class="login100-form validate-form flex-sb flex-w" method="post">
					<span class="login100-form-title p-b-51">
						ลงชื่อเข้าใช้งาน
					</span>

					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "ไม่ได้ใส่ชื่อผู้เข้าใช้งาน">
						<input class="input100" type="text" name="username" placeholder="ชื่อผู้เข้าใช้งาน">
						<span class="focus-input100"></span>
					</div>
					
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "ไม่ได้ใส่รหัสผ่าน">
						<input class="input100" type="password" name="pass" placeholder="รหัสผ่าน">
						<span class="focus-input100"></span>
					</div>
					
					
					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn" type="submit" name="submit">
							เข้าใช้งาน
						</button>
					</div>

				</form>
              <?php
            if(isset($_POST['submit']))
            {
                $username=$_POST['username'];
                $password=$_POST['pass'];
                $sql=" select * from tb_admin";
                $sql.=" where";
                $sql.=" admin_username='$username'";
                $sql.=" and ";
                $sql.=" admin_password='$password'";
                $num_rows=$cls_conn->select_numrows($sql);
                if($num_rows>=1)
                {
                    
                    echo $cls_conn->goto_page(1, 'admin/index.php');
                }
                else
                {
                    echo $cls_conn->show_message('ไม่พบชื่อผู้ใช้งานนี้');
                }
                
               
            }
            
            
            ?>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="template_login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="template_login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="template_login/vendor/bootstrap/js/popper.js"></script>
	<script src="template_login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="template_login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="template_login/vendor/daterangepicker/moment.min.js"></script>
	<script src="template_login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="template_login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="template_login/js/main.js"></script>

</body>
</html>