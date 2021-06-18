@foreach ($posts as $post)
    <div class="idea-container flex bg-white rounded-xl ">
        <div class="border-r border-gray-200 px-5 py-8">
            <div class="text-center">
                <div class="font-semibold text-2xl">12</div>
                <div class="text-gray-500">Likes</div>
            </div>
            <div class="mt-12">
                <button class="w-20 bg-gray-200 font-bold text-xs uppercase border
                    hover:border-blue-400
                    rounded-xl px-4 py-3 transition duration-500 ease-in">Like
                </button>
            </div>
        </div>

        <div class="flex px-2 py-6" style="width: 100%;">
            <div class="mx-4 w-full" style="width: 100%;">
                <div class="flex">
                    <a href="" style="width: 100%;" class="flex">
                        <img src="{{asset('img/avt-ronaldo.jpg')}}" alt=""
                             class="w-14 h-14 rounded-xl mb-5"
                             style="width: 40px;height: 40px">
                        <div class="text-gray-600 mt-2.5 ml-3 hover:underline"
                             style="width: 200px"
                        >
                        {{$post->user->name}}
                        </div>
                    </a>
                </div>
                <div class="bg-gradient-to-r from-yellow-400
                                w-full
                                via-red-500 to-pink-500 ..." style="width: 95%;height: 300px"></div>
                <h4 class="text-xl font-semibold">
                    <a href="" class="hover:underline">{{$post->title}}</a>
                </h4>
                <div class="text-gray-600 mt-3 w-full" style="height: 30px;width: 100%">
                    {{$post->description}}
                </div>
                <div class="mt-6 flex items-center justify-between">
                    <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                        <div>10 hours ago</div>
                        <div>&bull;</div>
                        <div>Category 1</div>
                        <div>&bull;</div>
                        <div class="text-blue-900">3 Comments</div>
                    </div>
                    <div class="flex items-center space-x-2">
                        <button class="w-30 bg-gray-200 font-bold text-xs uppercase border
                                hover:border-blue-400
                                rounded-xl px-4 py-1 transition duration-500 ease-in">Open
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
{{ $posts->links() }}
