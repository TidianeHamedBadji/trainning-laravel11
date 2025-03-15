<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    <script src="https//cdn.tailwindcss.com"></script>
</head>
<body>
        <h1> Salam Aduma. Dal len Ak diam si <?php echo $name;?> </h1>
        <h1> Salam Aduna {{ $name }}</h1>
        <h1> 
            @if($name == 'Laravel')
                Salam Aduna
            @else
                Salam deuk bi 
            @endif
        </h1>
</body>
</html>