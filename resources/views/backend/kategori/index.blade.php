@extends('backend.layouts.app')
@section('content')
    <div class="row small-spacing">
        <div class="col-xs-12">
            <div class="box-content">
                <h4 class="box-title"><b>{{ $sub }}</b><br><br>
                    <a href="{{ route('kategori.create') }}" title="Tambah Data">
                        <span class="btn btn-success btn-xs waves-effect waves-light">Tambah</span>
                    </a>
                </h4>
                <!-- /.dropdown js__dropdown -->
                <table id="example" class="table-striped table-bordered display table" style="width:100%">
                    <thead>
                        <tr>
                            <th align="center">No</th>
                            <th>Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kategori as $index => $row)
                            <tr>
                                <td align="center">{{ $index + 1 }}</td>
                                <td> {{ $row->nama_kategori }} </td>
                                <td align="center">
                                    <a href="{{ route('kategori.edit', $row->id) }}" title="Ubah Data">
                                        <span class="btn btn-primary btn-xs waves-effect waves-light"><i
                                                class="fa fa-edit"></i>Ubah</span>
                                    </a>
                                    <form method="POST" action="{{ route('kategori.destroy', $row->id) }}"
                                        style="display: inline-block;">
                                        @method('delete')
                                        @csrf
                                        <button type="button"
                                            class="btn btn-danger btn-xs waves-effect waves-light show_confirm"
                                            data-toggle="tooltip" title='Delete' data-konf-delete="{{ $row->kategori }}"><i
                                                class="fa fa-trash"></i>Hapus</button></button>
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
