<x-app-layout>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center menubody">

    <div class="container">
      <div class="row">
        <div class="col-lg-12 d-flex flex-column justify-content-center">

          <div class="row gy-4 justify-content-center">
  
          <div class="col-lg-3 col-md-6 position-relative">
              <div class="menubody-box blue">
                <i class="bi bi-emoji-smile"></i>
                <div>
                  <a href="{{ route('listname')}}" class="stretched-link">ข้อมูลผู้รับบริการ
                  </a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 position-relative">
              <div class="menubody-box blue">
                <i class="bi bi-calendar-event" style="color: #15be56;"></i>
                <div>
                  <a href="{{ route('addCalenderindex')}}" class="stretched-link" style="font-size:18px">นัดหมาย</a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 position-relative">
              <div class="menubody-box blue">
                <i class="bi bi-file-earmark-text" style="color: #bb0852;"></i>
                <div>
                  <a href="{{ route('adminreport')}}" class="stretched-link">รายงานผล</a>
                </div>
              </div>
            </div>
<!--
            <div class="col-lg-3 col-md-6 position-relative">
              <div class="menubody-box blue">
                <i class="bi bi-upload" style="color: #bb0852;"></i>
                <div>
                  <a href="{{ route('menu8')}}" class="stretched-link">รายงาน/อัพโหลดผล</a>
                </div>
              </div>
            </div>
          </div>
-->
        </div>

      </div>
    </div>

  </section><!-- End Hero -->

</x-app-layout>