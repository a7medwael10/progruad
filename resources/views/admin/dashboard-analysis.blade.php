@extends('admin.dashboard')

@section('content')
    <h2>احصائيات</h2>
    <div class="card-container">
        <!-- Card for Product Count -->
        <div class="card">
            <div class="card-icon">
                <i class="fas fa-cogs"></i> <!-- Product icon (you can replace it with any icon you like) -->
            </div>
            <h3 class="card-title">عدد المنتجات</h3>
            <p class="card-value">{{count($products)}}</p> <!-- Replace 120 with dynamic value if needed -->
        </div>

        <!-- Card for Regions -->
        <div class="card">
            <div class="card-icon">
                <i class="fas fa-globe"></i> <!-- Regions icon (you can replace it with any icon you like) -->
            </div>
            <h3 class="card-title">عدد ارقام التواصل</h3>
            <p class="card-value">{{count($contacts)}}</p> <!-- Replace 5 with dynamic value if needed -->
        </div>
    </div>

@endsection
