//routinng 
myapp.config(["$routeProvider","$locationProvider", function($routeProvider,$locationProvider){
    $locationProvider.hashPrefix('');
    $routeProvider
    .when("/", {
        templateUrl : BASE_URL+"tmp/login.php",
        controller : "loginctrl"
    })
    .when("/dashboard", {
        templateUrl : BASE_URL+"tmp/dashboard.php",
        controller : "dashboardctrl"
    })
    .when("/edit/:id", {
        templateUrl : BASE_URL+"tmp/edit.php",
        controller : "editctrl"
    })
    .when("/register", {
        templateUrl : BASE_URL+"tmp/register.php",
        controller : "regctrl"
    })
    .when("/login", {
        templateUrl : BASE_URL+"tmp/login.php",
        controller : "loginctrl"
    })
    .when("/addcontact",{
        templateUrl : BASE_URL+"tmp/addcontact.php",
        controller : "regctrl"
    })
    
    
}]);