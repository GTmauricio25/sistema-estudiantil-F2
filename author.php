<?php
session_start();
error_reporting(0);
include('includes/config.php');
{
?>

            <!-- ========== TOP NAVBAR ========== -->
            <?php include('includes/topbar.php');?>   
       
            <div class="content-wrapper">
                <div class="content-container">


<?php include('includes/leftbar.php');?>                   


                    <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h2 class="title">About Author</h2>
                                </div>
                                
                            </div>
                      
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
            							<li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
            							<li><a target="a_blank" href="http://www.mayurik.com">About Author</a></li>
            							
            						</ul>
                                </div>
                               
                            </div>
                      
                        </div>
               

                        <section class="section" style="background-color: #ffffff; text-align: justify;">
                            <div class="container-fluid">

                             

                              

                                <div class="row">


                                    <div class="col-md-8 col-md-offset-2">


                                        <div class="panel" style="background-color: #f7f7f7;">
                                            <div class="panel-heading">
<br><div class="container">
        <div class="panel-title">
                                                    <h5><strong></h5>Mayuri K. is</strong></h5>
                             <span style="background-color: #0b2a97;
    padding: 2px 10px;    
    color: #fff;">Freelancer Web Developer working in  PHP, PDO, Laravel and Python</span><br>

    
                                                </div>
        <div class=" row col-md-5"><br><img src="https://miro.medium.com/max/1400/0*K2WLMTExLyida7OR.gif" style="height: 300px;"></img></div>
        <div class=" row col-md-4"><label for="success" class="control-label"><br></label>A Computer Science master graduate, keen on stirring up creative mind and information into PHP project ideas and working as a freelancer for PHP projects with source code. She also work in Python, Codeignitor and Laravel. Mayuri K likes to learn new things related to her profession.</label><label style="background-color: #ffd600;
    padding: 0.2em; font-size: 14px;">For students or anyone else who needs program or source code for thesis writing or any Professional Software Development, Website Development, at affordable cost contact at mayuri.infospace@gmail.com</label></div>
    </div>
                                                
                                            </div>
  
                                            <div class="panel-body">

                                                
<br>
                                                        <div class="">
                                                            <a href="https://www.mayurik.com/" target="_blank">
                                                           <button type="button"class="btn btn-success" >Contact me</button></a>
                                                    </div>


                                                    
                                               

                                              
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-md-8 col-md-offset-2 -->
                                </div>
                                <!-- /.row -->

                               
                               

                            </div>
                            <!-- /.container-fluid -->
                        </section>
                        <!-- /.section -->

                    </div>
                    <!-- /.main-page -->

                </div>
                <!-- /.content-container -->
            </div>
            <!-- /.content-wrapper -->
    <?php include('includes/footer.php');?>

<!--  Author Name: Mayuri K. 
 for any PHP, Codeignitor, Laravel OR Python work contact me at mayuri.infospace@gmail.com  
 Visit website : www.mayurik.com -->  

<?php  } ?>
