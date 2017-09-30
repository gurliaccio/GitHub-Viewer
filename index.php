<!DOCTYPE html>
<html ng-app="githubViewer">

  <head>
    <script data-require="angular.js@1.2.0" data-semver="1.2.0" src="https://code.angularjs.org/1.2.0/angular.js"></script>
    <script data-require="angular-route@1.2.0" data-semver="1.2.0" src="https://code.angularjs.org/1.2.0/angular-route.js"></script>
    <link rel="stylesheet" href="style.css" />
    <script src="app.js"></script>
    <script src="MainController.js"></script>
    <script src="UserController.js"></script>
    <script src="RepoController.js"></script>
    <script src="GithubService.js"></script>
  </head>

  <body>
    <h1>GitHub Viewer</h1>
    <div ng-view></div>
  </body>

</html>
