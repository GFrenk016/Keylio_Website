<!-- PRIMA FASE - Impostazioni generali -->

Obiettivo: costruire la pagina iniziale e tutte le impostazioni generali.

[X] Impostare database, controller, views e layout, e scegliere colori e fonts;

[X] Logo + nome sito

[X] Barra di ricerca dei giochi

[X] Lista giochi in offerta (es. "Top Risparmi del giorno")

[] Filtri base nella ricerca e come bottoni nella homepage (es. piattaforma: Steam, Xbox, etc.)

[] Showcase: “Compara e risparmia fino al 90%!”

[] Call to action: "Iscriviti per ricevere offerte esclusive"

<!-- SECONDA FASE – Funzionalità dinamiche & gestione dati -->

Obiettivo: rendere dinamici i contenuti della homepage e strutturare il core dati del sito.

[] Collegamento al database e creazione modello Game

[] Seeder con giochi di esempio (nome, prezzo, piattaforma, immagine)

[] Mostrare giochi in offerta da DB in homepage

[] Implementazione barra di ricerca funzionante (query sui titoli)

[] Gestione filtri: piattaforma, fascia prezzo, regione

[] Paginazione risultati (Laravel + Tailwind)

<!-- TERZA FASE – Sorgenti dati & aggiornamento prezzi -->

Obiettivo: popolare automaticamente il sito con dati reali da API o scraping.

[] Ricerca API pubbliche o feed di affiliazione (Eneba, Kinguin, etc.)

[] Integrazione di una prima API per prezzi key

[] Normalizzazione dei dati in un unico formato

[] Compara e ordina i prezzi per gioco

[] Sistema di aggiornamento prezzi automatico (es. cron job)

[] Mostrare il miglior prezzo e lo store relativo

<!-- QUARTA FASE – Utenti & notifiche -->

Obiettivo: creare funzionalità per l’utente registrato.

[] Sistema di registrazione/login (Laravel Breeze o Jetstream)

[] Wishlist giochi salvati

[] Notifiche via email per sconti/target price

[] Dashboard personale utente

[] Cronologia dei prezzi di un gioco (grafico)

<!-- QUINTA FASE – Monetizzazione & SEO -->

Obiettivo: rendere Keylio sostenibile e visibile online.

[] Integrazione link affiliati nei pulsanti "Compra ora"

[] Tracciamento click affiliati

[] Inserimento Google AdSense o banner pubblicitari

[] SEO base: titoli, meta description, URL leggibili

[] Sitemap.xml e robots.txt

<!-- FASE BONUS – Internazionalizzazione & UX avanzata -->

Per espandersi a livello globale e offrire un'esperienza top.

[] Supporto multi-lingua (Laravel localization)

[] Modalità scura/chiara

[] Performance audit (Lighthouse / lazy loading)

[] PWA: installabile come app su mobile

[] Animazioni/interattività (es. Alpine.js o Vue)