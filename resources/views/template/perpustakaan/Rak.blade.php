@extends('template.master')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Input Data Rak</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/book/store" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">nama Rak</label>
                    <input type="text" class="form-control" name="nama_Rak" placeholder="Input nama Rak">
                    <label for="exampleInputEmail1">lokasi rak </label>
                    <input type="text" class="form-control" name="lokasi_rak" placeholder="Input lokasi rak">
                    <label for="exampleInputEmail1">buku_id</label>
                    <input type="text" class="form-control" name="buku_id" placeholder="Input buku id">
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" value="Save" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
@endsection
