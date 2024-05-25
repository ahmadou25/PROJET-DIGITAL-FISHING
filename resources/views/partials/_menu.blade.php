<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .flex-center.position-ref {
        background-color: #5bc0de; /* Nouvelle couleur de fond */
        color: blue; /* Couleur du texte */
        padding-bottom : 50px; /* Espacement interne */
        }
    </style>
</head>
<body>
<div class="flex-center position-ref ">
    <div class="top-left links">
        <a href="http://127.0.0.1:8000/contrats">Contrats</a>
        <a href="http://127.0.0.1:8000/magazines">Magazines</a>
        <a href="http://127.0.0.1:8000/pigistes">Pigistes</a>
    </div>
    <div class="top-right links">
    <!-- <a href="http://digitalfishing.test/">Home</a> -->
    <a href="http://127.0.0.1:8000">Home</a>
    </div>
</div>
    <br \><br \>
    <div class="container mtop">
        @yield('content')
    </div>

</body>
</html>