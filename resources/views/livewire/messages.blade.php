<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">


            <h2>Messages Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam officia provident sit.</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container">

            <div class="row">

                <div class="col-lg-auto entries">

                    <article class="entry">
                        <div class="d-flex  justify-content-lg-around bg-dark">

                            <div class="col-lg-7 m-lg-2 bg-info ">

                                @foreach($contacts as $contact)
                                    <div class=" p-3">


                                        <div class="bg-light">

                                            <h2 class="entry-title">
                                                <a href="blog-single.html">  {{$contact->subject}}</a>
                                            </h2>

                                            <div class="entry-meta">
                                                <ul>
                                                    <li class="d-flex align-items-center"><i class="icofont-user"></i>
                                                        <a
                                                            href="# "> {{$contact->name}}</a></li>
                                                    <li class="d-flex align-items-center"><i
                                                            class="icofont-wall-clock"></i> <a
                                                            href="# ">
                                                            <time
                                                                datetime="{{$contact->created_at}}"> {{$contact->created_at}}</time>
                                                        </a></li>
                                                    <li class="d-flex align-items-center"><i class="icofont-email"></i>
                                                        <a
                                                            href="#"> {{$contact->email}}</a></li>
                                                </ul>
                                            </div>

                                            <div class="entry-content">
                                                <p>
                                                    {{$contact->message}}
                                                </p>
                                                <div class="read-more">
                                                    <a wire:click="delete_contact( {{$contact->id}})">delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <div class="col-lg-7 m-lg-2 bg-success">
                                @foreach($voluntiers as $voluntier)
                                    <div class="p-3">


                                        <div class="bg-light">
                                            <h2 class="entry-title">
                                                <a href="blog-single.html">  {{$voluntier->subject}}</a>
                                            </h2>

                                            <div class="entry-meta">
                                                <ul>
                                                    <li class="d-flex align-items-center"><i class="icofont-user"></i>
                                                        <a
                                                            href="# "> {{$voluntier->name}}</a></li>
                                                    <li class="d-flex align-items-center"><i
                                                            class="icofont-wall-clock"></i> <a
                                                            href="# ">
                                                            <time
                                                                datetime="{{$voluntier->created_at}}"> {{$voluntier->created_at}}</time>
                                                        </a></li>
                                                    <li class="d-flex align-items-center"><i
                                                            class="icofont-comment"></i> <a
                                                            href="blog-single.html"> {{$voluntier->email}}</a></li>
                                                </ul>
                                            </div>

                                            <div class="entry-content">
                                                <p>
                                                    {{$voluntier->message}}
                                                </p>
                                                <div class="read-more">
                                                    <a wire:click="delete_voluntier( {{$voluntier->id}})">delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </article><!-- End blog entries list -->
                </div><!-- End blog entries list -->
            </div>
        </div>
    </section><!-- End Blog Section -->

</main><!-- End #main -->
