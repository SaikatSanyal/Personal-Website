
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
                    <a href="{{ route('images.file') }}" class="site-btn">Upload Images</a>
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

                        </div>
                        <div class="col-lg-4">
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
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Duration</th>
                                    <th>Company Name</th>
                                    <th>Postion</th>
                                    <th>Message</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($experiences as $experience)
                                <tr>
                                    <td>{{ $experience->duration  }}</td>
                                    <td>{{ $experience->company_name }}</td>
                                    <td>{{ $experience->position }}</td>
                                    <td>{{ $experience->message }}</td>
                                    <td>
                                        <a class="btn btn-primary btn-sm" href="{{ route('experience.edit', $experience->id) }}"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                                    </td>
                                    <td>
                                        {!! Form::open(['route'=>['experience.delete',$experience->id],'method'=> 'delete']) !!}
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                        {!! Form::close() !!}
                                    </a>
                                </td>

                            </tr>
                            @endforeach
                            <td>
                                <a class="btn btn-primary btn-sm" href="{{ route('experience.create') }}"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Create</a>
                            </td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <section class="resume-section spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-7 offset-xl-2">
                    <div class="section-title">
                        <h2>General Info</h2>
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Date of Birth</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>Phone</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($general_infos as $general_info)
                            <tr>
                                <td>{{ $general_info->date_of_birth  }}</td>
                                <td>{{ $general_info->address }}</td>
                                <td>{{ $general_info->email }}</td>
                                <td>{{ $general_info->phone }}</td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="{{ route('general_info.edit', $general_info->id) }}"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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

    <section class="resume-section spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-7 offset-xl-2">
                    <div class="section-title">
                        <h2>Skills</h2>
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Skills</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($skills as $skill)
                            <tr>
                                <td>{{ $skill->skill_name  }}</td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="{{ route('skill.edit', $skill->id) }}"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                                </td>
                            </tr>
                            @endforeach
                            <td>
                                <a class="btn btn-primary btn-sm" href="{{ route('skill.create') }}"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Create</a>
                            </td>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-7 offset-xl-2">
                    <div class="section-title">
                        <h2>Time Lines</h2>
                        <a class="btn btn-primary btn-sm" href="{{ route('skill.create') }}"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Create</a>
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Year</th>
                                <th>Info</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($timelines as $timeline)
                            <tr>
                                <td>{{ $timeline->year  }}</td>
                                <td>{{ $timeline->info }}</td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="{{ route('timelines.edit', $timeline->id) }}"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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
        $('.hero-image').slick();
    });

</script>
</body>

</html>
