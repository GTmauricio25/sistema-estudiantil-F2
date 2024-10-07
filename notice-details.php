<?php
error_reporting(0);
include('includes/config.php'); 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Instituto Nacional Tecnico Industrial</title>
        <link rel="icon" href="img/logo instituto_Mesa de trabajo 1.png">
        <link href="assets/css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive barra de navegacion-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="inicio.php">Detalles de la noticia</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="inicio.php">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link active" href="find-result.php">Estudiantes</a></li>
                        <li class="nav-item"><a class="nav-link active" href="dashboard.php">Admin</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="py-5">
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-10">

 <?php 
$noticeid=$_GET['nid'];
$sql = "SELECT * from tblnotice where id='$noticeid'";
$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{   ?>  

                        <h3><?php echo htmlentities($result->noticeTitle);?></h3>
                        <p><strong>Noticia publicada:</strong>  <?php echo htmlentities($result->postingDate);?></p>
                                                <hr color="#000" />
                    
<p><?php echo htmlentities($result->noticeDetails);?></p>
<?php }} ?>

              
    

                    </div>
                </div>
            </div>
        </section>


        
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright Mauricio/heber&copy; <!--texto--> <?php echo date('Y');?></p></div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/scripts.js"></script>
    </body>
</html>
