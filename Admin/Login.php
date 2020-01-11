<!DOCTYPE html>

<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="ThemeStarz">

    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
    <link href="../assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="../assets/css/bootstrap-select.min.css" type="text/css">
    <link rel="stylesheet" href="../assets/css/jquery.slider.min.css" type="text/css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="../assets/css/owl.transitions.css" type="text/css">
    <link rel="stylesheet" href="../assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <title>Shades Associate | Admin Login Page</title>

</head>

<body class="page-homepage navigation-fixed-top page-slider" id="page-top" data-spy="scroll" data-target=".navigation" data-offset="90">
<!-- Wrapper -->
<div class="wrapper">
     <!--<div class="navigation">
        <div class="secondary-navigation">
            <div class="container">
                <div class="contact">
                    <figure><strong>Phone:</strong>+2348033222437</figure>
                    <figure><strong>Email:</strong>shedonwuasoanya2@yahoo.com</figure>
                </div>
            </div>
        </div>
    </div>/.navigation -->
    <?php $actlink = basename(__FILE__);
    //include_once("Header.php"); ?>
    
    <div id="page-content">
        <div class="container"><p></p><p></p>
           <div class="row">
                <!-- Contact -->
                <div class="col-md-9 col-sm-9">
                    <!--<img src="../assets/img/maxresdefault.jpg" alt="brand">-->
                </div>
                <div class="col-md-3 col-sm-3">
                    <section id="Login">
                        <header><h1>ADMIN LOGIN</h1></header>
                        <section id="Login-information">
                            <div class="row">
                                <form name="loginform" id="loginform" onsubmit="return false;" method="post">
                                <div class="form-group has-feedback">
                                    <p id="status" style="color: #f00;"></p>
                                </div>
                                <div class="form-group has-feedback">
                                    <input id="Uname" type="text" class="form-control" onkeyup="restrict('Uname')" placeholder="USERNAME" onfocus="emptyElement('status')" maxlength="250">
                                </div>
                                <div class="form-group has-feedback">
                                    <input id="pass" type="password" class="form-control" onkeyup="restrict('pass')" placeholder="PASSWORD" onfocus="emptyElement('status')" maxlength="250">
                                </div>
                                <div class="form-group clearfix">
                                    <button type="submit" class="btn pull-right btn-default" id="lgnbtn">Login</button>
                                </div><!-- /.form-group -->
                                </form>
                            </div>
                        </section>
                    </section>
                </div>
           </div>
        </div>
    </div>
    
    
    <?php $actlink = basename(__FILE__);
    include_once("../Footer.php"); ?>
</div>

<div id="overlay"></div>

<script type="text/javascript" src="../assets/js/jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="../assets/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="../assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../assets/js/smoothscroll.js"></script>
<script type="text/javascript" src="../assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="../assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="../assets/js/jquery.placeholder.js"></script>
<script type="text/javascript" src="../assets/js/icheck.min.js"></script>
<script type="text/javascript" src="../assets/js/jquery.vanillabox-0.1.5.min.js"></script>
<script type="text/javascript" src="../assets/js/retina-1.1.0.min.js"></script>
<script type="text/javascript" src="../assets/js/custom.js"></script>
<!--[if gt IE 8]>
<script type="text/javascript" src="assets/js/ie.js"></script>
<![endif]-->

<script>
    $(window).load(function(){
        initializeOwl(false);
    });
</script>
</body>
</html>