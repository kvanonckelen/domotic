# Volt-IT Website

Website and lead-generation platform for Volt-IT, focused on smart building automation and energy management for residential projects.

---

## 🚀 Features

- Modern responsive website
- SEO-optimized pages
- Interactive Energy Check tool
- Contact & lead capture forms
- Email integration (SMTP / Gmail)
- Clean Blade-based structure
- Conversion-focused UX

---

## 🧱 Tech Stack

- Backend: Laravel 12
- Frontend: Blade + custom CSS
- Mail: SMTP (Gmail or custom)
- Hosting: Google Cloud Run (Docker-ready)
- Analytics: Google Analytics / Tag Manager

---

## 📂 Project Structure

app/  
├── Http/Controllers  
resources/  
├── views/  
│ ├── layouts/  
│ ├── pages/  
│ └── components/  
routes/  
└── web.php  
public/

---

## ⚙️ Installation

### 1. Clone repository

```bash
git clone https://github.com/kvanonckelen/domotic.git
cd volt-it
```

### 2. Install dependencies

```bash
composer install
```

### 3. Copy environment file

```bash
cp .env.example .env
```

### 4. Generate app key

```bash
php artisan key:generate
```

---

## 🔐 Environment Configuration

### App

```
APP_NAME="Volt-IT"
APP_URL=https://your-domain.be
```

### Mail (Gmail example)

```
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your@email.com
MAIL_PASSWORD=your_app_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your@email.com
MAIL_FROM_NAME="Volt-IT"
```

---

## 🧪 Run locally

```bash
php artisan serve
```

Visit: http://127.0.0.1:8000

---

## 🐳 Deployment (Google Cloud Run)

Typical flow:

1. Create Dockerfile
2. Build container
3. Push to Google Container Registry
4. Deploy to Cloud Run

Make sure:

- APP_ENV=production
- APP_DEBUG=false
- No SQLite unless configured correctly

---

## 📊 SEO & Analytics

- Google Search Console configured
- Sitemap included
- Google Tag Manager integrated

---

## ⚡ Energy Check Tool

Custom interactive tool that:

- Collects user input
- Calculates optimization potential
- Displays visual results
- Sends report via email
- Generates qualified leads

---

## 📬 Contact Flow

- Form submission → Controller
- Validation
- Email sent to Volt-IT
- reply_to set to customer email

---

## 🎯 Business Purpose

This website is designed to:

- Generate leads
- Educate potential clients
- Position Volt-IT as a specialist
- Support partnerships with installers & architects

---

## 🔧 Future Improvements

- CRM / lead tracking
- Case studies (portfolio expansion)
- Advanced energy simulations
- Partner portal
- AI-assisted recommendations

---

## 👤 Author

Kevin Van Onckelen  
Volt-IT  
📍 Heist-op-den-Berg  
📧 kevin@volt-it.be

---

## 📄 License

Private project – not for redistribution.
