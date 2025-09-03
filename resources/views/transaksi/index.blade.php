@extends('layouts.app', ['title' => 'Data Penerbit'])
@section('content')

<!-- MODAL -->
<div class="modal fade" id="modal-default">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button><br>
                <h4 class="modal-title"> TAMBAH TRANSAKSI BUKU</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="{{ url('transaksi') }}">
                    @csrf
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">KODE TRANSAKSI</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="txtkode" value="{{ $kode_otomatis }}" readonly placeholder="Tanggal Pinjam" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" rows="2" oninput="setCustomValidity('')" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">NAMA PEMINJAM</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="cbanggota" required>
                                <option value="">Choose...</option>
                                @foreach ($anggota as $data )
                                    <option value="{{ $data->id }}">{{ $data->nama_anggota }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">PILIH BUKU</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="cbbuku" required>
                                <option value="">Choose...</option>
                               @foreach ($buku as $data )
                                   <option value="{{ $data->id }}">{{ $data->judul_buku }}</option>
                               @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">TANGGAL PINJAM</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" name="tgl_pinjam" value="{{ date('Y-m-d') }}" readonly placeholder="Tanggal Pinjam" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" rows="2" oninput="setCustomValidity('')" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">TANGGAL KEMBALI</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" name="tgl_kembali" value="{{ now()->addDays(3)->format('Y-m-d') }}" readonly />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-undo"></i> Cencel</button>
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
            <h3 class="box-title">DATA PINJAMAN BUKU</h3>
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
                        <th>KODE TRANSAKSI</th>
                        <th>NAMA BUKU</th>
                        <th>NAMA PEMINJAM</th>
                        <th>TANGGAL PINJAM</th>
                        <th>JATUH TEMPO</th>
                        <th>STATUS</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transaksi as $no=>$data )
                        <tr>
                            <td>{{ $no+ 1 }}</td>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->judul_buku }}</td>
                            <td>{{ $data->nama_anggota }}</td>
                            <td>{{ $data->tgl_pinjam }}</td>
                            <td>{{ $data->tgl_kembali }}</td>
                            <td>
                                @if ($data->status === 'Masa Pinjaman')
                                    <span class="label label-success">{{ $data->status }}</span>
                                @elseif ($data->status === 'Masa Denda')
                                    <span class="label label-danger">{{ $data->status }}</span>
                                @endif
                            </td>
                            <td>
								<a href="{{ route('transaksi.perpanjang', $data->id) }}" onclick="return confirm('Perpanjang Data Ini ?')" title="Perpanjang" class="btn btn-success">
                                    <i class="glyphicon glyphicon-upload"></i>
                                </a>
                                
                                <a href="{{ route('transaksi.kembalikan', $data->id) }}" onclick="return confirm('Kembalikan Buku Ini ?')" title="Kembalikan" class="btn btn-danger">
                                    <i class="glyphicon glyphicon-download"></i>
                                </a>
							</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection