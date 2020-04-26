<!doctype html>
<html lang="fr">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/98.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/chat.css')}}">
    <link rel="stylesheet" href="{{asset('css/create.css')}}">
    <link rel="stylesheet" href="{{asset('css/haiku2000.css')}}">
    <link rel="stylesheet" href="{{asset('css/hof.css')}}">
    <link rel="stylesheet" href="{{asset('css/hos.css')}}">
    <link rel="stylesheet" href="{{asset('css/icons.css')}}">
    <title>PageProut</title>
</head>
<body>

    @include('partials.popup')

    @include('partials.icons')

    @include('partials.haiku2000')

    @include('partials.processus-creatif')

    @include('partials.hall-of-fame')

    @include('partials.hall-of-shame')

    @include('partials.paint')

    @include('partials.chat')

<script src="https://code.jquery.com/jquery-3.5.0.js" integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>
<script src="{{ asset('js/jquery-ui.js')}}"></script>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script src="{{ asset('js/haiku.js')}}"></script>
<script src="{{ asset('js/drag.js')}}"></script>
<script src="{{ asset('js/ajax.js')}}"></script>
<script src="{{ asset('js/interactions.js')}}"></script>
<script src="{{ asset('js/paint.js')}}"></script>
</body>
</html>
