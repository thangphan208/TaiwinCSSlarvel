<x-app-layout>
    <div style="width: 280px;margin-right: 20px">
        <nav class="flex items-center justify-between text-xs mt-4 bg-white rounded-xl">
            <div class="flex px-2 py-6 w-full" >
                <a href="">
                    <img src="{{asset('img/avt-ronaldo.jpg')}}" alt="" class="w-10 h-10 rounded-xl">
                </a>
                <div class="mx-4 w-4/6 justify-between">
                    <h4 class="text-xs font-semibold flex justify-between w-full">
                        <a href="" class="hover:underline">{{ Auth::user()->name }}</a>
                        <div class="setting-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </h4>
                    <div class="text-gray-600 ">
                        {{ Auth::user()->email }}
                    </div>
                </div>
            </div>
        </nav>
        <nav class="justify-between mt-4 bg-white rounded-xl">
            <ul class="flex justify-between font-semibold space-x-10 px-2 py-2">
                <li>
                    <p href="" class="ml-2 text-gray-400">
                        Information
                    </p>
                </li>
            </ul>

            <div class="flex px-2 py-2">
                <ul class="font-semibold space-x-10 px-2 py-2 w-full">
                    <li class="flex justify-between">
                        <p href="" class="ml-2">
                            Post
                        </p>
                        <p href="" class="ml-2">
                            1
                        </p>
                    </li>
                    <li style="margin: 0">
                        <p href="" class="ml-2">
                            Followers
                        </p>
                    </li>
                    <li style="margin: 0">
                        <p href="" class="ml-2">
                            Following
                        </p>
                    </li>
                </ul>
            </div>

        </nav>
    </div>
    <div style="width: 700px">
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
