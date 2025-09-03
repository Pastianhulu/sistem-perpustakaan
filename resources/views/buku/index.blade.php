@extends('layouts.app', ['title' => 'Data Buku'])
@section('content')

<!-- MODAL -->
<div class="modal fade" id="modal-default">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button><br>
                <h4 class="modal-title"> TAMBAH BUKU</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="{{ url('buku') }}">
                    @csrf
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">JUDUL BUKU</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="txtjudul" placeholder="Judul" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">PENULIS</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="txtpenulis" placeholder="Pengarang" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txtkategori" class="col-sm-3 control-label">KATEGORI BUKU</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="txtkategori" id="txtkategori" required>
                                <option value="">--Pilih--</option>
                                @foreach ($kategory as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama_kategori }}</option>                                    
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">PENERBIT</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="txtpenerbit" required>
                                <option value="">--Pilih--</option>
                                @foreach ($penerbit as $data )
                                <option value="{{ $data->id }}">{{ $data->nama_penerbit }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">TAHUN TERBIT</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="txttahunterbit" placeholder="Tahun terbit" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                        </div>
                    </div>
                   
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">CENCEL</button>
                        <input type="submit" name="btnsimpan" class="btn btn-success" value="SIMPAN">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="col-md-12">
    <div class="box box-info">
        <div class="box-header with-border">
            <button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#modal-default">
                <i class="fa fa-plus-circle">  Tambah Data</i>
            </button>
        </div>
        <div class="box-header">
            <h3 class="box-title">DATA BUKU</h3>
        </div>
        <div class="box-body table-responsive">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th width="10">No</th>
                        <th>JUDUL BUKU</th>
                        <th>PENULIS</th>
                        <th>KATEGORI</th>
                        <th>PENERBIT</th>
                        <th>TAHUN TERBIT</th>
                        <th width="10">Edit</th>
                        <th width="10">Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    
                   @foreach ($buku as $no=>$data)
                   <tr>
                    <td>{{ $no+ 1 }}</td>
                    <td>{{ $data->judul_buku }}</td>
                    <td>{{ $data->penulis }}</td>
                    <td>{{ $data->nama_kategori }}</td>
                    <td>{{ $data->nama_penerbit }}</td>
                    <td>{{ $data->tahun_terbit }}</td>
                    <td><a href="{{ route('buku.edit', $data->id) }}" class="btn btn-warning"><i class="fa fa-edit"></i></a></td>
                    <td>
                        <form action="{{ route('buku.destroy', $data->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
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