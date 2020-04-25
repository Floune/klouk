<div class="haiku2000">
    <h1>Générateur de haiku pur</h1>
    <div class="debut"></div>
    <div class="milieu"></div>
    <div class="fin"></div>

    <form action="{{route('fav')}}" method="post">
        @csrf
        <input name="va" class="av" type="hidden" >
        <input name="va-txt" class="av-txt" type="hidden" >
        <button name="type"class="defav" type="submit" value="defav">Ce Haiku pue la merde</button>
    </form>

    <button class="haiku">Nouveau Haiku</button>

    <form action="{{route('fav')}}" method="post">
        @csrf

        <input name="va" class="va" type="hidden" >
        <button name="type" class="fav" type="submit" value="fav">Fichtre, ce haiku vaut le détour</button>
    </form>
</div>
