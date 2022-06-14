<div class="px-4 py-8 max-w-xl">
    <div class="bg-white shadow-2xl" >
        <div>
            <a href="{{route("posts.show",$post->id)}}">
                <img src="/storage/posts/{{$post->image}}">
            </a>
        </div>
        <div class="px-4 py-2 mt-2 bg-white">
            <a href="{{route("posts.show",$post->id)}}">
                <h2 class="font-bold text-2xl text-gray-800">{{$post->title}}</h2>
            </a>
            <p class="sm:text-sm text-xs text-gray-700 px-2 mr-1 my-3">
                {!! $post->preview !!}
            </p>
        </div>
    </div>
</div>
