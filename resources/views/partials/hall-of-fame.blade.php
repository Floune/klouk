<div class="window hof">
    <div class="title-bar">
        <div class="title-bar-text">
            Haikus stylés de ouf
        </div>
        <div class="title-bar-controls">
            <button class="close-hof" aria-label="Minimize"></button>
            <button aria-label="Maximize"></button>
            <button class="close-hof" aria-label="Close"></button>
        </div>
    </div>
    <div class="window-body">
        @if(count($fame) === 0)
            <img src="{{asset("empty.gif")}}" alt="">
            <p>Pas encore de haiku au hall of fame</p>
        @endif
        @foreach ($fame as $tg)
            <p>{{$tg->score}} | {{$tg->text}}</p>
        @endforeach
    </div>

</div>




