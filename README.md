# 🏠 Dwello — Find Your Dream Home
URL - https://dream-home-website-production.up.railway.app/

> A modern house selling website built with Laravel, Blade, and Tailwind CSS.


## 📋 About

**Dwello** is a full-stack house selling web application that helps users discover, explore, and purchase their dream homes. The platform features a beautiful landing page, user authentication, role-based dashboards for both admins and users, and a curated property listing experience.

---

## ✨ Features

- 🏡 Beautiful landing page with animated sections
- 🔐 User authentication (Register / Login / Logout)
- 👤 Role-based access — Admin & User dashboards
- 🏘️ Property listings with location, price, and room details
- 🔍 Property search by location, type, and price range
- ⭐ Testimonials section
- 📱 Fully responsive design
- 🚀 Deployed on Railway with MySQL database

---

## 🛠️ Tech Stack

| Layer | Technology |
|---|---|
| Backend | Laravel (PHP) |
| Frontend | Blade Templates |
| Styling | Tailwind CSS (CDN) |
| Database | MySQL |
| Auth | Laravel Breeze / Auth |
| Deployment | Railway |
| Version Control | GitHub |

---

## 🚀 Getting Started (Local Setup)

### Prerequisites
- PHP >= 8.2
- Composer
- MySQL
- Git

### Installation

**1. Clone the repository**
```bash
git clone https://github.com/YOUR_USERNAME/dwello.git
cd dwello
```

**2. Install PHP dependencies**
```bash
composer install
```

**3. Copy environment file**
```bash
cp .env.example .env
```

**4. Generate application key**
```bash
php artisan key:generate
```

**5. Configure your database in `.env`**
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=dwello
DB_USERNAME=root
DB_PASSWORD=your_password
```

**6. Run migrations**
```bash
php artisan migrate
```

**7. Start the development server**
```bash
php artisan serve
```

Visit `http://localhost:8000` in your browser. 🎉

---

## 🌐 Deployment (Railway)

This project is deployed on [Railway](https://railway.app) with a managed MySQL database.

### Environment Variables Required

```env
APP_NAME=Dwello
APP_ENV=production
APP_DEBUG=false
APP_URL=https://your-railway-url.up.railway.app
APP_KEY=your_app_key

DB_CONNECTION=mysql
DB_HOST=${{MySQL.MYSQLHOST}}
DB_PORT=${{MySQL.MYSQLPORT}}
DB_DATABASE=${{MySQL.MYSQLDATABASE}}
DB_USERNAME=${{MySQL.MYSQLUSER}}
DB_PASSWORD=${{MySQL.MYSQLPASSWORD}}
```

### Deploy Steps
1. Push code to GitHub
2. Connect GitHub repo to Railway
3. Add MySQL plugin in Railway
4. Set environment variables
5. Railway auto-deploys on every push ✅

---

## 📁 Project Structure

```
dwello/
├── app/
│   ├── Http/Controllers/
│   └── Models/
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php
│       ├── landing.blade.php
│       ├── admin/
│       │   └── dashboard.blade.php
│       └── user/
│           └── dashboard.blade.php
├── routes/
│   └── web.php
├── database/
│   └── migrations/
├── public/
│   └── images/
├── nixpacks.toml
└── README.md
```

---

## 👤 User Roles

| Role | Access |
|---|---|
| **Guest** | Landing page, Register, Login |
| **User** | User dashboard, property browsing |
| **Admin** | Admin dashboard, full management |

---

## 🗄️ Database

The project uses MySQL with the following main tables:

- `users` — stores user accounts with role column (admin/user)
- `cache` — Laravel cache table
- `jobs` — Laravel queue jobs
- `personal_access_tokens` — API token management
- `sessions` — user session storage

---

## 📄 License

This project is open source and available under the [MIT License](LICENSE).

---

## 👨‍💻 Author

Built with by **Miyuranga Ketipearachchi**

> "Bringing you closer to your dream home, one click at a time."
