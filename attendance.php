<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kehadiran Siswa <br>SMKN 1 KOTA BEKASI</br></title>
    <link rel="stylesheet" href="css/attendance.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <h2>DAFTAR KEHADIRAN SISWA</h2>
            <form action="thankyou.php">
                <div class="form-group">
                    <input type="text" placeholder="Nama" required>
                </div>
                <div class="form-group">
                    <select name="jurusan" required>
                        <option value="">Pilih Jurusan</option>
                        <option value="teknik">Teknik pengelasan</option>
                        <option value="bisnis">Teknik kendaraan ringan</option>
                        <option value="seni">Teknik permesinan</option>
                        <option value="seni">Rekaya perangkat lunak dan gim</option>
                        <option value="seni">Desain komunikasi visual</option>
                        <option value="seni">Teknik komputer dan jaringan</option>
                        <option value="seni">Akuntansi</option>
                        <option value="seni">Tata busana</option>
                    </select>
                </div>
                <div class="form-group">
                    <select name="kelas" required>
                        <option value="">Pilih Kelas</option>
                        <option value="x">X A</option>
                        <option value="x">X B</option>
                        <option value="xi">XI A</option>
                        <option value="xi">XI B</option>
                        <option value="xii">XII A</option>
                        <option value="xii">XII B</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="time" placeholder="Jam Kehadiran" required>
                </div>
                <div class="radio-group">
                    <label>Jenis Kelamin:</label>
                    <div class="radio-options">
                        <input type="radio" name="gender" id="male" required>
                        <label for="male">L</label>
                        <input type="radio" name="gender" id="female">
                        <label for="female">P</label>
                    </div>
                </div>
                <button type="submit" class="submit-btn">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>