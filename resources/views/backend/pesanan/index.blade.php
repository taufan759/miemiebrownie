@extends('backend.layouts.app')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{$sub}} <br><br>
                    <a href="{{ route('pesanan.create') }}" title="Tambah data">
                        <button type="button" class="btn btn-success btn-xs waves-effect waves-light">Tambah</button>
                    </a>
                </h5>
                <!-- /.dropdown js__dropdown -->
                <table id="example" class="table-striped table-bordered display table" style="width:100%">
                    <thead>
                        <tr>
                            <th align="center">No</th>
                            <th>No Pesanan</th>
                            <th>Status</th>
                            <th>Tanggal</th>
                            <th>Nama Customer</th>
                            <th>Alamat Lengkap</th>
                            <th>Jumlah</th>
                            <th>Total</th>
                            <th>Metode Pembayaran</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pesanan as $index => $row)
                            <tr>
                                <td align="center">{{ $index + 1 }}</td>
                                <td> {{ $row->no_pesanan }} </td>
                                <td align="center">
                                    @if ($row->status_pesanan == 0)
                                        <div class="label label-default">Menunggu</div>
                                    @elseif ($row->status_pesanan == 1)
                                        <div class="label label-success">Lunas</div>
                                    @elseif ($row->status_pesanan == 2)
                                        <div class="label label-info">Dikemas</div>
                                    @elseif ($row->status_pesanan == 3)
                                        <div class="label label-primary">Dikirim</div>
                                    @elseif ($row->status_pesanan == 4)
                                        <div class="label label-info">Diterima</div>
                                    @elseif ($row->status_pesanan == 5)
                                        <div class="label label-default">Selesai</div>
                                    @else
                                        <div class="label label-danger">Tidak Aktif</div>
                                    @endif
                                </td>
                                <td> {{ $row->created_at }} </td>
                                <td> {{ $row->nama_customer }} </td>
                                <td> {{ $row->alamat }} </td>
                                <td> {{ $row->jumlah_pesanan }} </td>
                                <td>Rp. {{ number_format($row->total_pesanan, 0, ',', '.') }} </td>
                                <td>
                                    @if ($row->metode_pembayaran == 0)
                                        <div>Menunggu</div>
                                    @elseif ($row->metode_pembayaran == 1)
                                        <div>Transfer Bank</div>
                                    @elseif ($row->metode_pembayaran == 2)
                                        <div>COD - Cek Dulu</div>
                                    @elseif ($row->metode_pembayaran == 3)
                                        <div>COD</div>
                                    @else
                                        <div>Belum Bayar</div>
                                    @endif
                                </td>
                                <td align="center">
                                    <a href="{{ route('pesanan.edit', $row->id) }}" title="Ubah Data">
                                        <span class="btn btn-success btn-xs waves-effect waves-light"><i
                                                class="fa fa-edit"></i>Ubah</span>
                                    </a>
                                    <form method="POST" action="{{ route('pesanan.destroy', $row->id) }}"
                                        style="display: inline-block;">
                                        @method('delete')
                                        @csrf
                                        <button type="button"
                                            class="btn btn-danger btn-xs waves-effect waves-light show_confirm"
                                            data-toggle="tooltip" title='Delete' data-konf-delete="{{ $row->no_pesanan }}"
                                            onclick=""><i class="fa fa-trash"></i>Hapus</button></button>
                                    </form>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.box-content -->
        </div>
        <!-- /.col-xs-12 -->
    </div>
@endsection
