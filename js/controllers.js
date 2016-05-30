
/* AngularJS Controllers */

var PhonesApp = angular.module('PhonesApp', []);
var pdf = [];

PhonesApp.filter('chekmark', function(){
   return function(input) {
       return(input);
   } ;
});

PhonesApp.run(function($rootScope){
   $rootScope.search = '';
});


PhonesApp.controller('PhoneListCtrl', function($scope, $http){
    $http.get('test.php?param=users').then(function(response){
        $scope.PhoneData = response.data.response;
        pdf = response.data.response;
        
        $scope.Save = function(item) {
            
        };
    });         
});

PhonesApp.controller('CatListCtrl', function($scope, $rootScope, $http){
   $http.get('test.php?param=cat').then(function(response){
       $scope.CatData = response.data.response;
       
       $scope.Select = function(item) {
           $rootScope.search = item;
       };
       
   });
});