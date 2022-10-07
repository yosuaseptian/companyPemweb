<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
    $link   = mysqli_connect('localhost', 'root', '','db_companyprofile');
    $tampilprofiladmin = mysqli_query ($link, "SELECT * FROM tbl_profile ORDER BY id_profile ASC LIMIT 1");
    while ($showprofiladmin = mysqli_fetch_assoc($tampilprofiladmin)) { 
    echo "
        <title>$showprofiladmin[copyright] - Admin Panel</title>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
        <meta name=\"robots\" content=\"index, follow\">
        <meta name=\"description\" content=\"$showprofiladmin[description]\">
        <meta name=\"keywords\" content=\"$showprofiladmin[keywords]\">
        <meta http-equiv=\"copyright\" content=\"$showprofiladmin[copyright]\">
        <meta name=\"author\" content=\"$showprofiladmin[author]\">
        <link rel=\"shortcut icon\" href=\"../../rsl/img/$showprofiladmin[icon]\" />";
    }
    ?>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body style="background: #0f1422;">

    <div id="register-page">
        <div class="container">

            <form class="form-register" action="" method="POST">
                <h2 class="form-login-heading" style="text-align: center;">Registrasion</h2>
                <div class="login-wrap">
                    <label class="text-registrasion" for="fullNames">Nama Lengkap</label>
                    <input type="text" name="fullNames" class="form-control" placeholder="Isi Nama Lengkap" autofocus>
                    <br>
                    <label class="text-registrasion" for="username">Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Isi Username" autofocus>
                    <br>
                    <label class="text-registrasion" for="phoneNumbers">Nomor Telfon</label>
                    <input type="text" name="phoneNumbers" class="form-control" placeholder="Isi Nomor Telfon"
                        autofocus>
                    <br>
                    <label class="text-registrasion" for="emails">Email</label>
                    <input type="text" name="emails" class="form-control" placeholder="Isi Emails" autofocus>
                    <br>
                    <label class="text-registrasion" for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Isi Password">
                    <br>
                    <a data-toggle="modal" href="#myModal"><button class="btn btn-theme btn-block" type="submit"
                            name="submit"><i class="fa fa-lock"></i> Register</button></a>
                    <?php include 'execute_register.php'; ?>
                    <hr>

                    <div class="registration">
                        Already Have Account?<br />
                        <a class="" href="../confpanel/index.php">
                            Sign In
                        </a>
                    </div>

                </div>

            </form>

        </div>
    </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
    $.backstretch("assets/img/login-bg.jpg", {
        speed: 500
    });
    </script>

    <style>
    .form-control {
        height: 30px !important;
    }

    .text-registrasion {
        color: antiquewhite;
    }
    </style>

</body>

</html>