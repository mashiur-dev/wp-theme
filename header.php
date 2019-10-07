<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Travelly
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
  </head>
  <body>
    <header id="header-area">
      <div class="container pt-5 pb-5">
        <div class="row">
          <div class="col">
            <div class="logo">
              <i class="fab fa-airbnb"></i> <?php bloginfo('name'); ?>
            </div>
          </div>
          <div class="col">
            <div class="top-menu-icon text-right">
              <span class="one"></span>
              <span class="two"></span>
            </div>

            <div class="menu">
               <ul>
                  <li><a href="http://google.com">Home</a></li>
                  <li><a href="">Blog</a></li>
                  <li><a href="">About</a></li>
                  <li><a href="">Press</a></li>
                  <li><a href="">Contact</a></li>
               </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col text-center search-section">
            <h1>Where will you go next?</h1>
            <form>
              <input type="text" name="place" placeholder="Start typing...">
              <button>Go</button>
            </form>
          </div>
        </div>
      </div>

    </header><!-- #header-area -->