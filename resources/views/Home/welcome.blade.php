@extends('layouts.app')

@section('content')
<header class="masthead text-center text-white d-flex">
    <div class="container my-auto">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h1 class="text-uppercase">
                    <strong>See what’s next.</strong>
                </h1>
                <hr>
            </div>
            <div class="col-lg-8 mx-auto">
                <p class="text-faded mb-5">WATCH ANYWHERE. CANCEL ANYTIME.</p>
                <a class="btn btn-primary btn-xl js-scroll-trigger" href="#">JOIN FREE FOR A MONTH</a>
            </div>
        </div>
    </div>
</header>
@endsection

@section('services')
<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto border-bottom-default">
                    <a href="#about" id="link_1" class="menu-nav-sel">
                        <i class="fas fa-4x fa-street-view text-default mb-3 sr-icon-1"></i>
                        <h3 class="mb-3">No commitments</h3>
                        <p class="text-muted mb-0"></p>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                    <a href="#watch" id="link_2" class="menu-nav-sel">
                        <i class="fas fa-4x fa-window-restore text-default mb-3 sr-icon-2"></i>
                        <h3 class="mb-3">Watch anywhere</h3>
                        <p class="text-muted mb-0"></p>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                    <a href="#price" id="link_3" class="menu-nav-sel">
                        <i class="fas fa-4x fa-code-branch text-default mb-3 sr-icon-3"></i>
                        <h3 class="mb-3">Pick your price</h3>
                        <p class="text-muted mb-0"></p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('about')
<section class="bg-primary hide" id="about" style="display: block">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto text-left mb-5">
                <h2 class="section-heading text-white">If you decide Netflix isn't for you - no problem. No commitment. Cancel online anytime.</h2>
                <hr class="light my-4">
                <a class="btn btn-light btn-xl" href="#">JOIN FREE FOR A MONTH</a>
            </div>
            <div class="col-lg-6 mx-auto text-center">
                <div class="images-about">
                    <img class="images-about-tag" src="images/cancelanytime.png">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('watch')
    <section class="bg-primary hide" id="watch" style="display: none">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-9 mx-auto text-left mb-5">
                    <h2 class="section-heading text-white">Watch TV shows and movies anytime, anywhere — personalized for you.</h2>
                </div>
                <div class="col-lg-3 mx-auto text-left mb-5">
                    <a class="btn btn-light btn-xl" href="#">JOIN FREE FOR A MONTH</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 mx-auto text-center">
                    <div class="images-about">
                        <img class="images-about-tag mb-5" src="images/asset_TV_UI.png">
                        <h2 class="section-heading text-white">Watch on your TV</h2>
                        <p class="text-muted mb-0">Smart TVs, PlayStation, Xbox, Chromecast, Apple TV, Blu-ray players and more.</p>
                    </div>
                </div>
                <div class="col-lg-4 mx-auto text-center">
                    <div class="images-about">
                        <img class="images-about-tag mb-5" src="images/asset_mobile_tablet_UI_2.png">
                        <h2 class="section-heading text-white">Watch instantly or download for later</h2>
                        <p class="text-muted mb-0">Available on phone and tablet, wherever you go.</p>
                    </div>
                </div>
                <div class="col-lg-4 mx-auto text-center">
                    <div class="images-about">
                        <img class="images-about-tag mb-5" src="images/asset_website_UI.png">
                        <h2 class="section-heading text-white">Use any computer</h2>
                        <p class="text-muted mb-0">Watch right on Netflix.com.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('price')
    <section class="bg-primary" id="price" style="display: none">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-9 mx-auto text-left mb-5">
                    <h2 class="section-heading text-white">Choose one plan and watch everything on Netflix.</h2>
                </div>
                <div class="col-lg-3 mx-auto text-left mb-5">
                    <a class="btn btn-light btn-xl" href="#">JOIN FREE FOR A MONTH</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 mx-auto text-center">
                    <!-- The data here would be retrieved from the database,
                         where show through the foreach
                     --->
                    <table class="table table-striped table-dark">
                        <thead>
                        <tr>
                            <th scope="col" class="text-left">Monthly price after free month ends on 1/1/19</th>
                            <th scope="col">BASIC</th>
                            <th scope="col">STANDARD</th>
                            <th scope="col">PREMIUM</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row" class="text-left">HD available</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-left">Ultra HD available</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-left">Screens you can watch on at the same time</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-left">Watch on your laptop, TV, phone and tablet</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-left">Unlimited movies and TV shows</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-left">Cancel anytime</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-left">First month free</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </section>
@endsection

@section('contact')
    <section id="contact">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-heading">Questions? Contact us.</h2>
                    <hr class="my-4">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 ml-auto text-center">
                    <i class="fas fa-phone fa-3x mb-3 sr-contact-1"></i>
                    <p>069/50-13-001</p>
                </div>
                <div class="col-lg-6 mr-auto text-center">
                    <i class="fas fa-envelope fa-3x mb-3 sr-contact-2"></i>
                    <p>
                        <a href="mailto:gagi.predojevic93@hotmail.com">gagi.predojevic93@hotmail.com</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection


@push('scripts')
    <script>
        $(document).ready(function () {

            $("#services").find('a').each(function () {
                var $el = $(this);
                var nm = $el.attr('id');
                $('#' + nm ).on('click', function (e) {
                    e.preventDefault();

                    switch (nm) {
                        case 'link_1':
                                $('#about').css({'display':'block'});
                                $('.service-box').find('#link_1').parent().css({'border-bottom':'5px solid #e50914'});
                                $('.service-box').find('#link_2').parent().css({'border-bottom':'none'});
                                $('.service-box').find('#link_3').parent().css({'border-bottom':'none'});
                                $('#watch').css({'display':'none'});
                                $('#price').css({'display':'none'});
                            break;
                        case 'link_2':
                                $('#watch').css({'display':'block'});
                                $('.service-box').find('#link_1').parent().css({'border-bottom':'none'});
                                $('.service-box').find('#link_2').parent().css({'border-bottom':'5px solid #e50914'});
                                $('.service-box').find('#link_3').parent().css({'border-bottom':'none'});
                                $('#price').css({'display':'none'});
                                $('#about').css({'display':'none'});
                            break;
                        case 'link_3':
                                $('#price').css({'display':'block'});
                                $('#about').css({'display':'none'});
                                $('.service-box').find('#link_1').parent().css({'border-bottom':'none'});
                                $('.service-box').find('#link_2').parent().css({'border-bottom':'none'});
                                $('.service-box').find('#link_3').parent().css({'border-bottom':'5px solid #e50914'});
                                $('#watch').css({'display':'none'});
                            break;
                    }

                });
            });

        });
    </script>
@endpush
