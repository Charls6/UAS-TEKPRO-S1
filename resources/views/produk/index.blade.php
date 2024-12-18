@extends('layoutes.main')
@section('content')
    <div class="container-fluid px-4">
        <h1 class="text-center mt-4">Clean & Cozy's</h1>
        <ol class="breadcrumb mt-auto">
            <li class="breadcrumb-item active">Express Laundry</li>
        </ol>
 
        <div class="card mb-4">
            <div class="card-header">
                <a href="{{ route('index.create') }}" class="btn btn-sm btn-primary">Tambah pesanan <i class="fas fa-pencil"></i></a>
            </div>
            <div class="card-body"> 
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Paket</th>
                            <th>Harga</th>
                            <th>Deskripsi</th>
                            <th>Status</th>
                            <th width="280px">Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Paket</th>
                            <th>Harga</th>
                            <th>Deskripsi</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($produk as $k)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $k->nama }}</td>
                            <td>{{ $k->jenis }}</td>
                            <td>Rp. {{ number_format($k->harga, 0, ',', '.') }}</td>
                            <td>{{ $k->deskripsi }}</td>
                            <td>{{ $k->status }}</td>
                            <td>
                                <a href="{{ route('index.receipt', $k->id) }}" class="btn btn-sm btn-secondary"><i class="fas fa-receipt"></i></a>
                                <a href="{{ route('index.edit', $k->id) }}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $k->id }}">
                                    <i class="fas fa-trash"></i>
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="deleteModal{{ $k->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $k->id }}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="deleteModalLabel{{ $k->id }}">Hapus Produk</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Apakah anda yakin akan menghapus data {{ $k->nama }}?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <form action="{{ route('index.destroy', $k->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
@endsection
