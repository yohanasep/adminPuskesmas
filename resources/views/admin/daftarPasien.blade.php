@extends('admin.layout')
  
@section('content')

<div class="container-fluid">

  <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Daftar Pasien</h1>
  </div>

  <table class="table text-black">
    <thead>
      <tr>
        <th scope="col">No. Rekam Medis</th>
        <th scope="col">Nama</th>
        <th scope="col">Usia</th>
        <th scope="col">Alamat</th>
        <th scope="col">No. Telp</th>
        <th scope="col">Tanggal Daftar</th>
        <th scope="col">Keluhan</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td scope="row">00001001-000001</td>
        <td>Mawar lavender</td>
        <td>35 Th</td>
        <td>Jalan Pembangunan No.110 Blok C No.5A</td>
        <td>08127652345</td>
        <td>20-03-2023</td>
        <td>Mata Bengkak</td>
        <td><a href="#"><i class="fas fa-edit mr-2"></i></a><a href="#"><i class="fas fa-trash"></i></a></td>
      </tr>
      <tr>
        <td scope="row">00001001-000002</td>
        <td>Melati Daia</td>
        <td>28 Th</td>
        <td>Jalan Dr.Mansyur No.056</td>
        <td>08115652300</td>
        <td>20-03-2023</td>
        <td>Lengan Lebam</td>
        <td><a href="#"><i class="fas fa-edit mr-2"></i></a><a href="#"><i class="fas fa-trash"></i></a></td>
      </tr>
      <tr>
        <td scope="row">00001002-000003</td>
        <td>Dina Barus</td>
        <td>15 Th</td>
        <td>Jalan Lintas Timur, Desa Dundangan</td>
        <td>08189310045</td>
        <td>20-03-2023</td>
        <td>Gatal-gatal di area kaki</td>
        <td><a href="#"><i class="fas fa-edit mr-2"></i></a><a href="#"><i class="fas fa-trash"></i></a></td>
      </tr>
      <tr>
        <td scope="row">00001003-000004</td>
        <td>Justin Bieber</td>
        <td>30 Th</td>
        <td>Sorek 1</td>
        <td>08128700105</td>
        <td>21-03-2023</td>
        <td>Mata Merah</td>
        <td><a href="#"><i class="fas fa-edit mr-2"></i></a><a href="#"><i class="fas fa-trash"></i></a></td>
      </tr>
      <tr>
        <td scope="row">00002003-000004</td>
        <td>Mpok SZA</td>
        <td>19 Th</td>
        <td>Desa Harapan Jaya</td>
        <td>08121111112</td>
        <td>21-03-2023</td>
        <td>Batuk Pilek</td>
        <td><a href="#"><i class="fas fa-edit mr-2"></i></a><a href="#"><i class="fas fa-trash"></i></a></td>
      </tr>
      <tr>
        <td scope="row">00002004-000004</td>
        <td>Selena Gomez</td>
        <td>32 Th</td>
        <td>Desa Meranti</td>
        <td>08122250345</td>
        <td>21-03-2023</td>
        <td>Mata merah dan perih</td>
        <td><a href="#"><i class="fas fa-edit mr-2"></i></a><a href="#"><i class="fas fa-trash"></i></a></td>
      </tr>
      <tr>
        <td scope="row">00002004-000005</td>
        <td>Billie Nganjuk</td>
        <td>29 Th</td>
        <td>Desa Sialang Indah</td>
        <td>08123052305</td>
        <td>21-03-2023</td>
        <td>Bibir bengkak karena alergi</td>
        <td><a href="#"><i class="fas fa-edit mr-2"></i></a><a href="#"><i class="fas fa-trash"></i></a></td>
      </tr>
      <tr>
        <td scope="row">00002010-000010</td>
        <td>Ayu Tingting</td>
        <td>39 Th</td>
        <td>Desa Surya Indah</td>
        <td>08128765000</td>
        <td>21-03-2023</td>
        <td>Luka terjatuh</td>
        <td><a href="#"><i class="fas fa-edit mr-2"></i></a><a href="#"><i class="fas fa-trash"></i></a></td>
      </tr>
      <tr>
        <td scope="row">00003001-000100</td>
        <td>Ivan Gunawan</td>
        <td>40 Th</td>
        <td>Desa Harapan Jaya</td>
        <td>08121165000</td>
        <td>21-03-2023</td>
        <td>Batuk berdahak dan demam</td>
        <td><a href="#"><i class="fas fa-edit mr-2"></i></a><a href="#"><i class="fas fa-trash"></i></a></td>
      </tr>
      <tr>
        <td scope="row">00003011-000001</td>
        <td>Raffi Ahmad</td>
        <td>38 Th</td>
        <td>Desa Kemang</td>
        <td>081287653120</td>
        <td>21-03-2023</td>
        <td>Tumor Jinak di jempol kaki kanan</td>
        <td><a href="#"><i class="fas fa-edit mr-2"></i></a><a href="#"><i class="fas fa-trash"></i></a></td>
      </tr>
      <tr>
        <td scope="row">00003012-000002</td>
        <td>Nagita Slavina</td>
        <td>37 Th</td>
        <td>Desa Beringin Indah</td>
        <td>08128765054</td>
        <td>22-03-2023</td>
        <td>Muntah-muntah</td>
        <td><a href="#"><i class="fas fa-edit mr-2"></i></a><a href="#"><i class="fas fa-trash"></i></a></td>
      </tr>
      <tr>
        <td scope="row">00003013-000123</td>
        <td>Rafatar</td>
        <td>9 Th</td>
        <td>Desa Terantang Manuk</td>
        <td>08128765340</td>
        <td>22-03-2023</td>
        <td>Darah luka tidak berhenti mengalir</td>
        <td><a href="#"><i class="fas fa-edit mr-2"></i></a><a href="#"><i class="fas fa-trash"></i></a></td>
      </tr>
      <tr>
        <td scope="row">00004004-000055</td>
        <td>Rayyanza</td>
        <td>5 Th</td>
        <td>Desa Meranti</td>
        <td>08112765000</td>
        <td>22-03-2023</td>
        <td>Cacingan</td>
        <td><a href="#"><i class="fas fa-edit mr-2"></i></a><a href="#"><i class="fas fa-trash"></i></a></td>
      </tr>
      <tr>
        <td scope="row">00004011-000056</td>
        <td>Agnez Mo</td>
        <td>32 Th</td>
        <td>Desa Meranti</td>
        <td>08199965000</td>
        <td>22-03-2023</td>
        <td>Meriang</td>
        <td><a href="#"><i class="fas fa-edit mr-2"></i></a><a href="#"><i class="fas fa-trash"></i></a></td>
      </tr>
      <tr>
        <td scope="row">00004105-000003</td>
        <td>Zayn Maruk</td>
        <td>31 Th</td>
        <td>Jalan Pembangunan Blok B No.2</td>
        <td>08128761990</td>
        <td>22-03-2023</td>
        <td>Sakit Kepala</td>
        <td><a href="#"><i class="fas fa-edit mr-2"></i></a><a href="#"><i class="fas fa-trash"></i></a></td>
      </tr>
      <tr>
        <td scope="row">00023001-000001</td>
        <td>Rihanna</td>
        <td>30 Th</td>
        <td>Desa Beringin Indah</td>
        <td>08876239871</td>
        <td>22-03-2023</td>
        <td>Penglihatan Buram</td>
        <td><a href="#"><i class="fas fa-edit mr-2"></i></a><a href="#"><i class="fas fa-trash"></i></a></td>
      </tr>
      <tr>
        <td scope="row">00010201-000101</td>
        <td>Camila Cabello</td>
        <td>28 Th</td>
        <td>Desa Terantang Manuk</td>
        <td>08520365000</td>
        <td>22-03-2023</td>
        <td>Covid-19</td>
        <td><a href="#"><i class="fas fa-edit mr-2"></i></a><a href="#"><i class="fas fa-trash"></i></a></td>
      </tr>
      <tr>
        <td scope="row">00005101-000024</td>
        <td>Shawn Mendez</td>
        <td>29 Th</td>
        <td>Desa Sialang Indah</td>
        <td>08128762230</td>
        <td>23-03-2023</td>
        <td>Covid-19</td>
        <td><a href="#"><i class="fas fa-edit mr-2"></i></a><a href="#"><i class="fas fa-trash"></i></a></td>
      </tr>
      <tr>
        <td scope="row">00031201-001000</td>
        <td>Hailey Bald</td>
        <td>30 Th</td>
        <td>Desa Surya Indah</td>
        <td>08128765980</td>
        <td>23-03-2023</td>
        <td>Cacar Air</td>
        <td><a href="#"><i class="fas fa-edit mr-2"></i></a><a href="#"><i class="fas fa-trash"></i></a></td>
      </tr>
      <tr>
        <td scope="row">1100001-0000678</td>
        <td>Harry Potter</td>
        <td>16 Th</td>
        <td>Desa Sidomukti</td>
        <td>08128761110</td>
        <td>23-03-2023</td>
        <td>Diare</td>
        <td><a href="#"><i class="fas fa-edit mr-2"></i></a><a href="#"><i class="fas fa-trash"></i></a></td>
      </tr>
      <tr>
        <td scope="row">134001001-20001</td>
        <td>Haechan</td>
        <td>23 Th</td>
        <td>Jalan Dr.Mansyur</td>
        <td>08888765000</td>
        <td>23-03-2023</td>
        <td>Nyeri di bagian perut kanan bawah</td>
        <td><a href="#"><i class="fas fa-edit mr-2"></i></a><a href="#"><i class="fas fa-trash"></i></a></td>
      </tr>
      <tr>
        <td scope="row">006110098-70001</td>
        <td>Jungkook</td>
        <td>24 Th</td>
        <td>Desa Sidomukti</td>
        <td>08156565000</td>
        <td>23-03-2023</td>
        <td>Dada Sesak</td>
        <td><a href="#"><i class="fas fa-edit mr-2"></i></a><a href="#"><i class="fas fa-trash"></i></a></td>
      </tr>
      <tr>
        <td scope="row">00551001-000015</td>
        <td>Jimin</td>
        <td>24 Th</td>
        <td>Jalan Jamin Ginting</td>
        <td>08128712300</td>
        <td>23-03-2023</td>
        <td>Kulit Kering</td>
        <td><a href="#"><i class="fas fa-edit mr-2"></i></a><a href="#"><i class="fas fa-trash"></i></a></td>
      </tr>
      <tr>
        <td scope="row">00784001-000091</td>
        <td>Onyo</td>
        <td>18 Th</td>
        <td>Desa Terantang Manuk</td>
        <td>08122765099</td>
        <td>23-03-2023</td>
        <td>Demam</td>
        <td><a href="#"><i class="fas fa-edit mr-2"></i></a><a href="#"><i class="fas fa-trash"></i></a></td>
      </tr>
    </tbody>
  </table>

</div>

@endsection('content')