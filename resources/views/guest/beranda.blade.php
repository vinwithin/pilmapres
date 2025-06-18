<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>

    <div class="wrap">
        <nav class="navbar navbar-expand-lg" id="navigasi">
            <div class="d-flex justify-content-center align-items-center gap-3">
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <img src="/assets/logo.png" alt="Logo" style="height: 60px;">
                </a>
                <h1 class="mb-0"
                    style="font-family: Montserrat; font-size: 30px; font-style: normal; font-weight: 700; line-height: normal; color: #00135e;">
                    PILMAPRESFST</h1>
            </div>


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav me-auto gap-4 ">
                    <li class="nav-item ">
                        <a class="nav-link" href="/tentang-kami">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="/#announcement">Jenis Koleksi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="/#berita">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="/daftar-publikasi">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="/#galeri">Tentang</a>
                    </li>

                </ul>

                <div class="ms-auto" id="button-login">
                    <a href="/login" class="fw-semibold">
                        Masuk <i class="fa-solid fa-arrow-right me-2"></i>
                    </a>

                </div>
            </div>
        </nav>

        <section class="" id="hero">
            <div class="d-flex flex-row justify-content-center align-items-center" id="hero-content">
                <div class="hero-title d-flex flex-column w-50 gap-3">
                    <h1>Pemilihan Mahasiswa <span style="color: #FD871F;">Berprestasi</span> Fakultas Sains dan
                        Teknologi</h1>
                    <p>Ajang bergengsi bagi mahasiswa Fakultas Sains dan <br>Teknologi yang memiliki prestasi akademik,
                        karya inovatif, <br>kepemimpinan, serta kontribusi nyata dalam masyarakat.<br>
                        Raih penghargaan, sertifikat resmi, dan kesempatan <br>mewakili fakultas di ajang Pilmapres
                        tingkat
                        universitas.</p>
                    <div class="btn-hero d-flex flex-row justify-content-start gap-4 align-items-start">
                        <a class="btn-daftar" href="">Daftar</a>
                        <a class="btn-peringkat" href="/peringkat">Lihat Peringkat Sementara</a>
                    </div>
                </div>
                <div class="hero-img w-50">
                    <img src="/assets/logo2.png" alt="">
                </div>
            </div>
        </section>



    </div>

    <section class="" id="deskripsi">
        <div class="d-flex justify-content-between align-items-center gap-5 mt-5" id="deskripsi-content">
            <div class="d-flex flex-column gap-3">
                <h1 class="pilmapres-title">Pemilihan Mahasiswa <br> Berprestasi (PILMAPRES)</h1>

                <p class="pilmapres-desc"> Pilmapres atau Pemilihan Mahasiswa Berprestasi merupakan ajang kompetisi
                    tahunan bergengsi yang
                    diselenggarakan oleh Balai Pengembangan Talenta Indonesia (BPTI) di bawah naungan Kementerian
                    Pendidikan, Kebudayaan, Riset, dan Teknologi Republik Indonesia. Program ini bertujuan untuk
                    memberikan apresiasi dan penghargaan kepada mahasiswa terbaik yang tidak hanya unggul dalam bidang
                    akademik, tetapi juga aktif berkontribusi melalui karya inovatif, kepemimpinan, serta kegiatan
                    sosial. Pilmapres terbuka bagi mahasiswa program Sarjana dan Diploma yang siap menjadi teladan bagi
                    generasi muda dan membawa dampak positif bagi Indonesia.</p>
                <p class="pilmapres-desc2">
                    <strong>Tujuan pelaksanaan Pilmapres di tingkat fakultas adalah untuk menjaring mahasiswa
                        terbaik yang akan
                        mewakili FST UNJA pada seleksi tingkat universitas hingga nasional. Laman resmi PILMAPRES
                        Nasional</strong>
                    dapat diakses melalui tautan berikut :
                    <a href="https://pusatprestasinasional.kemdikbud.go.id/event/seni-budaya/dikti/pemilihan-mahasiswa-berprestasi-nasional-2024-2024-dikti"
                        target="_blank">
                        https://pusatprestasinasional.kemdikbud.go.id/event/seni-budaya/dikti/pemilihan-mahasiswa-berprestasi-nasional-2024-2024-dikti
                    </a>
                </p>

            </div>
            <div>
                <img src="/assets/logo-pilmapres.png" alt="logo pilmapres">
            </div>
        </div>

    </section>
    <section class="" id="panduan">
        <h1 class="mb-5">Panduan dan Syarat Pendaftaran</h1>
        <div class="d-flex flex-row align-items-start gap-5 position-relative" id="panduan-content">
            <!-- Kolom kiri -->
            <div class="d-flex flex-column gap-3 w-50">
                <div>
                    <span class="d-flex align-items-center gap-2">
                        <img src="/assets/icon2.png" alt="icon1" style="width: 36px; height: auto;">
                        <h3 class="panduan-heading m-0">Persyaratan Umum Peserta</h3>
                    </span>

                    <ul class="syarat">
                        <li>Mahasiswa aktif program studi di FST UNJA maksimal semester VIII. </li>
                        <li>Usia maksimal 23 tahun (dibuktikan dengan KTP).</li>
                        <li>Belum pernah menjadi finalis Pilmapres tingkat nasional.</li>
                        <li>Berpakaian layak dan memakai jas almamater UNJA saat seleksi.</li>
                    </ul>
                </div>
                <div>
                    <span class="d-flex align-items-center gap-2">
                        <img src="/assets/icon1.png" alt="icon2" style="width: 36px; height: auto;">
                        <h3 class="panduan-heading">Dokumen yang Dipersiapkan</h3>
                    </span>
                    <ul class="dokumen">
                        <li>KRS (Semester terakhir) </li>
                        <li>KTP</li>
                        <li>Naskah GK dalam bahasa Indonesia (5 rangkap)</li>
                        <li>Slide presentasi GK dalam bahasa Inggris</li>
                        <li>Bukti CU terbaik, maksimal 10 CU, berkas CU dikumpulkan dalam satu map</li>
                    </ul>
                </div>
                <div>
                    <a class="btn-panduan" href="">Unduh Panduan Pilmapres FST (PDF)</a>
                </div>
            </div>
            <div style="position:absolute; left:50%; top:0; bottom:0; width:1px; background:#FF8000;"></div>
            <!-- Kolom kanan -->
            <div class="d-flex flex-column justify-content-center  w-50 gap-4 ps-5">
                <h3 class="panduan-heading">Kriteria Penilaian</h3>
                <div class="bg-kriteria">
                    <h4>Capaian Unggulan (45%)</h4>
                    <p>Capaian Unggulan (CU) adalah hasil istimewa yang mendapat pengakuan dan diperoleh selama menjadi
                        mahasiswa, baik dari kegiatan intrakurikuler, kokurikuler, maupun ekstrakurikuler. Capaian
                        tersebut mencerminkan keunggulan, dedikasi, serta dampak positif yang dihasilkan oleh peserta.
                    </p>
                </div>
                <div class="bg-kriteria">
                    <h4>Gagasan Kreatif (35%)</h4>
                    <p>Gagasan Kreatif (GK) adalah tulisan berisi gagasan kreatif peserta untuk penyelesaian
                        permasalahan yang ada pada masyarakat. Gagasan tersebut dapat berupa konsep atau strategi.
                        Gagasan disusun berdasarkan penalaran logis dan didukung oleh data atau informasi yang relevan.
                    </p>
                </div>
                <div class="bg-kriteria">
                    <h4>Bahasa Inggris (20%)</h4>
                    <p>Kemampuan Bahasa Inggris (BI) adalah kemampuan peserta dalam menggunakan bahasa Inggris secara
                        lisan dan tulisan untuk mengungkapkan ide secara jelas, terstruktur, dan efektif dalam konteks
                        akademik maupun nonakademik.
                    </p>
                </div>
            </div>
        </div>

    </section>

    <section class="" id="timeline">
        <div class="d-flex flex-column gap-2 pt-5" id="bg-timeline">
            <h1>Timeline Kegiatan</h1>
            <h3>PILMAPRES FST</h3>
            <div class="text-center">
                <img src="/assets/timeline.svg" alt="timeline kegiatan">
            </div>
        </div>
    </section>
    <section class="mt-5 pt-5" id="rekam-jejak">
        <h1>Rekam Jejak PILMAPRES</h1>
        <H5>Pemenang Pemilihan Mahasiswa Berprestasi Fakultas Sains dan Teknologi</H5>
        <div class="d-flex flex-row justify-content-between gap-5" id="rekam-jejak-content">
            <div class="card p-3 shadow-sm">
                <img src="/assets/rekam-jejak.png" class="rounded" alt="Foto Mahasiswa">
                <div class="card-body">
                    <h5 class="fw-bold mb-2">Stevan O. Thompson</h5>
                    <p class="text-primary mb-2">Peringkat 1 Mahasiswa Berprestasi</p>
                    <p class="text-muted mb-4">
                        Ut enim ad minim veniam, quis nost exercitation ullamco laboris nisi ut aliquip ex commodo.
                    </p>
                    <div class="d-flex flex-row justify-content-between">
                        <p class="prodi fw-semibold">Teknik Informatika</p> <!-- Ganti 333 -->
                        <div class="d-flex gap-2">
                            <a href="#"><img src="/assets/instagram.svg" alt="Instagram" width="24"></a>
                            <a href="#"><img src="/assets/linkedin.svg" alt="LinkedIn" width="24"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card p-3 shadow-sm">
                <img src="/assets/rekam-jejak.png" class="rounded" alt="Foto Mahasiswa">
                <div class="card-body">
                    <h5 class="fw-bold mb-2">Stevan O. Thompson</h5>
                    <p class="text-primary mb-2">Peringkat 1 Mahasiswa Berprestasi</p>
                    <p class="text-muted mb-4">
                        Ut enim ad minim veniam, quis nost exercitation ullamco laboris nisi ut aliquip ex commodo.
                    </p>
                    <div class="d-flex flex-row justify-content-between">
                        <p class="prodi fw-semibold">Teknik Informatika</p> <!-- Ganti 333 -->
                        <div class="d-flex gap-2">
                            <a href="#"><img src="/assets/instagram.svg" alt="Instagram" width="24"></a>
                            <a href="#"><img src="/assets/linkedin.svg" alt="LinkedIn" width="24"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card p-3 shadow-sm">
                <img src="/assets/rekam-jejak.png" class="rounded" alt="Foto Mahasiswa">
                <div class="card-body">
                    <h5 class="fw-bold mb-2">Stevan O. Thompson</h5>
                    <p class="text-primary mb-1">Peringkat 1 Mahasiswa Berprestasi</p>
                    <p class="text-muted mb-4">
                        Ut enim ad minim veniam, quis nost exercitation ullamco laboris nisi ut aliquip ex commodo.
                    </p>
                    <div class="d-flex flex-row justify-content-between">
                        <p class="prodi  fw-semibold">Teknik Informatika</p> <!-- Ganti 333 -->
                        <div class="d-flex gap-2">
                            <a href="#"><img src="/assets/instagram.svg" alt="Instagram" width="24"></a>
                            <a href="#"><img src="/assets/linkedin.svg" alt="LinkedIn" width="24"></a>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        </div>
    </section>
    <footer class="">
        <div class="d-flex flex-row justify-content-between align-items-start pt-2" id="footer-content">

            <a href="#" class="d-flex align-items-center">
                <img src="/assets/footer.svg" alt="Logo" style="height: 117px; max-width:650px;">
            </a>

            <div>
                <h3 class="footer-heading">Informasi Kontak</h3>
                <ul class="list-footer">
                    <li>
                        <p><i class="fa-solid fa-location-dot me-2"></i>Fakultas Sains dan Teknologi, Universitas Jambi
                        </p>
                    </li>
                    <li>
                        <p><i class="fa-regular fa-envelope me-2"></i>pilmapres.fst@unja.ac.id</p>
                    </li>
                    <li>
                        <p><i class="fa-solid fa-globe me-2"></i>fst.unja.ac.id</p>
                    </li>

                </ul>
            </div>
            <div>
                <h3 class="footer-heading">Navigasi Cepat</h3>
                <ul class="list-link">
                    <li>
                        <a href="">Beranda</a>

                    </li>
                    <li>
                        <a href="">Tentang</a>
                    </li>
                    <li>
                        <a href="">Panduan</a>
                    </li>
                    <li>
                        <a href="">Timeline</a>
                    </li>
                    <li>
                        <a href="">Portofolio</a>
                    </li>
                </ul>
            </div>


        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js"
        integrity="sha384-RuyvpeZCxMJCqVUGFI0Do1mQrods/hhxYlcVfGPOfQtPJh0JCw12tUAZ/Mv10S7D" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/f10456a175.js" crossorigin="anonymous"></script>

    <script>
        feather.replace();
    </script>
</body>

</html>
