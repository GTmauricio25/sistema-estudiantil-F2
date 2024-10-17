<?php
// Usuarios predefinidos
$usuarios = [
    'admin' => 'admin469',
    'estudiante' => 'estudiante469'
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (isset($usuarios[$username]) && $usuarios[$username] == $password) {
        session_start();
        $_SESSION['username'] = $username;

        if ($username == 'admin') {
            header('Location: dashboard.php');
        } elseif ($username == 'estudiante') {
            header('Location: find-result.php');
        }
        exit();
    } else {
        echo "<script>
                alert('Datos invalidos!');
                window.location.href = 'inicio-sesion.php'; 
              </script>";
        exit();
    }
}
?>
