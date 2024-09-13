@extends('backend.layouts.app')
@section('content')
    <script src="{{ asset('sweetalert/jquery-3.6.0.min.js') }}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <div class="card-header">
        <h4 class="box-title">{{ $sub }}</h4>
        <div class="card white box-content">
            <div class="card-body">
                <form action="{{ route('pesanan.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Nama Penerima</label>
                        <input type="text" name="nama_customer" value="{{ old('nama_customer') }}"
                               class="form-control @error('nama_customer') is-invalid @enderror"
                               placeholder="Masukkan Nama Lengkap">
                        @error('nama_customer')
                        <span class="invalid-feedback alert-danger" role="alert">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Nama Produk</label>
                        <select class="form-control @error('produk_id') is-invalid @enderror" name="produk_id" id="produk">
                            <option value="" selected>-- Pilih Produk --</option>
                            @foreach ($produk as $row)
                                <option value="{{ $row->id }}">{{ $row->nama_produk }}</option>
                            @endforeach
                        </select>
                        @error('produk_id')
                        <span class="invalid-feedback alert-danger" role="alert">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Harga Satuan</label>
                        <input type="text" disabled name="harga" class="form-control @error('harga') is-invalid @enderror"
                               placeholder="Harga Satuan" id="harga">
                        @error('harga')
                        <span class="invalid-feedback alert-danger" role="alert">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Jumlah Pesanan</label>
                        <input type="number" name="jumlah_pesanan" value="{{ old('jumlah_pesanan') }}"
                               class="form-control @error('jumlah_pesanan') is-invalid @enderror" placeholder="Jumlah Pesanan">
                        @error('jumlah_pesanan')
                        <span class="invalid-feedback alert-danger" role="alert">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror"
                                  placeholder="Masukkan Alamat Lengkap">{{ old('alamat') }}</textarea>
                        @error('alamat')
                        <span class="invalid-feedback alert-danger" role="alert">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Total Pesanan</label>
                        <input type="text" name="total_pesanan" value="{{ old('total_pesanan') }}"
                               class="form-control @error('total_pesanan') is-invalid @enderror" placeholder="Total Pesanan">
                        @error('total_pesanan')
                        <span class="invalid-feedback alert-danger" role="alert">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Metode Pembayaran</label>
                        <select name="metode_pembayaran" class="form-control @error('metode_pembayaran') is-invalid @enderror">
                            <option value="0" {{ old('metode_pembayaran') == '0' ? 'selected' : '' }}>-- Pilih Metode Pembayaran --</option>
                            <option value="1" {{ old('metode_pembayaran') == '1' ? 'selected' : '' }}>Transfer Bank</option>
                            <option value="2" {{ old('metode_pembayaran') == '2' ? 'selected' : '' }}>COD - Cek Dulu</option>
                            <option value="3" {{ old('metode_pembayaran') == '3' ? 'selected' : '' }}>COD</option>
                        </select>
                        @error('metode_pembayaran')
                        <span class="invalid-feedback alert-danger" role="alert">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Status Pesanan</label>
                        <select name="status_pesanan" class="form-control @error('status_pesanan') is-invalid @enderror">
                            <option value="pending" {{ old('status_pesanan') == 'pending' ? 'selected' : '' }}>Pending</option>
                            <option value="proses" {{ old('status_pesanan') == 'proses' ? 'selected' : '' }}>Proses</option>
                            <option value="selesai" {{ old('status_pesanan') == 'selesai' ? 'selected' : '' }}>Selesai</option>
                            <option value="batal" {{ old('status_pesanan') == 'batal' ? 'selected' : '' }}>Batal</option>
                        </select>
                        @error('status_pesanan')
                        <span class="invalid-feedback alert-danger" role="alert">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" class="btn btn-success btn-xs waves-effect waves-light">Simpan</button>
                            <a href="{{ route('pesanan.index') }}">
                                <button type="button" class="btn btn-danger btn-xs waves-effect waves-light">Kembali</button>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        $(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#produk').on('change', function () {
                let produk_id = $(this).val();
                $.ajax({
                    type: 'POST',
                    url: "{{ route('backend/getIdProduk') }}",
                    data: {produk_id: produk_id},
                    success: function (response) {
                        $('#harga').val(response.hargaProduk);
                    },
                    error: function () {
                        $('#harga').val('');
                        alert('Terjadi kesalahan. Silakan coba lagi nanti.');
                    }
                });
            });
        });
    </script>
@endsection
