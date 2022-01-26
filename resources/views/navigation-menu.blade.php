<!-- ======= Header ======= -->
<header id="header" class="header fixed-top ">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="{{url('/index')}}" class="logo d-flex align-items-center">
            <img src="{{asset('/img/genomics.png')}}" alt="">
            <!-- <span>Genobliss</span> -->
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                @if(Auth::user()->role==1)
                <!-- <li><a class="nav-link scrollto active" href="{{url('/index')}}">Home</a></li> -->
                <li><a class="nav-link scrollto active" href="{{ route('listname')}}">ข้อมูลผู้รับบริการ</a></li>
                <li><a class="nav-link scrollto active" href="{{ route('addCalenderindex')}}">นัดหมาย</a></li>
                <li><a class="nav-link scrollto active" href="{{ route('adminreport')}}">รายงานผล</a></li>
                @elseif(Auth::user()->role==0)
                <!-- <li><a class="nav-link scrollto active" href="{{ asset('user/menu1')}}">ขั้นตอนการเข้ารับบริการ</a></li> -->
                <li><a class="nav-link scrollto active"
                        href="{{route('questionnaireuser')}}">แบบสอบถามด้านสุขภาพ</a></li>
                <li><a class="nav-link scrollto active" href="{{ route('addCalenderuser')}}">นัดหมาย</a></li>
                <li><a class="nav-link scrollto active" href="{{ route('userreport')}}">รายงานผล</a></li>
                @endif
                <div class="flex-shrink-0 dropdown ">
                    <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser2"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                        <!-- <img alt="mdo" width="32" height="32" class="rounded-circle" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}"> -->
                    </a>
                    <ul class="dropdown-menu text-small shadow " aria-labelledby="dropdownUser2">
                        @if(Auth::user()->role==0)
                        <li><a class="dropdown-item" href="{{ asset('user/menu1')}}">ขั้นตอนการเข้ารับบริการ</a></li>
                        <li><a class="dropdown-item" href="{{ route('profile.show') }}">โปรไฟล์</a></li>
                        @elseif(Auth::user()->role==1)
                        <li><a class="dropdown-item" href="{{ route('profile.show') }}">โปรไฟล์</a></li>
                        @endif
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                              this.closest('form').submit();">
                                    {{ __('ออกจากระบบ') }}
                                </x-jet-dropdown-link>
                            </form>
                        </li>
                    </ul>
                </div>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->