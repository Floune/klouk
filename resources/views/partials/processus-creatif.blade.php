{{--TODO rendre inutilisable grace à une ui du futur--}}
<div class="window processus-creatif">
    <div class="title-bar">
        <div class="title-bar-text">
            Création de haiku pur
        </div>
        <div class="title-bar-controls">
            <button aria-label="Minimize"></button>
            <button aria-label="Maximize"></button>
            <button aria-label="Close"></button>
        </div>
    </div>
    <div class="window-body">
    <form action="{{route('haiku.post')}}" method="post">
        @csrf
        <div class="un">
            <label for="debut">Première partie</label>
            <input type="text" name="debut" class="input1">
        </div>
        <div class="deux">
            <label for="milieu">Deuxième partie</label>
            <input type="text" name="milieu" class="input2">
        </div>
        <div class="trois">
            <label for="fin">Première partie</label>
            <input type="text" name="fin" class="input3">
        </div>
        <div>
            <input type="submit" value="Envoyer">
        </div>
    </form>
    </div>
</div>
