var app = angular.module('weatherToFly',[])
.controller('weatherToFlyController', function($scope,$timeout) {
	$scope.searchBar = false;
	$scope.searchContent = false;
	$scope.searchForm = true;
    $scope.search = function($res,flyFrom,flyTime,returningOn,leavingOn) {
    	 $scope.showLoader();
    	 if($res == 'show'){
	    	$timeout( function(){
		    	$scope.customSearch = 'Fly from ='+flyFrom+'in='+flyTime+',Returning on='+returningOn+',Leaving On='+leavingOn;
	    		$scope.searchContent = true;
	    		$scope.searchBar     = true;
	    		$scope.searchForm    = false;
	    		$scope.removeLoader();
	        }, 4000 );
	    }else if($res == 'hide'){
    		$scope.searchBar     = false;
			$scope.searchContent = false;
			$scope.searchForm    = true;
			$scope.removeLoader();
    	}
    }

    $scope.showLoader = function() {
    	$('body').append('<div id="loader"></div>');
    }
    
    $scope.removeLoader = function() {
	    $('#loader').fadeOut(function () {
	        $(this).remove();
	    });
    }
});
