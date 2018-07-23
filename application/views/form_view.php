<!DOCTYPE html>
<html lang="en" ng-app="myapp">
  <head>
  <script>
    var BASE_URL = "<?php $this->config->item('base_url'); ?>";
  </script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
      $( function() {
        $( "#datepicker" ).datepicker({
          'changeMonth' : true,
          'changeYear' : true
        });
      } );
    </script>

    <script>
    
    var app =  angular.module('myapp' ,[]);

    app.controller('myctrl',['$scope','$http', function($scope,$http, $location) {
    
      $http.get(BASE_URL+"form_control/get_users").then(function(result) {
        $scope.usersList = result.data;
        console.log(result.data);
      });

      $scope.register= function(user) {
          $http.post(BASE_URL+"form_control/add",user).then(function(result) {
              if(result.data.success) {
                  console.log(result.data.success);
                  location.reload();
              } else {
                  console.log(result.data.error);
              }
          });
      };
}]);


$(function() {
$( ".datepicker" ).datepicker();
});
    </script>
    <style> 
    body
      {
        height:100%;
        width: 100%;
      }
    
        .main{
         
          padding:5%;
          width:35%;
          float:left;
          margin:1%;
          background-color: #DCDCDC;
        }
        input{
          border:0;
          padding:1%;
          width: 250px;
          margin:1%;
          border-radius:5px;
        }
        button{
          border:0;
          padding:2%;
          background-color:#141414;
          color:white;
          border-radius:5px;
          margin-left:25%;
        }
        table, td ,th {
          border: 1px solid grey;
          border-collapse: collapse;
          padding: 5px;
}
    </style>
  
  </head>
  <body ng-controller="myctrl">
   
    <div class="main">
      <h1>Register</h1>
      <form name="myForm" method="post">
        <input type="text" placeholder="Enter your First Name" ng-model="user.firstname"><br>
        <input type="text" placeholder="Enter your Last Name" ng-model="user.lastname"><br>
        <input type="email" placeholder="Enter your email" ng-model="user.email"><br>
        <input type="number" placeholder="Enter your Phone Number" ng-model="user.phone"><br>
        
        <input id="datepicker" name="date" ng-model="user.dob" placeholder="MM/DD/YYY" type="text"><br>
               
      
        <input type="text" placeholder="Enter your Address" ng-model="user.address"><br>
        <button type="submit" class="btn btn-primary" ng-click="register(user);">Register</button>  
      </form>
    </div>
  <div class="main">
    <table>
        <tr>  
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Phone Number</th>
          <th>Date of Birth</th>
          <th>Address</th>
        </tr>
        <tr ng-repeat="data in usersList">
          <td>{{ data.first_name }}</td>
          <td>{{ data.last_name }}</td>
          <td>{{ data.email }}</td>
          <td>{{data.phone}}</td>
          <td>{{data.dob}}</td>
          <td>{{data.address}}</td>
        </tr>
    </table>
  </div>

 

  
  </body>
</html>
