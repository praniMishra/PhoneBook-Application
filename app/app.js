var myapp =  angular.module('myapp' ,['ngRoute']);

myapp.filter('startFrom', function() {
    return function(input, start) {
        if(input) {
            start = +start; //parse to int
            return input.slice(start);
        }
        return [];
    }
});

function wsloader(isloading){
	if(isloading){
		$('#wsloader').modal('show');
	}else{       
		$('#wsloader').modal('hide');
	}
}
