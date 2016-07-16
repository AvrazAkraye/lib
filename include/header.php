<!--<?php
if(!isset($_SESSION["favcolor"])){
echo "ok";
}else{
  header("LOCATION: login.php");
  exit;
}

?>
-->
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Kode is a Premium Bootstrap Admin Template, It's responsive, clean coded and mobile friendly">
  <meta name="keywords" content="bootstrap, admin, dashboard, flat admin template, responsive," />
  <title>themelock.com - Kode - Premium Bootstrap Admin Template</title>

  <!-- ========== Css Files ========== -->
  <link href="css/root.css" rel="stylesheet">


  </head>
  <body>
  <!-- Start Page Loading -->
  <div class="loading"><img src="img/loading.gif" alt="loading-img"></div>
  <!-- End Page Loading -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 
  <!-- START TOP -->
  <div id="top" class="clearfix">

    <!-- Start App Logo -->
    <div class="applogo">
      <a href="index.html" class="logo">kode</a>
    </div>
    <!-- End App Logo -->

    <!-- Start Sidebar Show Hide Button -->
    <a href="#" class="sidebar-open-button"><i class="fa fa-bars"></i></a>
    <a href="#" class="sidebar-open-button-mobile"><i class="fa fa-bars"></i></a>
    <!-- End Sidebar Show Hide Button -->

    <!-- Start Searchbox -->
    <form class="searchform">
      <input type="text" class="searchbox" id="searchbox" placeholder="Search">
      <span class="searchbutton"><i class="fa fa-search"></i></span>
    </form>
    <!-- End Searchbox -->

    <!-- Start Top Menu -->
    <ul class="topmenu">
      <li><a href="#">Files</a></li>
      <li><a href="http://bit.do/bromq">Authors</a></li>
      <li class="dropdown">
        <a href="#" data-toggle="dropdown" class="dropdown-toggle">My Files <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Videos</a></li>
          <li><a href="#">Pictures</a></li>
          <li><a href="#">Blog Posts</a></li>
        </ul>
      </li>
    </ul>
    <!-- End Top Menu -->

    <!-- Start Sidepanel Show-Hide Button -->
    <a href="#sidepanel" class="sidepanel-open-button"><i class="fa fa-outdent"></i></a>
    <!-- End Sidepanel Show-Hide Button -->

    <!-- Start Top Right -->
    <ul class="top-right">

    <li class="dropdown link">
      <a href="#" data-toggle="dropdown" class="dropdown-toggle hdbutton">Create New <span class="caret"></span></a>
        <ul class="dropdown-menu dropdown-menu-list">
          <li><a href="#"><i class="fa falist fa-paper-plane-o"></i>Product or Item</a></li>
          <li><a href="#"><i class="fa falist fa-font"></i>Blog Post</a></li>
          <li><a href="#"><i class="fa falist fa-file-image-o"></i>Image Gallery</a></li>
          <li><a href="#"><i class="fa falist fa-file-video-o"></i>Video Gallery</a></li>
        </ul>
    </li>

    <li class="link">
      <a href="#" class="notifications">6</a>
    </li>

    <li class="dropdown link">
      <a href="#" data-toggle="dropdown" class="dropdown-toggle profilebox"><img src="img/profileimg.png" alt="img"><b>Jonathan Doe</b><span class="caret"></span></a>
        <ul class="dropdown-menu dropdown-menu-list dropdown-menu-right">
          <li role="presentation" class="dropdown-header">Profile</li>
          <li><a href="#"><i class="fa falist fa-inbox"></i>Inbox<span class="badge label-danger">4</span></a></li>
          <li><a href="#"><i class="fa falist fa-file-o"></i>Files</a></li>
          <li><a href="#"><i class="fa falist fa-wrench"></i>Settings</a></li>
          <li class="divider"></li>
          <li><a href="#"><i class="fa falist fa-lock"></i> Lockscreen</a></li>
          <li><a href="#"><i class="fa falist fa-power-off"></i> Logout</a></li>
        </ul>
    </li>

    </ul>
    <!-- End Top Right -->

  </div>
  <!-- END TOP -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 


<!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START SIDEBAR -->
<div class="sidebar clearfix">

<ul class="sidebar-panel nav">
  <li class="sidetitle">MAIN</li>
  <li><a href="index.php"><span class="icon color5-bg"><i class="fa fa-home"></i></span>الرئيسية<span class="label label-default">2</span></a></li>
  <li><a href="mailbox.php"><span class="icon color6-bg"><i class="fa fa-envelope-o"></i></span>المكتبة<span class="label label-default">19</span></a></li>
  <li><a href="#"><span class="icon color7-bg"><i class="fa fa-flask"></i></span>UI Elements<span class="caret"></span></a>
    <ul>
      <li><a href="icons.php">Icons</a></li>
      <li><a href="tabs.php">Tabs</a></li>
      <li><a href="buttons.php">Buttons</a></li>
      <li><a href="panels.php">Panels</a></li>
      <li><a href="notifications.php">Notifications</a></li>
      <li><a href="modal-boxes.php">Modal Boxes</a></li>
      <li><a href="progress-bars.php">Progress Bars</a></li>
      <li><a href="others.php">Others<span class="label label-danger">NEW</span></a></li>
    </ul>
  </li>
  <li><a href="charts.php"><span class="icon color8-bg"><i class="fa fa-bar-chart"></i></span>الرسومات</a></li>
  <li><a href="#"><span class="icon color9-bg"><i class="fa fa-th"></i></span>الجداول<span class="caret"></span></a>
    <ul>
      <li><a href="basic-table.php">Basic Tables</a></li>
      <li><a href="data-table.php">Data Tables</a></li>
    </ul>
  </li>
  <li><a href="#"><span class="icon color10-bg"><i class="fa fa-check-square-o"></i></span>النماذج<span class="caret"></span></a>
    <ul>
      <li><a href="form-elements.php">Form Elements</a></li>
      <li><a href="layouts.php">Form Layouts</a></li>
      <li><a href="text-editors.php">Text Editors</a></li>
    </ul>
  </li>
  <li><a href="widgets.php"><span class="icon color11-bg"><i class="fa fa-diamond"></i></span>Widgets</a></li>
  <li><a href="calendar.php"><span class="icon color8-bg"><i class="fa fa-calendar-o"></i></span>التقويم<span class="label label-danger">NEW</span></a></li>
  <li><a href="typography.php"><span class="icon color12-bg"><i class="fa fa-font"></i></span>الكتابة</a></li>
  <li><a href="#"><span class="icon color14-bg"><i class="fa fa-paper-plane-o"></i></span>خارجي<span class="caret"></span></a>
    <ul>
      <li><a href="social-profile.php">Social Profile</a></li>
      <li><a href="invoice.php">Invoice<span class="label label-danger">NEW</span></a></li>
      <li><a href="login.php">Login Page</a></li>
      <li><a href="register.php">Register</a></li>
      <li><a href="forgot-password.php">Forgot Password</a></li>
      <li><a href="lockscreen.php">Lockscreen</a></li>
      <li><a href="blank.php">Blank Page</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="404.html">404 Page</a></li>
      <li><a href="500.html">500 Page</a></li>
    </ul>
  </li>
</ul>

<ul class="sidebar-panel nav">
  <li class="sidetitle">MORE</li>
  <li><a href="grid.php"><span class="icon color15-bg"><i class="fa fa-columns"></i></span>تقسيم النظام</a></li>
  <li><a href="maps.php"><span class="icon color7-bg"><i class="fa fa-map-marker"></i></span>الخرائط</a></li>
  <li><a href="customizable.php"><span class="icon color10-bg"><i class="fa fa-lightbulb-o"></i></span>Customizable</a></li>
  <li><a href="helper-classes.php"><span class="icon color8-bg"><i class="fa fa-code"></i></span>الكلاسات المساعدة</a></li>
  <li><a href="changelogs.php"><span class="icon color12-bg"><i class="fa fa-file-text-o"></i></span>تغير الشعار</a></li>
</ul>

<div class="sidebar-plan">
  Pro Plan<a href="#" class="link">Upgrade</a>
  <div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
  </div>
</div>
<span class="space">42 GB / 100 GB</span>
</div>

</div>
<!-- END SIDEBAR -->
<!-- //////////////////////////////////////////////////////////////////////////// --> 