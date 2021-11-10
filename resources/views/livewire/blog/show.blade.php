<main id="main">

    {{--    <!-- ======= Breadcrumbs ======= -->--}}
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <h2>{{$post->title}}</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    {{--    <!-- ======= Blog Section ======= -->--}}
    <section id="blog" class="blog">
        <div class="container">

            <div class="row">

                <div class="col-lg-8 entries">

                    <article class="entry entry-single">

                        <div class="entry-img">
                            <img src="{{$post->featured_image}}" alt="" class="img-fluid">
                        </div>

                        <h2 class="entry-title">
                            <a href="blog-single.html">
                                {{$post->title}}
                            </a>
                        </h2>

                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="icofont-user"></i> <a
                                        href="blog-single.html">{{$post->user->name}}</a></li>
                                <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a
                                        href="blog-single.html">
                                        <time datetime="2020-01-01">{{$post->published_at}} </time>
                                    </a></li>
                                <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a
                                        href="blog-single.html">12 Comments</a></li>
                            </ul>
                        </div>

                        <div class="entry-content">
                            <p>
                                {!! $post->body !!}
                            </p>

                        </div>

                        <div class="entry-footer clearfix">
                            <div class="float-left">

                                <div class="float-right share">
                                    <livewire:social-share-button :post="$post"/>
                                </div>

                            </div>
                        </div>

                    </article><!-- End blog entry -->

                    <div class="blog-author clearfix">
                        <img src="assets/img/blog-author.jpg" class="rounded-circle float-left" alt="">
                        <h4>Author: {{$post->user->name}}</h4>
                        <div class="social-links">
                            <a href="https://twitters.com/#"><i class="icofont-twitter"></i></a>
                            <a href="https://facebook.com/#"><i class="icofont-facebook"></i></a>
                            <a href="https://instagram.com/#"><i class="icofont-instagram"></i></a>
                        </div>
                        <p>
                            {{$post->user->summary}}
                        </p>
                    </div><!-- End blog author bio -->


                </div><!-- End blog entries list -->

                <div class="col-lg-4">

                    <div class="sidebar">

                        <h3 class="sidebar-title">Search</h3>
                        <livewire:blog.search/>

                        <h3 class="sidebar-title">Recent Posts</h3>
                        <livewire:post/>


                        <h3 class="sidebar-title">Tags</h3>
                        <div class="sidebar-item tags">
                            <livewire:blog.tags/>
                        </div><!-- End sidebar tags-->

                    </div><!-- End sidebar -->

                </div><!-- End blog sidebar -->

            </div>

        </div>
    </section><!-- End Blog Section -->

</main><!-- End #main -->
