"use strict"

let myApp = angular.module('twitter',['ui.router']);
myApp.config(function($stateProvider){
  let loginState = {
    name: 'login',
    url: '/login',
    templateUrl: 'partials/login.html'
  };
  let wallState = {
    name: 'wall',
    url: '/wall',
    templateUrl: 'partials/feed.html'
  };
  $stateProvider.state(loginState);
  $stateProvider.state(wallState);
});
myApp.controller("mytweets",['$scope', '$http', function($scope, $http){
  $scope.tweets = [];
  $http.get('data/feed.json').then(function(success){
    console.log(success);
    for(let i=0;i<success.data.length;i++){
      $scope.tweets.push(success.data[i].tweet);
    }
  }, function(error){
    console.log('Non.');
  });
}]);