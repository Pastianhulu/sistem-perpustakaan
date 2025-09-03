@extends('layouts.app', ['title' => 'Data Penerbit'])
@section('content')

<!-- MODAL -->
<div class="modal fade" id="modal-default">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button><br>
                <h4 class="modal-title"> TAMBAH PENERBIT</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="{{ url('penerbit') }}">
                    @csrf
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">NAMA PENERBIT</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="txtnama" placeholder="Masukan Nama" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">TELEPON </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="txttelepon" placeholder="Masukan telepon" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" rows="2" oninput="setCustomValidity('')" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">ALAMAT </label>
                        <div class="col-sm-9">
                            <textarea type="text" class="form-control" name="txtalamat" placeholder="Masukan alamat" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" rows="2" oninput="setCustomValidity('')"></textarea>
                        </div>
                    </div>
                   
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-undo"></i> CENCEL</button>
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
            <h3 class="box-title">DATA AGGOTA</h3>
        </div>
        <div class="box-body">
             <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
                <i class="fa fa-plus-circle"> Tambah Data</i>
          </button>
        </div>
        <div class="box-body table-responsive">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th width="10">No</th>
                        <th>NAMA PENERBIT</th>
                        <th>TELEPON</th>
                        <th>ALAMAT</th>
                        <th width="10">Edit</th>
                        <th width="10">Hapus</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($penerbit as $no=>$data)
                  <tr>
                    <td>{{ $no + 1 }}</td>
                    <td>{{ $data ->nama_penerbit }}</td>
                    <td>{{ $data ->telepon }}</td>
                    <td>{{ $data ->alamat }}</td>
                    <td><a href="{{ route('penerbit.edit', $data->id) }}" class="btn btn-warning"><i class="fa fa-edit"></i></a></td>
                    <td>
                        <form action="{{ route('penerbit.destroy', $data->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')" >
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