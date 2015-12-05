<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ Crypt::encrypt(csrf_token()) }}">

    <title>@yield('title')</title>

    @yield('head')
</head>
<body>

@yield('content')

</body>
</html>