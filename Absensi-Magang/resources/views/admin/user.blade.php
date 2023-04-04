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
                            <button class="btn btn-primary btn-md" onclick="location.href='{{ url('/admin/user/create') }}'">Tambah Mahasiswa</button>
                        </div>
                        <div class="card-content">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>username</th>
                                            <th>Password</th>
                                            <th>Status</th>
                                            <th>Role</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($data as $item)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->username }}</td>
                                                <td>{{ $item->password }}</td>
                                                <td>{{ $item->status }}</td>
                                                <td>{{ $item->role }}</td>
                                            </tr>
                                        @endforeach
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