<x-layout>
    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-bold mb-4">Risultati per: "{{ $query }}"</h1>

        @if($results->count())
            <ul class="space-y-2">
                @foreach ($results as $game)
                    <li class="border p-4 rounded shadow">
                        <h2 class="text-xl font-semibold">{{ $game->title }}</h2>
                        <p>Piattaforma: {{ $game->platform }}</p>
                        <p>Prezzo: €{{ $game->price }}</p>
                    </li>
                @endforeach
            </ul>
        @else
            <p class="text-gray-600 fst-italic">Nessun gioco trovato.</p>
        @endif
    </div>
</x-layout>