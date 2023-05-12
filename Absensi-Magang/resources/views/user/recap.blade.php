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
                                                <th>Masuk</th>
                                                <th>Keluar</th>
                                                <th>Status</th>
                                                <th>IP Address</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($presence as $presence)
                                                <tr>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $presence->created_at->format('d M Y') }}</td>
                                                    <td>{{ $presence->check_in ?? '-'}}</td>
                                                    <td>{{ $presence->check_out ?? '-' }}</td>
                                                    <td>{{ $presence->status }}</td>
                                                    <td>{{ $presence->ip_address }}</td>
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
