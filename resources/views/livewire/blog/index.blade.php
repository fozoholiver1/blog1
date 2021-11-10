<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container ">

{{--            <ol>--}}
{{--                <li><a href="index.html">Home Lorem ipsum dolor sit amet, consectetur.</a></li>--}}
{{--                <li>Blog Lorem ipsum dolor sit.</li>--}}
{{--            </ol>--}}
            <h2>Blog page</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Index Section ======= -->
    <section id="blog" class="blog">
        <div class="container">

            <div class="row">

                @include('blog components.post')

                <div class="col-lg-4">

                    <div class="sidebar">

                        <h3 class="sidebar-title">Search</h3>

                        <livewire:blog.search />

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
    </section><!-- End Index Section -->

</main><!-- End #main -->
