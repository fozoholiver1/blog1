@foreach($posts as $post)
    <div class="sidebar-item recent-posts">
        <div class="post-item clearfix">
            <img src="{{$post->featured_image}}" alt="">
            <h4><a href="blog-single.html">{{$post->title}}</a></h4>
            <time datetime="2020-01-01">{{$post->published_at}}</time>
        </div>
    </div>
@endforeach
