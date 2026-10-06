@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h3 class="mb-4">Dashboard</h3>
    <div class="row g-3">
        <div class="col-md-4">
            <div class="card shadow-sm"><div class="card-body">
                <div class="text-muted">Total Buku</div>
                <h2>{{ $totalBooks }}</h2>
            </div></div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm"><div class="card-body">
                <div class="text-muted">Total Kategori</div>
                <h2>{{ $totalCategories }}</h2>
            </div></div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm"><div class="card-body">
                <div class="text-muted">Total Stok</div>
                <h2>{{ $totalStock }}</h2>
            </div></div>
        </div>
    </div>
@endsection