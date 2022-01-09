<x-app-layout>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center menubody">

    <div class="container">
      <div class="row">
        <div class="col-lg-12 d-flex flex-column justify-content-center">

          <div class="row gy-4">
  
            <div class="col-lg-3 col-md-6 position-relative">
              <div class="menubody-box blue">
                <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
                <div>
                  <a href="{{ asset('user/menu1')}}" class="stretched-link" style="font-size:18px">ขั้นตอนการเข้ารับบริการ</a>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 position-relative">
              <div class="menubody-box blue">
                <i class="bi bi-file-earmark-check"></i>
                <div>
                  <a href="{{route('questionnaireuser')}}" class="stretched-link"style="font-size:16px">แบบประเมินประวัติสุขภาพ</a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 position-relative">
              <div class="menubody-box blue">
                <i class="bi bi-calendar-event" style="color: #15be56;"></i>
                <div>
                  <a href="{{ route('addCalenderuser')}}" class="stretched-link">นัดหมาย</a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 position-relative">
              <div class="menubody-box blue">
                <i class="bi bi-file-earmark-text" style="color: #bb0852;"></i>
                <div>
                  <a href="{{ route('userreport')}}" class="stretched-link">รายงานผล</a>
                </div>
              </div>
            </div>
  
          </div>

        </div>

      </div>
    </div>

  </section><!-- End Hero -->

</x-app-layout>