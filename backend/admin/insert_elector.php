<?php include('header.php');?>
    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>เพิ่มข้อมูลผู้ลงสมัครเลือกตั้ง</h2>
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
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="elector_fullname">ชื่อผู้ลงสมัครเลือกตั้ง<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="elector_fullname" name="elector_fullname" required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div>
                        
                            
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="elector_number">หมายเลขผู้ลงสมัครเลือกตั้ง<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="elector_number" name="elector_number" required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div>
                            
                            
                           
                            

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="elector_major">คณะ<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="elector_major" name="elector_major" required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="elector_faculty">สาขา<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="elector_faculty" name="elector_faculty" required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div>
                        
                            
                            
                

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="elector_picture">รูปภาพ<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="elector_picture" name="elector_picture" required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div>


                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="elector_date">วันที่<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="elector_date" name="elector_date" required="required" class="form-control col-md-7 col-xs-12"> </div>
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
                            $elector_number=$_POST['elector_number'];
                            $elector_major=$_POST['elector_major'];
                            $elector_faculty=$_POST['elector_faculty'];
                            $elector_fullname=$_POST['elector_fullname'];
                            $elector_picture=$_POST['elector_picture'];
                            $elector_date=$_POST['elector_date'];
                           
                            
                            $sql=" insert into tb_elector(elector_number,elector_major,elector_faculty,elector_fullname,elector_picture,elector_date,elector_password,elector_status)";
                            $sql.=" values ('$elector_number','$elector_major','$elector_faculty','$elector_fullname','$elector_picture','$elector_date,elector_password,elector_status')";
                            if($cls_conn->write_base($sql)==true)
                            {
                                echo $cls_conn->show_message('บันทึกข้อมูลสำเร็จ');
                                echo $cls_conn->goto_page(1,'show_elector.php');
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