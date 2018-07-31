<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>@yield('page-title')</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="{{ asset('css/style.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/flaticon.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/owl.carousel.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/magnific-popup.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('vendor/slick-1.8.1/slick/slick.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('vendor/slick-1.8.1/slick/slick-theme.css')}}" rel="stylesheet" type="text/css" />
</head>
<body>
    <header class="header-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="site-logo">
                        <h2><a href="#">Saikat Sanyal</a></h2>
                        <p>Its my online presence</p>
                    </div>
                </div>
                <div class="col-md-8 text-md-right header-buttons">
                    <a href="{{ route('cv.download') }}" class="site-btn">Download CV</a>
                    <a href="{{ route('images.file') }}" class="site-btn">Upload Images</a>
                    <a href="{{ route('admin.timeline') }}" class="site-btn">Show Time Line</a>
                </div>
            </div>
        </div>
    </header>
    <section class="hero-section spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero-text">
                                <h2>Saikat Sanyal</h2>
                                <p>I’m a Web Developer in love with photography, painting and discovering new worlds and cultures.</p>
                            </div>
                            <div class="hero-info">
                                <h2>General Info</h2>
                                <ul>
                                 @foreach($general_infos as $general_info)
                                    <li><span>Date of Birth</span>{{ $general_info->date_of_birth}}</li>
                                    <li><span>Address</span>{{ $general_info->address}}</li>
                                    <li><span>E-mail</span>{{ $general_info->email}}</li>
                                    <li><span>Phone </span>{{ $general_info->phone}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <figure class="hero-image">
                                @foreach($files as $file)
                                <img src="{{asset('storage/store/'.$file->name)}}" class="img-rounded" alt="5">
                                @endforeach
                            </figure>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="social-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <div class="social-link-warp">
                        <div class="social-links">
                            <a href="//github.com/SaikatSanyal"><i class="fa fa-github"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a>
                            <a href=""><i class="fa fa-instagram"></i></a>
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-twitter"></i></a>
                        </div>
                        <h2 class="hidden-md hidden-sm">My Social Profiles</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="resume-section spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-7 offset-xl-2">
                <div class="section-title">
                    <h2>Work Experience</h2>
                </div>
                <ul class="resume-list">
                     @foreach($experiences as $experience)
                    <li>
                        <h2>{{ $experience->duration }}</h2>
                        <h3>{{ $experience->company_name }}</h3>
                        <h4>{{ $experience->position }}</h4>
                        <p>{{ $experience->message }} </p>
                    </li>
                    <li>
                        <h2>Feb,2018-March,2018</h2>
                        <h3>Robi</h3>
                        <h4>Project Engineer</h4>
                        <p>Sit amet, consectetur adipiscing elit. Sed porttitor orci ut sapien scelerisque viverra. Sed trist ique justo nec mauris efficitur, ut lacinia elit dapibus. In egestas elit in dap ibus laoreet. Duis magna libero, fermentum ut facilisis id, pulvinar eget tortor. Vestibulum pelle ntesque tincidunt lorem, vitae euismod felis porttitor sed. </p>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="review-section spad pb-0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-7 offset-xl-2">
                <div class="section-title">
                    <h2>References</h2>
                </div>
                <div class="review-slider owl-carousel">
                    <div class="single-review">
                        <div class="qut">“</div>
                        <p>Sit amet, consectetur adipiscing elit. Sed porttitor orci ut sapien scelerisque viverra. Sed trist ique justo nec mauris efficitur, ut lacinia elit dapibus. In egestas elit in dap ibus laoreet. Duis magna libero, fermentum ut facilisis id, pulvinar eget tortor. Vestibulum pelle ntesque tincidunt lorem, vitae euismod felis porttitor sed. </p>
                        <h3>Barshon Sen</h3>
                        <h4>Lecturer, RUET</h4>
                    </div>
                    <div class="single-review">
                        <div class="qut">“</div>
                        <p>Sit amet, consectetur adipiscing elit. Sed porttitor orci ut sapien scelerisque viverra. Sed trist ique justo nec mauris efficitur, ut lacinia elit dapibus. In egestas elit in dap ibus laoreet. Duis magna libero, fermentum ut facilisis id, pulvinar eget tortor. Vestibulum pelle ntesque tincidunt lorem, vitae euismod felis porttitor sed. </p>
                        <h3>Zaynul Abadin Tuhin</h3>
                        <h4>Senior Data Analytics, Augmedix</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <section class="extra-section spad pb-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-8 offset-xl-2">
                    <div class="section-title">
                        <h2>Extra Skills</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 pt-5">
                            <div class="fact-box trans">
                                <div class="fact-content">
                                    <div class="circle-progress">
                                        <div id="progress1" class="prog-circle"></div>
                                        <div class="progress-info">
                                            <h2>70%</h2>
                                        </div>
                                        <div class="prog-title">
                                            <h3>Motivation</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 pt-5">
                            <div class="fact-box trans">
                                <div class="fact-content">
                                    <div class="circle-progress">
                                        <div id="progress2" class="prog-circle"></div>
                                        <div class="progress-info">
                                            <h2>90%</h2>
                                        </div>
                                        <div class="prog-title">
                                            <h3>Management</h3>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="fact-box">
                                <div class="fact-content">
                                    <img src="images/icon/1-w.png" alt="">
                                    <h2>6</h2>
                                    <p>Months of Experience</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="fact-box">
                                <div class="fact-content">
                                    <!-- <img src="img/icon/2-w.png" alt=""> -->
                                    <h2>2</h2>
                                    <p>Awards Won</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-section spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-8 offset-xl-2">
                    <div class="section-title">
                        <h2>Contact Me</h2>
                    </div>
                    <form class="contact-form" action="{{ route('images.store')}}" method="post"  enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text"name='name'    placeholder="Name">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name='email' placeholder="E-mail">
                            </div>
                            <div class="col-md-12">
                                <input type="text" name='subject' placeholder="Subject">
                            </div>
                            <div class="col-md-12">
                                <input type="text" name='message' placeholder="Message">
                            </div>
                            <div>
                                <input type='hidden' name='_token' value='{{csrf_token()}}'>
                            </div>

                        </div>
                        <div class="text-md-right">
                            <button class="site-btn">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer-section">
        <div class="container text-center">
            <div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by <i class="fa fa-heart-o" aria-hidden="true"></i> by Saikat Sanyal</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </div>
        </div>
    </footer>

    <script src="{{asset("js/jquery-3.3.1.min.js") }}"></script>
    <script src="{{asset("js/bootstrap.min.js") }}"></script>
    <script src="{{asset("js/owl.carousel.min.js") }}"></script>
    <script src="{{asset("js/magnific-popup.min.js") }}"></script>
    <script src="{{asset("js/circle-progress.min.js") }}"></script>
    <script src="{{asset("js/main.js")}}"></script>
    <script src="{{asset("vendor/slick-1.8.1/slick/slick.js") }}"></script>
    <script type="text/javascript">
    $(document).ready (function(){
        $('.hero-image').slick({
            autoplay: true,
             autoplaySpeed: 1000,
        });
    });

    </script>
</body>

</html>
