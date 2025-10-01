# README BOOSTRAP
Kenapa pakai konfigurasi col tertentu di tiap breakpoint? Karena ukuran layar beda-beda:
1. Di HP layarnya kecil → 1 kolom penuh biar mudah dibaca.
2. Di tablet lebih lebar → bisa dibagi jadi 2–3 kolom supaya pas.
3. Di laptop/PC lebih besar lagi → bisa 3–4 kolom biar banyak konten terlihat. Jadi intinya, biar tampilan tetap rapi dan enak dilihat di semua ukuran layar.
4. Bagaimana kamu memastikan tombol Follow/Edit Profile tetap mudah dijangkau di mobile? Jelaskan pendekatannya?
5. Letakkan tombol di tempat yang mudah dilihat, misalnya di bawah nama atau foto profil.
6. Ukurannya jangan terlalu kecil, biar gampang ditekan pakai jari.
7. Kasih jarak antar elemen supaya nggak ketekan yang lain.Kalau di HP, lebih bagus tombolnya dibuat lebar (full width) biar lebih nyaman. Pendekatannya: utamakan desain 8. untuk HP dulu (mobile-first), baru sesuaikan ke layar besar.
8. Jika postingan bertambah jadi 50, apa potensi masalah dan bagaimana solusi gridmu mengatasinya? Masalah yang mungkin muncul:
9. Halaman jadi berat, loading lama.
10. User capek harus scroll panjang banget.
11. Tampilan bisa berantakan kalau semua di tampilkan sekaligus. Solusinya: Tampilkan sebagian dulu (misalnya 12 posting) → sisanya bisa pakai pagination (halaman 1,2,3) atau infinite scroll (otomatis muncul pas digulir). Atur grid supaya rapi, misalnya di HP tampil 2 kolom, di tablet 3, di PC 4 kolom. Jadi grid akan menyesuaikan jumlah konten dan layar supaya tetap rapi meski jumlah postingan banyak

PENJELASAN: Kode HTML yang dibuat tersebut adalah sebuah halaman web sederhana yang meniru tampilan profil Instagram menggunakan Bootstrap 5 untuk styling dan tata letak responsif. Struktur halaman dimulai dengan navbar di bagian atas berisi logo “Instagram” dan tombol log out, kemudian bagian profil yang menampilkan foto profil, username, tombol edit/follow, jumlah postingan, pengikut, mengikuti, serta bio singkat. Setelah itu ada bagian sorotan (highlight) yang ditampilkan dalam bentuk lingkaran kecil seperti fitur Instagram asli, diikuti dengan feed foto berbentuk grid responsif menggunakan row dan col Bootstrap, di mana setiap gambar dipaksa berbentuk kotak dengan CSS aspect-ratio agar menyerupai feed Instagram asli. Terakhir, ada footer sederhana dengan teks hak cipta, dan seluruh interaksi Bootstrap didukung oleh link CSS serta script bundle Bootstrap yang diimpor dari CDN
