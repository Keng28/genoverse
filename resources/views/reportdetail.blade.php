<x-app-layout>
<section id="hero" class="userprocess d-flex align-items-center menubody">
    <div class="container" data-aos="fade-up">

      <header class="section-header d-flex justify-content-between" data-aos="fade-up">
        <div>
          <p>Analysis and Interpretation</p>
          <div class="section-header-line"></div>
        </div>
        <div class="d-flex justify-content-end">
        </div>
      </header>

      <div class="row justify-content-md-center">
        <div class="col-lg-10">
            @foreach($getreport as $row)
            <iframe src="{{asset($row->file_path)}}" height="500px" width="100%"></iframe>  
            @endforeach

        </div>
      </div>
    </div>

  </section><!-- End Hero -->
</x-app-layout>
