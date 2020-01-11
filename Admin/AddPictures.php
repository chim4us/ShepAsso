<?php



?>

<!DOCTYPE html>

<html lang="en-US">
<head>
    <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>

    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="ThemeStarz">

    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
    <link href="assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="../assets/css/bootstrap-select.min.css" type="text/css">
    <link rel="stylesheet" href="../assets/css/jquery.slider.min.css" type="text/css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="../assets/css/owl.transitions.css" type="text/css">
    <link rel="stylesheet" href="../assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <title>Shades Associate | Add Project Pictures Page</title>
    

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
                        <header><h1>Add Projects</h1></header>
                        <!--<section id="Login-information">-->
                            
                            <div class="row">
                                <form name="loginform" id="loginform" onsubmit="return false;" method="post">
                                    <div class="form-group has-feedback">
                                        <p id="status" style="color: #f00;"></p>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Project Name</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <!--<i class="fa fa-id-card" aria-hidden="true"></i>-->
                                                        <i class="fa fa-fw fa-user"></i>
                                                    </div>
                                                    <input type="text"  class="form-control" onfocus="emptyElement('status')" id="FName">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Beds</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <!--<i class="fa fa-id-card" aria-hidden="true"></i>-->
                                                        <i class="fa fa-fw fa-user"></i>
                                                    </div>
                                                    <input type="text"  class="form-control" onfocus="emptyElement('status')" id="FName">
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-6">        
                                            <div class="form-group">
                                                <label>Baths</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <!--<i class="fa fa-id-card" aria-hidden="true"></i>-->
                                                        <i class="fa fa-fw fa-user"></i>
                                                    </div>
                                                    <input type="text"  class="form-control" onfocus="emptyElement('status')" id="FName">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Garages</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <!--<i class="fa fa-id-card" aria-hidden="true"></i>-->
                                                        <i class="fa fa-fw fa-user"></i>
                                                    </div>
                                                    <input type="text"  class="form-control" onfocus="emptyElement('status')" id="FName">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Location</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <!--<i class="fa fa-id-card" aria-hidden="true"></i>-->
                                                        <i class="fa fa-fw fa-user"></i>
                                                    </div>
                                                    <input type="text"  class="form-control" onfocus="emptyElement('status')" id="FName">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group has-feedback">
                                                <label>Property Description</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <!--<i class="fa fa-id-card" aria-hidden="true"></i>-->
                                                        <i class="fa fa-fw fa-user"></i>
                                                    </div>
                                                    <textarea class="form-control" onfocus="emptyElement('status')" id="FName"></textarea>
                                                    <!--<input type="text" onkeyup="restrict('Uname')" class="form-control" onfocus="emptyElement('status')" id="FName">-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group has-feedback">
                                                <label>Pictures</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-fw fa-user"></i>
                                                    </div>
                                                    <!--<input class="form-control" type="file" onchange="readURL(this);" multiple>-->
                                                    <input class="form-control" type="file" onchange="readURL(this);" multiple>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="imgdisp">
                                            
                                        </div>
                                        <!--<img id="blah" src="#" alt="your image" />-->
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group has-feedback">
                                                <label>Please choose other places the project will appear on</label>
                                                <div class="input-group">
                                                    
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" value="">OUR BEST WORK</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" value="">HOME SLIDE</label>
                                                    </div>
                                                    <!--<div class="checkbox">
                                                        <label><input type="checkbox" value="" >Option 3</label>
                                                    </div>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group clearfix">
                                        <button type="submit" class="btn pull-right btn-default" id="lgnbtn">Add Project</button>
                                    </div><!-- /.form-group -->
                                </form>
                            </div>
                        <!--</section>-->
                    </section>
                </div>
           </div>
        </div>
    </div>
    
    <?php $actlink = basename(__FILE__);
    include_once("footer.php"); ?>
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
    function randomString(len, charSet) {
    charSet = charSet || 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    var randomString = '';
    for (var i = 0; i < len; i++) {
        var randomPoz = Math.floor(Math.random() * charSet.length);
        randomString += charSet.substring(randomPoz,randomPoz+1);
    }
    return randomString;
}
    function readURL(input) {
        var cnt = 0;
        var chk = 0;
        while (chk == 0){
            if (input.files && input.files[cnt]) {
                if(cnt == 0){
                    document.getElementById('imgdisp').innerHTML = '';
                }
                var randomValue = randomString(5, 'blah');
                var disp = document.getElementById('imgdisp').innerHTML;
                //alert(disp);
                document.getElementById('imgdisp').innerHTML = disp + '<img id="'+randomValue+'" src="#" alt="your image" />';
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#'+randomValue)
                        .attr('src', e.target.result)
                        .width(150)
                        .height(200);
                };

                reader.readAsDataURL(input.files[cnt]);
                 cnt ++;
            }else {
                chk = 1;
            }
        }
        
        
        
        /**
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }***/
    }
    $(window).load(function(){
        initializeOwl(false);
    });
</script>
</body>
</html>