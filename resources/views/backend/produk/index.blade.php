@extends('backend.v_layouts.app')
@section('content')
    <div class="row small-spacing">
        <div class="col-xs-12">
            <div class="box-content">
                <h4 class="box-title"><b>{{ $sub }}</b><br><br>
                    <a href="{{ route('produk.create') }}" title="Tambah Data">
                        <span class="btn btn-success btn-xs waves-effect waves-light">Tambah</span>
                    </a>
                </h4>
                <!-- /.box-title -->
                <div class="dropdown js__drop_down">
                    <a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
                    <ul class="sub-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else there</a></li>
                        <li class="split"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                    <!-- /.sub-menu -->
                </div>
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
                                        <span class="btn btn-primary btn-xs waves-effect waves-light"><i
                                                class="fa fa-edit"></i>Ubah</span>
                                    </a>
                                    <form method="POST" action="{{ route('produk.destroy', $row->id) }}"
                                        style="display: inline-block;">
                                        @method('delete')
                                        @csrf
                                        <button type="button"
                                            class="btn btn-danger btn-xs waves-effect waves-light show_confirm"
                                            data-toggle="tooltip" title='Delete' data-konf-delete="{{ $row->berita }}"><i
                                                class="fa fa-trash"></i>Hapus</button></button>
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
