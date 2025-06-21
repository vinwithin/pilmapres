@extends('layout.admin.app')
@section('content')
    <style>
        .dashboard-card {
            display: flex;
            align-items: center;
            background-color: #f8f9fa;
            border-radius: 16px;
            padding: 1.5rem;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            height: 100%;
        }

        .dashboard-card .icon {
            font-size: 2.5rem;
            margin-right: 1rem;
            color: #000;
        }

        .dashboard-card .label {
            font-weight: 500;
            color: #6c757d;
            margin: 0;
        }

        .dashboard-card h5 {
            font-weight: bold;
            margin: 0;
        }
    </style>

    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center">
            <h1>Dashboard</h1>
            <h3>Tahun Pendaftaran : 2025</h3>
        </div>
        <div class="row g-3">
            <!-- Card 1 -->
            <div class="col-md-4">
                <div class="dashboard-card">
                    <i class="bi bi-people icon"></i>
                    <div class="text">
                        <p class="label">Jumlah Peserta</p>
                        <h5>24 Peserta</h5>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4">
                <div class="dashboard-card">
                    <i class="bi bi-person-check icon"></i>
                    <div class="text">
                        <p class="label">Jumlah Juri</p>
                        <h5>6 Juri</h5>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4">
                <div class="dashboard-card">
                    <i class="bi bi-journal-text icon"></i>
                    <div class="text">
                        <p class="label">Status Verifikasi</p>
                        <h5>10 Terverifikasi</h5>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-md-4">
                <div class="dashboard-card">
                    <i class="bi bi-award icon"></i>
                    <div class="text">
                        <p class="label">Progres Penilaian<br>Capaian Unggulan</p>
                        <h5>7 Telah Dinilai</h5>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col-md-4">
                <div class="dashboard-card">
                    <i class="bi bi-lightbulb icon"></i>
                    <div class="text">
                        <p class="label">Progres Penilaian<br>Gagasan Kreatif</p>
                        <h5>8 Telah Dinilai</h5>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col-md-4">
                <div class="dashboard-card">
                    <i class="bi bi-translate icon"></i>
                    <div class="text">
                        <p class="label">Progres Penilaian<br>Bahasa Inggris</p>
                        <h5>9 Telah Dinilai</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
