<!DOCTYPE html>
<html>
<head>
	<title>CodeIgniter</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-awesome-4.6.1/css/font-awesome.min.css'); ?>">
  
</head>
<body>
 <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Address Book</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo base_url(); ?>"><i class="fa fa-home fa-lg" aria-hidden="true"></i>&nbsp; Home</a></li>
        <li><a href="#"><i class="fa fa-university fa-lg" aria-hidden="true"></i>&nbsp; About Me</a></li>
        <li><a href="#"><i class="fa fa-envelope-o fa-lg" aria-hidden="true"></i>&nbsp; Contact Me</a></li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
        <i class="fa fa-search fa-lg" aria-hidden="true"></i>        
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo base_url('admin/index');?>"><i class="fa fa-user fa-lg" aria-hidden="true"></i>&nbsp; Sign In/Sign Up</a></li>
      </ul>
    </div>
  </div>
</nav>