# FLOW APLIKASI
1. User mengakses aplikasi lalu melakukan login atau registrasi
2. Sistem memverifikasi data dan menentukan role user
3. Jika user adalah admin, diarahkan ke dashboard admin untuk mengelola data (kamar, tipe kamar, user, booking)
4. Jika user adalah customer, diarahkan ke dashboard user untuk menggunakan fitur aplikasi (melihat kamar, booking, pembayaran, status booking)
5. Customer/admin dapat logout untuk mengakhiri sesi

## Struktur MVC
index.php → controller → model → view