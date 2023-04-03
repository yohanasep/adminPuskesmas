@extends('admin.layout')

@section('content')

<div class="container-fluid">

  <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h3 class="h3 mb-0 text-gray-800 mt-4 ms-3">Jadwal Piket Poli Umum Puskesmas Pangkalan Kuras II</h3>
  </div>

  <table class="table text-black border border-left border-right">
    <thead>
      <tr>
        <th scope="col">Senin</th>
        <th scope="col">Selasa</th>
        <th scope="col">Rabu</th>
        <th scope="col">Kamis</th>
        <th scope="col">Jumat</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td scope="row">Daril Ganda</td>
        <td>Rizki Rablen</td>
        <td>Siska Kohl</td>
        <td>Samina Em</td>
        <td>Yeni Aulia Sihiy</td>
        </tr>
      <tr>
        <td scope="row">Zahra</td>
        <td>Rifna Innaya</td>
        <td>Gita Natasya</td>
        <td>Aisyah Siti</td>
        <td>Nova Rasi Melina</td>
        </tr>
      <tr>
        <td scope="row">Melani Carolin</td>
        <td>Rina Kusuma</td>
        <td>Anita Titi</td>
        <td>Syahrul Ramadhan</td>
        <td>Kesumawati</td>
        </tr>
      <tr>
        <td scope="row">Rina Kusuma</td>
        <td>Yossi</td>
        <td>Wilbert gabriel</td>
        <td>Melani Carolin</td>
        <td>Zahra</td>
        </tr>
      <tr>
        <td scope="row">Kesumawati</td>
        <td>Wilbert Gabriel</td>
        <td>Rizki Rablen</td>
        <td>Daril Ganda</td>
        <td>Melani Carolin</td>
        </tr>
    </tbody>
  </table>

</div>


<div class="row mt-5">
  <div class="col-lg-6 ms-5">

    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Persentase Banyak Kasus Baru Pasien Covid-19 di Puskesmas Pangkalan Kuras II tahun 2022-2023</h6>
      </div>
      <div class="card-body">
        <h4 class="small font-weight-bold">November 2022 <span class="float-right">10 Orang</span></h4>
        <div class="progress mb-4">
          <div class="progress-bar bg-danger" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0"
            aria-valuemax="100"></div>
        </div>
        <h4 class="small font-weight-bold">Desember 2022 <span class="float-right">17 Orang</span></h4>
        <div class="progress mb-4">
          <div class="progress-bar bg-warning" role="progressbar" style="width: 57%" aria-valuenow="57"
            aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <h4 class="small font-weight-bold">Januari 2023 <span class="float-right">15 Orang</span></h4>
        <div class="progress mb-4">
          <div class="progress-bar" role="progressbar" style="width: 54%" aria-valuenow="54" aria-valuemin="0"
            aria-valuemax="100"></div>
        </div>
        <h4 class="small font-weight-bold">Februari 2023 <span class="float-right">6 Orang</span></h4>
        <div class="progress mb-4">
          <div class="progress-bar bg-info" role="progressbar" style="width: 32%" aria-valuenow="32" aria-valuemin="0"
            aria-valuemax="100"></div>
        </div>
        <h4 class="small font-weight-bold">Maret 2023 <span class="float-right">1 Orang</span></h4>
        <div class="progress">
          <div class="progress-bar bg-success" role="progressbar" style="width: 12%" aria-valuenow="12"
            aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>
    </div>

  </div>

</div>


<div class="row mt-4">
  <div class="col-lg-6 ms-5">

    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Persentase Pasien Sembuh dari Covid-19 di Puskesmas Pangkalan Kuras II tahun 2022-2023</h6>
      </div>
      <div class="card-body">
        <h4 class="small font-weight-bold">November 2022 <span class="float-right">15 Orang</span></h4>
        <div class="progress mb-4">
          <div class="progress-bar bg-danger" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0"
            aria-valuemax="100"></div>
        </div>
        <h4 class="small font-weight-bold">Desember 2022 <span class="float-right">8 Orang</span></h4>
        <div class="progress mb-4">
          <div class="progress-bar bg-warning" role="progressbar" style="width: 43%" aria-valuenow="43"
            aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <h4 class="small font-weight-bold">Januari 2023 <span class="float-right">11 Orang</span></h4>
        <div class="progress mb-4">
          <div class="progress-bar" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0"
            aria-valuemax="100"></div>
        </div>
        <h4 class="small font-weight-bold">Februari 2023 <span class="float-right">17 Orang</span></h4>
        <div class="progress mb-4">
          <div class="progress-bar bg-info" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0"
            aria-valuemax="100"></div>
        </div>
        <h4 class="small font-weight-bold">Maret 2023 <span class="float-right">9 Orang</span></h4>
        <div class="progress">
          <div class="progress-bar bg-success" role="progressbar" style="width: 45%" aria-valuenow="45"
            aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>
    </div>

  </div>

</div>

@endsection('content')