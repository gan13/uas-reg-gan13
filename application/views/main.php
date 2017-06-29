<!DOCTYPE html>
<html ng-app="FRAMEWORK">
<head>
	<title>Framework</title>
</head>
<body>
<h1> Selamat datang Bossku !!</h1>
[<a href="#/" title="Home">Home</a>]
[<a href="#/about" title="about">About</a>]
[<a href="#/conctact" title="Contact">Contact</a>]
	<div ng-view>
		
	</div>

<script src="<?php echo base_url() ?>bower_components/angular/angular.js"></script>
<script src="<?php echo base_url() ?>bower_components/angular-route/angular-route.js"></script>


<script src="<?php echo base_url() ?>ang/app.js"></script>
<script src="<?php echo base_url() ?>ang/controller/HomeCtrl.js"></script>
</body>
</html>