<x-layout>
    <section class="search-container fontS">
        <div class="p-5 rounded shadow text-center container">
            <h2 class="fw-bold mb-5">Risultati per: {{ $query }}</h2>
            <div class="row">
                    @if (count($results))
                        @foreach ($results as $game)
                        <div class="col-md-3 mt-auto">
                            <div class="card h-100 d-flex flex-column text-center p-3" style="min-height: 430px;">
                                <img src="{{ $game->image }}" class="card-img-top mb-3" alt="{{ $game->title }}">
                            
                                <div class="d-flex flex-column flex-grow-1">
                                    <h5 class="card-title text-truncate fw-bold" title="{{ $game->title }}">
                                        {{ Str::limit($game->title, 35) }}
                                    </h5>
                            
                                    <p class="mb-2">{{ $game->store }}</p>
                            
                                    {{-- Spacer che spinge tutto in basso --}}
                                    <div class="mt-auto">
                                        <div class="d-flex justify-content-center align-items-center gap-2 mb-1">
                                            <span class="text-success fw-bold">€{{ $game->price }}</span>
                                            <span class="text-decoration-line-through text-muted small">€{{ $game->original_price }}</span>
                                        </div>
                            
                                        <p class="text-danger fw-bold mb-2">
                                            -{{ $game->discountPercentage }}%
                                        </p>

                                        <div class="d-flex justify-content-end">
                                            <a href="#" class="btn btn-custom px-3">Trova</a>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                        @endforeach 
            </div>
                    @else
                        <p class="fw-bold">Nessun risultato trovato per "{{ $query }}"</p>
                    @endif
        </div>
    </section>
</x-layout>