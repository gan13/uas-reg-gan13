var FRAMEWOK = angular.module('FRAMEWOK', [
	'ngRoute'
	]);
FRAMEWOK.config(['routeProvider', function ($routeProvider) {
	$routeProvider
	.when('/', {
		templateUrl: 'home',
		controller: 'HomeCtrl'
	})
}]);