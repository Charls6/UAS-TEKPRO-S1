@extends('layoutes.main')
@section('content')
    <div class="container-fluid px-4">
        <h1 class="text-center mt-4">Clean & Cozy's</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Express Laundry</li>
        </ol>
 
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Tambah pesanan
            </div>
            <div class="card-body">
                <form action="{{ route('index.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}">
                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jenis">Jenis:</label>
                        <select type="text" class="form-control @error('jenis') is-invalid @enderror" id="jenis" name="jenis" value="{{ old('jenis') }}">
                            <option value="Express">Paket Express (Rp. 10.000/Kg)</option>
                            <option value="Regular">Paket Regular (Rp. 7.000/Kg)</option>
                            <option value="Premium">Paket Premium (Rp. 15.000/Kg)</option>
                            <option value="Bed Cover & Selimut">Paket Bed Cover & Selimut (Rp. 20.000)</option>
                            <option value="Sepatu">Paket Sepatu (Rp. 25.000)</option>
                        </select>
                        @error('jenis')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="berat">Berat:</label>
                        <input type="text" class="form-control @error('berat') is-invalid @enderror" id="berat" name="berat" value="{{ old('berat') }}">
                        @error('berat')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi:</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi">{{ old('deskripsi') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="status">Status:</label>
                        <select type="text" class="form-control @error('status') is-invalid @enderror" id="status" name="status" value="{{ old('status') }}">
                            <option value="Belum Lunas">Belum Lunas</option>
                            <option value="Lunas">Lunas</option>
                            </select>
                        @error('status')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <a href="{{ route('index.index') }}" class="btn btn-danger mt-4">
                        <i class="fas fa-arrow-left me-2"></i>Back
                    </a>
                    <button type="submit" class="btn btn-primary mt-4">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection