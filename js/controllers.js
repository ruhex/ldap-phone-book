
/* AngularJS Controllers */

var PhonesApp = angular.module('PhonesApp', []);

PhonesApp.controller('PhoneListCtrl', function($scope, $http){
    $http.get('test.php?param=users').then(function(response){
        $scope.PhoneData = response.data.response;
    });         
});

PhonesApp.controller('CatListCtrl', function($scope, $http){
   $http.get('test.php?param=cat').then(function(response){
       $scope.CatData = response.data.response;
       $scope.Alert = function(item) {
           alert();
       };
   });
   
   
   
});