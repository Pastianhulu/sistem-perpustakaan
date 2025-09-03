@extends('layouts.app', ['title' => 'Edit DATA BUKU'])
@section('content')
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">EDIT NEWS</h3>
            </div>
            <form class="form-horizontal" method="POST" action="{{ route('anggota.update',$data->id) }}">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">NAMA ANGGOTA</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="txtnama" value="{{ $data->nama_anggota }}" placeholder="Masukan Nama" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">JENIS KELAMIN</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="txtjenis_kelamin" value="{{ $data->jenis_kelamin }}" placeholder="Masukan Nama" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">TELEPON </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="txttelepon" value="{{ $data->telepon }}" placeholder="Masukan telepon" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" rows="2" oninput="setCustomValidity('')" />
                        </div>
                    </div>
                   
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">TANGGAL LAHIR </label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" name="txttgl_lahir" value="{{ $data->tgl_lahir }}" placeholder="Tanggal lahir" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" rows="2" oninput="setCustomValidity('')" />
                        </div>
                    </div>
                   
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">ALAMAT </label>
                        <div class="col-sm-9">
                            <textarea type="text" class="form-control" name="txtalamat" placeholder="Masukan alamat" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" rows="2" oninput="setCustomValidity('')">{{ $data->alamat }}</textarea>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" onClick="window.location.href='{{ route('anggota.index') }}'">CLOSE</button>
                        <input type="submit" name="btnedit" class="btn btn-success" value="SIMPAN">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
