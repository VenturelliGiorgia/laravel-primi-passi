<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primi passi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="mt-4">
            <h1 class="text-center">Hello World!</h1>
        </div>
        <div class="text-center mt-5">
        <span>Questa pagina è stata creata da: <span class="fw-bold">{{ $name . ' ' . $surname }}</span></span>
        <h4>{{ $classe }}</h4>
        </div>
    </div>
</body>

</html>