<x-app-layout>

    <section id="loading">
        <div id="loading-content"></div>
    </section>

    <div style="width: 280px;margin-right: 20px">
        <nav class="flex items-center justify-between text-xs mt-4 bg-white rounded-xl">
            <div class="flex px-2 py-6">
                <a href="">
                    <img src="{{asset('img/avt-ronaldo.jpg')}}" alt="" class="w-10 h-10 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xs font-semibold">
                        <a href="" class="hover:underline">{{ Auth::user()->name }}</a>
                    </h4>
                    <div class="text-gray-600 mt-3">
                        {{ Auth::user()->email }}
                    </div>
                </div>
            </div>
        </nav>
        <nav class="justify-between mt-4 bg-white rounded-xl">
            <ul class="flex justify-between font-semibold space-x-10 px-2 py-2">
                <li>
                    <p href="" class="text-gray-400">
                        Suggest
                    </p>
                </li>
                <li>
                    <p href="" class="text-gray-400">
                        View all
                    </p>
                </li>
            </ul>

            <div class="flex px-2 py-2">
                <div>
                    <a href="">
                        <img src="{{asset('img/avt-ronaldo.jpg')}}" alt="" class="w-10 h-10 rounded-xl">
                    </a>
                </div>
                <div class="mx-4 justify-between flex">
                    <div class="text-gray-600 mt-3 mr-5">
                        Phan Quang Thang
                    </div>
                    <div class="mt-3 text-green-600">
                        Follow
                    </div>
                </div>
            </div>

        </nav>
    </div>
    <div style="width: 700px">
        <nav class="flex items-center justify-between text-xs mt-4">
            <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                <li>
                    <a href="{{route('homePage')}}" class="border-b-4 pb-3
                        {{ Request::routeIs('homePage') ? 'border-blue-500' : '' }}">
                        All posts ({{$countPosts}})
                    </a>
                </li>
                <li>
                    <a href="{{route('homePage-myPost')}}" class="text-gray-400 transition duration-500
                        {{ Request::routeIs('homePage-myPost') ? 'border-blue-500' : '' }}
                        ease-in border-b-4
                        pb-3 hover:border-blue-400">
                        My Posts ({{$countMyPosts}})
                    </a>
                </li>

            </ul>
            <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                <li>
                    <a href="" class="text-gray-400 transition duration-500 ease-in border-b-4
                        pb-3 hover:border-blue-400">
                        implemented
                    </a>
                </li>
                <li>
                    <a href="" class="text-gray-400 transition duration-500 ease-in border-b-4
                        pb-3 hover:border-blue-400">
                        closed
                    </a>
                </li>
            </ul>
        </nav>
        <div class="mt-8">
            <div class="filter flex space-x-6">
                <div class="w-1/3">
                    <select name="category" id="category" class="w-full rounded-xl border-none px-4 py-2 bg-gray-200">
                        <option value="1">category1</option>
                    </select>
                </div>
                <div class="w-1/3">
                    <select name="category" id="category" class="w-full rounded-xl border-none px-4 py-2 bg-gray-200">
                        <option value="1">category1</option>
                    </select>
                </div>
                <div class="w-2/3 relative flex">
                    <input type="text" class="w-full rounded-xl border-none px-4 py-2 bg-gray-200 pl-8"
                           placeholder="Find an ideal">
                    <div class="absolute top-0 left-2 flex h-full items-center">
                        <svg class="w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </div>
                </div>
            </div>

            {{--    container--}}
            <div class="ideas-container space-y-6 my-6">
                {{--                posts--}}
                @include('components.postTemplate')
                {{--                end posts--}}
            </div>
        </div>
    {{--     end container --}}

</x-app-layout>
