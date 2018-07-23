 myapp.factory("sesionesControl", function(){
     return {
         get : function(key) {
             return sessionStorage.getItem(key)
         },
         set : function(key, val) {
             return sessionStorage.setItem(key, val)
         },
         unset : function(key) {
             return sessionStorage.removeItem(key)
         }
     }
 })
 .factory("authUsers", function ($http, $location, sesionesControl){
     var cacheSession = function(email){
       sesionesControl.set("userLogin", true);
       sesionesControl.set("email", email);
       sesionesControl.set("usertype", 'user');
     }

     var unCacheSession = function(){
         sesionesControl.unset("userLogin");
         sesionesControl.unset("email");
         sesionesControl.unset("usertype");
    }
 
     return {
         login : function(user, callback){
             return $http({
                 url: BASE_URL +'homeController/loginUser',
                 method: "POST",
                 data : user,
                // headers: {'Content-Type': 'application/x-www-form-urlencoded'}
             }).then(function(data){        
                 callback(data);
             })
         },
         logout : function(){
            return $http({
                 url : BASE_URL +"homeController/logoutUser"
             }).then(function(){
                 unCacheSession();
                 //$location.path("/");
                 //$("#menu").css("display","none");
                 //location.reload();
             });
         },
         isLoggedIn : function(){
             return sesionesControl.get("userLogin");
         }
     }
 });

