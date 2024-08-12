@extends('backend.layouts.app')
@section('content')
<div class="row small-spacing">
    <div class="col-xs-12">
        <div class="box-content">
            <h4 class="box-title">
                <b>{{ $sub }}</b><br><br>
                <a href="{{ route('subkategori.create') }}" title="Tambah Data">
                    <span class="btn btn-success btn-xs waves-effect waves-light">Tambah</span>
                </a>
            </h4>
            <!-- /.dropdown js__dropdown -->
            <table id="example" class="table-striped table-bordered display table" style="width:100%">
                <thead>
                    <tr>
                        <th align="center">No</th>
                        <th>SubKategori</th>
                        <th>Kategori</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($subkategori as $index => $row)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td align="center">{{ $row->nama_subkategori }}</td>
                        <td align="center">{{ $row->kategori->nama_kategori }}</td>
                        <td align="center">
                            @if ($row->status == 1)
                                <div class="badge badge-notice notice-danger">Aktif</div>
                            @else
                                <div class="badge badge-notice notice-success">Tidak Aktif</div>
                            @endif
                        </td>
                        <td align="center">
                            <a href="{{ route('subkategori.edit', $row->id) }}" title="Ubah Data">
                                <span class="btn btn-primary btn-xs waves-effect waves-light"><i class="fa fa-edit"></i> Ubah</span>
                            </a>
                            <form method="POST" action="{{ route('subkategori.destroy', $row->id) }}" style="display: inline-block;">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-xs waves-effect waves-light show_confirm" data-toggle="tooltip" title="Hapus" data-konf-delete="{{ $row->nama_subkategori }}"><i class="fa fa-trash"></i> Hapus</button>
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