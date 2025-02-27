<!-- navbar  -->
<div class="relative py-5">
    <nav class="flex justify-between w-full bg-neutral-950 pr-2 lg:pr-4">
        <div>
            <a href="{{ route('home') }}"><img src="{{ asset('img/NESA-logo-White.png') }}" alt="Nesa Logo" class="h-32 object-contain" /></a>
        </div>
        <div id="navbar" class="hidden lg:flex lg:items-center">
            <div id="navbar_content" class="hidden lg:flex items-center gap-8 font-medium text-base">
                <a href="{{ route('home') }}" class="hover:text-base-color transform ease-in-out duration-200 {{ request()->routeIs('home') || request()->routeIs('/') ? '!text-base-color' : '' }}">Home</a>
                <a href="{{ route('about.index') }}" class="{{ request()->routeIs('about.index') ? '!text-base-color' : '' }} hover:text-base-color transform ease-in-out duration-200">About Us</a><a href="{{ route('events.index') }}" class="{{ request()->routeIs('events.index') ? '!text-base-color' : '' }} hover:text-base-color transform ease-in-out duration-200">Events</a>

                {{-- 
                <a href="{{ route('news.index') }}" class="{{ request()->routeIs('news.index') ? '!text-base-color' : '' }} hover:text-base-color transform ease-in-out duration-200">News</a> --}}
                <a href="{{ route('fyft') }}" class="{{ request()->routeIs('fyft') ? '!text-base-color' : '' }} hover:text-base-color transform ease-in-out duration-200">5th NEC</a>
                <a href="{{ route('contact.index') }}" class="{{ request()->routeIs('contact.index') ? '!text-base-color' : '' }} hover:text-base-color transform ease-in-out duration-200">Contact Us</a>
                
                {{-- <a href="{{ route('certificates.index') }}" class="{{ request()->routeIs('certificates.index') ? '!text-base-color' : '' }} hover:text-base-color transform ease-in-out duration-200">Certificates</a> --}}
                <ion-icon name="close" id="close-mobile-nav" class="lg:hidden cursor-pointer text-3xl hover:scale-105 transform ease-in-out duration-300 bg-transparent text-white border-0"></ion-icon>
            </div>
        </div>

        <div class="flex flex-col justify-center lg:hidden">
            <ion-icon name="menu" id="open-mobile-nav" class="lg:hidden cursor-pointer text-2xl hover:scale-105 transform ease-in-out duration-300 bg-transparent text-white border-0"></ion-icon>
        </div>
    </nav>
</div>