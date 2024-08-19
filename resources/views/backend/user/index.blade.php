@extends('backend.layouts.app')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{$sub}} <br><br>
                    <a href="{{ route('user.create') }}" title="Tambah data">
                        <button type="button" class="btn btn-success btn-xs waves-effect waves-light">Tambah</button>
                    </a>
                </h5>
               
                <!-- /.dropdown js__dropdown -->
                <table id="example" class="table-striped table-bordered display table" style="width:100%">
                    <thead>
                        <tr align="center">
                            <th>No</th>
                            <th>Nama</th>
                            <th>Akses</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($index as $row)
                            <tr>
                                <td align="center"> {{ $loop->iteration }}</td>

                                <td> {{ $row->nama }} </td>
                                <td>
                                    @if ($row->is_admin == 1)
                                        Super Admin
                                    @else
                                        Administrator
                                    @endif
                                </td>
                                <td> {{ $row->email }} </td>
                                <td align="center">
                                    <a href="{{ route('user.edit', $row->id) }}" title="Ubah Data">
                                        <span class="btn btn-success btn-xs waves-effect waves-light"><i
                                                class="fa fa-edit"></i>Ubah</span>
                                    </a>
                                    <form method="POST" action="{{ route('user.destroy', $row->id) }}"
                                        style="display: inline-block;">
                                        @method('delete')
                                        @csrf
                                        <button type="button"
                                            class="btn btn-danger btn-xs waves-effect waves-light show_confirm"
                                            data-toggle="tooltip" title='Delete' data-konf-delete="{{ $row->nama }}"><i
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
