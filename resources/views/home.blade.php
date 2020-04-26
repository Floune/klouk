<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/98.css"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>PageProut</title>
</head>
<body>


<div class="container">

    @include('partials.haiku2000')
   <div>
        <marquee>fesse</marquee>
    </div>
    @include('partials.processus-creatif')
    <div>
        <marquee>fesse</marquee>
    </div>
    @include('partials.hall-of-fame')
    <div>
        <marquee>fesse</marquee>
    </div>
    @include('partials.hall-of-shame')
    <div>
        <marquee>fesse</marquee>
    </div>-->
</div>

<script src="https://code.jquery.com/jquery-3.5.0.js" integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>
<script src="{{ asset('js/jquery-ui.js')}}"></script>
<script src="{{ asset('js/haiku.js')}}"></script>
<script src="{{ asset('js/drag.js')}}"></script>
<script src="{{ asset('js/ajax.js')}}"></script>
</body>
</html>
