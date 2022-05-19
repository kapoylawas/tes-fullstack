## penjelasan dari aplikasi comment
ada include flas-message
dengan arsitektur unit test pada user di model,controller
jadi ketika pengembangan bisa menambai dengan singkat dan lebih rapi

## prinsip dari aplikasi
pengembangan source code dangan rapi dan simple di pahami oleh progammer pengembang

## kekurangan
- fitur dari segi layout cuman css bootstrap biasa dengan tampilan biasa
- performas hampir belum ada dikarenakan untuk sedikit fitur tertentu aja
- kualitas code dikarap dengan cepat kemungkinan agak sedikit kurang rapi dikit

## Instalasi
untuk unit test/Observer Jalankan perintah ```php artisan test```

### Setup Aplikasi
Jalankan perintah 
```bash
composer update
```
atau:
```bash
composer install
```
Copy file .env dari .env.example
```bash
cp .env.example .env
```
Konfigurasi file .env
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=example_app
DB_USERNAME=root
DB_PASSWORD=
```
Opsional
```bash
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:QGRW4K7UVzS2M5HE2ZCLlUuiCtOIzRSfb38iWApkphE=
APP_DEBUG=true
APP_URL=http://example-app.test
```
Generate key
```bash
php artisan key:generate
```
Migrate database
```bash
php artisan migrate
```
Seeder table User, Pengaturan
```bash
php artisan db:seed
```
Menjalankan aplikasi
```bash
php artisan serve
```
