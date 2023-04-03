@extends('layouts.main-admin')
@section('container')
<div id="main">
    <div class="page-heading">
        <h3>Data Mahasiswa</h3>
    </div>
    <div class="page-content">
        <section class="section">
            <div class="row" id="table-head">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4 class="card-title">Table head options</h4>
                            <button class="btn btn-primary btn-md" onclick="location.href='{{ url('/home') }}'">Tambah Mahasiswa</button>
                        </div>
                        <div class="card-content">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Nama</th>
                                            <th>Role</th>
                                            <th>username</th>
                                            <th>Password</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Ghifari</td>
                                            <td>Pegawai Magang</td>
                                            <td>ghifarirmdn</td>
                                            <td>12345</td>
                                            <td>Approved</td>
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