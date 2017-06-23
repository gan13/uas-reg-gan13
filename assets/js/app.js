var FLYERBD = angular.module('FLYERBD',[
    'ngRoute'
    ]);

FLYERBD.config(['$routeProvider', function ($routeProvider){
    $routeProvider
    .when('/', {
        templateUrl: 'Home',
        controller: 'HomeCtrl'
    })
    .when('/about', {
        templateUrl: 'About',
        controller: 'AboutCtrl'
    })
    .when('/contact', {
        templateUrl: 'Contact',
        controller: 'ContactCtrl'
    })
    .when('/tugas', {
        templateUrl: 'Tugas',
        controller: 'TugasCtrl'
    })
}]);
