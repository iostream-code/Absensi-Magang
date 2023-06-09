@extends('layouts.main-admin')
@section('container')
    <div id="main">
        <div class="page-heading">
            <h3>Data Presensi</h3>
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
                                                <th>#</th>
                                                <th>Nama</th>
                                                <th>Tanggal</th>
                                                <th>Jam</th>
                                                <th>Status</th>
                                                <th>IP Address</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($presence as $presence)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $presence->name }}</td>
                                                    <td>{{ $presence->created_at->format('d M Y') }}</td>
                                                    <td>{{ $presence->created_at->format('H:i') }}</td>
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
