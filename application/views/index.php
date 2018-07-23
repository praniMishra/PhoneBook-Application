<!DOCTYPE html>
<html lang="en" ng-app="myapp">
  <head>
    <title>ToDoList</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">   
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel ="stylesheet" href="css/style.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script>
        var BASE_URL = "<?php $this->config->item('base_url'); ?>";
    </script>
  </head>
  <body>

  <div id="wrapper" ng-controller="homeCtrl">
            <div>
                    <div class="loginUser">
                        <nav class="navbar navbar-inverse hide" id="menu" ng-controller="menuctrl">
                            <div class="container-fluid">
                                <div class="navbar-header">
                                <a class="" href="#"><img src="logo.png" height="60px" width="200px" alt=""></a>
                                </div>                              
                                <ul class="nav navbar-nav"  style="float:right">
                                <li><a ng-click="logout()" class="pointer"><span class="glyphicon glyphicon-log-out"></span> Logout</a> 
                                </li>
                                </ul>
                                </div>
                            </div> 
                        </nav>
                    </div> 
            </div>
            <div class="">   
                <div ng-view></div>
            </div>       
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <script src="css/ui-bootstrap-tpls.js"></script>
    <script src="app/app.js"></script>
    <script src="app/url.js"></script>
    <script src="app/mycontroller/mycontroller.js"></script>
  </body>
</html>
