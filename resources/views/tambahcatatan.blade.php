@extends('layout.main')
@section('content')
<div class="container">
<div class="row justify-content-center">
 <div class="col-8">
    <div class="card">
        <div class="card-body">
            <form action="{{route('insertdata')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <h1 class="text-center mt-3 mb-4">Catatan Perjalanan</h1>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Waktu</label>
                    <input type="text" name="waktu" class="form-control" id="exampleInputPassword1">
                  </div>
                    <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Lokasi</label>
                    <input type="text" name="lokasi" class="form-control" id="exampleInputPassword1">
                  </div>
                    <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Suhu Tubuh</label>
                    <input type="text" name="suhutubuh" class="form-control" id="exampleInputPassword1">
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
      </div>
    </div>
 </div>
</div>
@endsection