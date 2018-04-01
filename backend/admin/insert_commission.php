<?php include('header.php');?>
    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>เพิ่มข้อมูลกรรมการ</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a> </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a> </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post">
                            
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="commission_fullname">ชื่อกรรมการ<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="commission_fullname" name="commission_fullname" required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div>
                            
                            
                           
                            

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="commission_email">อีเมล์<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="commission_email" name="commission_email" required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="commission_tel">เบอร์โทรศัพท์<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="commission_tel" name="commission_tel" required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div>
                        
                             <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="commission_major">คณะ<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="commission_major" name="commission_major" required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div>
                        
                            
                

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="commission_faculty">สาขา<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="commission_faculty" name="commission_faculty" required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div>


                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="commission_username">ชื่อผู้ใช้งาน<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="commission_username" name="commission_username" required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div>
                            
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="commission_password">รหัสผ่าน<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="commission_password" name="commission_password" required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div>
                            
                            
                         <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="commission_status">สถานะ<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="commission_status" name="commission_status" required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div>
                           
                            
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" name="submit" class="btn btn-success">บันทึก</button>
                                    <button type="reset" name="reset" class="btn btn-danger">ยกเลิก</button>
                                </div>
                            </div>
                        </form>
                        <?php
                        if(isset($_POST['submit']))
                        {
                            $commission_fullname=$_POST['commission_fullname'];
                            $commission_email=$_POST['commission_email'];
                            $commission_tel=$_POST['commission_tel'];
                            $commission_major=$_POST['commission_major'];
                            $commission_faculty=$_POST['commission_faculty'];
                            $commission_username=$_POST['commission_username'];
                            $commission_password=$_POST['commission_password'];
                            $commission_status=$_POST['commission_status'];

                            
                            $sql=" insert into tb_commission(commission_fullname,commission_email,commission_tel,commission_major,commission_faculty,commission_username,commission_password,commission_status)";
                            $sql.=" values ('$commission_fullname','$commission_email','$commission_tel','$commission_major','$commission_faculty','$commission_username,commission_password,commission_status')";
                            if($cls_conn->write_base($sql)==true)
                            {
                                echo $cls_conn->show_message('บันทึกข้อมูลสำเร็จ');
                                echo $cls_conn->goto_page(1,'show_commission.php');
                            }
                            else
                            {
                                 echo $cls_conn->show_message('บันทึกข้อมูลไม่สำเร็จ');
                                 echo $sql;
                            }
                        }
                        
                        ?>
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('footer.php');?>