@extends('backend.layouts.app')
@section('content')
<!-- template -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{$sub}} <br><br>
                    <a href="{{ route('kategori.create') }}" title="Tambah data">
                        <button type="button" class="btn btn-success btn-xs waves-effect waves-light">Tambah</button>
                    </a>
                </h5>
                <!-- /.dropdown js__dropdown -->
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <tr align="center">
                                <th>No</th>
                                <th>Kategori</th>
                                <th>Aksi</th>
                            </tr>
                        <tbody>
                        <tbody>
                            @foreach ($kategori as $index => $row)
                            <tr>
                                <td align="center">{{ $index + 1 }}</td>
                                <td align="center">{{ $row->nama_kategori }}</td>
                                <td align="center">
                                    <a href="{{ route('kategori.edit', $row->id) }}" title="Ubah Data">
                                        <span class="btn btn-success btn-xs waves-effect waves-light">
                                            <i class="fa fa-edit"></i> Ubah
                                        </span>
                                    </a>
                                    <form method="POST" action="{{ route('kategori.destroy', $row->id) }}" style="display: inline-block;">
                                        @method('delete')
                                        @csrf
                                        <button type="button" class="btn btn-danger btn-xs waves-effect waves-light show_confirm" data-toggle="tooltip" title='Delete' data-konf-delete="{{ $row->nama_kategori }}">
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
            <!-- /.box-content -->
        </div>
        <!-- /.col-xs-12 -->
    </div>
@endsection
