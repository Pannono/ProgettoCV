<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=New+Amsterdam&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Protest+Guerrilla&display=swap" rel="stylesheet">
    
    @vite( ['resources/css/app.css', 'resources/js/app.js'])
    <title>Daily Planet</title>
    <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
    
</head>
<body>
    <x-nav/>
    
    
    <div class=" layout-custom">
        {{ $slot }}
    </div>
    <x-footer/>

    
    
    <script src="https://kit.fontawesome.com/4b9b69cf48.js" crossorigin="anonymous"></script>
</body>
</html>