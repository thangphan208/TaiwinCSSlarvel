<header class="bg-gray-200 flex items-center justify-between px-8 py-4">
    <a href="#"><img rounded-full" src="{{asset('img/dragon.png')}}" alt="logo" style="width: 60px;"></a>
    <div class="flex items-center">
        <a href="#">
            <div>
                @if (Route::has('login'))
                    <div class="px-6 py-4">
                        @auth
                            <div class="flex items-center">
                                <div class="image flex items-center mr-4">
                                    <img src="{{asset('img/avt-ronaldo.jpg')}}" alt="avater"
                                         class="w-8 h-8 rounded-full mr-2">
                                    <div class="title uppercase">{{ Auth::user()->name }}</div>
                                </div>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                     <div class="" style="cursor: pointer;">
                                         <a :href="route('logout')"
                                            onclick="event.preventDefault();
                                           this.closest('form').submit();">
                                             {{ __('Logout') }}
                                        </a>
                                    </div>
                                </form>
                            </div>
                        @else
                            <a href="{{ route('login') }}" class="mr-3">Login</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </a>
    </div>
</header>
