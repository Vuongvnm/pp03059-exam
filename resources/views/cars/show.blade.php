@extends('layout')

@section('content')
    <h1>Chi Tiết Xe Ô Tô</h1>
    <p><strong>Tên Xe:</strong> {{ $car->car_name }}</p>
    <p><strong>Màu Xe:</strong> {{ $car->car_color }}</p>
    <p><strong>Giá Xe:</strong> {{ $car->car_price }}</p>
    <p><strong>Miêu Tả:</strong> {{ $car->car_description }}</p>
    <a href="{{ route('cars.index') }}" class="btn btn-primary">Quay Lại</a>
@endsection
