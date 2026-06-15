# Enterprise Apps — Loic Van Schaftinghen

**Projectnaam:** Enterprise Apps Loic Van Schaftinghen  
**Student:** Loic Van Schaftinghen  
**Opleidingsinstelling:** —  
**Datum:** Juni 2026

Een Laravel-prototype voor het beheren van evenementen voor een Anderlechtse NGO, met een contactformulier dat via Mailtrap verstuurd wordt.

---

## Inhoudsopgave

1. [Overzicht](#overzicht)
2. [Functionaliteiten](#functionaliteiten)
3. [Data-model](#data-model)
4. [Gebruikte externe libraries en frameworks](#gebruikte-externe-libraries-en-frameworks)
5. [Gebruikte tutorials en documentatie](#gebruikte-tutorials-en-documentatie)
6. [AI-geschiedenis](#ai-geschiedenis)
7. [Handleiding — project uitvoeren](#handleiding--project-uitvoeren)
8. [Design](#design)

---

## Overzicht

Dit project is een webapplicatie gebouwd met Laravel 13. Het stelt een organisatie in staat om evenementen te beheren (CRUD), weer te geven op een index-pagina, en bezoekers de mogelijkheid te geven om via een contactformulier berichten te sturen.

---

## Functionaliteiten

- **Index** — tabel met de 10 laatste evenementen (titel, organisatie, locatie)
- **Nieuw** — formulier om een evenement aan te maken met server-side validatie
- **Details** — detailscherm per evenement met locatiegegevens
- **About** — algemene informatie over de organisatie (adres, contact, omschrijving)
- **Contact** — contactformulier met validatie dat e-mails verstuurt via Mailtrap

---

## Data-model

### Event
| Veld | Type | Verplicht |
|------|------|-----------|
| `title` | string (max 255) | ja |
| `organization` | string (max 255) | ja |
| `description` | text | ja |
| `tijdstip` | datetime | ja |
| `location_id` | foreign key → locations | ja |
| `email_contactpersoon` | string (max 255) | ja, valid email |

### Location
| Veld | Type | Verplicht |
|------|------|-----------|
| `name` | string (max 255) | ja |
| `address` | string (max 255) | ja |
| `capacity` | integer | ja |

Relatie: `Location` hasMany `Event`, `Event` belongsTo `Location`.

---

## Gebruikte externe libraries en frameworks

### Backend (PHP)

| Library | Versie | Doel |
|---------|--------|------|
| `laravel/framework` | 13.15.0 | Webapplicatie framework (routing, ORM, Blade, migraties) |
| `laravel/pail` | 1.2.7 | Logging |
| `laravel/tinker` | 3.0.2 | Interactieve PHP shell |
| `laravel/pint` | 1.29.1 | Code formatting |
| `laravel-lang/common` | 6.8.0 | Nederlandse validatieberichten |
| `guzzlehttp/guzzle` | 7.11.1 | HTTP client (dependency van Laravel) |
| `phpunit/phpunit` | 12.5.29 | Unit testing |

### Frontend (Node.js)

| Library | Versie | Doel |
|---------|--------|------|
| `tailwindcss` | 4.0.7 | CSS utility framework |
| `@tailwindcss/vite` | 4.0.0 | Tailwind CSS Vite plugin |
| `vite` | 8.0.0 | Build tool en dev server |
| `laravel-vite-plugin` | 3.1 | Laravel integratie met Vite |

### Mailtrap

Mailtrap.io werd gebruikt als SMTP-mailserver voor het onderscheppen van uitgaande e-mails tijdens ontwikkeling, zodat er geen echte e-mails verstuurd worden.

---

## Gebruikte tutorials en documentatie

### Officiële documentatie

- **Laravel 13.x documentatie** — https://laravel.com/docs/13.x
  - Routing (`Route::view()`, `Route::resource()`)
  - Blade templating (`@extends`, `@yield`, `@section`)
  - Eloquent ORM (relaties: `belongsTo`, `hasMany`)
  - Migrations en schema builder
  - Validatie (`validate()` met `required`, `email`, `exists` rules)
  - Mail (`Mailable` classes, Markdown mail templates)
  - Localization (`APP_LOCALE`, taalbestanden)

- **Tailwind CSS v4 documentatie** — https://tailwindcss.com/docs
  - Utility classes, `@apply` met `@layer components`
  - Vite integratie

- **Mailtrap documentatie** — https://mailtrap.io/docs
  - SMTP-configuratie voor Laravel

### Overige bronnen

- **Laravel Lang** (laravel-lang.com) — Dutch validation messages package
- **Laracasts** (laracasts.com) — Algemene kennis over Laravel MVC-pattern

---

## AI-geschiedenis

Dit project werd ontwikkeld met behulp van **Claude Code** (big-pickle model), een AI coding assistant van Anthropic, via de **OpenCode** CLI-tool.

### Gebruikte prompts (chronologisch)

1. **Project setup:** "Could you set up a Laravel herd web in here I created the file before using the app"
   → Laravel 13 installatie via Composer, database migratie, seed data.

2. **Basis paginastructuur:** User beschreef Index (tabel met 10 events), New, Details, About, Contact pages met een simpele nav, Tailwind styling, black/white met geel.
   → Event model + migration aangemaakt, controller met CRUD, routes, layout met nav, alle views.

3. **Data-uitbreiding:** "Tijdstip, Titel, Omschrijving, Organisatie (eigen beheer of partnernaam), Mail contactpersoon"
   → `date` → `tijdstip` (datetime), `email_contactpersoon` toegevoegd.

4. **Locatie als apart object:** "Voor locatie hou je hierbinnen een id bij dat verwijst naar een locatieobject met naam, adres en capaciteit personen"
   → Location model + migration, `location_id` foreign key, belongsTo/hasMany relatie, dropdown in form.

5. **New pagina afwerken:** "Binnen deze pagina maak je een formulier waarmee alle gegevens worden ingevuld. Eens ingevuld controleer je of alle velden zijn ingevuld, met een geldig e-mailadres."
   → Validatie: alle velden required, email:filter, error summary box, red borders, Dutch messages.

6. **About pagina:** Adres campus Kaai, contactgegevens, Lorem Ipsum beschrijving.
   → About view met adres, contact, placeholder tekst.

7. **Footer:** "Add some of the about in the footer of the index like professional web"
   → Footer met adres en contact in layout.

8. **Contact pagina:** Contactformulier met Mailtrap.
   → ContactMail mailable, ContactController, mailtrap config, mail view.

9. **Navigatie herwerken:** "Zorg ervoor dat elke pagina hetzelfde menu krijgt. Dit bestaat uit de naam van de NGO linksboven, een link naar new en een link naar about."
   → Nav aangepast: "Anderlechtse NGO" links, "New" + "About" rechts. Footer naar copyright enkel.

10. **Styling fixes:** User probeerde styling, brak de app (500 error door infinite loop in layout + missing CSS classes).
    → Layout hersteld (was overschreven met contact inhoud + `@extends('layouts.app')`), component classes terug in CSS met Tailwind v4 syntax.

11. **README:** "Can you finally make a README pls" + vereisten van opdracht (externe libs, tutorials, AI-geschiedenis, manual).

### Hoe AI werd ingezet

- **Code generatie:** Aanmaken van models, controllers, migrations, views, mails
- **Debugging:** Opsporen van 500 errors (infinite loop in layout, missing CSS classes, Vite manifest)
- **Configuratie:** Mailtrap SMTP, Tailwind v4 setup, Dutch language pack
- **Refactoring:** Aanpassen datamodel op basis van nieuwe vereisten (date → tijdstip, location string → location_id FK)

---

## Handleiding — project uitvoeren

### Systeemvereisten

- PHP 8.2+
- Composer 2
- Node.js 20+
- NPM
- Laravel Herd (optioneel, voor lokale domeinnaam)

### Stappen

#### 1. Repository klonen

```bash
git clone <repo-url>
cd "Enterprise-Apps-Loic-Van-Schaftinghen"
```

#### 2. PHP-dependencies installeren

```bash
composer install
```

#### 3. Node.js-dependencies installeren

```bash
npm install
```

#### 4. Omgevingsbestand aanmaken

```bash
cp .env.example .env
```

#### 5. Applicatiesleutel genereren

```bash
php artisan key:generate
```

#### 6. Database opzetten (SQLite)

Het project gebruikt SQLite. Het databasebestand wordt automatisch aangemaakt bij:

```bash
php artisan migrate --seed
```

Dit voert de migraties uit en vult de database met voorbeelddata (9 locaties, 10 evenementen).

#### 7. Frontend assets bouwen

```bash
npm run build
```

#### 8. Mailtrap configureren (optioneel, voor contactformulier)

Pas in `.env` aan:

```
MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=jouw_mailtrap_username
MAIL_PASSWORD=jouw_mailtrap_password
```

Als je geen Mailtrap gebruikt, kan je de mailer op `log` zetten:

```
MAIL_MAILER=log
```

Dan worden e-mails weggeschreven naar `storage/logs/laravel.log`.

#### 9. Applicatie starten

**Via Laravel Herd:**

Het project is bereikbaar op `https://enterprise-apps-loic-van-schaftinghen.test`.

**Via Artisan serve:**

```bash
php artisan serve
```

Daarna open je http://127.0.0.1:8000 in je browser.

#### 10. Development mode (optioneel)

Start Vite voor live-herladen:

```bash
npm run dev
```

### Beschikbare routes

| Methode | URI | Naam | Functie |
|---------|-----|------|---------|
| GET | `/` | events.index | Index met 10 laatste evenementen |
| GET | `/events/create` | events.create | Formulier nieuw evenement |
| POST | `/events` | events.store | Opslaan nieuw evenement |
| GET | `/events/{event}` | events.show | Detail evenement |
| GET | `/about` | about | Over ons pagina |
| GET | `/contact` | contact | Contactformulier |
| POST | `/contact` | — | Versturen contactbericht |

---

## Design

- **Kleurenpalet:** Primair zwart (`#000` / `#0a0a0a`) en wit (`#fff`) met geel accent (`yellow-400`)
- **CSS Framework:** Tailwind CSS v4
- **Lettertype:** Instrument Sans (via Bunny Fonts)
- **Layout:** Responsive, mobile-first via Tailwind utility classes
