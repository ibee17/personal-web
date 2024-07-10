Cara Menjalankan Aplikasi
1. Buat Lebih dahulu database : "personal-web"

2. Jalankan Migrasi:
   - Pastikan database yang didefinisikan di file .env telah ada dan diakses dengan benar. (Database yang dibuat adalah "personal-web")
   - Jalankan migrasi untuk membuat tabel-tabel yang diperlukan di database:
     php artisan migrate

3. Jalankan Seeder
   - Jalankan Seeder:
   - Jalankan seeder untuk menambahkan data user "admin" ke database:
     php artisan db:seed --class=UserSeeder

4. Jalankan Aplikasi
   - Jalankan Server Laravel:
   - Setelah migrasi dan seeding selesai, jalankan server Laravel untuk mengakses aplikasi:
     php artisan serve

Buka browser dan akses aplikasi di http://localhost:8000 (atau port lain yang ditampilkan oleh perintah php artisan serve).

Untuk Login ke admin menggunakan email=admin@gmail.com & pass=admin, (sesuai dengan yang telah diisi di UserSeeder)
