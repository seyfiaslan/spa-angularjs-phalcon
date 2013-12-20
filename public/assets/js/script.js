/**
 * Created by seyfi on 12/7/13.
 */

// create the module with a name and include route and controllers
var app = angular.module('app', ['ngRoute', 'appControllers']);

// configure routes
app.config(function ($routeProvider) {
    $routeProvider
        .when('/', { // default page
            templateUrl: 'partials/home.html',
            controller: 'mainController'
        })
        .when('/about', { // about page
            templateUrl: 'partials/about.html',
            controller: 'aboutController'
        })
        .when('/contact', { //contact page
            templateUrl: 'partials/contact.html',
            controller: 'contactController'
        });
});
// create controllers
var appControllers = angular.module('appControllers', []);

app.controller('mainController', function ($scope) {
    /* passing variable to view */
    $scope.title = 'This is main page';
});

app.controller('aboutController', function ($scope) {
    /* passing variable to view */
    $scope.title = 'This is about page';
});

app.controller('contactController', ['$scope', function ($scope) {
    /* define function  */
    $scope.send = function () {
        /* json data to be sent */
        var data = {'name': $scope.name, 'email': $scope.email, 'message': $scope.message};
        console.log(data);
    }
}]);
