@extends('admin/layout/app')

@section('title')
    @yield('subtitle')
@endsection
@section('content')
    @include('admin/layout/components/mobile-menu')

    <div class="top-bar-boxed border-b  mt-10 md:mt-0 -mx-3 sm:-mx-8 md:mx-0 px-3 sm:px-8 md:px-6 mb-5 ">
        <div class="h-auto flex items-center">
            <!-- BEGIN: Logo -->
            
            <a href="" class="-intro-x hidden md:flex items-center">
                <img src="{{ asset('images/web/logo_light.png') }}"  style="height: 70px; padding: 5px 0px;" alt="Muabannhadatchinhchu.vn">
            </a>
            <!-- END: Logo -->
            <!-- BEGIN: Breadcrumb -->
            <nav aria-label="breadcrumb" class="-intro-x h-full mr-auto">
                {{-- <ol class="breadcrumb breadcrumb-light">
                    <li class="breadcrumb-item"><a href="#">Application</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol> --}}
            </nav>
            <!-- END: Breadcrumb -->
            <!-- BEGIN: Search -->
            <div class="intro-x relative mr-3 sm:mr-6">
                <div class="search hidden sm:block">
                    <input type="text" class="search__input form-control border-transparent" placeholder="Search...">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="search" data-lucide="search" class="lucide lucide-search search__icon dark:text-slate-500"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                </div>
                <a class="notification notification--light sm:hidden" href=""> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="search" data-lucide="search" class="lucide lucide-search notification__icon dark:text-slate-500"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg> </a>
                <div class="search-result">
                    <div class="search-result__content">
                        <div class="search-result__content__title">Pages</div>
                        <div class="mb-5">
                            <a href="" class="flex items-center">
                                <div class="w-8 h-8 bg-success/20 dark:bg-success/10 text-success flex items-center justify-center rounded-full"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="inbox" class="lucide lucide-inbox w-4 h-4" data-lucide="inbox"><polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline><path d="M5.45 5.11L2 12v6a2 2 0 002 2h16a2 2 0 002-2v-6l-3.45-6.89A2 2 0 0016.76 4H7.24a2 2 0 00-1.79 1.11z"></path></svg> </div>
                                <div class="ml-3">Mail Settings</div>
                            </a>
                        </div>
                        <div class="search-result__content__title">Users</div>
                        <div class="mb-5">
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{ asset('dist/images/' . $fakers[9]['photos'][0]) }}">
                                </div>
                                <div class="ml-3">Robert De Niro</div>
                                <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">robertdeniro@left4code.com</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Search -->
            <!-- BEGIN: Notifications -->
            <div class="intro-x dropdown mr-4 sm:mr-6">
                <div class="dropdown-toggle notification notification--light notification--bullet cursor-pointer" role="button" aria-expanded="false" data-tw-toggle="dropdown"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="bell" data-lucide="bell" class="lucide lucide-bell notification__icon dark:text-slate-500"><path d="M18 8A6 6 0 006 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 01-3.46 0"></path></svg> </div>
                <div class="notification-content pt-2 dropdown-menu">
                    <div class="notification-content__box dropdown-content">
                        <div class="notification-content__title">Thông báo</div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{ asset('dist/images/' . $fakers[9]['photos'][0]) }}">
                                <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">Kevin Spacey</a>
                                    <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">01:10 PM</div>
                                </div>
                                <div class="w-full truncate text-slate-500 mt-0.5">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Notifications -->
            <!-- BEGIN: Account Menu -->
            <div class="intro-x dropdown w-10 h-10">
                <div class="dropdown-toggle w-10 h-10 rounded-full overflow-hidden shadow-lg image-fit zoom-in scale-110" role="button" aria-expanded="false" data-tw-toggle="dropdown">
                    <img alt="Ảnh đại diện admin" src="{{ asset('dist/images/' . $fakers[9]['photos'][0]) }}">
                </div>
                <div class="dropdown-menu w-56">
                    <ul class="dropdown-content bg-primary/70 before:block before:absolute before:bg-black before:inset-0 before:rounded-md before:z-[-1] text-white">
                        <li class="p-2">
                            <div class="font-medium">{{ auth()->user()->name }}</div>
                            <div class="text-xs text-white/60 mt-0.5 dark:text-slate-500">{{ (auth()->user()->role_id == 1) ? 'Customer' : 'Admin' }}</div>
                        </li>
                        <li>
                            <hr class="dropdown-divider border-white/[0.08]">
                        </li>
                        <li>
                            <a href="{{ route('admin.profile') }}" class="dropdown-item hover:bg-white/5"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="user" data-lucide="user" class="lucide lucide-user w-4 h-4 mr-2"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> Hồ sơ </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item hover:bg-white/5"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="edit" data-lucide="edit" class="lucide lucide-edit w-4 h-4 mr-2"><path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg> Thêm tài khoản </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item hover:bg-white/5"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="lock" data-lucide="lock" class="lucide lucide-lock w-4 h-4 mr-2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0110 0v4"></path></svg> Đặt lại mật khẩu </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item hover:bg-white/5"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="help-circle" data-lucide="help-circle" class="lucide lucide-help-circle w-4 h-4 mr-2"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 015.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg> Hỗ trợ </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider border-white/[0.08]">
                        </li>
                        <li>
                            <a href="{{ route('admin.logout') }}" class="dropdown-item hover:bg-white/5"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="toggle-right" data-lucide="toggle-right" class="lucide lucide-toggle-right w-4 h-4 mr-2"><rect x="1" y="5" width="22" height="14" rx="7" ry="7"></rect><circle cx="16" cy="12" r="3"></circle></svg> Đăng xuất </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END: Account Menu -->
        </div>
    </div>
            @include('admin.layout.top-menu')
    <!-- END: Top Bar -->

    <!-- BEGIN: Content -->
    <div class="content content--top-nav px-20 py-6">
        @yield('subcontent')
    </div>
    <!-- END: Content -->

    <script>

    </script>
@endsection
