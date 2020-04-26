<div class="window hos">
    <div class="title-bar">
        <div class="title-bar-text">
            Haikus tout pourris
        </div>
        <div class="title-bar-controls">
            <button class="close-hos" aria-label="Minimize"></button>
            <button aria-label="Maximize"></button>
            <button class="close-hos" aria-label="Close"></button>
        </div>
    </div>
    <div class="window-body">
        @foreach ($shame as $tg)
            <p>{{$tg->score}} | {{$tg->text}}</p>
        @endforeach
    </div>

</div>
