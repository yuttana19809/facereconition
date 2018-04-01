<?php include('header.php');?>
    <div class="right_col" role="main">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>แสดงข้อมูลผู้ลงสมัครเลือกตั้ง </h2>
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
                            <a href="insert_elector.php">
                                <button>เพิ่มข้อมูล</button>
                            </a>
                        </div>
                        <table id="datatable-buttons" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>หมายเลขผู้ลงสมัครเลือกตั้ง</th>
                                    <th>สาขา</th>
                                    <th>คณะ</th>
                                    <th>ชื่อ</th>
                                    <th>รูปภาพ</th>
                                    <th>วันที่</th>
                                    
                                    
                                    
                                    <th>แก้ไข</th>
                                    <th>ลบ</th>
                                </tr>
                            </thead>


                            <tbody>
                                <?php
                             $sql=" select * from tb_elector";
                             $result=$cls_conn->select_base($sql);
                             while($row=mysqli_fetch_array($result))
                             {
                                 ?>
                                    <tr>
                                        <td>
                                            <?=$row['elector_number'];?>
                                        </td>
                                        
                                        <td>
                                            <?=$row['elector_major	'];?>
                                        </td>
                                        <td>
                                            <?=$row['elector_faculty'];?>
                                        </td>
                                        <td>
                                            <?=$row['elector_fullname'];?>
                                        </td>
                                        <td>
                                            <?=$row['elector_picture'];?>
                                        </td>
                                        <td>
                                            <?=$row['elector_date'];?>
                                        </td>
                                    
                                        
                                        <td>
                                            <a href="update_elector.php?id=<?=$row['elector_id'];?>" onclick="return confirm('คุณต้องการแก้ไขหรือไม่?')"><img src="../../image/edit.png" /></a>
                                        </td>
                                        <td>
                                            <a href="delete_elector.php?id=<?=$row['elector_id'];?>" onclick="return confirm('คุณต้องการลบหรือไม่?')"><img src="../../image/delete.png" /></a>
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
