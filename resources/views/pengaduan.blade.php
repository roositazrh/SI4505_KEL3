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
            <form id="pengaduanForm" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nik"><i class="fas fa-id-card"></i> Masukkan NIK:</label>
                    <input type="number" id="nik" name="nik">
                </div>
                <div class="form-group">
                    <label for="nama"><i class="fas fa-user"></i> Masukkan Nama:</label>
                    <input type="text" id="nama" name="nama">
                </div>
                <div class="form-group">
                    <label for="email"><i class="fas fa-envelope"></i> Masukkan Email:</label>
                    <input type="text" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="telp"><i class="fas fa-phone"></i> Masukkan No. Telp:</label>
                    <input type="number" id="telp" name="no_telp">
                </div>
                <div class="form-group">
                    <label for="pengaduan"><i class="fas fa-comment-dots"></i> Isi/detail Pengaduan:</label>
                    <textarea type= "text" id="pengaduan" name="detail_pengaduan" rows="4"></textarea>
                </div>
                <button name="submit" type="submit"><i class="fas fa-paper-plane"></i> Kirim Pengaduan</button>
                <a href="{{ route('home') }}" class="back-btn"><i class="fas fa-arrow-left"></i> Kembali</a>
            </form>
        </div>
    </div>
    <script src="scripts.js"></script>
</body>
</html>
