<!DOCTYPE html>
<html dir="<?php echo $language->__("language.direction"); ?>" lang="<?php echo $language->__("language.code"); ?>">
<head>

    <link rel="stylesheet" href="<?=BASE_URL ?>/css/main.css?v=<?php echo $settings->appVersion; ?>"/>
    <link rel="stylesheet" href="<?=BASE_URL ?>/css/style.default.css?v=<?php echo $settings->appVersion; ?>" type="text/css" />
    <link rel="stylesheet" href="<?=BASE_URL ?>/css/style.custom.php?color=<?php echo $_SESSION["companysettings.mainColor"]; ?>&v=<?php echo $settings->appVersion; ?>" type="text/css" />

    <script src="<?=BASE_URL?>/js/compiled-base-libs.min.js?v=<?php echo $settings->appVersion; ?>"></script>

</head>

<script type="text/javascript">
    jQuery(document).ready(function(){
        
        if(jQuery('.login-alert .alert').text() != ''){
            jQuery('.login-alert').fadeIn();
        }

    });
</script>
</head>

<?php

    $redirectUrl = "/dashboard/show";

    if($_SERVER['REQUEST_URI'] != '' && isset($_GET['logout']) === false) {
        $redirectUrl = filter_var($_SERVER['REQUEST_URI'], FILTER_SANITIZE_URL);
    }

?>

<body class="loginpage" style="height:100%;">

<div class="header hidden-gt-sm">

    <div class="logo" style="margin-left:0px;">
        <a href="" style="background-color: #4e9525;"><h2 style="color: white; margin-top: 8px;">Agrophos</h2></a>
    </div>

</div>


<div class="row " style="height:100%; width: 99%; background-color: #4e9525;">
    <div class="col-md-6 hidden-phone regLeft" style="background-color:#4e9525;" >
        <div class="row">
            <div class="col-md-5">

            </div>
            <div class="col-md-6" style="position:relative;" style="background-color: #4e9525;">
                <a href="<?=BASE_URL ?>" target="_blank"><h1 style="font-family:Exo;  font-size: 64px; padding-left:15px; font-weight:400; color: white;">Agrophos</h1></a>
                <h1 style="font-family:Exo;  font-size: 64px; padding-left:15px; font-weight:400;"><?php echo $language->__("headlines.drive_impact"); ?></h1>
                <span class="iq-objects-04 iq-fadebounce">
				    <span class="iq-round"></span>
                </span>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-12 regRight"  style="box-shadow: -2px 0px 2px #494949; padding-top:14%; border-left: 1px solid #ddd;">

        <div class="regpanel">
            <div class="regpanelinner">
                <div class="pageheader">
                    <div class="pageicon"><span class="iconfa-signin"></span></div>
                    <div class="pagetitle">
                        
                        <h1><?php echo $language->__("headlines.login"); ?></h1>
                    </div>
                </div>
                <div class="regcontent"  style="margin-left: 90px;">
                    <form id="login" action="<?php echo $redirectUrl?>" method="post">
                        <input type="hidden" name="redirectUrl" value="<?php echo $redirectUrl; ?>" />
                        <div class="inputwrapper login-alert">
                            <div class="alert alert-error"><?php echo $login->error;?></div>
                        </div>
                        <div class="">
                            <input type="text" name="username" id="username" class="form-control" placeholder="<?php echo $language->__("input.placeholders.enter_email"); ?>" value=""/>
                        </div>
                        <div class="">
                            <input type="password" name="password" id="password" class="form-control" placeholder="<?php echo $language->__("input.placeholders.enter_password"); ?>" value=""/>
                        </div>
                        <div class="">
                            <a href="<?=BASE_URL ?>/resetPassword" style="float:right; margin-top:10px;"><?php echo $language->__("links.forgot_password"); ?></a>
                            <input type="submit" name="login" value="<?php echo $language->__("buttons.login"); ?>" class="btn btn-primary"/>
                        </div>

                    </form>
                </div>
            </div>
        </div>



    </div>
</div>

</body>
</html>
