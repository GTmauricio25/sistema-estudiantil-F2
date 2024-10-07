
<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==""){   
header("Location: index.php"); 
}else{
//For Deleting the notice

if($_GET['id'])
{
$id=$_GET['id'];
$sql="delete from tblnotice where id=:id";
$query = $dbh->prepare($sql);
$query->bindParam(':id',$id,PDO::PARAM_STR);
$query->execute();
echo '<script>alert("Notice deleted.")</script>';
echo "<script>window.location.href ='manage-notices.php'</script>";

}

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
                                    <h2 class="title">Gestor de noticias</h2>
                                
                                </div>
                                
                            </div>
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
            							<li><a href="dashboard.php"><i class="fa fa-home"></i>Inicio</a></li>
                                        <li> Clases</li>
            							<li class="active">Gestor de noticias</li>
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
                                                    <h5>Ver informacion de noticias</h5>
                                                </div>
                                            </div>

                                            <div class="panel-body p-20">

                                                <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Titulo de noticia</th>
                                                            <th>Detalles de noticia</th>
                                                            <th>Creacion de la noticia</th>
                                                            <th>Accion</th>
                                                        </tr>
                                                    </thead>
                                                    <tfoot>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Titulo de noticia</th>
                                                            <th>Detalles de noticia</th>
                                                            <th>Creacion de la noticia</th>
                                                            <th>Accion</th>
                                                        </tr>
                                                    </tfoot>
                                                    <tbody>
<?php $sql = "SELECT * from tblnotice";
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
                                                            <td><?php echo htmlentities($result->noticeTitle);?></td>
                                                            <td><?php echo htmlentities($result->noticeDetails);?></td>
                                                            <td><?php echo htmlentities($result->postingDate);?></td>
<td>
<a href="manage-notices.php?id=<?php echo htmlentities($result->id);?>" onclick="return confirm('Do you really want to delete the notice?');" class="btn btn-danger">
    <i class="fa fa-trash" title="Delete this Record"></i> </a> 

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

