<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CRM</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet" />
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/external.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/fstdropdown.css') }}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
    <![endif]-->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('images/apple-touch-icon-144-precomposed.png') }}" />
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />
</head>

<body>
    <header class="header">
        <ul class="header-link">
            <li>
                <a href="#" class="toogle-btn" id="menu-toggle">
                    <span aria-hidden="true" class="glyphicon glyphicon-menu-hamburger"></span>
                    <span aria-hidden="true" class="glyphicon glyphicon-remove-circle"></span>
                </a>
            </li>
            <li>
                <a href="#"><span aria-hidden="true" class="glyphicon glyphicon-home"></span><strong>Site Name</strong></a>
            </li>
        </ul>

        <div class="btn-group">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="http://d22r54gnmuhwmk.cloudfront.net/app-assets/global/default_user_icon-7a95ec473c1c41f6d020d32c0504a0ef.jpg" alt="" />Welcome Admin <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li>
                    <a href="#"><i class="fa fa-user"></i>Profile</a>
                </li>
                <li>
                    <a href="setting.php"><i class="fa fa-gear"></i>Settings</a>
                </li>
                <li>
                    <a href="{{ route('/') }}"><i class="fa fa-sign-out"></i>Logout</a>
                </li>
            </ul>
        </div>
    </header>

    <aside id="page-sidebar">
        <nav class="sidebar-menu">
            <ul>
                <li>
                    <a href="{{ url('admin') }}">
                        <span><i class="fa fa-dashboard"></i>Dashboard</span>
                    </a>
                </li>
                {{-- <li>
                    <a href="{{ route('master') }}">
                        <span><i class="fa fa-database"></i>Master</span>
                    </a>
                </li> --}}
                <li>
                    <a href="{{ route('job_manager') }}">
                        <span><i class="fa fa-pencil-square-o"></i>Job Manager</span>
                    </a>
                    <ul>
                        <li><a href="#">All Jobs</a></li>
                        <li><a href="{{ route('add_job') }}">Add Job</a></li>
                        <li><a href="{{ route('master_job_type.index') }}">Job Type</a></li>
                        <li><a href="{{ route('master_post_position.index') }}">Post / Position</a></li>
                        <li><a href="{{ route('master_industry.index') }}">Industry</a></li>
                        <li><a href="{{ route('master_tag_keyword.index') }}">Skills</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <span><i class="fa fa-file-archive-o"></i>Resume Deposit</span>
                    </a>
                    <ul>
                        <li><a href="#">All Resume</a></li>
                        <li><a href="#">Add Resume</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <span><i class="fa fa-file"></i>Reports</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('settings') }}">
                        <span><i class="fa fa-info-circle"></i>Organisation Info</span>
                    </a>
                </li>


            </ul>
        </nav>
    </aside>
</body>
