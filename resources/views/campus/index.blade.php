@extends('component.app')
@section('content')

    <body id="body-campus">
        <div class="d-flex justify-content-center align-items-center">
            <h2 id="campus-name">UPN VETERAN JAWA TIMUR</h2>
        </div>

        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('images/campus/base-e1616602706267.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Kampus Bela Negara</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('images/campus/AIPT-e1616602753165.png') }}" class="card-img-top" alt="logo">
                        <div class="card-body">
                            <h5 class="card-title text-center">Raih Akreditasi A</h5>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('images/campus/base-e1616602706267 (1).png') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Internationally Accredited Programme By FIBAA</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Awal Footer -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-2 mb-4 text-center" style="color: lightgray; margin-top: 250px;">
            <h6 class="text-uppercase fw-bold mb-500">Contact</h6>
            <p><i class="fas fa-home me-3"></i> Jl.Raya Rungkut Madya, Gunung Anyar, Surabaya</p>
            <p><i class="fas fa-phone me-3"></i> Telp : +62 (031) 870 6369</p>
            <p><i class="fas fa-print me-3"></i> Fax. : +62 (031) 870 6372</p>
        </div>
        <!-- Akhir Footer -->
    </body>
@endsection
