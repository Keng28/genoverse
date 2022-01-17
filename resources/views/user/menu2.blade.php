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

                <h3>กรุณากรอกแบบประเมินประวัติสุขภาพทั้งหมดให้ครบถ้วน</h3>

                <br>
                <div class="row">
                    <div class="col-lg-12 d-flex flex-column justify-content-center">
                        <div class="row gy-4">

                            <div class="col-lg-4 col-md-6 position-relative">
                                <div class="userform-box blue">
                                    <div class="d-flex justify-content-between part">
                                        <div>
                                            <p>ส่วนที่ 1</p>
                                            <a href="{{url('/forms1/'.$getbyid[0]->id)}}" class="stretched-link">ข้อมูลส่วนบุคคล</a>
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
                                            <a href="{{url('/form7/'.$getbyid[0]->id)}}" class="stretched-link">ประวัติครอบครัว</a>
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
                                            <a href="{{url('/form8/'.$getbyid[0]->id)}}" class="stretched-link">การสูบบุหรี่
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
                                            <a href="{{url('/form9/'.$getbyid[0]->id)}}" class="stretched-link">ความเครียด</a>
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