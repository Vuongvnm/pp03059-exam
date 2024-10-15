@extends('layout')

@section('content')
    <h1>Thêm Mới Xe Ô Tô</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{ route('cars.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="car_name">Tên Xe</label>
            <input type="text" name="car_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="car_color">Màu Xe</label>
            <input type="text" name="car_color" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="car_price">Giá Xe</label>
            <input type="number" name="car_price" class="form-control" step="0.01" required>
        </div>
        <div class="form-group">
            <label for="car_description">Miêu Tả</label>
            <input type="text" name="car_description" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Thêm Mới</button>
    </form>
@endsection
