@extends('backend.layouts.app')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{$sub}} <br><br>
                    <a href="{{ route('customer.create') }}" title="Tambah data">
                        <button type="button" class="btn btn-success btn-xs waves-effect waves-light">Tambah</button>
                    </a>
                </h5>
                <!-- /.dropdown js__dropdown -->
                <table id="example" class="table-striped table-bordered display table" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>HP</th>
                            <th>Aksi</th>
                        </tr>
                    <tbody>
                        @foreach ($customer as $index => $row)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td> {{ $row->nama }} </td>
                                <td> {{ $row->email }} </td>
                                <td> {{ $row->hp }} </td>
                                <td align="center">
                                    <a href="{{ route('customer.edit', $row->id) }}" title="Ubah Data">
                                        <span class="btn btn-success btn-xs waves-effect waves-light"><i
                                                class="fa fa-edit"></i>Ubah</span>
                                    </a>
                                    <form method="POST" action="{{ route('customer.destroy', $row->id) }}" style="display: inline-block;">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-xs waves-effect waves-light show_confirm" 
                                            data-toggle="tooltip" title="Hapus" data-konf-delete="{{ $row->customer }}">
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
