<h1>Hall of fame</h1>

@foreach($favs as $fav)
    <span>{{$fav->text}}</span>
    @if($fav->user_id === auth()->user()->id)
        <form action="{{route('fav.destroy')}}" method="post">
            @csrf
            <input name="id" type="hidden" value="{{$fav->id}}">
            <button class="remove">supprimer</button>  ¯\_(ツ)_/¯
        </form>
    @endif
@endforeach
