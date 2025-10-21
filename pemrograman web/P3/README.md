# 📘 Pertanyaan README – Tailwind CSS Responsiveness

Berikut penjelasan lengkap tentang keputusan desain responsif menggunakan Tailwind CSS, pemanfaatan utility responsive, dan perbandingan antara penggunaan banyak utility classes dengan pembuatan component CSS tersendiri.

---

## 🧩 1. Jelaskan keputusan grid-cols/gap di tiap breakpoint — kenapa begitu?

Dalam Tailwind CSS, properti seperti `grid-cols` dan `gap` digunakan untuk mengatur **jumlah kolom** dan **jarak antar elemen** di dalam grid.  
Keputusan jumlah kolom dan jarak (gap) di setiap **breakpoint** (`sm`, `md`, `lg`, `xl`) ditentukan berdasarkan **ukuran layar dan kebutuhan tata letak** agar tampilan tetap proporsional di berbagai perangkat.

### 📊 Contoh keputusan dan alasannya:
| Breakpoint | Kelas yang digunakan | Alasan |
|-------------|----------------------|--------|
| `sm` (mobile) | `grid-cols-1 gap-2` | Layar kecil → konten ditampilkan vertikal agar mudah dibaca. |
| `md` (tablet) | `grid-cols-2 gap-4` | Layar sedang → menampilkan dua kolom untuk efisiensi ruang. |
| `lg` / `xl` (desktop) | `grid-cols-3 gap-6` | Layar besar → memungkinkan lebih banyak kolom dengan jarak yang lega. |

➡️ **Kesimpulan:**  
Penentuan jumlah kolom dan jarak antar elemen di setiap breakpoint dibuat untuk menjaga **kenyamanan pengguna**, **keterbacaan**, serta **keseimbangan visual** antar perangkat.

---

## 📱 2. Bagaimana kamu memanfaatkan utility responsive Tailwind untuk memecahkan masalah layout di mobile?

Tailwind CSS menyediakan **prefix responsif** seperti `sm:`, `md:`, `lg:`, dan `xl:` yang memungkinkan kita mengubah gaya elemen berdasarkan ukuran layar tanpa menulis media query manual.

Dengan utility ini, kamu bisa mengatur arah layout, ukuran teks, padding, jarak, dan bahkan menampilkan atau menyembunyikan elemen tertentu sesuai perangkat.

### 💡 Contoh penggunaan:
```html
<!-- Mengubah arah layout dari vertikal ke horizontal di layar besar -->
<div class="flex flex-col md:flex-row">...</div>

<!-- Menyesuaikan ukuran teks di tiap ukuran layar -->
<p class="text-sm md:text-base lg:text-lg">Teks responsif</p>

<!-- Menyembunyikan elemen di mobile -->
<div class="hidden sm:block">Menu Desktop</div>

<!-- Grid responsif -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">...</div>
