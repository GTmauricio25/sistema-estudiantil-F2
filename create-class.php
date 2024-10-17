<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])=="")
    {   
    header("Location: index.php"); 
    }
    else{
if(isset($_POST['submit']))
{
$classname=$_POST['classname'];
$classnamenumeric=$_POST['classnamenumeric']; 
$section=$_POST['section'];
$sql="INSERT INTO  tblclasses(ClassName,ClassNameNumeric,Section) VALUES(:classname,:classnamenumeric,:section)";
$query = $dbh->prepare($sql);
$query->bindParam(':classname',$classname,PDO::PARAM_STR);
$query->bindParam(':classnamenumeric',$classnamenumeric,PDO::PARAM_STR);
$query->bindParam(':section',$section,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg=" Clase creada correctamente";
}
else 
{
$error=" Hubo un error, intenta nuevamente.";
}

}
?>


            <?php include('includes/topbar.php');?>   
            <div class="content-wrapper">
                <div class="content-container">

<?php include('includes/leftbar.php');?>                 

                    <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h2 class="title">Crear clase de estudiante</h2>
                                </div>
                                
                            </div>
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
            							<li><a href="dashboard.php"><i class="fa fa-home"></i> Inicio</a></li>
            							<li><a href="#">Clases</a></li>
            							<li class="active">Crear Clase</li>
            						</ul>
                                </div>
                               
                            </div>
                        </div>

                        <section class="section">
                            <div class="container-fluid">

                             

                              

                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>Crear clase de estudiante</h5>
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
  
                                            <div class="panel-body">

                                                <form method="post">
                                                    <div class="form-group has-success">
                                                        <label for="success" class="control-label">Nombre de la clase</label>
                                                		<div class="">
                                                			<input type="text" name="classname" class="form-control" required="required" id="success">
                                                            <span class="help-block">Carreras: Software, Mecanica, Automotriz, Electro, Itsi</span>
                                                		</div>
                                                	</div>
                                                       <div class="form-group has-success">
                                                        <label for="success" class="control-label">Numero del Semestre</label>
                                                        <div class="">
                                                            <input type="number" name="classnamenumeric" required="required" class="form-control" id="success">
                                                            <span class="help-block">ID de clase</span>
                                                        </div>
                                                    </div>
                                                     <div class="form-group has-success">
                                                        <label for="success" class="control-label">Seccion</label>
                                                        <div class="">
                                                            <input type="text" name="section" class="form-control" required="required" id="success">
                                                            <span class="help-block">Codigo</span>
                                                        </div>
                                                    </div>
  <div class="form-group has-success">

                                                        <div class="">
                                                           <button type="submit" name="submit" class="btn btn-success ">Enviar</button>
                                                    </div>


                                                    
                                                </form>

                                              
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
        
<?php  } ?>
