<?
    if (isset($_COOKIE["lang"])) 
    $lang = $_COOKIE["lang"]; 

    else 
    $lang = 'uzs';


    if ($lang == 'rus')
    {
        $sitebar = array(
            'home' => 'Главная',
            'yangiliklar' => 'Новости',
            'jamoa' => 'Команда',
            'haqimizda' => 'о нас',
            'chiqish' => 'Выход'
        );
    }

    else if ($lang == 'ens')
    {
        $sitebar = array(
            'home' => 'Home',
            'yangiliklar' => 'News',
            'jamoa' => 'Our team',
            'haqimizda' => 'About',
            'chiqish' => 'Logout'
        );
    }

    else
    {
        $sitebar = array(
            'home' => 'Bosh sahifa',
            'yangiliklar' => 'Yangiliklar',
            'jamoa' => 'Jamoa',
            'haqimizda' => 'Biz haqimizda',
            'chiqish' => 'Chiqish'
        );
    }

?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="">
    <!-- <link rel="icon" type="image/png" href="{{asset('admin/assets/img/tab.png')}}"> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Toys Admin base</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('admin/assets/css/light-bootstrap-dashboard.css?v=2.0.0 ')}}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset('admin/assets/css/demo.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>

<body>
<div class="wrapper">
    <div class="sidebar" data-image="admin/assets/img/sidebar-5.jpg" data-color="blue"  >
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="{{url('/')}}" class="simple-text">
                Главная
            </a>
        </div>
        <ul class="nav">

            <li class="nav-item @yield('admin')">
                <a class="nav-link" href="{{url('/a-panel')}}">
                    <i class="fas fa-user"></i>
                    <p>Админ</p>
                </a>
            </li>


            <li  class="nav-item @yield('products')">
                <a class="nav-link" href="{{route('offer.index')}}">
                <i class="fab fa-product-hunt"></i>
                    <p>Игрушки</p>
                </a>
            </li>

            <li  class="nav-item @yield('statistics')">
                <a class="nav-link" href="{{route('statistics.index')}}">
                <i class="fas fa-sort-numeric-up-alt"></i>
                    <p>Статистика</p>
                </a>
            </li>

            <li  class="nav-item @yield('partners')">
                <a class="nav-link" href="{{route('partners.index')}}">
                    <i class="fas fa-handshake"></i>
                    <p>Партнеры</p>
                </a>
            </li>
            <li class="nav-item @yield('orders')">
                <a class="nav-link" href="{{route('orders.index')}}">
                    <i class="fas fa-shopping-cart"></i>
                    <p> Заказы </p>
                </a>
            </li>
            
        </ul>
    </div>
</div>
<div class="main-panel">
<nav class="navbar navbar-expand-lg " color-on-scroll="500">
        <div class="container-fluid">
                   
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#pablo">
                            <span class="no-icon">Профиль</span>
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                
                            <span class="no-icon">Выход из профиля</span>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                            </form>
                        </a>
                    </li>
                </ul>
            </div>
    </nav>
<div class="content">
       @yield('content')
   </div>
    <!-- Navbar -->
   
    
    <!-- End Navbar -->

  
</div>
</div>

</body>
<!--   Core JS Files   -->
<script>
function addCookie(lan) {
	document.cookie = `lang=${lan}`;
	var url = window.location.href;
	window.location.reload(url);
	}
</script>
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>;
<script src="{{asset('admin/assets/js/core/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('admin/assets/js/core/popper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('admin/assets/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{asset('admin/assets/js/plugins/bootstrap-switch.js')}}"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="{{asset('admin/assets/js/plugins/chartist.min.js')}}"></script>
<!--  Notifications Plugin    -->
<!-- <script src="{{asset('admin/assets/js/plugins/bootstrap-notify.js')}}"></script> -->  
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="{{asset('admin/assets/js/light-bootstrap-dashboard.js?v=2.0.0 ')}}" type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="{{asset('admin/assets/js/demo.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.showNotification();

    });
</script>

</html>
