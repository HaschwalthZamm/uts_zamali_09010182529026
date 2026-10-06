@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="mb-0">Daftar Buku</h3>
        <a href="{{ route('books.create') }}" class="btn btn-primary">+ Tambah Buku</a>
    </div>

    <form method="GET" action="{{ route('books.index') }}" class="row g-2 mb-3">
        <div class="col-md-5">
            <input type="text" name="search" value="{{ request('search') }}"
                   class="form-control" placeholder="Cari judul atau penulis...">
        </div>
        <div class="col-md-4">
            <select name="category_id" class="form-select">
                <option value="">Semua kategori</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}"
                        {{ request('category_id') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="col-md-3">
            <button class="btn btn-dark">Cari</button>
            <a href="{{ route('books.index') }}" class="btn btn-outline-secondary">Reset</a>
        </div>
    </form>

    <div class="card shadow-sm">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Kategori</th>
                        <th>Tahun</th>
                        <th>Stok</th>
                        <th class="text-end">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($books as $book)
                        <tr>
                            <td>{{ $books->firstItem() + $loop->index }}</td>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->author }}</td>
                            <td><span class="badge bg-info text-dark">{{ $book->category->name }}</span></td>
                            <td>{{ $book->year }}</td>
                            <td>{{ $book->stock }}</td>
                            <td class="text-end">
                                <a href="{{ route('books.show', $book) }}" class="btn btn-sm btn-outline-primary">Detail</a>
                                <a href="{{ route('books.edit', $book) }}" class="btn btn-sm btn-outline-warning">Edit</a>
                                <form action="{{ route('books.destroy', $book) }}" method="POST" class="d-inline"
                                      onsubmit="return confirm('Yakin hapus buku ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-outline-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="7" class="text-center text-muted py-4">Data buku tidak ditemukan.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-3">{{ $books->links() }}</div>
@endsection