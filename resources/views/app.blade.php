<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>FlatLab - Flat & Responsive Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{Request::root()}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{Request::root()}}/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="{{Request::root()}}/assets/font-awesome/css/font-awesome.css" rel="stylesheet"/>
    <link href="{{Request::root()}}/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css"
          media="screen"/>
    <link rel="stylesheet" href="{{Request::root()}}/css/owl.carousel.css" type="text/css">

    <!--right slidebar-->
    <link href="{{Request::root()}}/css/slidebars.css" rel="stylesheet">

    <!-- Custom styles for this template -->

    <link href="{{Request::root()}}/css/style.css" rel="stylesheet">
    <link href="{{Request::root()}}/css/customstyle.css" rel="stylesheet">
    <link href="{{Request::root()}}/css/style-responsive.css" rel="stylesheet"/>

    <link href="{{Request::root()}}/css/jquery.dataTables.min.css" rel="stylesheet"/>



    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>

    <script src="{{Request::root()}}/js/html5shiv.js"></script>
    <script src="{{Request::root()}}/js/respond.min.js"></script>

    <![endif]-->
</head>

<body>

<section id="container">
    <!--header start-->
    <header class="header white-bg">
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
        <!--logo start-->
        <a href="home" class="logo">SIGNUM<span>WINDEX</span></a>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu">
            <!--  notification start -->
            <ul class="nav top-menu">

                <!-- settings end -->
                <!-- inbox dropdown start-->
                <li id="header_inbox_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="fa fa-envelope-o"></i>
                        <span class="badge bg-important">5</span>
                    </a>
                    <ul class="dropdown-menu extended inbox">
                        <div class="notify-arrow notify-arrow-red"></div>
                        <li>
                            <p class="red">You have 5 new messages</p>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"><img alt="avatar" src="./img/avatar-mini.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Jonathan Smith</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Hello, this is an example msg.
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"><img alt="avatar" src="./img/avatar-mini2.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Jhon Doe</span>
                                    <span class="time">10 mins</span>
                                    </span>
                                    <span class="message">
                                     Hi, Jhon Doe Bhai how are you ?
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"><img alt="avatar" src="./img/avatar-mini3.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Jason Stathum</span>
                                    <span class="time">3 hrs</span>
                                    </span>
                                    <span class="message">
                                        This is awesome dashboard.
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"><img alt="avatar" src="./img/avatar-mini4.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Jondi Rose</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Hello, this is metrolab
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">See all messages</a>
                        </li>
                    </ul>
                </li>
                <!-- inbox dropdown end -->
                <!-- notification dropdown start-->
                <li id="header_notification_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                        <i class="fa fa-bell-o"></i>
                        <span class="badge bg-warning">7</span>
                    </a>
                    <ul class="dropdown-menu extended notification">
                        <div class="notify-arrow notify-arrow-yellow"></div>
                        <li>
                            <p class="yellow">You have 7 new notifications</p>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                Server #3 overloaded.
                                <span class="small italic">34 mins</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-warning"><i class="fa fa-bell"></i></span>
                                Server #10 not respoding.
                                <span class="small italic">1 Hours</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                Database overloaded 24%.
                                <span class="small italic">4 hrs</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-success"><i class="fa fa-plus"></i></span>
                                New user registered.
                                <span class="small italic">Just now</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-info"><i class="fa fa-bullhorn"></i></span>
                                Application error.
                                <span class="small italic">10 mins</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">See all notifications</a>
                        </li>
                    </ul>
                </li>
                <!-- notification dropdown end -->
            </ul>
            <!--  notification end -->
        </div>
        <div class="top-nav ">
            <!--search & user info start-->
            <ul class="nav pull-right top-menu">
                <li>
                    <input type="text" class="form-control search" placeholder="Search">
                </li>
                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img alt="" src="{{Request::root()}}/img/avatar1_small.jpg">
                        <span class="username">Jhon Doue</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <div class="log-arrow-up"></div>
                        <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                        <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                        <li><a href="#"><i class="fa fa-bell-o"></i> Notification</a></li>
                        <li><a href="login.html"><i class="fa fa-key"></i> Log Out</a></li>
                    </ul>
                </li>
                <!-- user login dropdown end -->
            </ul>
            <!--search & user info end-->
        </div>
    </header>
    <!--header end-->
    <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-laptop"></i>
                        <span>CRM</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{Request::root()}}/crm/musteri_yonetimi">Müşteri Yönetimi</a></li>
                        <li><a href="{{Request::root()}}/crm/kisi_yonetimi">Kişi Yönetimi</a></li>
                        <li><a href="{{Request::root()}}/crm/satis_firsati_yonetimi">Satış Fırsatı Yönetimi</a></li>
                        <li><a href="{{Request::root()}}/crm/ebulten_yonetimi">E-Bülten Yönetimi</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Sözleşme Yönetimi</span>
                    </a>
                    <ul class="sub">
                        <li><a href="#">menu item 1</a></li>
                        <li><a href="#">menu item 2</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-cogs"></i>
                        <span>Proje Yönetimi</span>
                    </a>
                    <ul class="sub">
                        <li><a href="#">menu item 1</a></li>
                        <li><a href="#">menu item 2</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-tasks"></i>
                        <span>İdari İşler</span>
                    </a>
                    <ul class="sub">
                        <li><a href="#">menu item 1</a></li>
                        <li><a href="#">menu item 2</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>Yardım Masası</span>
                    </a>
                    <ul class="sub">
                        <li><a href="#">menu item 1</a></li>
                        <li><a href="#">menu item 2</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class=" fa fa-envelope"></i>
                        <span>Tanımlar</span>
                    </a>
                    <ul class="sub">
                        <li><a href="#">Müşteri Durum Tanımı</a></li>
                        <li><a href="#">Müşteri Sektör Tanımı</a></li>
                        <li><a href="#">Müşteri Tip Tanımı</a></li>
                        <li><a href="#">Satış Fırsatı Durum Tanımı</a></li>
                        <li><a href="#">Fiyat Listesi</a></li>
                    </ul>
                </li>
            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
    <!--main content start-->
            @yield('content')
    <!--main content end-->
</section>

<script src="{{Request::root()}}/js/jquery.js"></script>
<script src="{{Request::root()}}/js/jquery-1.12.0.min.js"></script>
<script src="{{Request::root()}}/js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="{{Request::root()}}/js/jquery-migrate-1.2.1.min.js"></script>
<script src="{{Request::root()}}/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="{{Request::root()}}/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="{{Request::root()}}/js/jquery.scrollTo.min.js"></script>
<script src="{{Request::root()}}/js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="{{Request::root()}}/js/respond.min.js"></script>


<!--right slidebar-->
<script src="{{Request::root()}}/js/slidebars.min.js"></script>



<!--common script for all pages-->
<script src="{{Request::root()}}/js/common-scripts.js"></script>


<script src="{{Request::root()}}/js/jquery.dataTables.min.js"></script>
<script>
    var dataSet = [
        [ "Tiger Nixon", "System Architect", "Edinburgh", "5421", "2011/04/25"],
        [ "Garrett Winters", "Accountant", "Tokyo", "8422", "2011/07/25"],
        [ "Ashton Cox", "Junior Technical Author", "San Francisco", "1562", "2009/01/12"],
        [ "Cedric Kelly", "Senior Javascript Developer", "Edinburgh", "6224", "2012/03/29"],
        [ "Airi Satou", "Accountant", "Tokyo", "5407", "2008/11/28"],
        [ "Brielle Williamson", "Integration Specialist", "New York", "4804", "2012/12/02",],
        [ "Herrod Chandler", "Sales Assistant", "San Francisco", "9608", "2012/08/06"],
        [ "Rhona Davidson", "Integration Specialist", "Tokyo", "6200", "2010/10/14"],
        [ "Colleen Hurst", "Javascript Developer", "San Francisco", "2360", "2009/09/15"],
        [ "Sonya Frost", "Software Engineer", "Edinburgh", "1667", "2008/12/13"],
        [ "Jena Gaines", "Office Manager", "London", "3814", "2008/12/19"],
        [ "Quinn Flynn", "Support Lead", "Edinburgh", "9497", "2013/03/03"],
        [ "Charde Marshall", "Regional Director", "San Francisco", "6741", "2008/10/16"],
        [ "Haley Kennedy", "Senior Marketing Designer", "London", "3597", "2012/12/18"],
        [ "Tatyana Fitzpatrick", "Regional Director", "London", "1965", "2010/03/17"],
        [ "Unity Butler", "Marketing Designer", "San Francisco", "5384", "2009/12/09"]
    ];

    $(document).ready(function() {



        $('#example').DataTable( {
            data: dataSet,
            columns: [
                { title: "Müşteri Kısa Adı" },
                { title: "Müşteri Ünvanı" },
                { title: "Durumu" },
                { title: "Sektörü." },
                { title: "Tipi" },
                {title:'İşlemler'}
            ],
            "columnDefs": [
                {
                    "data": null,
                    "defaultContent": "<button class='btn btn-primary btn-xs'><i class='fa fa-pencil'> Güncelle</i></button><button class='btn btn-danger btn-xs'><i class='fa fa-trash-o '>Sil</i></button>",
                    "targets": -1
                }
            ],
            "language": {
                "lengthMenu": ' <select>'+
                '<option value="10">10</option>'+
                '<option value="30">30</option>'+
                '<option value="50">50</option>'+
                '<option value="100">100</option>'+
                '<option value="200">200</option>'+
                '<option value="500">500</option>'+
                '<option value="1000">1000</option>'+
                '<option value="-1">All</option>'+
                '</select> Kayıt Görüntüle',
                "sInfo": "Toplam \_TOTAL\_ sonuç arasından \_START\_ ile \_END\_ arasındaki sonuçlar gösteriliyor."
            },

        } );
    } );


</script>

</body>
</html>
