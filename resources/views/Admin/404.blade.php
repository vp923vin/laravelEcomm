<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found - 404 Error</title>
    <link rel="icon" href="{!! asset('assets/Admin/images/ecomm-colored.png') !!}" >
    <link rel="stylesheet" href="{{ asset('assets/Admin/css/404page.css')}}">
    
</head>
<body>
    <div class="container">
        <h1>Oops!</h1>
        <p>404 - Page Not Found</p>
        <p>The page you are looking for could not be found.</p>
        <a href="{{ route('login')}}">Go to homepage</a>
    </div>
</body>
</html>
