<?php include('header.php');?>
    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>คะแนน</h2>
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
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="student_id">รหัสนักศึกษา<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="student_id" name="student_id" required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div>
                        
                            
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="score_num">คะแนน<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="score_num" name="score_num" required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div>
                            
                            
                           
                            

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="score_date	">วันที่<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="score_date	" name="score_date	" required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div>


                       
                

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="elector_id">รหัสผู้ลงเลือกตั้ง<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="elector_id" name="elector_id" required="required" class="form-control col-md-7 col-xs-12"> </div>
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
                            $score_num=$_POST['score_num'];
                            $score_date	=$_POST['score_date	'];
                            $student_id=$_POST['student_id'];
                            $elector_id=$_POST['elector_id'];
                           
                           
                            
                            $sql=" insert into tb_score(score_num,score_date,elector_id,student_id)";
                            $sql.=" values ('$score_num','$score_date','$student_id','$elector_id')";
                            if($cls_conn->write_base($sql)==true)
                            {
                                echo $cls_conn->show_message('บันทึกข้อมูลสำเร็จ');
                                echo $cls_conn->goto_page(1,'show_score.php');
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