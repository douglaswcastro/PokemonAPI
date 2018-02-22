<!DOCTYPE html>
<html ng-app="meuModulo">
	<head>
		<title>Pokemon</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
		<script src="lib/angular.min.js"></script>
		<script src="controllers/app.js"></script>
		
	</head>
	<body>
		<div class="jumbotron" ng-controller="IndexController">
			{{titulo}}
		</div>
	
	</body>
</html>