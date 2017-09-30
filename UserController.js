(function() {
  var app = angular.module("githubViewer");

  var UserController = function($scope, github, $routeParams) {
    
    var onUserComplete = function(data) {
      $scope.user = data;
      github.getRepos($scope.user).then(onRepos, onError);
    };
    
    var onRepos = function(data) {
      $scope.repos = data;
    };
    
    var onError = function(reason) {
      $scope.error = "No data returned";
    };
  
    $scope.username = $routeParams.username;
    $scope.reposSortOrder = '-stargazers_count';
    github.getUser($scope.username).then(onUserComplete, onError);

  }; //closes controller

  app.controller("UserController", ["$scope", "github", "$routeParams", UserController]);

}()); //closes iffe