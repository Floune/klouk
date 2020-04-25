<h1>Haikus tout pourris</h1>

@foreach ($shame as $tg)
    <p>{{$tg->score}} | {{$tg->text}}</p>
@endforeach
