<x-app-layout>
    <main id="main">
        <section id="" class="userform  d-flex align-items-center">
            <div class="container" data-aos="fade-up">
                <header class="section-header d-flex justify-content-between" data-aos="fade-up">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p>แบบประเมินประวัติสุขภาพ</p>
                            <div class="section-header-line"></div>
                        </div>

                    </div>
                    <div class="d-flex justify-content-between">
                        @if(Auth::check()&&Auth::user()->role == 1)
                        <div>
                            <a>ผู้รับบริการ: {{$getbyid[0]->name}}</a>
                        </div>
                        @else
                        <div>
                            <a>ผู้รับบริการ: {{Auth::user()->name}}</a>
                        </div>
                        @endif
                    </div>

                </header>


                
<div class="accordion" id="accordionPanelsStayOpenExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
        ส่วนที่ 1 ข้อมูลส่วนบุคคล
      </button>
    </h2>
    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
      <div class="accordion-body">
        <strong>This is </strong> It is <code>body</code>,overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
        ส่วนที่ 2 ประวัติการเจ็บป่วย
      </button>
    </h2>
    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
      <div class="accordion-body">
        <strong>This is </strong> It is <code>body</code>,overflow.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
        ส่วนที่ 3 ประวัติการเจ็บป่วยโรคมะเร็ง
      </button>
    </h2>
    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
      <div class="accordion-body">
        <strong>This is </strong> It is <code>body</code>,overflow.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
        ส่วนที่ 4 ประวัติการเจ็บป่วยระบบประสาท
      </button>
    </h2>
    <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
      <div class="accordion-body">
        <strong>This is </strong> It is <code>body</code>,overflow.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingFive">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
        ส่วนที่ 5 การรับประทานยา/อาหารเสริม
      </button>
    </h2>
    <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFive">
      <div class="accordion-body">
        <strong>This is </strong> It is <code>body</code>,overflow.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingSix">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false" aria-controls="panelsStayOpen-collapseSix">
        ส่วนที่ 6 ประวัติการแพ้อาหาร การแพ้ยา
      </button>
    </h2>
    <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSix">
      <div class="accordion-body">
        <strong>This is </strong> It is <code>body</code>,overflow.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingSeven">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSeven" aria-expanded="false" aria-controls="panelsStayOpen-collapseSeven">
        ส่วนที่ 7 ประวัติครอบครัว
      </button>
    </h2>
    <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSeven">
      <div class="accordion-body">
        <strong>This is </strong> It is <code>body</code>,overflow.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingEight">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseEight" aria-expanded="false" aria-controls="panelsStayOpen-collapseEight">
        ส่วนที่ 8 การสูบบุหรี่ และเครื่องดื่มแอลกอฮอล์
      </button>
    </h2>
    <div id="panelsStayOpen-collapseEight" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingEight">
      <div class="accordion-body">
        <strong>This is </strong> It is <code>body</code>,overflow.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingNine">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseNine" aria-expanded="false" aria-controls="panelsStayOpen-collapseNine">
        ส่วนที่ 9 ความเครียด
      </button>
    </h2>
    <div id="panelsStayOpen-collapseNine" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingNine">
      <div class="accordion-body">
        <strong>This is </strong> It is <code>body</code>,overflow.
      </div>
    </div>
  </div>

</div>

                

                <br>
                <div class="row">
                    <div class="col-lg-12 d-flex flex-column justify-content-center">
                        <div class="row gy-4">

                            <div class="col-lg-4 col-md-6 position-relative">
                                <div class="userform-box blue">
                                    <div class="d-flex justify-content-between part">
                                        <div>
                                            <p>ส่วนที่ 1</p>
                                            <a href="{{route('form1')}}" class="stretched-link">ข้อมูลส่วนบุคคล</a>
                                        </div>
                                        <img src="{{asset('/img/user.png')}}" width="80" alt="">
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" style="width:80%;">
                                            80%
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 position-relative">
                                <div class="userform-box blue">
                                    <div class="d-flex justify-content-between part">
                                        <div>
                                            <p>ส่วนที่ 2</p>
                                            <a href="{{url('form2')}}" class="stretched-link">ประวัติการเจ็บป่วย</a>
                                        </div>
                                        <img src="{{asset('/img/anatomy.png')}}" width="80" alt="">
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" style="width:80%;">
                                            80%
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 position-relative">
                                <div class="userform-box blue">
                                    <div class="d-flex justify-content-between part">
                                        <div>
                                            <p>ส่วนที่ 3</p>
                                            <a href="{{url('form3')}}"
                                                class="stretched-link">ประวัติการเจ็บป่วยโรคมะเร็ง</a>
                                        </div>
                                        <img src="{{asset('/img/cancer.png')}}" width="80" alt="">
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" style="width:80%;">
                                            80%
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 position-relative">
                                <div class="userform-box blue">
                                    <div class="d-flex justify-content-between part">
                                        <div>
                                            <p>ส่วนที่ 4</p>
                                            <a href="{{url('form4')}}"
                                                class="stretched-link">ประวัติการเจ็บป่วยระบบประสาท</a>
                                        </div>
                                        <img src="{{asset('/img/brain.png')}}" width="80" alt="">
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" style="width:80%;">
                                            80%
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 position-relative">
                                <div class="userform-box blue">
                                    <div class="d-flex justify-content-between part">
                                        <div>
                                            <p>ส่วนที่ 5</p>
                                            <a href="{{url('form5')}}"
                                                class="stretched-link">การรับประทานยา/อาหารเสริม</a>
                                        </div>
                                        <img src="{{asset('/img/no-drugs.png')}}" width="80" alt="">
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" style="width:80%;">
                                            80%
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 position-relative">
                                <div class="userform-box blue">
                                    <div class="d-flex justify-content-between part">
                                        <div>
                                            <p>ส่วนที่ 6</p>
                                            <a href="{{url('form6')}}" class="stretched-link">ประวัติการแพ้อาหาร
                                                การแพ้ยา</a>
                                        </div>
                                        <img src="{{asset('/img/medical-history.png')}}" width="80" alt="">
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" style="width:80%;">
                                            80%
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 position-relative">
                                <div class="userform-box blue">
                                    <div class="d-flex justify-content-between part">
                                        <div>
                                            <p>ส่วนที่ 7</p>
                                            <a href="{{url('form7')}}" class="stretched-link">ประวัติครอบครัว</a>
                                        </div>
                                        <img src="{{asset('/img/family.png')}}" width="80" alt="">
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" style="width:80%;">
                                            80%
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 position-relative">
                                <div class="userform-box blue">
                                    <div class="d-flex justify-content-between part">
                                        <div>
                                            <p>ส่วนที่ 8</p>
                                            <a href="{{url('form8')}}" class="stretched-link">การสูบบุหรี่
                                                และเครื่องดื่มแอลกอฮอล์</a>
                                        </div>
                                        <img src="{{asset('/img/cigarettes.png')}}" width="80" alt="">
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" style="width:80%;">
                                            80%
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 position-relative">
                                <div class="userform-box blue">
                                    <div class="d-flex justify-content-between part">
                                        <div>
                                            <p>ส่วนที่ 9</p>
                                            <a href="{{url('form9')}}" class="stretched-link">ความเครียด</a>
                                        </div>
                                        <img src="{{asset('/img/headache.png')}}" width="80" alt="" cla>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" style="width:80%;">
                                            80%
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="button" onclick="window.location.href='{{ route('addCalenderuser')}}'"
                                    class="btn btn-primary">ทำนัดหมาย
                                    <i class="bi bi-arrow-right-circle-fill"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section><!-- End Hero -->
    </main><!-- End #main -->
</x-app-layout>