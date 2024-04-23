<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome 6 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/style.css">
  <!-- Owl Carousel 2 CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.theme.default.min.css">
</head>
<body>


<!--TOP MENU-->
<menu class="top_menu flex">
    <section class="flex_content">
        <a href="emailto:info@barnikafoundation.com">
            <i class="fa-solid fa-envelope"></i>
            info@barnikafoundation.com
        </a>
        <a href="tel:1234567890">
            <i class="fa-solid fa-phone"></i>
            1234567890
        </a>
    </section>
</menu>

<!--NAV-->
<nav>
    <section class="flex_content">
        <figure class="logo fixed_flex">
            <img src="{{url('/')}}/assets/images/bfn_lgo.png" alt="">
            <figcaption>
                <strong class="title">Barnika</strong>
                <small class="streched">Foundation</small>
            </figcaption>
        </figure>
    </section>
    <section class="flex_content nav_content" id="nav_content">
        <a href="#" class="active">Home</a>
        <a href="#gallery">About Us</a>
        <a href="#blogs">Programmes</a>
        <a href="javascript:void(0)" class="contact_btn">Projects</a>
        <a href="#about">Resources</a>
        <a href="#about">Collaborations</a>
        <a href="#about">News/Events</a>
        <a href="#about">Contact Us</a>
    </section>
    <section class="flex_content d-none">
        <a href="javascript:void(0)" class="ham"><i class="fa fa-bars"></i></a>
    </section>
</nav>

<!--MENU-->
<menu id="menu" class="side_menu">
    <a href="javascript:void(0)" class="close"><i class="fa fa-times"></i></a>
    <strong class="fixed_flex logo"><img src="https://i.postimg.cc/02NrFwT5/canva.png" alt="Summit"  loading="lazy" /></strong>
    <br>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Programmes</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Resources</a></li>
        {{-- <li class="dropdown">
            <a href="javascript:void(0)">Mandatory Disclosure</a>
            <aside>
                <a href="#">Society registration</a>
                <a href="#">NOC</a>
            </aside>
        </li> --}}
        <li><a href="#">Collaborations</a></li>
        <li><a href="#">News/Events</a></li>
        <li><a href="#">Contact Us</a></li>
        <li class="fixed_flex"><a href="javascript:void(0)" class="btn btn_1 chat_popup">SignUp/LogIn</a> <a href="#" class="btn btn_2 chat_popup">Admission</a> </li>
    </ul>
</menu>
<!--MAIN-->
<main>
