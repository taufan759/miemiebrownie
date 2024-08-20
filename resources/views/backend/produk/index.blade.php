@extends('backend.layouts.app')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{$sub}} <br><br>
                    <a href="{{ route('produk.create') }}" title="Tambah data">
                        <button type="button" class="btn btn-success btn-xs waves-effect waves-light">Tambah</button>
                    </a>
                </h5>
                <!-- /.dropdown js__dropdown -->
                <table id="example" class="table-striped table-bordered display table" style="width:100%">
                    <thead>
                        <tr align="center">
                            <th>No</th>
                            <th>Kategori</th>
                            <th>Status</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    <tbody>
                        @foreach ($produk as $index => $row)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td align="center"> {{ $row->kategori->nama_kategori }} </td>
                                <td align="center">
                                    @if ($row->status == 1)
                                        <div class="badge badge-notice notice-danger">Aktif</div>
                                    @else
                                        <div class="badge badge-notice notice-success">Tidak Aktif</div>
                                    @endif
                                </td>
                                <td align="center"> {{ $row->nama_produk }} </td>
                                <td>Rp. {{ number_format($row->harga, 0, ',', '.') }} </td>
                                <td align="center">
                                    <a href="{{ route('produk.edit', $row->id) }}" title="Ubah Data">
                                        <span class="btn btn-success btn-xs waves-effect waves-light"><i
                                                class="fa fa-edit"></i>Ubah</span>
                                    </a>
                                    <form method="POST" action="{{ route('produk.destroy', $row->id) }}" style="display: inline-block;">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-xs waves-effect waves-light show_confirm" 
                                            data-toggle="tooltip" title="Hapus" data-konf-delete="{{ $row->nama_produk }}">
                                            <i class="fa fa-trash"></i> Hapus
                                        </button>
                                    </form>

                                </td>
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
