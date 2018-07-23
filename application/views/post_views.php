<!DOCTYPE html>
<html lang="en">
  <head>
  <script>
    var BASE_URL = "<?php $this->config->item('base_url'); ?>";
  </script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script>
    var app =  angular.module('myapp' ,[]);

    app.controller('myctrl',['$scope','$http', function($scope,$http) {

    $scope.signUp = function(user) {
        $http.post(BASE_URL+"add",user).then(function(result) {
            if(result.data.success) {
                console.log(result.data.success);
            } else {
                console.log(result.data.error);
            }
        });
    };
}]);
    </script>
  
  </head>
  <body ng-app="myapp">
    <div ng-controller="myctrl">
      <form name="myForm" method="post">
        <input type="text" placeholder="title" ng-model="user.title">
        <input type="text" placeholder="content" ng-model="user.content">
        <button type="submit" class="btn btn-primary" ng-click="signUp(user);">SignUp</button>
        </div>
      </form>
      
  </body>
</html>