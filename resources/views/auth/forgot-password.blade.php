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

              <div class="box" data-aos="fade-up" data-aos-delay="400">
              @if (session('status'))
              <div class="mb-4 font-medium text-sm text-green-600">
                  {{ session('status') }}
              </div>
              @endif

              <form action="{{ route('password.email') }}" method="post" class='php-form'>
              @csrf
                <div class="row gy-4">
                <header class="section-header justify-content-start">
                <p>Forgot your password?</p>
              </header>

                <div class="mb-4 text-sm text-gray-600">
                    {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                </div>
                
                <div class="col-md-12">
                    <input id="email" class="form-control" type="email" name="email" :value="old('email')" placeholder="Email" required autofocus>
                </div>

    


                <div class="flex items-center justify-end mt-4">
                    <x-jet-button>
                        {{ __('Email Password Reset Link') }}
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

