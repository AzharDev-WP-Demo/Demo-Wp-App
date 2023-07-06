<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package demo-wp
 */

?>
	

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="owl.carousel.min.css">
  <?php wp_head(); ?>
</head>

<body>
  <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

  <header>
    <div class="top-header">
      <ul class="topnavbackground fonttypo1">
        <li><a href="#">The View @ Elegante</a></li>
        <li><a href="#">Eleganté Mall</a></li>
        <li><a href="#">Salon</a></li>
        <li><a href="#">Conference & Events</a></li>
        <li><a href="#">Training</a></li>
        <li><a href="#">Spa</a></li>
        <li><a href="#">Studio</a></li>
        <li><a href="#">Restaurant</a></li>
        <li><a href="#">Arcade</a></li>
      </ul>

      <div class="topnav margintp1">
        <div class="menu-top" id="Topnav">
          <a href="#home" class="mobileResponsive">
            <img class="imgwidthresp80 logo-responsive" src="images/logo/ColouredELogo-01.png" alt="logo">
          </a>
          <div class="search-bar mobileResponsive">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
          </div>
          <a href="#" class="fonttypo1 mobileResponsive"><i class="fa fa-user-o" aria-hidden="true"></i>
            MY ACCOUNT
          </a>
          <div class="cart mobileResponsive">
            <a href="#" class="fonttypo1"><i class="fa fa-shopping-bag" aria-hidden="true"></i>
              BASKET</a>
            <span>12</span>
          </div>
          <!-- <a href="#about">About</a> -->
          <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
          </a>
        </div>
        <div class="hr-custom"></div>

        <div class="margintp1">
          <ul class="menu-top" id="BotNav">
            <li><a href="#">HAIR</a></li>
            <li><a href="#">HAIR CARE</a></li>
            <li><a href="#">SKIN & PERSONAL CARE</a></li>
            <li><a href="#">MAKEUP</a></li>
            <li><a href="#">FRAGRANCE</a></li>
            <li><a href="#">TOOLS & ACCESSORIES</a></li>
            <li><a href="#">FASHION & APPAREL</a></li>
          </ul>
        </div>
      </div>
      <ul class="bottomnavbackground">
        <li class="marginlr5"><a href="#">GET 10% OFF YOUR FIRST ORDER</a></li>
        <li class="marginlr5"><a href="#">GET 10% OFF YOUR FIRST ORDER</a></li>
        <li class="marginlr5"><a href="#">GET 10% OFF YOUR FIRST ORDER</a></li>

      </ul>
    </div>

  </header>
