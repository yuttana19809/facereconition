<?php include('header.php');?>
    <div class="right_col" role="main">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>แสดงข้อมูลกรรมการ </h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>

                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                        <div align="right">
                            <a href="insert_commission.php">
                                <button>เพิ่มข้อมูล</button>
                            </a>
                        </div>
                        <table id="datatable-buttons" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>ชื่อกรรมการ</th>
                                    <th>อีเมล์</th>
                                    <th>เบอร์โ?รศัพท์</th>
                                    <th>สาขา</th>
                                    <th>คณะ</th>
                                    <th>ชื่อผู้ใช้งาน</th>
                                    <th>รหัสผ่าน</th>
                                    <th>สถานะ</th>
                                    
                                    
                                    
                                    <th>แก้ไข</th>
                                    <th>ลบ</th>
                                </tr>
                            </thead>


                            <tbody>
                                <?php
                             $sql=" select * from tb_commission";
                             $result=$cls_conn->select_base($sql);
                             while($row=mysqli_fetch_array($result))
                             {
                                 ?>
                                    <tr>
                                        <td>
                                            <?=$row['commission_fullname'];?>
                                        </td>
                                        
                                        <td>
                                            <?=$row['commission_email'];?>
                                        </td>
                                        <td>
                                            <?=$row['commission_tel'];?>
                                        </td>
                                        <td>
                                            <?=$row['commission_major'];?>
                                        </td>
                                        <td>
                                            <?=$row['commission_faculty'];?>
                                        </td>
                                        <td>
                                            <?=$row['commission_username'];?>
                                        </td>
                                        <td>
                                            <?=$row['commission_password'];?>
                                        </td>
                                        <td>
                                            <?=$row['commission_status'];?>
                                        </td>
                                    
                                
                                        
                                        <td>
                                            <a href="update_commission.php?id=<?=$row['commission_id'];?>" onclick="return confirm('คุณต้องการแก้ไขหรือไม่?')"><img src="../../image/edit.png" /></a>
                                        </td>
                                        <td>
                                            <a href="delete_commission.php?id=<?=$row['commission_id'];?>" onclick="return confirm('คุณต้องการลบหรือไม่?')"><img src="../../image/delete.png" /></a>
                                        </td>
                                    </tr>
                                    <?php
                             }
                          ?>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>

    </div>


    <?php include('footer.php');?>
