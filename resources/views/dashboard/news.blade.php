@extends('layouts.dashboard')

@section('content')

<div>
  <div class="card pd-20 pd-sm-40">
    <div class="d-flex">
      <div class="mr-auto">
        <h6 class="card-body-title">Data Berita</h6>
        <p class="mg-b-20 mg-sm-b-30"></p>
      </div>
      <div>
        <button class="btn btn-dark rounded" data-toggle="modal" data-target="#tambah">Tambah</button>
      </div>
    </div>
  
    <div class=" table-responsive">
      <table id="myTable" class="table table-bordered display bg-white">
        <thead>
          <tr>
            <th style="width: 10px">No</th>
            <th style="min-width: 200px">Judul berita</th>
            <th style="min-width: 200px">Isi</th>
            <th>Foto</th>
            <th style="min-width: 120px">Tanggal posting</th>
            <th style="width: 60px">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($news as $n) 
          <tr>
            <td class="text-center">{{$loop->iteration}}</td>
            <td>{{$n->title}}</td>
            <td>{{substr($n->body,0,80)}}...</td>
            <td>
              <img src="/assets/img/news/{{$n->image}}" alt="" style="width: 100px; aspect-ratio:4/3; object-fit: cover">
            </td>
            @php
              $date = date_create($n->created_at);
            @endphp
            <td>{{date_format($date,"d/m/Y")}}</td>
            <td>
              <button class="btn btn-icon btn-dark rounded p-1 px-2"><i class="fa fa-pencil"></i></button>
              <button class="btn btn-icon btn-danger rounded p-1 px-2"><i class="fa fa-times"></i></button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div><!-- table-wrapper -->
  </div><!-- card -->
</div>

<!-- BASIC MODAL -->
<div id="tambah" class="modal fade">
  <div class="modal-dialog modal-lg modal-dialog-vertical-center" role="document">
    <div class="modal-content bd-0 tx-14">
      <div class="modal-header pd-y-20 pd-x-25">
        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Tambah Berita</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal-body pd-25 bb bt">
          <div class="row mb-2">
            <div class="col-12">
              <label>Judul berita</label>
              <input type="text" class="form-control" id="title" name="title" required>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-7">
              <label>Slug/Permalink</label>
              <input type="text" class="form-control" id="slug" name="slug" required>
            </div>
            <div class="col-5">
              <label>Gambar</label>
              <label class="custom-file">
                <input type="file" id="file" name="image" class="custom-file-input" required>
                <span class="custom-file-control"></span>
              </label>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-12">
              <label>Isi berita</label>
              <textarea class="form-control" name="body" rows="10" required></textarea>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-info pd-x-20" name="submit" value="store">Submit</button>
          <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Batal</button>
        </div>
      </form>
    </div>
  </div><!-- modal-dialog -->
</div><!-- modal -->

@endsection

@section('script')
  <script>
    $("#title").on('keyup', function () {
      var judul = $("#title").val();
      var link = judul.replace(/[^a-z0-9]+/gi, '-').replace(/^-*|-*$/g, '').toLowerCase();
      $("#slug").val(link);
    });
  </script>

  <script type="application/javascript">
    $('input[type="file"]').change(function(e){
        var fileName = e.target.files[0].name;
        $('.custom-file-control').html(fileName);
    });
  </script>
    
@endsection