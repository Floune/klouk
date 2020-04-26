<div class="window haiku2000">
    <div class="title-bar">
        <div class="title-bar-text">
            Générateur de haiku pur
        </div>
        <div class="title-bar-controls">
            <button aria-label="Minimize"></button>
            <button aria-label="Maximize"></button>
            <button aria-label="Close"></button>
        </div>
    </div>
    <div class="window-body">
        <div class="debut"></div>
        <div class="milieu"></div>
        <div class="fin"></div>
    <div class="boutons">
        <form action="{{route('fav')}}" method="post">
            @csrf
            <input name="va" class="av" type="hidden" >
            <button name="type"class="defav" type="submit" value="defav">Ce Haiku pue la merde</button>
        </form>

        <button class="haiku">Nouveau Haiku</button>

        <form action="{{route('fav')}}" method="post">
            @csrf
            <input name="va" class="va" type="hidden" >
            <button name="type" class="fav" type="submit" value="fav">Fichtre, ce haiku vaut le détour</button>
        </form>
    </div>
    </div>

</div>
