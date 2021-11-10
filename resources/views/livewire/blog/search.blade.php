<div>

    <div class="sidebar-item search-form">
        <form>
            <input wire:model="search" type="text" placeholder="Search posts..."/>
            {{--            <button type="submit"><i class="icofont-search"></i></button>--}}
        </form>

    </div><!-- End sidebar search form-->

    <h3 class="sidebar-title">Search for Topics</h3>
    <div class="sidebar-item categories">
        @foreach($posts as $post)
            <ul>
                <li><a href="/posts/{{$post->id}}">{{$post->title}} </a></li>
            </ul>
        @endforeach

    </div>
</div>
{{--    <!-- End sidebar categories-->--}}


