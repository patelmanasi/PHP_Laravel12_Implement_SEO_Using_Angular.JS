app.config(function ($routeProvider, $locationProvider) {
    $locationProvider.html5Mode(true);

    $routeProvider
        .when('/', {
            templateUrl: '/angular/views/home.html',
            controller: 'HomeController'
        })
        .when('/about-us', {
            templateUrl: '/angular/views/about.html',
            controller: 'SeoController'
        })
        .otherwise({
            redirectTo: '/'
        });
});
