<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.admin._header_link')
</head>

<body class="app sidebar-mini rtl">
<!-- Navbar-->
<header class="app-header">
    @include('layout.admin._header')
</header>
<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    @include('layout.admin._sidebar')
</aside>
<main class="app-content">
    @yield('content')
</main>
<!-- Essential javascripts for application to work and js file -->
@include('layout.admin._script_link')
<!-- Essential javascripts for application to work and js file -->
</body>
</html>
