/**
*  Module
*
* Description
*/
angular.module('ContactoController', ['app', 'ngCookies'], function ($interpolateProvider) {
	$interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
    
});

app.controller('ContactoController', function ContactoController($scope, $window, $cookies, saveContacto) {

    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.get('utm_term')) {
        $scope.utm_term = urlParams.get('utm_term');
        $cookies.put("__utm_term", $scope.utm_term);
    }else{
        $scope.utm_term = $cookies.get('__utm_term');
    }
    if (urlParams.get("utm_campaign")) {
        $scope.utm_campaign = urlParams.get('utm_campaign');
        $cookies.put("__utm_campaign", $scope.utm_campaign);
    }else{
        $scope.utm_campaign = $cookies.get("__utm_campaign");
    }

    $scope.contacto={};

    $scope.saveDataContacto  = function(contacto, contactoForm){     
        swal({
            imageUrl: '../img/aldea.gif',
            imageWidth: 50,
            imageAlt: 'La Aldea',
            showConfirmButton: false
        })
        $scope.contacto.utm_term = $scope.utm_term;
        $scope.contacto.utm_campaign = $scope.utm_campaign;
        saveContacto.post($scope.contacto).then(successRegister, errorRegister);
    }
    var successRegister = function(res){
         console.log(res.data);
        $scope.contacto = {};
        $scope.contactoForm.$setUntouched();
        $scope.contactoForm.$setPristine();
        $window.location.href = '/gracias';
    }
    var errorRegister = function(errors){
        console.log(errors);
        swal({
            text:'Algo salió mal en el envío de tu información de contacto.',
            imageUrl: '../img/logo-aldea.svg',
            imageWidth: 210,
            imageAlt: 'La Aldea',
            confirmButtonText:'Cerrar',
            confirmButtonColor: '#7c7756',
            closeOnConfirm:false
        })
		// $window.location.href = '/gracias';
    }

});
