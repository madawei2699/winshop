require.config({
  baseUrl: '/',
  paths: {
    'jQuery': '//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min',
    'angular': '//ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular',
    'angular-resource': '//ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular-resource'
  },
  shim: {
    'angular' : {'exports' : 'angular'},
    'angular-resource': { deps:['angular']},
    'angular-route': { deps: ['angular']},
    'jQuery': {'exports' : 'jQuery'}
  }
});

require(['jQuery', 'angular', 'routes/mainRoutes'], function ($, angular, mainRoutes) {
  $(function () { // using jQuery because it will run this even if DOM load already happened
    angular.bootstrap(document, ['mainApp']);
  });
});