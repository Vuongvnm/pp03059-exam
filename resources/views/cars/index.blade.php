@extends('layout')

@section('content')
    <h1>Danh Sách Xe Ô Tô</h1>
    
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    
    <a href="{{ route('cars.create') }}" class="btn btn-primary">Thêm Mới</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên Xe</th>
                <th>Màu Xe</th>
                <th>Giá Xe</th>
                <th>Miêu Tả</th>
                <th>Hành Động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cars as $car)
                <tr>
                    <td>{{ $car->id }}</td>
                    <td>{{ $car->car_name }}</td>
                    <td>{{ $car->car_color }}</td>
                    <td>{{ $car->car_price }}</td>
                    <td>{{ $car->car_description }}</td>
                    <td>
                        <a href="{{ route('cars.edit', $car) }}" class="btn btn-warning">Sửa</a>
                        <form action="{{ route('cars.destroy', $car) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">Xóa</button>
                        </form>
                        <a href="{{ route('cars.show', $car) }}" class="btn btn-info">Chi Tiết</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
