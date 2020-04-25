<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PageProut</title>
</head>
<body>


<div class="container">
    <div>
        <h1>Tinder haiku</h1>
    </div>
    @include('partials.haiku2000')
    @include('partials.processus-creatif')
    @include('partials.hall-of-fame')
</div>

<script src="https://code.jquery.com/jquery-3.5.0.js" integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>
<script src="{{ asset('js/haiku.js')}}"></script>
</body>
</html>
