<div class="window hof">
    <div class="title-bar">
        <div class="title-bar-text">
            Haikus stylés de ouf
        </div>
        <div class="title-bar-controls">
            <button aria-label="Minimize"></button>
            <button aria-label="Maximize"></button>
            <button aria-label="Close"></button>
        </div>
    </div>
    <div class="window-body">
        @foreach ($fame as $tg)
            <p>{{$tg->score}} | {{$tg->text}}</p>
        @endforeach
    </div>

</div>




