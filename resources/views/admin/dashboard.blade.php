<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="{{asset('assets')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css"
          integrity="sha384-DOXMLfHhQkvFFp+rWTZwVlPVqdIhpDVYT9csOnHSgWQWPX0v5MCGtjCJbY6ERspU" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets')}}/css/admin.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/all.css">
</head>
<body>


<div class="sidebar" id="sidebar">
    <button class="toggle-button" onclick="toggleSidebar()"><i class="fa-solid fa-bars"></i></button>
    <img src="{{asset('assets/images/logo2.png')}}" alt="">
    <h2>لوحة التحكم</h2>
    <ul>
        <li><a href="{{route('admin.dashboard-analysis')}}">احصائيات</a>
        </li>
        <li><a href="{{route('admin.products.index')}}">المنتجات</a></li>
        <li><a href="{{route('admin.contacts.index')}}">ارقام التواصل</a></li>
        <li>
            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button type="submit">خروج</button>
            </form>
        </li>

    </ul>
</div>

<div class="main-content" id="content-area">
    <div class="nav-toggle">
        <button class="toggle-nav" onclick="toggleSidebar()"><i class="fa-solid fa-bars"></i></button>
       <img dir="ltr" src="{{asset('assets/images/logo2.png')}}" alt="">

    </div>
    @yield('content')
</div>


<script>
    function toggleSidebar() {
        const sidebar = document.querySelector('.sidebar');
        sidebar.classList.toggle('open');
    }

    function showConfirmModal() {
        // Show the modal
        var confirmModal = new bootstrap.Modal(document.getElementById('confirmModal'));
        confirmModal.show();
    }
</script>


<!-- jQuery and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
