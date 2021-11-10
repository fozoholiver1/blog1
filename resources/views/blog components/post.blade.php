<div class="col-lg-8 entries">

   <div>
       @foreach($posts as $post)
           <article class="entry">

               <div class="entry-img">
                   <img src="{{$post->featured_image}}" alt="" class="img-fluid">
               </div>
               <h2 class="entry-title">

                   <a href="blog-single.html">{{$post->title}}</a>
               </h2>
               <div class="entry-meta">
                   <ul>
                       <li class="d-flex align-items-center"><i class="icofont-user"></i> <a
                               href="blog-single.html">{{$post->user->name}}</a></li>
                       <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i>
                           <a href="blog-single.html">
                               <time datetime="2020-01-01">{{ $post->published_at }}</time>
                           </a></li>
                       <li class="d-flex align-items-center"><i class="icofont-comment"></i>
                           <a href="blog-single.html">12 Comments</a></li>
                   </ul>
               </div>

               <div class="entry-content">
                   <p>
                       {{ $post->summary }}
                   </p>
                   <div class="read-more">
                       <a href="/posts/{{$post->id}}">Read More</a>
                   </div>
               </div>
           </article><!-- End blog entry -->
       @endforeach

       <div class="blog-pagination">
           <ul class="justify-content-center">
               {{ $posts->links() }}
           </ul>
       </div>

   </div>
</div><!-- End blog entries list -->
