<h1>Haikus tout pourris</h1>

@foreach($defavs as $defav)
    <span>{{$defav->text}}</span>
    @if($defav->user_id === auth()->user()->id)
        <form action="{{route('defav.destroy')}}" method="post">
            @csrf
            <input name="id" type="hidden" value="{{$defav->id}}">
            <button class="remove">supprimer</button>  ¯\_(ツ)_/¯
        </form>
    @endif
@endforeach
