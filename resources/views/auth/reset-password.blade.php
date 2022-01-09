<x-guest-layout>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    <a href="{{url('/index')}}" class="logo d-flex align-items-center">
        <img src="{{asset('/img/genomics.png')}}" alt="">
        <!-- <span>Genobliss</span> -->
      </a>

      <nav id="navbar" class="navbar">
       
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  
  <main id="main">
    <section id="hero" class="hero d-flex align-items-center  form">
      <div class="container">

      <div class="row feture-tabs " data-aos="fade-up">
        <div class="col-lg-6 align-self-center card " style="background: #F1F5FC; border-width:0">
        

              <form action="{{ route('password.update') }}" method="post" class='php-form'>
              @csrf
                <div class="row gy-4">
                <header class="section-header justify-content-start">
                <p>New password</p>
              </header>

                
              <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <div class="block">
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password" value="{{ __('Password') }}" />
                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                    <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-jet-button>
                        {{ __('Reset Password') }}
                    </x-jet-button>
                </div>
                </form>



              </div>

        </div>

        
      </div>
      </div>
    </section>




  </main><!-- End #main -->


  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Keng</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
       
        Designed by <a href="https://bootstrapmade.com/">Keng</a>
      </div>
    </div>
  </footer><!-- End Footer -->

</x-guest-layout>



