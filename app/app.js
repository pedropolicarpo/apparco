(function (window, angular, undefined) {
  'use strict';

  var app = angular.module('myApp', ['chart.js']);
  angular.module('myApp').controller('PieCtrl', PieCtrl);
  PieCtrl.$inject = ['$scope'];
  function PieCtrl($scope) {
    $scope.chartLabels = ['Series A', 'Series B', 'Series C'];
	$scope.chartData = [65, 59, 20];
	$scope.onClickSlice = function (points, evt) {
          console.log(points);
        };
  };
  

})(window, window.angular);
