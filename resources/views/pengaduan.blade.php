<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lapak Pengaduan</title>
    <link rel="stylesheet" href="{{asset('land-bt/assets/css/style-lapakpengaduan.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="icon-box">
            <h4><i class="fas fa-bullhorn"></i> Lapak Pengaduan</h4>
            <p>Memungkinkan penduduk setempat untuk melaporkan masalah lingkungan atau infrastruktur, yang kemudian dapat diatasi oleh pemerintah atau organisasi terkait.</p>
            <form id="pengaduanForm">
                <div class="form-group">
                    <label for="nik"><i class="fas fa-id-card"></i> Masukkan NIK:</label>
                    <input type="text" id="nik" name="nik" required>
                </div>
                <div class="form-group">
                    <label for="nama"><i class="fas fa-user"></i> Masukkan Nama:</label>
                    <input type="text" id="nama" name="nama" required>
                </div>
                <div class="form-group">
                    <label for="email"><i class="fas fa-envelope"></i> Masukkan Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="telp"><i class="fas fa-phone"></i> Masukkan No. Telp:</label>
                    <input type="text" id="telp" name="telp" required>
                </div>
                <div class="form-group">
                    <label for="pengaduan"><i class="fas fa-comment-dots"></i> Isi/detail Pengaduan:</label>
                    <textarea id="pengaduan" name="pengaduan" rows="4" required></textarea>
                </div>
                <div class="form-group">
                    <label for="gambar"><i class="fas fa-image"></i> Unggah Gambar:</label>
                    <input type="file" id="gambar" name="gambar" accept="image/*">
                </div>
                <button type="submit"><i class="fas fa-paper-plane"></i> Kirim Pengaduan</button>
            </form>
        </div>
    </div>
    <script src="scripts.js"></script>
</body>
</html>
