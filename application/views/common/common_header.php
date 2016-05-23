<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Archidust</title>
<link href="<?php echo base_url() ?>css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url() ?>css/archi_layout.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url() ?>css/font-awesome.css" rel="stylesheet" type="text/css">
</head>

<body>
<header class="header-section">
<div class="container-fluid">
<div class="row">
  <div class="col-md-3 col-sm-3 col-xs-12"><a href="#" class="navbar-brand"><img width="180px" src="<?php echo base_url() ?>images/logo-final.png" alt="" /></a>
    <div class="navbar-header">
      <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" type="button"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    </div>
  </div>
  <div class="col-md-6 col-sm-6 col-xs-12"><img class="img-responsive" src="<?php echo base_url() ?>images/banner.png" alt=""></div>
  <div class="col-md-3 col-sm-3 col-xs-12 searchContent">
     <form class="navbar-form" role="search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
            <div class="input-group-btn">
              <button class="btn btn-primary" type="submit"><span class="fa fa-search gSearch"></span></button>
            </div>
          </div>
        </form>
  </div>
</div>
<div class="row">
  <nav class="archi-nav" role="navigation">
  <div class="navbar navbar-default navbar-static-top">
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="active"> <a href="<?php echo site_url('index') ?>">Home</a> </li>
        <li> <a href="<?php echo site_url('project') ?>">Project</a> </li>
        <li> <a href="<?php echo site_url('brand') ?>">Brand</a> </li>
        <li ><a href="<?php echo site_url('product') ?>">Product</a> </li>
        <li> <a href="<?php echo site_url('event') ?>">Events</a> </li>
        <li> <a href="#">Advertisement</a> </li>
        <li> <a href="<?php echo site_url('contact') ?>">Contact</a> </li>
      </ul>
      <span class="pull-right rightSubMenu">
       
        <a href="<?php echo site_url('login') ?>" class="btn btn-primary" title="Login">
          Login
        </a>
        <a href="#" class="btn btn-primary" title="Logout">
          Logout
        </a>
      </span>
    </div>
    </nav>
  </div>
</div>
</header>