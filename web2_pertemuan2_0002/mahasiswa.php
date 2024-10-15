<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa Kelulusan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }
        .main-container {
            width: 80%;
            margin: 0 auto;
        }
        .container {
            background-color: white;
            padding: 20px;
            margin-bottom: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        .info {
            margin-bottom: 20px;
        }
        .info strong {
            color: #007BFF;
        }
        .status {
            font-size: 18px;
            font-weight: bold;
            color: green;
        }
        .status-tidak-lulus {
            color: red;
        }
    </style>
</head>
<body>

<div class="main-container">
    <h2>Status Kelulusan Mahasiswa</h2>

    <?php
    class Mahasiswa_0002
    {
        protected $nama_0002;
        protected $nim_0002;
        protected $jurusan_0002;
        protected $ipk_0002;
        protected $semester_0002;
        protected $jenjang_0002;

        public function __construct($nama_0002, $nim_0002, $jurusan_0002, $ipk_0002, $semester_0002, $jenjang_0002)
        {
            $this->nama_0002 = $nama_0002;
            $this->nim_0002 = $nim_0002;
            $this->jurusan_0002 = $jurusan_0002;
            $this->ipk_0002 = $ipk_0002;
            $this->semester_0002 = $semester_0002;
            $this->jenjang_0002 = $jenjang_0002;
        }

        public function tampilkanInfo_0002()
        {
            echo "<div class='info'>";
            echo "Nama: <strong>" . htmlspecialchars($this->nama_0002) . "</strong><br>";
            echo "NIM: <strong>" . htmlspecialchars($this->nim_0002) . "</strong><br>";
            echo "Jurusan: <strong>" . htmlspecialchars($this->jurusan_0002) . "</strong><br>";
            echo "IPK: <strong>" . htmlspecialchars($this->ipk_0002) . "</strong><br>";
            echo "Semester: <strong>" . htmlspecialchars($this->semester_0002) . "</strong><br>";
            echo "Jenjang Pendidikan: <strong>" . htmlspecialchars($this->jenjang_0002) . "</strong><br>";
            echo "</div>";
        }

        public function cekKelulusan_0002()
        {
            if ($this->ipk_0002 >= 2.75 && $this->cekSyaratKelulusan_0002()) {
                return new MahasiswaLulus($this->nama_0002, $this->nim_0002, $this->jurusan_0002, $this->ipk_0002, $this->semester_0002, $this->jenjang_0002);
            } else {
                return new MahasiswaTidakLulus($this->nama_0002, $this->nim_0002, $this->jurusan_0002, $this->ipk_0002, $this->semester_0002, $this->jenjang_0002);
            }
        }

        public function cekSyaratKelulusan_0002()
        {
            return false; // Default behavior
        }
    }

    class MahasiswaLulus extends Mahasiswa_0002
    {
        public function tampilkanStatusLulus_0002()
        {
            echo "<div class='status'>".$this->nama_0002." dinyatakan <strong>Lulus</strong>.</div>";
        }
    }

    class MahasiswaTidakLulus extends Mahasiswa_0002
    {
        public function tampilkanStatusTidakLulus_0002()
        {
            echo "<div class='status status-tidak-lulus'>".$this->nama_0002." dinyatakan <strong>Tidak Lulus</strong>.</div>";
        }
    }

    class MahasiswaD3_0002 extends Mahasiswa_0002
    {
        public function __construct($nama_0002, $nim_0002, $jurusan_0002, $ipk_0002, $semester_0002)
        {
            parent::__construct($nama_0002, $nim_0002, $jurusan_0002, $ipk_0002, $semester_0002, "D3");
        }

        public function cekSyaratKelulusan_0002()
        {
            return $this->semester_0002 >= 6; // Mahasiswa D3 lulus jika semester >= 6
        }
    }

    class MahasiswaS1_0002 extends Mahasiswa_0002
    {
        public function __construct($nama_0002, $nim_0002, $jurusan_0002, $ipk_0002, $semester_0002)
        {
            parent::__construct($nama_0002, $nim_0002, $jurusan_0002, $ipk_0002, $semester_0002, "S1");
        }

        public function cekSyaratKelulusan_0002()
        {
            return $this->semester_0002 > 14; // Mahasiswa S1 lulus jika semester > 14
        }

        public function menyelesaikanSkripsi_0002()
        {
            echo "<div class='info'><strong>" . htmlspecialchars($this->nama_0002) . "</strong> (Mahasiswa S1) sedang menyelesaikan Skripsi.</div>";
        }
    }

    // Fungsi untuk menampilkan informasi mahasiswa
    function tampilkanMahasiswa($mahasiswa) {
        $mahasiswa->tampilkanInfo_0002();
        $hasilKelulusan = $mahasiswa->cekKelulusan_0002();
        if ($hasilKelulusan instanceof MahasiswaLulus) {
            $hasilKelulusan->tampilkanStatusLulus_0002();
            // Tambahkan aktivitas khusus jika lulus
            if ($mahasiswa instanceof MahasiswaS1_0002) {
                $mahasiswa->menyelesaikanSkripsi_0002();
            }
        } else {
            $hasilKelulusan->tampilkanStatusTidakLulus_0002();
        }
    }

    // Buat objek mahasiswa D3 dan S1 dengan perubahan
    $mahasiswaD3_0002 = new MahasiswaD3_0002("Abel", "23.230.0199", "Sistem Informasi", 3.9, 6);
    $mahasiswaS1_0002 = new MahasiswaS1_0002("Dias", "23.230.0200", "Teknik Informatika", 2.5, 15); // Semester diubah menjadi 15

    // Tampilkan informasi mahasiswa D3
    echo "<div class='container'>";
    tampilkanMahasiswa($mahasiswaD3_0002);
    echo "</div>";

    // Tampilkan informasi mahasiswa S1
    echo "<div class='container'>";
    tampilkanMahasiswa($mahasiswaS1_0002);
    echo "</div>";
    ?>
</div>

</body>
</html>
