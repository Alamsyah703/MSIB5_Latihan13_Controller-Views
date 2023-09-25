@extends('component.app')
    <body>
        <!-- particles.js container -->
        <div id="particles-js">
            <h1>Hi, My name is Rizky Alamsyah</h1>
            <h2>Welcome to MyWebsite!</h2>
            <a href="{{ url('/landing/profile') }}">
                <button type="button" id="gobutton">Get Started</button>
            </a>
        </div>
        <!-- stats - count particles -->
        <div class="count-particles"></div>
    </body>
    <!-- Script Only -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="<KEY>" crossorigin="anonymous"></script>
    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> <!-- stats.js lib -->
    <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>

