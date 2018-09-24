var app = angular.module('myApp', []);
app.controller('registerController', function($scope, $http) {

$scope.registerStudents = function () {
alert("Thanks for Registering with Need A Nerd !");
$http.post("phpRest.php",
{
'firstName': $scope.firstName,
'lastName': $scope.lastName,
}
)
.then(function () {

});

};


});