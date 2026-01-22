<!DOCTYPE html>
<html lang="en" ng-app="seoApp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ========================= -->
    <!-- Laravel SEO (Visible in view source) -->
    <!-- ========================= -->
    <title>{{ $seo->title }}</title>

    <meta name="description" content="{{ $seo->description }}">
    <meta name="keywords" content="{{ $seo->keywords }}">

    <!-- Open Graph -->
    <meta property="og:slug" content="{{ $seo->slug }}">
    <meta property="og:title" content="{{ $seo->title }}">
    <meta property="og:description" content="{{ $seo->description }}">
    <meta property="og:keywords" content="{{ $seo->keywords }}">

    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Required -->
    <base href="/" />

    <!-- ========================= -->
    <!-- Pass SEO data to Angular -->
    <!-- ========================= -->
    <script>
        window.seo = {
            slug: "{{ $seo->slug }}",
            title: "{{ $seo->title }}",
            description: "{{ $seo->description }}",
            keywords: "{{ $seo->keywords }}"
        };
    </script>

    <!-- ========================= -->
    <!-- AngularJS -->
    <!-- ========================= -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular-route.min.js"></script>

    <!-- Angular App -->
    <script src="/angular/app.js"></script>
    <script src="/angular/routes.js"></script>

    <!-- Angular Controllers -->
    <script src="/angular/controllers/HomeController.js"></script>
    <script src="/angular/controllers/SeoController.js"></script>
</head>
<body>

    <div ng-view></div>

</body>
</html>
