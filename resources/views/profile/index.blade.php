@extends('component.app')

@section('content')

    <body id="body-profile">

        <section id="about" class="about container">

            <h4 id="me">About Me</h4>
            <img src="{{ asset('images/profile/fotoprofil.jpg') }}" alt="Logo" id="profile-image">
            <h3 id="name">Rizky Alamsyah</h3>
            <p id="about-me">Halo! Saya adalah Rizky Alamsyah, seorang mahasiswa jurusan Sistem Informasi di UPN Veteran
                Jawa Timur. Jika
                Anda ingin berhubungan, saya dapat dijangkau melalui Instagram di @rizkyalamsyahb.

                Saya memiliki minat yang mendalam dalam dunia teknologi, khususnya dalam pengembangan web dan analisis
                sistem. Saat ini, saya tengah memusatkan perhatian pada pembelajaran berbagai aspek pengembangan web,
                termasuk HTML, JavaScript, CSS, dan PHP. Salah satu area yang sedang saya eksplorasi adalah pengembangan
                aplikasi web yang responsif dan interaktif.
        </section>

        <div class="footer">

            <div class="social-icons">
                <a href="https://www.instagram.com/rizkyalamsyahb/" target="_blank"><img
                        src="{{ asset('images/profile/instagram.png') }}" alt="Instagram"></a>
                <a href="https://www.linkedin.com/in/rizky-alamsyah-559130247//" target="_blank"><img
                        src="{{ asset('images/profile/linkedin.png') }}" alt="LinkedIn"></a>
                <a href="https://github.com/Alamsyah703" target="_blank"><img src="{{ asset('images/profile/github.png') }}"
                        alt="GitHub"></a>
            </div>
        </div>
        <a href="{{ url('/landing/campus') }}">
            <button type="button" id="campus-button">To my Campus</button>
        </a>
    </body>
@endsection
