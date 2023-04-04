@extends('layouts.main-admin')
@section('container')
<div id="main">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Tambah Nilai</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tambah User</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Masukkan Data</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" action="/insert" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="mb-3">
                                        <label class="form-label">Nama</label>
                                        <input type="text" name="name" class="form-control" placeholder="Masukkan Nama">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Presence id</label>
                                        <input type="text" name="presence_id" class="form-control" placeholder="Masukkan Nama">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">username</label>
                                        <input type="text" name="username" class="form-control" placeholder="Masukkan username">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <input type="text" name="password" class="form-control" placeholder="Masukkan Password">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Status</label>
                                        <select class="form-select" aria-label="Default select example" name="status">
                                            <option selected>WFH atau WFO</option>
                                            <option value="WFH">WFH</option>
                                            <option value="WFO">WFO</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Role</label>
                                        <select class="form-select" aria-label="Default select example" name="role">
                                            <option selected>Admin atau Student</option>
                                            <option value="admin">admin</option>
                                            <option value="students">students</option>
                                        </select>
                                    </div>

                                    <div class="col-12 d-flex justify-content-end pt-5">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection