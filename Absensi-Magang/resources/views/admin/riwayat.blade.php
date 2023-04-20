@extends('layouts.main-admin')
@section('container')
<div id="main">
    <div class="page-heading">
        <h3>Riwayat Absensi</h3>
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
                                            <th>Jam</th>
                                            <th>Status</th>
                                            <th>IP Address</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($presence as $item)
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->created_at->format('d M Y') }}</td>
                                            <td>{{ $item->created_at->format('H:i') }}</td>
                                            <td>{{ $item->status }}</td>
                                            <td>{{ $item->ip_address }}</td>
                                        </tr>    
                                        @endforeach
                                        {{-- <tr>
                                            <td>ghifari</td>
                                            <td>211101</td>
                                            <td>08:00</td>
                                            <td>wfh</td>
                                            <td>192.0.0.0.0</td>
                                        </tr>  --}}
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