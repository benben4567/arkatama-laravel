# Project Materi FSWD 2 
Berikut ini adalah project laravel yang digubakan untuk pembelajaran FWSD 2 materi Laravel dengan menggunakan Laravel 9.x
Project ini hanya sebagai dasar, wajib dikembangkan untuk pembuatan portofolio.

## Persiapan
Pastikan sudah menginstal : 
 - Laragon (pastikan apache dan mysql berjalan normal saat di **start**)
 - Composer 
 - Database Management (ex: Adminer, DBeaver, PhpMyAdmin, dsb)
 - IDE (ex: VSCode, Sublime, Atom, PhpStorm, dsb)
 - Console (ex: Cmder, Command Prompt, dsb)

## Mulai

 1. Clone project ini (pastikan sudah berada di folder C:\laragon\www)
	```sh
	git clone https://github.com/benben4567/arkatama-laravel.git
	```
 2. Buat file .env dari .env.example (cukup Copy Paste)
	```sh
	cp .env.example .env
	```
 4. Buka file .env kemudian atur nama database, username dan password nya
 5. Install dependecy laravel melalui console 
	```sh 
	composer install
	```
 6. Generate Key Laravel melalui console
	```sh
	php artisan key:generate
	```
 7. Buat SymLink Storage melalui console
	```sh
	php artisan storage:link
	```
 8. Jalankan migration yang ada Perhatian: Data pada database yang digunakan akan terhapus, lebih baik gunakan database baru
	```sh
	php artisan migrate:fresh
	```
 9. Jalankan Seeder untuk mengisi data awal
	```sh
	php artisan db:seed
	```
 10. Restart laragon dan buka web melalui browser
 11. Selesai

## Akses

Jika menggunakan Seeder yang telah disediakan, bisa menggunakan akses berikut untuk masuk ke halaman dashboard.
|Role|Email|Password| 
|--|--|--|
|Admin|admin@email.test|password|
|Staff|staff@email.test|password|
|User|(lihat di tabel users)|password|
