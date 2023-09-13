@extends('template.master')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Input Data Buku</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/book/store" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">tanggal_Peminjaman</label>
                    <input type="text" class="form-control" name="Tanggal_Peminjaman" placeholder="Input tanggal peminjaman">
                    <label for="exampleInputEmail1">tanggal_kembali</label>
                    <input type="text" class="form-control" name="tanggal_kembali" placeholder="Input tanggal kembali">
                    <label for="exampleInputEmail1">id_buku</label>
                    <input type="text" class="form-control" name="id_buku" placeholder="Input id buku">
                    <label for="exampleInputEmail1">id_anggota</label>
                    <input type="number" class="form-control" name="id_anggota" placeholder="Input id anggota">
                    <label for="exampleInputEmail1">id_petugas</label>
                    <input type="number" class="form-control" name="id_petugas" placeholder="Input id petugas
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" value="Save" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
@endsection
