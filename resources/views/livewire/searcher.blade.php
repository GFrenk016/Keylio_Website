<div class="container py-5">
    <input type="text" wire:model="search" class="form-control mb-4" placeholder="Cerca un gioco...">

    @if(strlen($search) >= 1)
        @if($results->count())
            <ul class="list-group">
                @foreach($results as $game)
                    <li class="list-group-item d-flex justify-content-between">
                        <span>{{ $game->title }}</span>
                        <span class="badge bg-success">€{{ $game->price }}</span>
                    </li>
                @endforeach
            </ul>
        @else
            <p class="text-muted">Nessun gioco trovato.</p>
        @endif
    @endif
</div>
