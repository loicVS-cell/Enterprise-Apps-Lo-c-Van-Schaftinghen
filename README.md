# Enterprise Apps — Anderlechtse NGO

Een Laravel-prototype voor het beheren van evenementen voor een Anderlechtse NGO.

## Functionaliteiten

- **Index** — tabel met de 10 laatste evenementen (titel, organisatie, locatie)
- **Nieuw** — formulier om een evenement aan te maken met validatie
- **Details** — detailscherm per evenement
- **About** — algemene info over de organisatie
- **Contact** — contactformulier dat berichten verstuurt via Mailtrap

## Data-model

### Event
| Veld | Type |
|------|------|
| `title` | string |
| `organization` | string (eigen beheer of partnernaam) |
| `description` | text |
| `tijdstip` | datetime |
| `location_id` | foreign key → locations |
| `email_contactpersoon` | string |

### Location
| Veld | Type |
|------|------|
| `name` | string |
| `address` | string |
| `capacity` | integer |

## Installatie

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
npm run build
```

### Mailtrap

Vul je Mailtrap-gegevens aan in `.env`:

```
MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_username
MAIL_PASSWORD=your_password
```

## Ontwikkeling

```bash
npm run dev
```

## Design

Primair zwart/wit met geel accent. Tailwind CSS v4.
