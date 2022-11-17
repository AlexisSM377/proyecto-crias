<div>
    <h1>Alexis SOVERA </h1>
    {{$usuarios}}
    @forelse ($usuarios as $item)
        <p>{{$item->name}}</p>
    @empty
        
    @endforelse
</div>
