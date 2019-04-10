/**
*  Module
*
* Description
*/
angular.module('RegistroService', [])

.factory('saveContacto', function($http, $log){
    return {
        post: function(contacto){
            return $http({
                method: 'POST',
                url: '/saveContacto',
                data: contacto,
            })
        }
    }
})


