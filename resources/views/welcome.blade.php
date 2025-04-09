{{-- HEADER HOMEPAGE --}}

<x-layout>
    <header class="header-custom">
        <!-- Hero Section -->
        <section class="container py-5">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="display-4 fontS fw-bold">Keylio: dove trovi il tuo gioco al miglior prezzo</h1>
                    <p class="lead my-5 fontS">Confronta le offerte dei migliori store per offrirti le key dei videogiochi al prezzo più basso.</p>
                    <a href="#" class="btn btn-custom fontS">Scopri le offerte</a>
                </div>
                <div class="col-md-6 text-center">
                    <img src="/images/lara-croft.png" alt="Keylio" class="img-fluid" style="max-height: 400px;">
                </div>
            </div>
        </section>

        <!-- Top Risparmi del Giorno -->
        <section class="py-5">
            <div class="container">
                <h2 class="mb-5 text-center fontS fw-bold">Top Risparmi del Giorno</h2>
                <div class="row">
                    @for ($i = 0; $i < 3; $i++)
                        <div class="col-md-4">
                            <div class="card h-100">
                                <img src="https://picsum.photos/300/200?random={{ $i }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h4 class="card-title fontS fw-bold">Gioco In Offerta {{ $i + 1 }}</h5>
                                    <p class="card-text fontS fs-4">Piattaforma</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="fw-bold fs-4 fontS text-success">€19.99</span>
                                        <a href="#" class="btn btn-custom fontS">Compra ora</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </section>

        <!-- In arrivo & Nuove Uscite -->
        <section class="container my-5">
            <div class="row">
                <!-- In arrivo -->
                <div class="col-lg-6 col-md-12 mb-4">
                    <h2 class="fw-bold mb-4 fontS">In arrivo</h2>
                    <div class="row g-4">
                        @for ($i = 0; $i < 5; $i++)
                            <div class="col-12">
                                <div class="card fontS h-100 d-flex flex-row">
                                    <img src="https://picsum.photos/100/200?random={{ $i }}" class="img-fluid rounded-start" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Titolo In Arrivo {{ $i + 1 }}</h5>
                                        <p class="card-text">Piattaforma</p>
                                        <div class="d-flex">
                                            <span class="fw-bold text-success">€59.99</span>
                                            <span class="text-decoration-line-through text-secondary mx-3">€69.99</span>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p class="text-white mt-2">-14%</p>
                                            <a href="#" class="btn btn-custom mt-2">Preordina</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>

                <!-- Nuove Uscite -->
                <div class="col-lg-6 col-md-12 mb-4">
                    <h2 class="fw-bold fontS mb-4">Nuove Uscite</h2>
                    <div class="row g-4">
                        @for ($i = 0; $i < 5; $i++)
                            <div class="col-12">
                                <div class="card fontS h-100 d-flex flex-row">
                                    <img src="https://picsum.photos/100/200?random={{ $i }}" class="img-fluid rounded-start" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Titolo In Arrivo {{ $i + 1 }}</h5>
                                        <p class="card-text">Piattaforma</p>
                                        <div class="d-flex">
                                            <span class="fw-bold text-success">€59.99</span>
                                            <span class="text-decoration-line-through text-secondary mx-3">€69.99</span>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p class="text-white mt-2">-14%</p>
                                            <a href="#" class="btn btn-custom mt-2">Compra ora</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </section>

        <div class="border-bottom opacity-0 h-100">
            <p class="fs-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis harum, sequi enim sapiente vel aliquam minus dignissimos odit ipsam ex architecto aliquid, tempore fugiat eius, quos iusto iste quaerat? A.</p>
        </div>

        <!-- Gift Cards & Abbonamenti -->
        <section class="container my-5">
            <div class="row">
                <!-- Gift Cards -->
                <div class="col-lg-6 col-md-12 mb-4">
                    <h2 class="fw-bold mb-4 fontS">Gift Cards</h2>
                    <div class="row g-4">
                        @for ($i = 0; $i < 5; $i++)
                            <div class="col-12">
                                <div class="card fontS h-100 d-flex flex-row">
                                    <img src="https://picsum.photos/100/200?random={{ $i }}" class="img-fluid rounded-start" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Titolo In Arrivo {{ $i + 1 }}</h5>
                                        <p class="card-text">Piattaforma</p>
                                        <div class="d-flex">
                                            <span class="fw-bold text-success">€59.99</span>
                                            <span class="text-decoration-line-through text-secondary mx-3">€69.99</span>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p class="text-white mt-2">-14%</p>
                                            <a href="#" class="btn btn-custom mt-2">Compra ora</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>

                <!-- Abbonamenti -->
                <div class="col-lg-6 col-md-12 mb-4">
                    <h2 class="fw-bold fontS mb-4">Abbonamenti</h2>
                    <div class="row g-4">
                        @for ($i = 0; $i < 5; $i++)
                            <div class="col-12">
                                <div class="card fontS h-100 d-flex flex-row">
                                    <img src="https://picsum.photos/100/200?random={{ $i }}" class="img-fluid rounded-start" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Titolo In Arrivo {{ $i + 1 }}</h5>
                                        <p class="card-text">Piattaforma</p>
                                        <div class="d-flex">
                                            <span class="fw-bold text-success">€59.99</span>
                                            <span class="text-decoration-line-through text-secondary mx-3">€69.99</span>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p class="text-white mt-2">-14%</p>
                                            <a href="#" class="btn btn-custom mt-2">Compra ora</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </section>

        <div class="border-bottom opacity-0 h-100">
            <p class="fs-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis harum, sequi enim sapiente vel aliquam minus dignissimos odit ipsam ex architecto aliquid, tempore fugiat eius, quos iusto iste quaerat? A.</p>
        </div>

        <!-- Scegli la piattaforma -->
        <section class="container py-5 fontS">
            <h2 class="text-center fw-bold mb-5">Per quale piattaforma stai cercando?</h2>
            <div class="row justify-content-center g-4">
                <div class="col-6 col-md-3">
                    <a href="#" class="text-decoration-none">
                        <div class="card text-center h-100 shadow-sm border-0">
                            <div class="card-body">
                                <i class="bi bi-steam fs-1 mb-2 text-white"></i>
                                <h5 class="card-title">Steam</h5>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-6 col-md-3">
                    <a href="#" class="text-decoration-none">
                        <div class="card text-center h-100 shadow-sm border-0">
                            <div class="card-body">
                                <i class="bi bi-xbox fs-1 mb-2 text-white"></i>
                                <h5 class="card-title">Xbox</h5>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-6 col-md-3">
                    <a href="#" class="text-decoration-none">
                        <div class="card text-center h-100 shadow-sm border-0">
                            <div class="card-body">
                                <i class="bi bi-playstation fs-1 mb-2 text-white"></i>
                                <h5 class="card-title">PlayStation</h5>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-6 col-md-3">
                    <a href="#" class="text-decoration-none">
                        <div class="card text-center h-100 shadow-sm border-0">
                            <div class="card-body">
                                <i class="bi bi-nintendo-switch fs-1 mb-2 text-white"></i>
                                <h5 class="card-title">Nintendo</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <!-- Showcase -->
        <section class="bg-secondary text-white py-5 fontS">
            <div class="container text-center">
                <h2 class="display-6 fw-bold">Compara e risparmia fino al <span class="text-warning">90%</span>!</h2>
                <p class="lead mt-3">Con Keylio trovi il miglior prezzo per ogni gioco, in pochi secondi.</p>
                <a href="{{ route('search') }}" class="btn btn-light btn-lg mt-3">Cerca ora</a>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="container py-5 fontS">
            <div class="p-5 rounded shadow text-center">
                <h2 class="fw-bold mb-3">Iscriviti per ricevere offerte esclusive</h2>
                <p class="mb-4">Rimani aggiornato sulle migliori offerte del giorno direttamente nella tua email.</p>
                <form action="#" method="POST" class="row justify-content-center g-2">
                    @csrf
                    <div class="col-md-6">
                        <input type="email" name="email" class="form-control" placeholder="Inserisci la tua email" required>
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-light">Iscriviti</button>
                    </div>
                </form>
            </div>
        </section>
    </header>
</x-layout>