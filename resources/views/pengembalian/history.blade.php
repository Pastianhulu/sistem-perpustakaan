@extends('layouts.app', ['title' => 'Data Penerbit'])
@section('content')

<!-- MODAL -->


<div class="col-md-12">
    <div class="box box-info">
        <div class="box-body">
            <div class="text-center">
                <h3><b>History Pengembalian Buku</b></h3>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th width="10">No</th>
                        <th>NAMA BUKU</th>
                        <th>NAMA PEMINJAM</th>
                        <th>TANGGAL PENGEMBALIAN</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kembali as $no=>$data )
                        <tr>
                            <td>{{ $no+1 }}</td>
                            <td>{{ $data->judul_buku }}</td>
                            <td>{{ $data->nama_anggota }}</td>
                            <td>{{ $data->tgl_kembali }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection