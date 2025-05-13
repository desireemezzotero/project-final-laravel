# PROGETTO FINALE

Questo progetto è stato sviluppato come parte del percorso finale del corso di Fullstack Web Developer con specializzazione in PHP e Laravel. L’obiettivo del progetto era creare un'applicazione completa che includesse:

-   Un backoffice in Laravel per gestire i dati tramite operazioni CRUD (Create, Read, Update, Delete).
-   Un frontend in React che permettesse ai visitatori non autenticati di visualizzare e interagire con i dati.

## Descrizione:

Il progetto si concentra sulla gestione di film della Disney, con una struttura che permette di aggiungere, modificare, visualizzare e eliminare film.

## Backoffice in Laravel:

Il backoffice è costruito con Laravel e gestisce tutte le operazioni CRUD sui film. L'applicazione utilizza Laravel Breeze per l'autenticazione e consente agli utenti autenticati di:

-   Visualizzare l'elenco dei film.
-   Aggiungere, modificare ed eliminare film.
-   Gestire le categorie di film (es. animazione, avventura, commedia, ecc.), che sono collegate ai film tramite una relazione N-N.
-   Inoltre è stato aggiunto un sistema di filtraggio in base alla categoria del film

## Frontend in React:

Il frontend in React è destinato ai visitatori non autenticati e offre le seguenti funzionalità:

-   Visualizzazione dell'elenco dei film: Un'interfaccia che mostra tutti i film con una breve descrizione.
-   Visualizzazione dei dettagli di un film: Ogni film ha una propria pagina con informazioni dettagliate, incluse le categorie a cui appartiene.
-   Comunicazione con il backend: Il frontend comunica con il backend tramite chiamate AJAX utilizzando API REST per recuperare i dati sui film e le loro categorie.

# 🛠️ Tecnologie utilizzate

-   Backend: Laravel (PHP)
-   Autenticazione con Laravel Breeze
-   Gestione delle entità tramite Eloquent ORM e relazioni nel database
-   API REST per comunicare con il frontend React
-   Frontend: React
-   Componenti React per visualizzare i dati
-   Chiamate API AJAX per comunicare con il backend
-   React Router per navigazione tra le pagine
-   Tailwind CSS per la stilizzazione
-   Database: MySQL
-   Postman per testare le API
-   Laravel Artisan per gestire la migrazione del database
