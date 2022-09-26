<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/config/vars.php';
require $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';
use Melbahja\Seo\MetaTags;
if(isset($t_product_name)){
$metatags = new MetaTags();
$metatags
        ->title($title)
        ->description($description)
        ->meta('author', 'Soulmate Psychic')
        ->image('https://soulmate-psychic.com/assets/img/products/'.$t_product_form_name.'.jpg')
        ->mobile('https://soulmate-psychic.com/assets/img/products/'.$t_product_form_name.'.jpg');


}else{
$metatags = new MetaTags();
$metatags
          ->title($title)
          ->description($description)
          ->meta('author', 'Soulmate Psychic')
          ->image('https://soulmate-psychic.com/assets/img/good-logo.jpg')
          ->mobile('https://soulmate-psychic.com/assets/img/good-logo.jpg');
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-227896344-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-227896344-1');
</script>



    <!-- Meta Tags --> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?php echo $metatags; ?>

    <!-- Verification Tags -->
   

    <link rel="icon" type="image/png" href="/assets/img/favicon.png" />


  <?php echo $productMETA; ?>

  <!-- Preconnect & Preload -->
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
  <link rel="preconnect" href="https://use.fontawesome.com" crossorigin>
  <link rel="preconnect" href="https://maxcdn.bootstrapcdn.com" crossorigin>

  <!-- Latest compiled and minified CSS -->
  <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/css/lazyload.css">
	<link rel="stylesheet" href="/assets/css/review.css">
  <link rel="stylesheet" href="/assets/css/style.css">
  <link rel="stylesheet" href="/assets/css/jquery.popVideo.css">


  <!-- jQuery, Bootstrap & FontAwesome JS Files -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/699dff544d.js" crossorigin="anonymous"></script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-RQ9Y632P67"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-RQ9Y632P67');
</script>

<script src='//cbtb.clickbank.net/?vendor=soulmateps'></script>



  </head>

  <body id="<?php echo $menu_order; ?>">
  <header id="header">
      <div class="topbar">
        <div class="container">
          <div class="sides">
            <div class="left">
              
            </div>
            <div class="right">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
          </div>
        </div>
      </div>
	  <div id="mobile-menu" class="nav-side-menu">
    <a href="/index.php" class="logo">
                <img src="/assets/img/good-logo.jpg" alt="Melissa">
              </a>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

        <div class="menu-list">

            <ul id="menu-content" class="menu-content collapse out">
                <li class="men_1_0"><a href="/index.php"><i class="fa fa-home fa-lg"></i> Home </a></li>

                <li  data-toggle="collapse" data-target="#products" class="collapsed men_2_0">
                  <a href="#/"><i class="fa fa-shopping-cart fa-lg"></i> Services <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="products">
                    <li class="men_2_1"> <a href="/soulmate-drawing.php">Soulmate Drawing</a> </li>
					<li class="men_2_2"> <a href="/twin-drawing.php">Twin Flame Drawing</a> </li>
					<li class="men_2_3"> <a href="/FutureHusband.php">Future Husband/Wife Drawing</a> </li>
					<li class="men_2_4"> <a href="/baby-drawing.php">Future Baby Drawing</a> </li>
                 </ul>

                 <li class="men_3_0"> <a href="/about.php"><i class="fa fa-star fa-lg"></i>About Melissa</a> </li>
                 <li class="men_4_0"> <a href="/blog/"><i class="fa fa-book-reader fa-lg"></i> Blog</a> </li>
                 <li class="men_5_0"> <a href="/contact.php"><i class="fa fa-envelope-open-text fa-lg"></i> Contact</a> </li>

                 <?php
                 if(isset($_SESSION['email'])){
                 ?>
                 <li class="men_6_0"> <a href="/dashboard.php"><i class="fas fa-user-shield"></i> <?php echo $_SESSION['email']; ?></a> </li>
                 <li class="men_7_0"> <a href="/index.php?logout=yes"><i class="fas fa-sign-out-alt"></i> Logout</a> </li>

                 <?php
                 }else{
                 ?>
                  <li class="men_6_0"> <a href="/dashboard.php"><i class="fas fa-user-shield"></i> Dashboard</a> </li>
               <?php } ?>
            </ul>
     </div>
</div>
      <div class="brand">
        <div class="container">
          <div class="sides">
            <div class="left">
              <a href="/index.php" class="logo">
                <img src="/assets/img/good-logo.jpg" alt="Melissa">
              </a>
            </div>
            <div class="right">
              <div class="level_1">
                <div class="top_menu">
                  <div class="bars" style="display:none">
                    <i class="fas fa-bars"></i>
                  </div>
                  <?php
                  if(isset($_SESSION['email'])){
                  ?>
                  <a class="btn" href="/dashboard.php"><i class="fas fa-user-shield"></i> <?php echo $_SESSION['email']; ?></a>
                  <a class="btn" href="/index.php?logout=yes"><i class="fas fa-sign-out-alt"></i> Logout</a>
                  <?php
                  }else{
                  ?>
                  <a class="btn" href="/dashboard.php"><i class="fas fa-user-shield"></i> Dashboard</a>
                <?php } ?>

                </div>
              </div>
              <div class="level_2">

                <nav id="main_menu">
                  <ul>
                    <li class="men_1_0"> <a href="/index.php">Home</a> </li>
                    <li class="men_2_0"> <a href="/services.php">Services</a>
                      <ul class="submenu">
                        <li class="men_2_1"> <a href="/soulmate-drawing.php">Soulmate Drawing</a> </li>
                        <li class="men_2_2"> <a href="/twin-drawing.php">Twin Flame Drawing</a> </li>
                        <li class="men_2_3"> <a href="/FutureHusband.php">Future Husband/Wife Drawing</a> </li>
                        <li class="men_2_4"> <a href="/baby-drawing.php">Future Baby Drawing</a> </li>
                      </ul>
                    </li>
                    <li class="men_3_0"> <a href="/about.php">About Melissa</a> </li>
                    <li class="men_4_0"> <a href="/blog/">Blog</a> </li>
                    <li class="men_5_0"> <a href="/contact.php">Contact</a> </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <main>
