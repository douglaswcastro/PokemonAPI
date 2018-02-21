<!DOCTYPE html>
<html ng-app="meuModulo">
<head>
	<title>Pokemon</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/js/bootstrap.js">
</head>
<body ng-controller="indexController">
	<header>
		<h2 class="jumbotrom">{{titulo}}</h2>
	</header>


	<script src="lib/angular.min.js"></script>
	<script type="text/javascript">
		angular.module("meuModulo",[])
		.controller("indexController", function($scope){
			$scope.titulo = "Sistema Algar"
		});
	</script>
</body>
</html>