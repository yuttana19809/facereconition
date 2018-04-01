<?php include('header.php');?>
    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>เพิ่มข้อมูลนักศึกษา</h2>
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
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="student_fullname">ชื่อนักศึกษา<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="student_fullname" name="student_fullname" required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div>
                            
                            
                           
                            

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="student_picture">รูปภาพ<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="student_picture" name="student_picture" required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="student_major">สาขา<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="student_major" name="student_major" required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div>
                        
                             <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="student_faculty">คณะ<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="student_faculty" name="student_faculty" required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div>
                        
                            
                

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="student_status">สถานะ<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="student_status" name="student_status" required="required" class="form-control col-md-7 col-xs-12"> </div>
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
                            $student_fullname=$_POST['student_fullname'];
                            $student_picture=$_POST['student_picture'];
                            $student_major=$_POST['student_major'];
                            $student_faculty=$_POST['student_faculty'];
                            $student_status=$_POST['student_status'];
                          
                            
                            $sql=" insert into tb_student(student_fullname,student_picture,student_major,student_faculty,student_status)";
                            $sql.=" values ('$student_fullname','$student_picture','$student_major','$student_faculty','$student_status')";
                            if($cls_conn->write_base($sql)==true)
                            {
                                echo $cls_conn->show_message('บันทึกข้อมูลสำเร็จ');
                                echo $cls_conn->goto_page(1,'show_student.php');
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