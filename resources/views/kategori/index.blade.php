@extends('layouts.app', ['title' => 'Data Kategori'])
@section('content')

<!-- MODAL -->
<div class="modal fade" id="modal-default">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button><br>
                <h4 class="modal-title"> TAMBAH KATEGORI</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="{{ url('kategori') }}">
                    @csrf
                   
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">NAMA KATAGORI</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="txtkategori" placeholder="Masukan Kategori" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">DESKRIPSI</label>
                        <div class="col-sm-9">
                            <textarea type="text" class="form-control" name="txtdeskripsi" placeholder="" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">CENCEL</button>
                        <input type="submit" name="btnsimpan" class="btn btn-info" value="SIMPAN">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="col-md-12">
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">DATA KATAGORI</h3>
        </div>
        <div class="box-body">
             <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
                <i class="fa fa-plus-circle">  Tambah Data</i>
          </button>
        </div>
        <div class="box-body table-responsive">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th width="10">No</th>
                        <th>NAMA KATAGORI</th>
                        <th>DESKRIPSI</th>
                        <th width="10">Edit</th>
                        <th width="10">Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kategori as $no=> $data)
                    <tr>
                        <td>{{ $no+ 1 }}</td>
                        <td>{{ $data->nama_kategori }}</td>
                        <td>{{ $data->deskripsi }}</td>
                        <td><a href="{{ route('kategori.edit', $data->id) }}" class="btn btn-warning"><i class="fa fa-edit"></i></a></td>
                        <td><form action="{{ route('kategori.destroy', $data->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                        </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection