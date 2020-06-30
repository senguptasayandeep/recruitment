<!DOCTYPE html>
<html lang="en">
<head>
<!-- Meta, title, CSS, favicons, etc. -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Index</title>
<!-- Bootstrap core CSS -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css"/>
<link href="css/style.css" rel="stylesheet">
<!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>
<script src="js/ie-emulation-modes-warning.js"></script>
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="js/html5shiv.min.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/apple-touch-icon-144-precomposed.png">
<link rel="shortcut icon" href="images/favicon.png">
</head>

<body class="intro-bg">

<div class="auth-container">
<div class="card">
<header class="auth-header"><h1 class="auth-title">Admin</h1></header>
<div class="auth-content">
<form method="post" action="dashboard.php" id="introForm" class="formular">
<div class="form-group">
<label for="username">Username</label> 
<input type="text" class="validate[required] text-input form-control" name="user_name" id="user_name">
</div>
<div class="form-group"> 
<label for="password">Password</label> 
<input type="password" class="form-control validate[required] text-input login-field  login-field-password" id="password-1" name="password">
</div>
<div class="form-group"> 
<label for="remember"><input class="checkbox" id="remember" type="checkbox"><span>Remember me</span></label> 
<a href="reset.php" class="forgot-btn pull-right">Forgot password?</a> </div>
<div class="form-group"> <button type="submit" class="btn btn-block btn-primary">Login</button> </div>

</form>
</div>
</div>
</div>

<!-- Bootstrap core JavaScript================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<script src="js/hideShowPassword.min.js"></script>
<script>
$('#password-1').hidePassword(true);
$('#password-2').showPassword('focus', {
toggle: { className: 'my-toggle' }
});
$('#show-password').change(function(){
$('#password-3').hideShowPassword($(this).prop('checked'));
});
jQuery(document).ready(function(){
jQuery("#introForm").validationEngine('attach', {promptPosition : "bottomLeft", autoPositionUpdate : true});
});
</script>
</body>
</html>