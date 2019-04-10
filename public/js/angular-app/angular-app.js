var app = angular.module('app', ['ngMessages', 'ngResource', 'ngCookies', 'ContactoController', 'RegistroService'], function ($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});