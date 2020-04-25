<div class="haiku2000">
    <div class="debut"></div>
    <div class="milieu"></div>
    <div class="fin"></div>

    <form action="{{route('fav')}}" method="post">
        @csrf
        <input name="va" class="va" type="hidden" >
        <button name="type"class="defav" type="submit" value="defav">Ce Haiku pue la merde</button>
    </form>

    <button class="haiku">Nouveau Haiku</button>

    <form action="{{route('fav')}}" method="post">
        @csrf

        <input name="va" class="va" type="hidden" >
        <button name="type" class="fav" type="submit" value="fav">Fichtre, ce haiku vaut le détour</button>
    </form>
</div>
