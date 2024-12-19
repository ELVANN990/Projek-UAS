@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            @include('layouts.sidebar')
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Consequences/Impact Matrix</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="bg-light">
                                <tr>
                                    <th>Consequences/Impact</th>
                                    <th>1</th>
                                    <th>2</th>
                                    <th>3</th>
                                    <th>4</th>
                                    <th>5</th>
                                </tr>
                                <tr>
                                    <th>Kriteria Penilaian</th>
                                    <th>Sangat rendah</th>
                                    <th>Rendah</th>
                                    <th>Sedang</th>
                                    <th>Tinggi</th>
                                    <th>Sangat tinggi</th>
                                </tr>
                                <tr>
                                    <th></th>
                                    <th>Insignificant</th>
                                    <th>Minor</th>
                                    <th>Moderate</th>
                                    <th>Major</th>
                                    <th>Catastrophic</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tr>
                                    <td>Tujuan</td>
                                    <td>Tujuan strategis terlambat &lt;10% dari target waktu pencapaian</td>
                                    <td>Tujuan strategis terlambat &gt;10% sd 50% dari target waktu pencapaian</td>
                                    <td>Tujuan strategis terlambat &gt;50% sd 75% dari target waktu pencapaian</td>
                                    <td>Tujuan strategis terlambat &gt;75% sd 100% dari target waktu pencapaian</td>
                                    <td>Tujuan strategis terlambat &gt;100% dari target waktu pencapaian</td>
                                </tr>
                                <tr>
                                    <td>Reputasi</td>
                                    <td>Tidak berdampak pada reputasi</td>
                                    <td>Publikasi negatif pada area operasional setempat (kampus)</td>
                                    <td>Publikasi negatif pada area jabodetabek</td>
                                    <td>Publikasi negatif pada skala nasional</td>
                                    <td>Publikasi negatif pada skala internasional</td>
                                </tr>
                                <tr>
                                    <td>Keluhan Pelanggan (Survey Kepuasan Layanan)</td>
                                    <td>Skala 4,5 - 5</td>
                                    <td>Skala 4 - &lt;4,5</td>
                                    <td>Skala 3,5 - &lt;4</td>
                                    <td>Skala 3 - &lt;3,5</td>
                                    <td>Skala &lt;3</td>
                                </tr>
                                <tr>
                                    <td>Kepegawaian (Keluhan)</td>
                                    <td>Keluhan dapat di selesaikan di Subbagian kerja terkait</td>
                                    <td>Keluhan dapat di selesaikan di bagian kerja terkait</td>
                                    <td>Keluhan dapat di selesaikan di Dekanat/Biro terkait</td>
                                    <td>Keluhan dapat di selesaikan di Bag Kepegawaian/SPI Rektorat</td>
                                    <td>Keluhan dapat di selesaikan di Rapat Pimpinan Universitas</td>
                                </tr>
                                <tr>
                                    <td>Delik Hukum</td>
                                    <td>Tidak ada tuntutan hukum</td>
                                    <td>Ada tuntutan namun tidak terbukti</td>
                                    <td>Proses hukum namun dapat diselesaikan dg musyawarah</td>
                                    <td>Litigasi dan class action</td>
                                    <td>Vonis bersalah</td>
                                </tr>
                                <tr>
                                    <td>Peringatan atau pembatasan dari Regulator</td>
                                    <td>Peringatan informal/verbal</td>
                                    <td>Peringatan tertulis tanpa sanksi</td>
                                    <td>Peringatan tertulis dengan sanksi</td>
                                    <td>Penghentian sementara aktivitas (pembekuan prodi)</td>
                                    <td>Penghentian aktivitas (penutupan prodi)</td>
                                </tr>
                                <tr>
                                    <td>Tingkat Efisiensi (Budget)</td>
                                    <td>Tidak ada varians dari anggaran</td>
                                    <td>Kenaikan sd 1% pada anggaran</td>
                                    <td>Kenaikan &gt;1% sd 10% pada anggaran</td>
                                    <td>Kenaikan &gt;10% sd 20% pada anggaran</td>
                                    <td>Kenaikan &gt;20% pada anggaran</td>
                                </tr>
                                <tr>
                                    <td>Tingkat Serapan (Budget)</td>
                                    <td>Tidak ada varians dari anggaran</td>
                                    <td>Turun sd 3% pada anggaran</td>
                                    <td>Turun &gt;3% sd 5% pada anggaran</td>
                                    <td>Turun &gt;5% sd 8% pada anggaran</td>
                                    <td>Turun &gt;8% pada anggaran</td>
                                </tr>
                                <tr>
                                    <td>Aplikasi dan Infrastruktur IT</td>
                                    <td>Tidak berfungsi selama 1 jam</td>
                                    <td>Tidak berfungsi selama 3 jam</td>
                                    <td>Tidak berfungsi selama 1 hari</td>
                                    <td>Tidak berfungsi selama 2 hari</td>
                                    <td>Tidak berfungsi selama 3 hari</td>
                                </tr>
                                <tr>
                                    <td>Gangguan Operasional</td>
                                    <td>Tidak mempengaruhi kegiatan belajar mengajar</td>
                                    <td>Terhambat &lt;10% kegiatan belajar mengajar</td>
                                    <td>Terhambat &gt;10% sd 15% kegiatan belajar mengajar</td>
                                    <td>Terhambat &gt;15% sd 20% kegiatan belajar mengajar</td>
                                    <td>Terhambat &gt;20% kegiatan belajar mengajar</td>
                                </tr>
                                <tr>
                                    <td>Kesehatan dan Keselamatan</td>
                                    <td>Tindakan berbahaya</td>
                                    <td>Cidera kecil (mampu bekerja di hari yg sama)</td>
                                    <td>Cidera ringan (tidak mampu bekerja 1 sd 3 hari)</td>
                                    <td>Cidera berat (tidak mampu bekerja &gt;3 hari namun sehat tetap)</td>
                                    <td>Kejadian fatal atau kematian</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

