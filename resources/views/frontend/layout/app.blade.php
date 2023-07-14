@include('frontend.layout.top')
@include('frontend.layout.menu')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            @yield('content')
        </div>
    </main>
</div>
@include('frontend.layout.bottom')
