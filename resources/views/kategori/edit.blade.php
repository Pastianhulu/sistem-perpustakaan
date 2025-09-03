@extends('layouts.app', ['title' => 'Edit DATA BUKU'])
@section('content')
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">EDIT NEWS</h3>
            </div>
            <form class="form-horizontal" method="POST" action="{{ route('kategori.update', $kategori->id) }}">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">NAMA KATAGORI</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="txtkategori" value="{{ $kategori->nama_kategori }}" placeholder="Masukan Kategori" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">DESKRIPSI</label>
                        <div class="col-sm-9">
                            <textarea type="text" class="form-control" name="txtdeskripsi"  placeholder="" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')">{{ $kategori->deskripsi }}</textarea>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" onClick="window.location.href='{{ route('kategori.index') }}'">CLOSE</button>
                        <input type="submit" name="btnedit" class="btn btn-success" value="SIMPAN">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
