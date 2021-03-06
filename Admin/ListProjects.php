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

    <title>Shades Associate | Home Page</title>

</head>

<body class="page-homepage navigation-fixed-top page-slider" id="page-top" data-spy="scroll" data-target=".navigation" data-offset="90">
<!-- Wrapper -->
<div class="wrapper">

    <?php $actlink = basename(__FILE__);
    include_once("Header.php"); ?>

    <div id="page-content">
        <div class="container"><p></p><p></p>
           <div class="row">
                <!-- Contact -->
                <div class="col-md-12 col-sm-12">
                    <section id="AddPic">
                        </br>
                        </br>
                        </br>
                        </br>
                        </br>
                        </br>
                        </br>
                        <table class="table table-hover table-striped">
                            <tr>
                                <th>S/N</th>
                                <th>Project Name</th>
                                <th>Beds</th>
                                <th>Baths</th>
                                <th>Garages</th>
                                <th>Location</th>
                                <th>Property Description</th>
                                <th>Action</th>
                            </tr>
                            <?php //echo $trnDet; ?>
                        </table>
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