
<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])=="")
    {   
    header("Location: inicio.php"); 
    }
    else{
?>

<link rel="stylesheet" type="text/css" href="assets/js/DataTables/datatables.min.css"/>
   <?php include('includes/topbar.php');?> 
            <div class="content-wrapper">
                <div class="content-container">
<?php include('includes/leftbar.php');?>  

                    <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h2 class="title">Gestor de clases</h2>
                                
                                </div>
                                
                            </div>
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
            							<li><a href="dashboard.php"><i class="fa fa-home"></i>Inicio</a></li>
                                        <li> Clases</li>
            							<li class="active">Getor de clases</li>
            						</ul>
                                </div>
                             
                            </div>
                        </div>

                        <section class="section">
                            <div class="container-fluid">

                             

                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>Informacion de la clase</h5>
                                                </div>
                                            </div>
<?php if($msg){?>
<div class="alert alert-success left-icon-alert" role="alert">
 <strong>Bien hecho!</strong><?php echo htmlentities($msg); ?>
 </div><?php } 
else if($error){?>
    <div class="alert alert-danger left-icon-alert" role="alert">
                                            <strong>Algo salio mal!</strong> <?php echo htmlentities($error); ?>
                                        </div>
                                        <?php } ?>
                                            <div class="panel-body p-20">

                                                <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Nombre clase</th>
                                                            <th>Numero de clase</th>
                                                            <th>Seccion</th>
                                                            <th>Creacion de clase</th>
                                                            <th>Accion</th>
                                                        </tr>
                                                    </thead>
                                                    <tfoot>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Nombre clase</th>
                                                            <th>Numero de clase</th>
                                                            <th>Seccion</th>
                                                            <th>Creacion de clase</th>
                                                            <th>Accion</th>
                                                        </tr>
                                                    </tfoot>
                                                    <tbody>
<?php $sql = "SELECT * from tblclasses";
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
                                                            <td><?php echo htmlentities($result->ClassName);?></td>
                                                            <td><?php echo htmlentities($result->ClassNameNumeric);?></td>
                                                            <td><?php echo htmlentities($result->Section);?></td>
                                                            <td><?php echo htmlentities($result->CreationDate);?></td>
<td>
<a href="edit-class.php?classid=<?php echo htmlentities($result->id);?>" class="btn btn-info"><i class="fa fa-edit" title="Edit Record"></i> </a> 

</td>
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

                    

                </div>
            </div>
<?php include('includes/footer.php');?> 


<?php } ?>

