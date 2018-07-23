//all the controllers should be mentioned here..............

//=======FOR REGUSTRATION=======
myapp.controller('regctrl',function($scope ,$http ,$window,$location){
   
     $scope.register = function(user){
         console.log(user);
         $http.post(BASE_URL+"homeController/add",user).then(function(result){
            if(result.data.success) {
                console.log(result.data.success);
                location.reload();
            } else {
                console.log(result.data.error);
            }
            $window.location.href = "#/login";
         });
     }
     $scope.addcontact = function(user){
         //console.log(user);
        $http.post(BASE_URL+"homeController/addcontact",user).then(function(result){
            $window.location.href = "#/dashboard";
            if(result.data.success) {
                console.log(result.data.success);
                $window.location.href = "#/dashboard";
                //location.reload();
            } else {
               // console.log(result.data.error);
            }
           //$window.location.href = "#/login";
        });
    }

 })

//==========LIST OF USERS IN DASHBOARD========
myapp.controller('dashboardctrl',['$scope','$http',  '$rootScope', '$timeout',function($scope, $http, $window, $location ) {
    //check if user is logged in or not
    $http.get(BASE_URL+"homeController/is_logged_in").then(function(result){
        if(result.data.success) {
            $scope.isLoggedIn = true;
            $http.get(BASE_URL+"homeController/get_contacts").then(function(result) {
                $scope.usersList = result.data;

                //for setting pagination
                
                //  var totusers = result.length;
                 $scope.currentPage = 1; //current page
                 $scope.entryLimit = 10;
                 $scope.filteredItems = $scope.usersList.length;
                 $scope.totalItems = $scope.usersList.length; 
              });

              $scope.setPage = function(pageNo)
              {
                $scope.currentPage = pageNo;
              };
              
              $scope.filter = function() {
                setTimeout(function() { 
                    $scope.filteredItems = $scope.filtered.length; 
                }, 10);
              };

              $scope.sort_by = function(predicate) {
                $scope.predicate = predicate;
                $scope.reverse = !$scope.reverse;
            };
            
        } else{
            //after clicking logout redirect to login page 
            $scope.isLoggedIn = false;
            window.location.href = "#/login";
            
        }
    }); 
   
    //delete existing user
    $scope.deleteUser = function(id){
      $http.post(BASE_URL+"homeController/delete_user/"+id).then(function(result){
          if(result.data.success) {
              location.reload();
          }
       });
    }
    //logging  out
    $scope.logout = function(){
        $http.post(BASE_URL+"homeController/logoutUser").then(function(result){
            if(result.data.success) {
                window.location.href = "#/login";
            }
           });
    }  
    
         
}]);

 //========EDIT ESXITING USERS===========   
myapp.controller('editctrl',function($scope ,$http ,$window,$location,$routeParams){
        var id = $routeParams.id;
        $http.get(BASE_URL+"homeController/get_user_by_id/"+id).then(function(result) {
            $scope.userDetails = result.data;
        });
        
        $scope.editData = function(user){
            $http.post(BASE_URL+"homeController/editData",user).then(function(result){
                console.log(result.data);
                if(result.data.success) {
                    $window.location.href = "#/dashboard";
                } else {
                   alert(result.data.error);
                }
            });
        }
})
   
    
//======FOR LOGIN PAGE===========
myapp.controller('loginctrl',function($scope ,$http ,$window,$location ){  

    $http.get(BASE_URL +'homeController/is_logged_in').then(function(result){
        if(result.data.success) {
          window.location.href = '#/dashboard';
        }
        else{
        }
    });
    
    $scope.login = function(user){ 
        location.reload();           
        $http.post(BASE_URL+"homeController/loginUser",user).then(function(result){
            if(result.data.success) {
                $window.location.href = "#/dashboard";
            } else {
                var message = '<div class="alert alert-icon alert-danger alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><i class="mdi mdi-block-helper"></i><strong>Oh snap!  </strong> ' + result.data.error + '</div>';
                $('.message').show();
                $('.message').html(message);
                setTimeout(function() {
                    $('.message').hide();
                }, 5000);
            }               
        });
    }
      
 })

//=============INNDEX PAGE - HOMECTRL==================
myapp.controller('homeCtrl',function($timeout,$scope, $http,$window, $location, $routeParams){    
   
    $http.get(BASE_URL+"homeController/is_logged_in").then(function(result){
        if(result.data.success) {
            $scope.isLoggedIn = true;

            var loginUser = $scope.username;
            $(function() {
                $('#menu').removeClass('hide');
            });
      
        } else{
            $scope.isLoggedIn = false;
            $window.location.href = "#/login";
          }
    }); 


  
})



.controller('menuctrl', function($scope, $http, $location,$route, $routeParams){
     //logging  out
     $scope.logout = function(){
        $http.post(BASE_URL+"homeController/logoutUser").then(function(result){
            if(result.data.success) {
                window.location.href = "#/login";
            }
           });
           location.reload();
    }  
    
})
