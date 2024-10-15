@extends('layout')

@section('content')
    <h1>Sửa Thông Tin Xe Ô Tô</h1>
    <form action="{{ route('cars.update', $car) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="car_name">Tên Xe</label>
            <input type="text" name="car_name" class="form-control" value="{{ $car->car_name }}" required>
        </div>
        <div class="form-group">
            <label for="car_color">Màu Xe</label>
            <input type="text" name="car_color" class="form-control" value="{{ $car->car_color }}" required>
        </div>
        <div class="form-group">
            <label for="car_price">Giá Xe</label>
            <input type="number" name="car_price" class="form-control" value="{{ $car->car_price }}" step="0.01" required>
        </div>
        <div class="form-group">
            <label for="car_description">Miêu Tả</label>
            <input type="text" name="car_description" class="form-control" value="{{ $car->car_description }}" required>
        </div>
        <button type="submit" class="btn btn-warning">Cập Nhật</button>
    </form>
@endsection
