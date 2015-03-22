<head>
  <meta charset="UTF-8">
  <title>@yield('title')</title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link href="vendor/ionicons/css/ionicons.min.css" rel="stylesheet" type="text/css" />
  <link href="{{ elixir('css/app.css') }}" rel="stylesheet" type="text/css" />

  @yield('head')

  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->
</head>