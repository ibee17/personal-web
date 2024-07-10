Cara Menjalankan Aplikasi
1. Buat Lebih dahulu database : "personal-web"
2. Instal Composser terlebih dahulu di folder proyeknya pada terminal : composer install, untuk menambah folder autoload.php di vendor) sampai selesai
3. Setup Environment File:
    Salin file .env.example menjadi .env:
    Generate key aplikasi Laravel: php artisan key:generate

5. Jalankan Migrasi:
   - Pastikan database yang didefinisikan di file .env telah ada dan diakses dengan benar. (Database yang dibuat adalah "personal-web")
   - Jalankan migrasi dengean refresh untuk membuat tabel-tabel yang diperlukan di database:
     php artisan migrate:fresh

6. Jalankan Seeder
   - Jalankan Seeder:
   - Jalankan seeder untuk menambahkan data user "admin" ke database:
     php artisan db:seed --class=UserSeeder

7. Jalankan Aplikasi
   - Jalankan Server Laravel:
   - Setelah migrasi dan seeding selesai, jalankan server Laravel untuk mengakses aplikasi:
     php artisan serve

Buka browser dan akses aplikasi di http://localhost:8000 (atau port lain yang ditampilkan oleh perintah php artisan serve).

Untuk Login ke admin menggunakan email=admin@gmail.com & pass=admin, (sesuai dengan yang telah diisi di UserSeeder)
