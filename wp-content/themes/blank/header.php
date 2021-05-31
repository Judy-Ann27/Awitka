<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress/index.php.org/themes/basics/template-files/#template-partials
 *
 * @package blank
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    .bs-example{
        margin: 0px;
        margin-top: -35px;
        padding-top: 25px; 
        position: sticky;
        top: 0;
        border-radius: 10px;
        z-index: 100;
    }
  </style>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="bs-example">
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="http://localhost/wordpress/index.php/home/" class="nav-item nav-link">HOME</a>
                <a href="http://localhost/wordpress/index.php/about-us/" class="nav-item nav-link">ABOUT US</a>
                <a href="http://localhost/wordpress/index.php/contact-us/" class="nav-item nav-link">CONTACT US</a>
                 <a href="http://localhost/wordpress/index.php/shop/" class="nav-item nav-link">PRODUCT</a>
                <a href="http://localhost/wordpress/index.php/cart/" class="nav-item nav-link">CART</a>
                 <a href="http://localhost/wordpress/index.php/checkout/" class="nav-item nav-link">CHECK OUT</a>
                  <a href="http://localhost/wordpress/index.php/my-account/" class="nav-item nav-link">My Account</a>
            </div>
            <div class="navbar-nav ml-auto">
                <a href="#" class="nav-item nav-link"></a>
            </div>
        </div>
    </nav>
</div>
        <a href="http://localhost/hatdoug/home/" style="float: left; text-align: left; font-size: 60px; color: black; font-family: Engrave MT;"></a>
