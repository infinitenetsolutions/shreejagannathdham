<?php
    include 'connection.inc.php';
    $smg = "";
    include 'function.inc.php';
    if (isset($_POST['done'])) {
   

  echo  $username = $_POST['username'];
   echo $email = $_POST['username'];

    $password = $_POST['password'];



 echo $q = "SELECT * FROM `super_admin` WHERE `user_name`='$username' || `email_id`='$email'";
    
    $result = mysqli_query($connection, $q);

    $num = mysqli_num_rows($result);
    if ($num == 1) {
        $row = mysqli_fetch_array($result);
        $fusername = $row['user_name'];
        $femail = $row['email_id'];
        $fpassword = $row['password'];

        if ($femail == $email && $fpassword == $password) {
            $_SESSION['ADMIN_LOGIN'] = 'yes';
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $femail;
            echo 'login successfull';
            header('location: ./index.php');
        } else if ($fusername == $username && $fpassword == $password) {
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $femail;
            echo 'login successfull';
            header('location: index.php');
        } else {
            $smg = " <i class='fa fa-exclamation-triangle' aria-hidden='true'></i> password not match";
        }
    } else {
        $smg = " <i class='fa fa-exclamation-triangle' aria-hidden='true'></i> credential not valid";
    }
}




?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login!</title>
    <link rel="stylesheet" href="super_Admin.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>

<body>
    <div class="row">
        <div class="col-md-6 mx-auto p-0 ">

            <div class="card">
                <div class="text-center mt-3">
                    <img width="400" class="img-fluid" src="../dist/img/AdminLTELogo.png" alt="">
                </div>
                <div class="login-box">
                    <div class="login-snip">
                        <input required id="tab-1" type="radio" name="tab" class="sign-in" checked>
                        <!-- <label for="tab-1" class="tab">Shree Jagannath Temple</label> -->
                        <label for="tab-1" class="tab">Admin Login</label>
                        <input required id="tab-2" type="radio" name="tab" class="sign-up">
                        <label for="tab-2" class="tab"></label>
                        <div class="login-space">
                            <div class="login">
                                <form action="" method="POST">
                                    <div class="group"> <label for="user" class="label">Username</label> <input required
                                            id="user" type="text" class="input"
                                            placeholder="Enter username or phone or Email" name="username">
                                    </div>
                                    <div class="group"> <label for="pass" class="label">Password</label> <input required
                                            id="pass" type="password" class="input data-type="
                                            placeholder="Enter your password" name="password"> </div>
                                    <div class="group"> <input required id="check" type="checkbox" class="check"
                                            checked> <label for="check"><span class="icon"></span> Keep me Signed
                                            in</label> </div>
                                    <div class="group"> <input required type="submit" class="button" value="Sign In"
                                            name="done">
                                    </div>
                                    <p class="errormsg"><?php echo $smg; ?></p>
                                    <br>
                                    <div class="foot">
                                        <footer class="main-footer text-white">
                                            <strong>Copyright &copy; <?php echo date('Y') ?> <a class="text-danger"
                                                    href="#">Shree Jagannath Temple</a>.</strong>
                                            All rights reserved.
                                            <div class="float-right d-none d-sm-inline-block">
                                                <b>Powered By</b> <a class="text-success"
                                                    href="http://infinitenetsolutions.com/">Infinite Net Solutions</a>
                                            </div>
                                        </footer>
                                    </div>




                                </form>
                            </div>
                            <?php
                            ?>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>