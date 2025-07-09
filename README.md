<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

<p align="center">
  <a href="https://github.com/laravel/framework/actions">
    <img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/l/laravel/framework" alt="License">
  </a>
</p>

---

# 🎫 Event Management System (Laravel)

A Laravel-based event management system designed for smooth deployment on Railway. Includes user management, event creation, and a `/health` route for Railway's healthcheck.

---

## 🚀 Getting Started

### 1. Clone the Repository
```bash
git clone https://github.com/Ilyas02828/Eventsystem.git
cd eventsystem
2. Install Dependencies
bash
Copy
Edit
composer install
cp .env.example .env
php artisan key:generate
3. Setup SQLite (For Railway)
bash
Copy
Edit
touch database/database.sqlite
In your .env, update:

ini
Copy
Edit
DB_CONNECTION=sqlite
DB_DATABASE=/absolute/path/to/database/database.sqlite
4. Run Migrations & Seed
bash
Copy
Edit
php artisan migrate --seed
5. Start Development Server
bash
Copy
Edit
php artisan serve
📦 Railway Deployment Guide
✅ Healthcheck Fix Summary
/health route added

railway.json updated

Healthcheck timeout increased

start.sh for permission + cache

Required Railway Environment Variables
env
Copy
Edit
APP_ENV=production
APP_DEBUG=false
APP_KEY=base64:xxxxxxxxxxxxxxxxx
DB_CONNECTION=sqlite
DB_DATABASE=/app/database/database.sqlite
Deployment Steps
bash
Copy
Edit
git add .
git commit -m "Ready for Railway"
git push origin main
Ensure:

Visit /health returns: {"status":"ok","message":"Event Management System is running"}

App loads at: https://your-app-name.railway.app

🛠️ Git Troubleshooting
Problem:
bash
Copy
Edit
error: failed to push some refs to 'https://github.com/...'
Fix:
bash
Copy
Edit
git pull origin main --rebase
git push origin main
Or force push (only if safe to override):

bash
Copy
Edit
git push origin main --force
