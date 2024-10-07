<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])=="")
    {   
    header("Location: index.php"); 
    }
    else{

$stid=intval($_GET['stid']);

if(isset($_POST['submit']))
{
$studentname=$_POST['fullanme'];
$roolid=$_POST['rollid']; 
$studentemail=$_POST['emailid']; 
$gender=$_POST['gender']; 
$classid=$_POST['class']; 
$dob=$_POST['dob']; 
$status=$_POST['status'];
$sql="update tblstudents set StudentName=:studentname,RollId=:roolid,StudentEmail=:studentemail,Gender=:gender,DOB=:dob,Status=:status where StudentId=:stid ";
$query = $dbh->prepare($sql);
$query->bindParam(':studentname',$studentname,PDO::PARAM_STR);
$query->bindParam(':roolid',$roolid,PDO::PARAM_STR);
$query->bindParam(':studentemail',$studentemail,PDO::PARAM_STR);
$query->bindParam(':gender',$gender,PDO::PARAM_STR);
$query->bindParam(':dob',$dob,PDO::PARAM_STR);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->bindParam(':stid',$stid,PDO::PARAM_STR);
$query->execute();

$msg=" Informacion del estudiante actualizada";
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
                                    <h2 class="title">Datos del estudiante</h2>
                                
                                </div>
                                
                            </div>
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
                                        <li><a href="dashboard.php"><i class="fa fa-home"></i>Inicio</a></li>
                                
                                        <li class="active">Datos del estudiante</li>
                                    </ul>
                                </div>
                             
                            </div>
                        </div>
                        <div class="container-fluid">
                           
                        <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>Informacion completa del estudiante</h5>
                                                </div>
                                            </div>
                                            <div class="panel-body">
<?php if($msg){?>
<div class="alert alert-success left-icon-alert" role="alert">
 <strong>Bien hecho!</strong><?php echo htmlentities($msg); ?>
 </div><?php } 
else if($error){?>
    <div class="alert alert-danger left-icon-alert" role="alert">
                                            <strong>Algo salio mal!</strong> <?php echo htmlentities($error); ?>
                                        </div>
                                        <?php } ?>
                                                <form class="form-horizontal" method="post">
<?php 

$sql = "SELECT tblstudents.StudentName,tblstudents.RollId,tblstudents.RegDate,tblstudents.StudentId,tblstudents.Status,tblstudents.StudentEmail,tblstudents.Gender,tblstudents.DOB,tblclasses.ClassName,tblclasses.Section from tblstudents join tblclasses on tblclasses.id=tblstudents.ClassId where tblstudents.StudentId=:stid";
$query = $dbh->prepare($sql);
$query->bindParam(':stid',$stid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{  ?>


<div class="form-group">
<label for="default" class="col-sm-2 control-label">Nombre completo</label>
<div class="col-sm-10">
<input type="text" name="fullanme" class="form-control" id="fullanme" value="<?php echo htmlentities($result->StudentName)?>" required="required" autocomplete="off">
</div>
</div>

<div class="form-group">
<label for="default" class="col-sm-2 control-label">ID estudiante</label>
<div class="col-sm-10">
<input type="text" name="rollid" class="form-control" id="rollid" value="<?php echo htmlentities($result->RollId)?>" maxlength="5" required="required" autocomplete="off">
</div>
</div>

<div class="form-group">
<label for="default" class="col-sm-2 control-label">Correo</label>
<div class="col-sm-10">
<input type="email" name="emailid" class="form-control" id="email" value="<?php echo htmlentities($result->StudentEmail)?>" required="required" autocomplete="off">
</div>
</div>



<div class="form-group">
<label for="default" class="col-sm-2 control-label">Genero</label>
<div class="col-sm-10">
<?php  $gndr=$result->Gender;
if($gndr=="Male")
{
?>
<input type="radio" name="gender" value="Male" required="required" checked>Masculino <input type="radio" name="gender" value="Female" required="required">Femenino <input type="radio" name="gender" value="Other" required="required">Otro
<?php }?>
<?php  
if($gndr=="Female")
{
?>
<input type="radio" name="gender" value="Male" required="required" >Masculino <input type="radio" name="gender" value="Female" required="required" checked>Femenino <input type="radio" name="gender" value="Other" required="required">Otro
<?php }?>
<?php  
if($gndr=="Other")
{
?>
<input type="radio" name="gender" value="Male" required="required" >Masculino <input type="radio" name="gender" value="Female" required="required">Femenino <input type="radio" name="gender" value="Other" required="required" checked>Otro
<?php }?>


</div>
</div>



                                                    <div class="form-group">
                                                        <label for="default" class="col-sm-2 control-label">Clase</label>
                                                        <div class="col-sm-10">
<input type="text" name="classname" class="form-control" id="classname" value="<?php echo htmlentities($result->ClassName)?>(<?php echo htmlentities($result->Section)?>)" readonly>
                                                        </div>
                                                    </div>
<div class="form-group">
                                                        <label for="date" class="col-sm-2 control-label">Fecha de nacimiento</label>
                                                        <div class="col-sm-10">
                <input type="date"  name="dob" class="form-control" value="<?php echo htmlentities($result->DOB)?>" id="date">
                                                        </div>
                                                    </div>
<div class="form-group">
<label for="default" class="col-sm-2 control-label">Datos registrados </label>
<div class="col-sm-10">
<?php echo htmlentities($result->RegDate)?>
</div>
</div>

<div class="form-group">
<label for="default" class="col-sm-2 control-label">Estado</label>
<div class="col-sm-10">
<?php  $stats=$result->Status;
if($stats=="1")
{
?>
<input type="radio" name="status" value="1" required="required" checked>Activo <input type="radio" name="status" value="0" required="required">Inactivo
<?php }?>
<?php  
if($stats=="0")
{
?>
<input type="radio" name="status" value="1" required="required" >Activo <input type="radio" name="status" value="0" required="required" checked>Inactivo
<?php }?>



</div>
</div>

<?php }} ?>                                                    

                                                    
                                                    <div class="form-group">
                                                        <div class="col-sm-offset-2 col-sm-10">
                                                            <button type="submit" name="submit" class="btn btn-primary">Actualizar</button>
                                                        </div>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </div>
                </div>
            </div>
<?php include('includes/footer.php');?>
       
<?PHP } ?>
