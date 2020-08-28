<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>API</title>
</head>
<body>
    <ol>
        @foreach ($profiles as $profile)
            
                <li><h3>{{ $profile->title }}</h3></li>
                <p>{{ $profile->body }}</p>
            
        @endforeach 
    <ol>
</body>
</html>