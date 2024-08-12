@extends('backend.layouts.app')
@section('content')

<div class="row small-spacing">
  <div class="col-xs-12">
      <div class="box-content">
          <h4 class="card-title"><b>{{ $sub }}</b></h4>
          <div class="table-responsive">
            <h1>Selamat datang kembali <b>{{ $userName }}</b>, Semoga harimu menyenangkan :))</h1>
          </div>
      </div>
 <!-- template end-->
 @endsection
