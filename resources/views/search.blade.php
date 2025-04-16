<x-layout>
    <section class="search-container fontS">
        <div class="p-5 rounded shadow text-center container">
            <h2 class="fw-bold mb-5">Risultati per: {{ $query }}</h2>
            <div class="row">
                <div class="col-md-2 border p-4 me-3 h-100">
                    <h3 class="fw-bold mb-5 text-start">Filtri</h3>
                    <form action="{{ route('search') }}" method="GET">
                        <input class="form-control fontS rounded border mb-5" type="text" placeholder="Cerca" value="{{ $query }}" aria-label="Search" name="q">
                        <select name="store" class="form-select form-select-custom mb-2">
                            <option value="">Tutte le piattaforme</option>
                            @foreach ($store as $item)
                                <option value="{{ $item }}" {{ $selectedStore == $item ? 'selected' : '' }}>
                                    {{ $item }}
                                </option>
                            @endforeach
                        </select>
                        <select name="key_store" class="form-select form-select-custom mb-2">
                            <option value="">Tutti gli store</option>
                            @foreach ($key_store as $item)
                                <option value="{{ $item }}" {{ $selectedKey_store == $item ? 'selected' : '' }}>
                                    {{ $item }}
                                </option>
                            @endforeach
                        </select>
                        <select name="genre" class="form-select form-select-custom mb-4">
                            <option value="">Tutti gli generi</option>
                            @foreach ($genre as $item)
                                <option value="{{ $item }}" {{ $selectedGenre == $item ? 'selected' : '' }}>
                                    {{ $item }}
                                </option>
                            @endforeach
                        </select>
                        <div class="mb-3">
                            <label for="priceRange" class="form-label">Prezzo massimo: €<span id="priceValue">{{ request('max_price', 100) }}</span></label>
                            <input type="range" class="form-range" min="1" max="100" step="1"
                            id="priceRange" name="max_price" value="{{ request('max_price', 100) }}">
                        </div>
                        <button type="submit" class="btn btn-light mt-3">Cerca</button>
                    </form>
                </div>
                <div class="col-8 mt-3">
                    <div class="row">
                        @if (count($results))
                        @foreach ($results as $game)
                            <div class="col-4 mb-4">
                                <div class="card text-center p-3" style="min-height: 430px;">
                                    <img src="{{ $game->image }}" class="card-img-top mb-3" alt="{{ $game->title }}">
                                    <div class="d-flex flex-column flex-grow-1">
                                        <h5 class="card-title fw-bold" title="{{ $game->title }}">
                                            {{ $game->title
                                                ? Str::limit($game->title, 26)
                                                : 'Titolo non disponibile' }}
                                        </h5>
                                        <p class="mb-2">{{ $game->store }}</p>
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
                        @else
                            <p class="fw-bold">Nessun risultato trovato per "{{ $query }}"</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>