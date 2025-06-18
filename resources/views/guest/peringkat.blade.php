@extends('layout.index')
@section('content')
    <link rel="stylesheet" href="/css/peringkat.css">
    <section class="peringkat-content pt-5">
        <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex flex-column gap-3 w-50" id="heading-peringkat">
                <h1>
                    Peringkat Peserta
                </h1>
                <h3>Berikut peringkat sementara peserta PILMAPRES berdasarkan penilaian juri.
                    Skor akan otomatis diperbarui hingga penilaian selesai.</h3>
            </div>
            <div class="card-kriteria p-3 rounded-4 shadow-sm bg-light-blue w-50">
                <h5 class="fw-bold mb-3"
                    style="color: #0C0C20; font-family: Montserrat; font-size: 24px; font-style: normal; font-weight: 700; line-height: normal;">
                    Kriteria Penilaian</h5>
                <p class="mb-1">CU : Capaian Unggulan</p>
                <p class="mb-1">GK : Gagasan Kreatif</p>
                <p class="mb-0">BI : Bahasa Inggris</p>
            </div>

        </div>
    </section>
    <section class="peringkat">
        <div class="container-fluid w-100 px-4 py-4 my-4" style="position: relative; top: -180px;">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                    <label for="tampilkan">Tampilkan</label>
                    <select id="tampilkan" class="form-select d-inline-block w-auto ms-2">
                        <option>8</option>
                        <option>10</option>
                    </select>
                </div>
                <div class="input-group w-auto">
                    <input type="text" class="form-control" placeholder="Search..." />
                    <span class="input-group-text"><i class="bi bi-search"></i></span>
                </div>
            </div>

            <table class="table table-bordered align-middle">
                <thead class="table-primary rounded-top">
                    <tr>
                        <th rowspan="2">Peringkat</th>
                        <th rowspan="2">Nama</th>
                        <th rowspan="2">NIM</th>
                        <th rowspan="2">Prodi</th>
                        <th colspan="3" class="text-center">Kriteria Penilaian</th>
                        <th rowspan="2">Total Skor</th>
                    </tr>
                    <tr>
                        <th>CU</th>
                        <th>GK</th>
                        <th>BI</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Nurhaliza</td>
                        <td>F1E21055</td>
                        <td>Sistem Informasi</td>
                        <td>100</td>
                        <td>100</td>
                        <td>100</td>
                        <td>300</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Rizky</td>
                        <td>F1E21056</td>
                        <td>Teknik Komputer</td>
                        <td>85</td>
                        <td>90</td>
                        <td>80</td>
                        <td>270</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Siti</td>
                        <td>F1E21057</td>
                        <td>Manajemen</td>
                        <td>78</td>
                        <td>95</td>
                        <td>82</td>
                        <td>240</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Budi</td>
                        <td>F1E21058</td>
                        <td>Ilmu Komunikasi</td>
                        <td>92</td>
                        <td>88</td>
                        <td>90</td>
                        <td>270</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Diana</td>
                        <td>F1E21059</td>
                        <td>Desain Grafis</td>
                        <td>100</td>
                        <td>95</td>
                        <td>98</td>
                        <td>293</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Andi</td>
                        <td>F1E21060</td>
                        <td>Teknik Informatika</td>
                        <td>75</td>
                        <td>80</td>
                        <td>77</td>
                        <td>232</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Linda</td>
                        <td>F1E21061</td>
                        <td>Akuntansi</td>
                        <td>88</td>
                        <td>85</td>
                        <td>87</td>
                        <td>260</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Toni</td>
                        <td>F1E21062</td>
                        <td>Pendidikan</td>
                        <td>90</td>
                        <td>89</td>
                        <td>91</td>
                        <td>270</td>
                    </tr>
                </tbody>
            </table>

            
        </div>

    </section>
@endsection
