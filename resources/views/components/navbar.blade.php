<nav class="navbar bg-white shadow-xl px-4 sticky top-0 z-50">
    <div class="navbar-start">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                </svg>
            </div>
            <ul tabindex="0" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
                <li>
                    <a href="{{ route('stock.index') }}">Stock</a>
                </li>
                <li>
                    <a>Parent</a>
                    <ul class="p-2">
                        <li><a>Submenu 1</a></li>
                        <li><a>Submenu 2</a></li>
                    </ul>
                </li>
                <li><a>Item 3</a></li>
            </ul>
        </div>
        <a class="flex items-center text-xl  text-black">
            <img src="{{ asset('asset/logosmall2.png') }}" width="50" alt="logo_nomad_small">
            {{-- <span class="text-2xl ms-3 font-bold text-transparent bg-clip-text bg-gradient-to-b from-slate-300 to-red-400 title">
                Nomad Stock Manager
            </span> --}}
            <span class="ms-2 title2">Nomad Stock Manager</span>
        </a>
    </div>
    <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1 text-slate-600">
            <li>
                <a href="{{ route('dashboard') }}" class="{{Route::CurrentRouteName() == 'dashboard' ? ' text-orange-700 font-semibold' : ''}} active:bg-[#ff5e48]! active:text-white! rounded-full">
                    {{-- <i class="fa-solid fa-house"></i> --}}
                    Dashboard
                </a>
            </li>
            <li>
                <a href="{{ route('stock.index') }}" class="{{Route::CurrentRouteName() == 'stock.index' ? ' text-orange-700 font-semibold' : ''}} active:bg-[#ff5e48]! active:text-white! rounded-full">
                    {{-- <i class="fa-solid fa-warehouse"></i> --}}
                    Stock
                </a>
            </li>
            <li>
                <a href="{{ route('orders.index') }}" class="{{Route::CurrentRouteName() == 'orders.index' ? ' text-orange-700 font-semibold' : ''}} active:bg-[#ff5e48]! active:text-white! rounded-full">
                    {{-- <i class="fa-solid fa-list-check"></i> --}}
                    Orders
                </a>
            </li>
        </ul>
    </div>
    <div class="navbar-end">
        {{-- <a class="btn">UserName</a> --}}
        <div class="dropdown dropdown-end">
            <div tabindex="0" role="button" class="btn rounded-full m-1 text-white font-semibold px-5 py-1 bg-[#ff5e48]">Username</div>
            <ul tabindex="0" class="dropdown-content menu bg-[#ff5e48] text-white rounded-box z-1 w-52 p-2 shadow-sm">
                <li><a>Item 1</a></li>
                <li><a>Item 2</a></li>
            </ul>
        </div>
        {{-- <span class="btn-circle bg-amber-400 py-1 px-3">
            Username
        </span> --}}
        {{-- <div class="avatar avatar-online">
            <div class="w-10 rounded-full">
                <img src="https://img.daisyui.com/images/profile/demo/gordon@192.webp" />
            </div>
        </div> --}}
    </div>
</nav>
