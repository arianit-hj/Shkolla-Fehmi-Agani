<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $fetch_info['name'] ?> | Faqja kryesore</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    
    <link rel="stylesheet" href="home.css">
    <style>
    
    </style>
</head>
<body>
<nav>
    <label class="logo">Fehmi Agani</label>
    <ul>
        <a href="home.php"><li>Ballina</li></a>
        <a href=""><li>Shpalljet</li></a>
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Drejtimi
        </a>
        <ul class="dropdown-menu">
          <li><a href="#">Infromatikë</a></li>
          <li><a href="#">Instalues elektrik</a></li>
          <li><a href="#">Automekanik</a></li>
          <li><a href="#">Instalues i ujit dhe kanalizimit</a></li>
          <li><a href="#">Transport rrugor</a></li>
          <li><a href="#">Operator prodhimi</a></li>
          <li><a href="#">Gjeologji</a></li>
          <li><a href="#">Laborant i biologjis</a></li>
          <li><a href="#">Miniera</a></li>
          <li><a href="#">Hortikultur</a></li>
          <li><a href="#">Teknologji ushqimore</a></li>
          <li><a href="#">Kontabilitet</a></li>
          <li><a href="#">Teknik i ndërtimtaris</a></li>
        </ul>
      </li>
      <a href=""><li>Aktivitetet</li></a>
      <a href=""><li>Krijo klasë</li></a>
        <li><a href="logout-user.php"><i class="fas fa-sign-out-alt"></i> Dil</a></li>
    </ul>
</nav>
<marquee behavior="" direction=""><h5 class="hello-msg">Pershendetje <strong><?php echo $fetch_info['name'] ?></strong> Mirësëvini në webfaqen e shkollës Fehmi Agani</h5></marquee>

</body>
</html>