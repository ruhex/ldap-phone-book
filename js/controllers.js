
/* AngularJS Controllers */

var PhonesApp = angular.module('PhonesApp', []);

PhonesApp.controller('PhoneListCtrl', function($scope, $http){
    $http.get('test.php').then(function(response){
                  $scope.PhoneData = response.data.response;
               });
});