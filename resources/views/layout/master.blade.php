<!DOCTYPE html>
<html>
@include('layout.partials.head')
<body class="skin-yellow">

  <div class="wrapper">
    @include('layout.partials.header')
    @include('layout.partials.sidebar')

    <div class="content-wrapper">
      <section class="content-header">
        <h1>
          @yield('title')
          <small>@yield('description')</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
          <li class="active">Here</li>
        </ol>
      </section>
      <section class="content">
        @yield('content')
      </section>
    </div>

    @include('layout.partials.footer')

  </div>

<script src="js/vendor/jQuery/jQuery-2.1.3.min.js"></script>
<script src="js/vendor/bootstrap/bootstrap.min.js" type="text/javascript"></script>
<script src="js/app.js" type="text/javascript"></script>

</body>
</html>