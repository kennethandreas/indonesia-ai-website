# Indonesia AI Website Development

**Scientific Writing (Penelitian Ilmiah) project**

A web application developed as the case study for a scientific paper on building a company profile
and lead-capture website for an AI education platform, using [indonesia-ai.id](https://indonesia-ai.id)
as the design reference. The study covers requirements analysis, information architecture, UI design
and implementation with Laravel, from public pages to a role-based admin area for managing users and
incoming inquiries.

![PHP](https://img.shields.io/badge/PHP-8.0--8.3-777BB4?logo=php&logoColor=white)
![Laravel](https://img.shields.io/badge/Laravel-9-FF2D20?logo=laravel&logoColor=white)
![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-3-06B6D4?logo=tailwindcss&logoColor=white)
![Alpine.js](https://img.shields.io/badge/Alpine.js-3-8BC0D0?logo=alpinedotjs&logoColor=white)
![SQLite](https://img.shields.io/badge/SQLite-dev-003B57?logo=sqlite&logoColor=white)

---

## Features

**Public website**
- Home page with hero, about, services and call-to-action sections.
- About page (mission, platform overview, machine learning / NLP / computer vision focus areas,
  team and partnerships).
- Services page with course cards, pricing and benefits.
- Contact form with server-side validation, database storage and email notification.
- Responsive, mobile-first layout with custom SVG illustrations.

**Accounts & administration**
- Registration, login, email verification and password reset (Laravel Breeze).
- Role-based access (`admin` / `user`) enforced by a dedicated middleware.
- Admin dashboard with summary statistics.
- User management (create, edit, delete, assign roles).
- Inquiry inbox for contact form submissions with read status.
- User dashboard and profile management (update details, change password, delete account).

## Architecture

```
app/Http/Controllers/   Home, Contact, Admin, User, Profile, Auth/* (Breeze)
app/Http/Middleware/    AdminMiddleware (role check)
app/Models/             User (with role), Contact
database/migrations/    users + role, contacts, password resets, tokens
resources/views/        Public pages, auth, admin, components (Blade)
routes/web.php          Public, user and admin route groups
```

### Data model

| Table | Fields |
|---|---|
| `users` | name, email, password, role, email_verified_at, timestamps |
| `contacts` | name, email, phone (nullable), subject, message, is_read, timestamps |

## Tech Stack

| Layer | Technology |
|---|---|
| Backend | PHP 8.0–8.3, Laravel 9, Laravel Breeze, Sanctum |
| Frontend | Blade, Tailwind CSS 3, Alpine.js, Vite 4 |
| Database | SQLite (development), MySQL/PostgreSQL (production) |
| Testing | PHPUnit |

## Getting Started

**Requirements:** PHP 8.0–8.3 (Laravel 9 does not support PHP 8.4), Composer, Node.js.

```bash
git clone https://github.com/kennethandreas/indonesia-ai-website.git
cd indonesia-ai-website

composer install
npm install
cp .env.example .env
php artisan key:generate

touch database/database.sqlite      # Windows: type nul > database\database.sqlite
php artisan migrate --seed
npm run build
php artisan serve                   # http://127.0.0.1:8000
```

### Demo accounts (seeded, local use only)

| Role | Email | Password |
|---|---|---|
| Admin | `admin@indonesiaai.com` | `admin123` |
| User | `user@indonesiaai.com` | `user123` |

Contact form emails are delivered once `MAIL_*` settings are configured in `.env`.

### Tests

```bash
php artisan test            # 27 tests, in-memory SQLite (configured in phpunit.xml)
```

### Production checklist

1. Set `APP_ENV=production` and `APP_DEBUG=false`.
2. Switch to MySQL or PostgreSQL and configure a mail server.
3. Run `php artisan migrate --force` and `php artisan optimize`.
4. Serve the `public/` directory through Nginx or Apache.

## Author

**Kenneth Andreas** — Software Engineer

GitHub: [@kennethandreas](https://github.com/kennethandreas)

## License

Released under the [MIT License](LICENSE).

---

This is an independent academic project. It is not affiliated with or endorsed by Indonesia AI;
the brand name is referenced for research purposes only.
