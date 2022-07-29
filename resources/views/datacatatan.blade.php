@extends('layout.main')
@section('content')
    <div class="page-header">
              <nav aria-label="breadcrumb">
              </nav>
            </div>
            <h1 class="text-center mt-3 mb-4">Catatan Perjalanan</h1>
            <div class="card mb-3 p-3">
              <h6>urutkan berdasarkan</h6>
                <select class="form-select" aria-label="Default select example" id="urut" onclick="urutkan(this)">
                  <option value="1">Tanggal</option>
                  <option value="2">Waktu</option>
                  <option value="3">Suhu Tubuh</option>
                </select>
              <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-primary mt-2" type="button" value="urutkan">Urutkan</button>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <table class="table table-striped" id="myTable">
                      <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Tanggal</th>
                          <th scope="col">Waktu</th>
                          <th scope="col">Lokasi</th>
                          <th scope="col">Suhu Tubuh</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php
                          $no = 1;
                        @endphp
                        @foreach($data as $row)
                          <tr>
                            <th scope="row">{{$no++}}</th>
                            <td>{{$row->tanggal}}</td>
                            <td>{{$row->waktu}}</td>
                            <td>{{$row->lokasi}}</td>
                            <td>{{$row->suhutubuh}}</td>
                          </tr> 
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <script src="js/main.js"></script>
@endsection