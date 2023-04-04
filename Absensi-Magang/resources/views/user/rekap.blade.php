@extends('layouts.main')
@section('container')
<div id="main">
    <div class="page-heading">
        <h3>Rekap Absensi</h3>
    </div>
    <div class="page-content">
        <section class="section">
            <div class="row" id="table-head">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Table head options</h4>
                        </div>
                        <div class="card-content">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Nama</th>
                                            <th>Tanggal</th>
                                            <th>Check in</th>
                                            <th>Check Out</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Ghifari</td>
                                            <td>21-11-2023</td>
                                            <td>08:00</td>
                                            <td>17:00</td>
                                            <td>Berhasil</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
      </div>
</div>

@endsection