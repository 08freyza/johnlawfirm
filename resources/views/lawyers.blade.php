@extends('layout.main')

@push('link')

@endpush

@section('content')
    <section id="teams-page" class="d-flex align-items-center">
        <div class="container py-5 my-3">
            <div class="row g-3 align-items-center">
                <div id="teams-page-title" class="col-12 text-center">
                    <h1 class="fs-45 pb-2 mt-0 mb-5 text-special-navy">Our Team</h1>
                </div>
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{ asset('img/team/team-1.jpg') }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="fa-brands fa-twitter"></i></a>
                                <a href=""><i class="fa-brands fa-facebook"></i></a>
                                <a href=""><i class="fa-brands fa-instagram"></i></a>
                                <a href=""><i class="fa-brands fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4><a href="" class="text-decoration-none">Walter White</a></h4>
                            <span>Chairman / Managing Partner</span>
                            <p>Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{ asset('img/team/team-4.jpg') }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="fa-brands fa-twitter"></i></a>
                                <a href=""><i class="fa-brands fa-facebook"></i></a>
                                <a href=""><i class="fa-brands fa-instagram"></i></a>
                                <a href=""><i class="fa-brands fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4><a href="" class="text-decoration-none">Amanda Jepson</a></h4>
                            <span>Deputy Managing Partner</span>
                            <p>Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{ asset('img/team/team-3.jpg') }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="fa-brands fa-twitter"></i></a>
                                <a href=""><i class="fa-brands fa-facebook"></i></a>
                                <a href=""><i class="fa-brands fa-instagram"></i></a>
                                <a href=""><i class="fa-brands fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4><a href="" class="text-decoration-none">William Anderson</a></h4>
                            <span>Deputy Managing Partner</span>
                            <p>Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{ asset('img/team/team-2.jpg') }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="fa-brands fa-twitter"></i></a>
                                <a href=""><i class="fa-brands fa-facebook"></i></a>
                                <a href=""><i class="fa-brands fa-instagram"></i></a>
                                <a href=""><i class="fa-brands fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4><a href="" class="text-decoration-none">Sarah Jhonson</a></h4>
                            <span>Deputy Chairman / Managing Partner</span>
                            <p>Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('script')

@endpush
