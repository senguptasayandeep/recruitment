<head>
<!-- Meta, title, CSS, favicons, etc. -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Index</title>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/external.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="js/html5shiv.min.js"></script>
<![endif]-->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/apple-touch-icon-144-precomposed.png">
<link rel="shortcut icon" href="images/favicon.png">
</head>

<body>

<header class="header">
<ul class="header-link">
<li><a href="#" class="toogle-btn" id="menu-toggle" >
<span aria-hidden="true" class="glyphicon glyphicon-menu-hamburger"></span>
<span aria-hidden="true" class="glyphicon glyphicon-remove-circle"></span>
</a></li>
<li><a href="#"><span aria-hidden="true" class="glyphicon glyphicon-home"></span><strong>Site Name</strong></a></li>
</ul>

<div class="btn-group">
<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<img src="http://d22r54gnmuhwmk.cloudfront.net/app-assets/global/default_user_icon-7a95ec473c1c41f6d020d32c0504a0ef.jpg" alt="">Welcome Admin <span class="caret"></span>
</button>
<ul class="dropdown-menu">
<li><a href="#"><i class="fa fa-user"></i>Profile</a></li>
<li><a href="setting.php"><i class="fa fa-gear"></i>Settings</a></li>
<li><a href="index.php"><i class="fa fa-sign-out"></i>Logout</a></li>
</ul>
</div>
</header>

<aside id="page-sidebar">
<nav class=" sidebar-menu">
<ul>
<li><a href="dashboard.php"><span><i class="fa fa-dashboard"></i>Dashboard</span></a></li>
<li><a href="javascript:void(0"><span><i class="fa fa-th-large"></i>Item Manager</span></a>
<ul>
<li><a href="item-list.php">Item List</a></li>
<li><a href="item-editor.php">Item Editor</a></li>
</ul>
</li>
<li><a href="javascript:void(0"><span><i class="fa fa-camera "></i>Media</span></a>
<ul>
<li><a href="media-list.php">Media List</a></li>
<li><a href="media-upload.php">Media Editor</a></li>
</ul>
</li>
<li><a href="javascript:void(0"><span><i class="fa fa-picture-o"></i>Gallery</span></a>
<ul>
<li><a href="gallery-add.php">Add Gallery</a></li>
<li><a href="gallery-grid.php">Gallery Grid View</a></li>
<li><a href="gallery-list-multiple.php">Gallery List View</a></li>
</ul>
</li>
<li><a href="form-element.php"><span><i class="fa fa-pencil-square-o"></i>Form</span></a></li>
<li><a href="pages.php"><span><i class="fa fa-file-text-o"></i>Pages</span></a></li>
<li><a href="setting.php"><span><i class="fa fa-gear"></i>Settings</span></a></li>
</ul>
</nav>
</aside>