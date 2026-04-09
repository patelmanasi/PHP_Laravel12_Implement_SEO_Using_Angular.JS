<!DOCTYPE html>
<html lang="en" ng-app="seoApp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Laravel SEO -->
    <title>{{ $seo->title }}</title>
    <meta name="description" content="{{ $seo->description }}">
    <meta name="keywords" content="{{ $seo->keywords }}">
    <meta property="og:slug" content="{{ $seo->slug }}">
    <meta property="og:title" content="{{ $seo->title }}">
    <meta property="og:description" content="{{ $seo->description }}">
    <meta property="og:keywords" content="{{ $seo->keywords }}">
    <link rel="canonical" href="{{ url()->current() }}">

    <script>
        window.seo = {
            slug: "{{ $seo->slug }}",
            title: "{{ $seo->title }}",
            description: "{{ $seo->description }}",
            keywords: "{{ $seo->keywords }}"
        };
    </script>

    <!-- AngularJS -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular-route.min.js"></script>
    <script src="/angular/app.js"></script>
    <script src="/angular/routes.js"></script>
    <script src="/angular/controllers/HomeController.js"></script>
    <script src="/angular/controllers/SeoController.js"></script>

    <!-- Styles -->
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            background: #fff;
            padding: 40px 60px;
            border-radius: 16px;
            box-shadow: 0 12px 30px rgba(0,0,0,0.2);
            text-align: center;
            max-width: 500px;
            width: 90%;
        }

        .card h1 {
            font-size: 32px;
            margin-bottom: 15px;
            color: #333;
        }

        .card p {
            font-size: 17px;
            margin-bottom: 30px;
            color: #555;
        }

        .card .buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .card a.button {
            padding: 12px 30px;
            background-color: #007BFF;
            color: #fff;
            text-decoration: none;
            border-radius: 10px;
            font-weight: bold;
            transition: 0.3s;
        }

        .card a.button:hover {
            background-color: #0056b3;
        }

        .card a.secondary {
            background-color: #28a745;
        }

        .card a.secondary:hover {
            background-color: #1e7e34;
        }
    </style>
</head>
<body>

    <div class="card">
        <h1>{{ $seo->title }}</h1>
        <p>{{ $seo->description }}</p>

        <div class="buttons">
            <!-- Admin Panel -->
            <a href="{{ route('admin.index') }}" class="button">Open Admin Panel</a>

            <!-- About Us -->
            <a href="{{ route('seo.page', ['slug' => 'about-us']) }}" class="button secondary">Go to About Us</a>
        </div>
    </div>

    <div ng-view></div>

</body>
</html>