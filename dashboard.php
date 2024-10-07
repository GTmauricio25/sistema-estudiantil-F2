<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])=="")
{   header("Location: index.php"); }else{
?>


              <?php include('includes/topbar.php');?>
            <div class="content-wrapper">
                <div class="content-container">

                    <?php include('includes/leftbar.php');?>  

                    <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-sm-6">
                                    <h2 class="title">Inicio</h2>
                                  
                                </div>
                            </div>
                      
                        </div>

                        <section class="section">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center">
                                        <a class="dashboard-stat bg-white" href="manage-students.php">
<?php 
$sql1 ="SELECT StudentId from tblstudents ";
$query1 = $dbh -> prepare($sql1);
$query1->execute();
$results1=$query1->fetchAll(PDO::FETCH_OBJ);
$totalstudents=$query1->rowCount();
?>
<span class="bg-icon"><i class="fa fa-users"></i></span>
                                            <span class="number counter"><?php echo htmlentities($totalstudents);?></span>
                                            <span class="name">Estudiantes Registrados</span>
                                            
                                        </a>
                                    </div>
                 

                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-white" href="manage-classes.php">
                                        
										
										
										
										
										<?php 
$sql2 ="SELECT id from  tblclasses ";
$query2 = $dbh -> prepare($sql2);
$query2->execute();
$results2=$query2->fetchAll(PDO::FETCH_OBJ);
$totalclasses=$query2->rowCount();
?><span class="bg-icon"><i class="fa fa-bank"></i></span>
                                            <span class="number counter"><?php echo htmlentities($totalclasses);?></span>
                                            <span class="name">Secciones Creadas</span>
                                            
                                        </a>
                                    </div>
									
									
									
                                    
                                </div>
<section class="section">
                            <div class="container-fluid">

                             

                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>Resultados recientes declarados</h5>
                                                </div>
                                            </div>
<?php if($msg){?>
<div class="alert alert-success left-icon-alert" role="alert">
 <strong>Bien hecho!</strong><?php echo htmlentities($msg); ?>
 </div><?php } 
else if($error){?>
    <div class="alert alert-danger left-icon-alert" role="alert">
                                            <strong>algo salio mal!</strong> <?php echo htmlentities($error); ?>
                                        </div>
                                        <?php } ?>
                                            <div class="panel-body p-20">

                                                <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Nombre del estudiante</th>
                                                            <th>Codigo</th>
                                                            <th>Clase</th>
                                                            <th>Fecha de Registro</th>
                                                            <th>Estado</th>
                                                           
                                                        </tr>
                                                    </thead>
                                                    <tfoot>
                                                        <tr>
                                                          <th>#</th>
                                                            <th>Nombre del estudiante</th>
                                                            <th>Codigo</th>
                                                            <th>Clase</th>
                                                            <th>Fecha de Registro</th>
                                                            <th>Estado</th>
                                                        </tr>
                                                    </tfoot>
                                                    <tbody>
<?php $sql ="SELECT tblstudents.StudentName,tblstudents.RollId,tblstudents.RegDate,tblstudents.StudentId,tblstudents.Status,tblclasses.ClassName,tblclasses.Section from tblstudents join tblclasses on tblclasses.id=tblstudents.ClassId";
$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{   ?>
<tr>
 <td><?php echo htmlentities($cnt);?></td>
                                                            <td><?php echo htmlentities($result->StudentName);?></td>
                                                            <td><?php echo htmlentities($result->RollId);?></td>
                                                            <td><?php echo htmlentities($result->ClassName);?>(<?php echo htmlentities($result->Section);?>)</td>
                                                            <td><?php echo htmlentities($result->RegDate);?></td>
                                                             <td><?php if($result->Status==1){
echo htmlentities('Activo');
}
else{
   echo htmlentities('Inactivo'); 
}
                                                                ?></td>
</tr>
<?php $cnt=$cnt+1;}} ?>
                                                       
                                                    
                                                    </tbody>
                                                </table>

                                         
                                            </div>
                                        </div>
                                    </div>

                                                               
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </section>
                            </div>
                        </section>

                    </div>

                    
                </div>
            </div>

    <?php include('includes/footer.php');?>

<?php } ?>
