<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Layout Page')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>
<body>

<nav class="navbar navbar-expand-lg bg-dark navbar-dark" dir="rtl" style="text-align: right;">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="#">المكتب الليبي لإدارة المشاريع الهندسية</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
  <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">الرئيسية</a>
</li>
<li class="nav-item">
  <a class="nav-link {{ request()->is('projects') ? 'active' : '' }}" href="/projects">المشاريع</a>
</li>
<li class="nav-item">
  <a class="nav-link {{ request()->is('customer_payments') ? 'active' : '' }}" href="/customer_payments">دفعات الزبائن</a>
</li>
<li class="nav-item">
  <a class="nav-link {{ request()->is('material_invoices') ? 'active' : '' }}" href="/material_invoices">فواتير المواد</a>
</li>
<li class="nav-item">
  <a class="nav-link {{ request()->is('technician_invoices') ? 'active' : '' }}" href="/technician_invoices">فواتير الفنيين</a>
</li>
<li class="nav-item">
  <a class="nav-link {{ request()->is('rental_invoices') ? 'active' : '' }}" href="/rental_invoices">فواتير التأجير</a>
</li>
<li class="nav-item">
  <a class="nav-link {{ request()->is('office_fee_invoices') ? 'active' : '' }}" href="/office_fee_invoices">فواتير أتعاب المكتب</a>
</li>
<li class="nav-item">
  <a class="nav-link {{ request()->is('customers') ? 'active' : '' }}" href="/customers">الزبائن</a>
</li>
<li class="nav-item">
  <a class="nav-link {{ request()->is('employees') ? 'active' : '' }}" href="/employees">الموظفين</a>
</li>
<li class="nav-item">
  <a class="nav-link {{ request()->is('technicians') ? 'active' : '' }}" href="/technicians">الفنيين</a>
</li>
<li class="nav-item">
  <a class="nav-link {{ request()->is('stores') ? 'active' : '' }}" href="/stores">المحلات</a>
</li>
      </ul>
    </div>
  </div>
</nav>





@yield('content')

<footer class="bg-dark text-white py-3 mt-3">
    <p>&copy; 2025</p>
</footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>

