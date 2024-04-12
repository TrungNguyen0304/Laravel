<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
    <link rel="preconnect" href="{{ url('https://fonts.googleapis.com') }}">
    <link rel="preconnect" href="{{ url('https://fonts.gstatic.com') }}" crossorigin>
    <link href="{{ url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('https://unpkg.com/boxicons@latest/css/boxicons.min.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>@yield('title')</title>
</head>

<body>
@include('inc.header')



@yield('content')



@include('inc.footer')

</body>

</html>