<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="navbar">
<nav role="navigation">
  <div class="nav-wrapper">
    <a id="logo-container col-s12-m8" href="<?php echo base_url()?>" class="brand-logo white-text">
      SIPB
    </a>
    <ul class="right hide-on-med-and-down">
      <li><a href="#about" class="white-text">Tentang Kami</a></li>
      <li><a href="<?php echo base_url() ?>Login" class="white-text">Login</a></li>
      <li><a href="<?php echo base_url() ?>daftar" class="white-text">Daftar</a></li>
    </ul>
    <ul id="nav-mobile" class="sidenav">
      <h5 class="black-text">SIPB</h5>
      <div class="divide"></div>
      <li><a href="#about" class="black-text">Tentang Kami</a></li>
      <li><a href="<?php echo base_url() ?>login" class="white-text btn">Login</a></li>
      <li><a href="<?php echo base_url() ?>daftar" class="white-text btn">Daftar</a></li>
    </ul>
    <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons white-text">menu</i></a>
  </div>
</nav>
</div>

<style>
  nav{
    position:fixed;
    background: rgba(0, 0, 0, 0.2);
    padding: 0px 20px;
    z-index:1;
  }
</style>

