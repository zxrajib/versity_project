@include('partials.header')
@yield('content_without_container')

<div class="container-fluid">
@yield('content')
</div>
@include('partials.footer')
