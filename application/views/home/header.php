<!DOCTYPE html>
<html>
<head>
	<title><?=$title?></title>
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/dist/css/home.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  

</head>
<body>

<div class="header">
	<div class="logo-part">
		<a href="<?=base_url().$this->session->userdata('logo_target')?>" style="text-decoration: none;">
		<img src="<?=base_url()?>assets/logos/<?=$this->session->userdata('logo_image')?>">

		<span><?=$this->session->userdata('logo_label')?></span>
		</a>
	</div>

	<div class="menu-div">
		<a href="<?=base_url()?>home" class="menu-item">Home</a>
		<a href="<?=base_url()?>user/myaccount" class="menu-item">My Account</a>
		<div class="menu-item">
			<p>Hello</p>
			<p><a href="#">Log out</a></p>
		</div>
	</div>

	<div class="header-background"></div>

</div>