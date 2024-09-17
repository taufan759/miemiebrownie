@extends('backend.layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $sub }} <br><br></h5>
                <table id="example" class="table-striped table-bordered display table" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No Pesanan</th>
                            <th>Status</th>
                            <th>Tanggal</th>
                            <th>Nama Customer</th>
                            <th>Alamat Lengkap</th>
                            <th>Produk</th>
                            <th>Total</th>
                            <th>Metode Pembayaran</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pesanan as $index => $row)
                            <tr>
                                <td align="center">{{ $index + 1 }}</td>
                                <td>{{ $row->no_pesanan }}</td>
                                <td align="center">
                                    <span class="badge badge-success">Batal</span>
                                </td>
                                <td>{{ \Carbon\Carbon::parse($row->tanggal)->timezone('Asia/Jakarta')->format('d M Y H:i') }}</td>
                                <td>{{ $row->nama_customer }}</td>
                                <td>{{ $row->alamat }}</td>
                                <td>
                                    @foreach($row->items as $item)
                                        {{ $item->produk->nama_produk }} ({{ $item->jumlah_pesanan }}){{ !$loop->last ? ',' : '' }}
                                    @endforeach
                                </td>
                                <td>{{ $row->total }}</td>
                                <td>
                                    @switch($row->metode_pembayaran)
                                        @case('bank_transfer')
                                            <span>Transfer Bank</span>
                                            @break
                                        @case('credit_card')
                                            <span>Kartu Kredit</span>
                                            @break
                                        @case('cod')
                                            <span>Bayar di Tempat (COD)</span>
                                            @break
                                        @default
                                            <span>Belum Bayar</span>
                                    @endswitch
                                </td>                                                       
                                <td align="center">
                                    <form method="POST" action="{{ route('pesanan.destroy', $row->id) }}" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-xs show_confirm" data-konf-delete="{{ $row->no_pesanan }}">
                                            <i class="fa fa-trash"></i> Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>                             
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
