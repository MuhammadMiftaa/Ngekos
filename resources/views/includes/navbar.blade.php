<div id="BottomNav" class="relative flex w-full h-[138px] shrink-0">
    <nav class="fixed bottom-5 w-full max-w-[640px] px-5 z-10">
        <div class="grid grid-cols-4 h-fit rounded-[40px] justify-between py-4 px-5 bg-ngekos-black">
            <a href="{{ route('home') }}" class="flex flex-col items-center text-center gap-2">
                <img src="{{ asset(request()->routeIs('home') ? 'assets/images/icons/global-green.svg' : 'assets/images/icons/global.svg') }}"
                    class="w-8 h-8 flex shrink-0" alt="icon">
                <span class="font-semibold text-sm text-white">Discover</span>
            </a>
            <a href="{{ route('check-booking') }}" class="flex flex-col items-center text-center gap-2">
                <img src="{{ asset(request()->routeIs('check-booking') ? 'assets/images/icons/note-favorite-green.svg' : 'assets/images/icons/note-favorite.svg') }}"
                    class="w-8 h-8 flex shrink-0" alt="icon">
                <span class="font-semibold text-sm text-white">Orders</span>
            </a>
            <a href="{{ route('find-kos') }}" class="flex flex-col items-center text-center gap-2">
                <img src="{{ asset(request()->routeIs('find-kos') ? 'assets/images/icons/search-status-green.svg' : 'assets/images/icons/search-status.svg') }}"
                    class="w-8 h-8 flex shrink-0" alt="icon">
                <span class="font-semibold text-sm text-white">Find</span>
            </a>
            <a href="#" class="flex flex-col items-center text-center gap-2">
                <img src="{{ asset(request()->routeIs('help') ? 'assets/images/icons/24-support-green.svg' : 'assets/images/icons/24-support.svg') }}"
                    class="w-8 h-8 flex shrink-0" alt="icon">
                <span class="font-semibold text-sm text-white">Help</span>
            </a>
        </div>
    </nav>
</div>
