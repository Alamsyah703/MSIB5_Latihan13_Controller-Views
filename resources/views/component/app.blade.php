@include('component.header')

<nav class="navbar navbar-expand-lg ">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
           data-bs-theme="dark">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" id="nav" href="{{ url('/landing') }}">Home</a>
                <a class="nav-link" id="nav" href="{{ url('/landing/profile') }}">Profile</a>
                <a class="nav-link" id="nav" href="{{ url('landing/campus') }}">Campus</a>
            </div>
        </div>
    </div>
</nav>



{{-- Section yang akan diisi oleh kontent web --}}
@yield('content')

{{-- Only Bootstrap --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>


</html>
