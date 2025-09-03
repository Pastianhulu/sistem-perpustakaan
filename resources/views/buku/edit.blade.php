@extends('layouts.app', ['title' => 'Edit DATA BUKU'])
@section('content')
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">EDIT NEWS</h3>
            </div>
            <form class="form-horizontal" method="POST" action="{{ route('buku.update',$buku->id) }}">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">JUDUL BUKU</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="txtjudul" value="{{ $buku->judul_buku }}" placeholder="Judul" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">PENULIS</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="txtpenulis"  value="{{ $buku->penulis }}"  required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txtkategori" class="col-sm-3 control-label">KATEGORI BUKU</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="txtkategori" id="txtkategori" required>
                                <option value="">-- Masukkan Kategori --</option>
                                @foreach ($kategory as $data)
                                    <option value="{{ $data->id }}" {{ $data->id == $buku->id_kategory ? 'selected' : '' }}>{{ $data->nama_kategori }}</option>                                    
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">PENERBIT</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="txtpenerbit" required>
                                <option value="">--penerbit--</option>
                                @foreach ($penerbit as $data )
                                <option value="{{ $data->id }}" {{ $data->id ==$buku->id_penerbit ? 'selected' : '' }}>{{ $data->nama_penerbit }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">TAHUN TERBIT</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="txttahunterbit" required>
                                <option value="">-- Pilih Tahun --</option>
                                @for ($year = date('Y'); $year >= 1980; $year--)
                                    <option value="{{ $year }}" 
                                        {{ (old('txttahunterbit', $buku->tahun_terbit ?? '') == $year) ? 'selected' : '' }}>
                                        {{ $year }}
                                    </option>
                                @endfor
                            </select>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" onClick="window.location.href='{{ route('buku.index') }}'">CLOSE</button>
                        <input type="submit" name="btnedit" class="btn btn-success" value="SIMPAN">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
