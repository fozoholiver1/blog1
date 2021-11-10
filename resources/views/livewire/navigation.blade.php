

{{--<!-- ======= Header ======= -->--}}
<header id="header">
    <div class="container d-flex justify-content-between">

        <div class="logo">
            <h1 class="text-light"><a href="index.html"><span>Eterna</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="/">Home</a></li>

                <li class="drop-down"><a href="#">About</a>
                    <ul>
                        <li><a href="{{route('about')}}">About Us</a></li>
                    </ul>
                </li>

                {{--                <li><a href="services.html">Services</a></li>--}}
                <li><a href="{{route('donate')}}">Donate</a></li>
                <li><a href="{{route('blog_index')}}">Blog</a></li>
                <li><a href="{{route('contact')}}">Contact</a></li>
                <li><a href="{{route('volunteer')}}">Volunteer</a></li>
                <li><a href="{{route('messages')}}">messages</a></li>
                <li><a href="/canvas">Signin</a></li>

            </ul>
        </nav><!-- .nav-menu -->

    </div>
</header><!-- End Header -->
