# SMTP (Gmail) setup for sending reset emails

1. Buat App Password di Google Account (2-step verification harus aktif).
2. Masukkan konfigurasi berikut ke file `.env` project Anda:

```
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-app-password-here
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your-email@gmail.com
MAIL_FROM_NAME="Your App Name"
```

3. Setelah mengubah `.env`, jalankan:

```bash
php artisan config:clear
php artisan cache:clear
```

4. Tes pengiriman email dengan fitur "Forgot Password" di aplikasi.

Catatan: Jangan commit `.env` ke repository.
