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
                Edit data
            </div>
            <div class="card-body">
                <form action="{{ route('index.update', $id->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ $id->nama }}">
                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jenis">Jenis:</label>
                        <select type="text" class="form-control @error('jenis') is-invalid @enderror" id="jenis" name="jenis">
                            <option value="Express" {{ $id->jenis == 'Express' ? 'selected' : '' }}>Paket Express (Rp. 10.000/Kg)</option>
                            <option value="Regular" {{ $id->jenis == 'Regular' ? 'selected' : '' }}>Paket Regular (Rp. 7.000/Kg)</option>
                            <option value="Premium" {{ $id->jenis == 'Premium' ? 'selected' : '' }}>Paket Premium (Rp. 15.000/Kg)</option>
                            <option value="Bed Cover & Selimut" {{ $id->jenis == 'Bed Cover & Selimut' ? 'selected' : '' }}>Paket Bed Cover & Selimut (Rp. 20.000)</option>
                            <option value="Sepatu" {{ $id->jenis == 'Sepatu' ? 'selected' : '' }}>Paket Sepatu (Rp. 25.000)</option>
                        </select>
                        @error('jenis')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="berat">Berat:</label>
                        <input type="text" class="form-control @error('berat') is-invalid @enderror" id="berat" name="berat" value="{{  $id->berat }}">
                        @error('berat')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi:</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi">{{ $id->deskripsi }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="status">Status:</label>
                        <select class="form-control @error('status') is-invalid @enderror" id="status" name="status">
                            <option value="Belum Lunas" {{ $id->status == 'Belum Lunas' ? 'selected' : '' }}>Belum Lunas</option>
                            <option value="Lunas" {{ $id->status == 'Lunas' ? 'selected' : '' }}>Lunas</option>
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