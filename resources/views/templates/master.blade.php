<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{!! asset('assets/css/bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/styles.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/datatables.min.css') !!}">
    <title>SafaMarwa</title>
</head>
<body>
@include('templates.partials.header')

<!-- container -->
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            @yield('content')

        </div>
    </div>
</div><!-- container -->


@include('templates.partials.footer')
<script src="{!! asset('assets/js/jquery-3.2.1.min.js') !!}"></script>
<script src="{!! asset('assets/js/bootstrap.min.js') !!}"></script>
<script src="{!! asset('assets/js/script.js') !!}"></script>
<script src="{!! asset('assets/js/datatables.min.js') !!}"></script>
@stack('scripts')
</body>
</html>
