<x-app-layout>
    <!-- ======= Hero Section ======= -->
    <section id="userform" class="userform  d-flex align-items-center">
        <div class="container " data-aos="fade-up">
            <header class="section-header d-flex justify-content-between">
                <div>
                    <p>ส่วนที่ 9</p>
                    <div class="section-header-line"></div>
                    <h3>ความเครียด</h3>
                </div>
                <div>
                    <a>ผู้รับบริการ: {{$getbyid[0]->name}}</a>
                </div>
            </header>

            <div class="row d-flex justify-content-center ">
                @if(session("success"))
                <div class="alert alert-success">{{session('success')}}</div>
                @endif
                <div class="col-md-7 ">
                    <div class="row gy-4 ">
                        <div class="box-text">
                            <div class="info-box">
                                <div class="in-line">
                                    
                                    <h3>ความเครียด</h3>
                                    <p>หมายถึง ความรู้สึกฉุนเฉียวง่าย หรือวิตกกังวล หรือ หลับยาก
                                        ซึ่งเป็นผลจากสภาวะที่ทำงานหรือที่บ้าน
                                    </p>
                                    <br>
                                    <h3>หมายเหตุ</h3>
                                    <p>ถ้าท่านไม่ได้ทำงานเป็นส่วนใหญ่ในช่วง 12 เดือน ที่ผ่านมาให้เลือก
                                        "ไม่เคยเครียด"
                                    </p>
                                </div>
                            </div>
                            <form class="row g-3" action="{{url('/formupdate9/'.$getbyid[0]->id)}}" method="post">
                                @csrf
                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">9.1
                                        ท่านเคยรู้สึกเครียดบ่อยแค่ไหนใน<u>ที่ทำงาน</u>ในช่วง 12 เดือนที่ผ่านมา</label>
                                    <br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="quiz9_1" id="quiz9_1"
                                            value="1" {{($forms[0]->quiz9_1 == '1' ?  'checked' : '')}}>
                                        <label class="form-check-label" for="inlineRadio1">เครียดตลอด</label>
                                    </div>
                                    <br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="quiz9_1" id="quiz9_1"
                                            value="2" {{($forms[0]->quiz9_1 == '2' ?  'checked' : '')}}>
                                        <label class="form-check-label" for="inlineRadio2">เครียดหลายๆครั้ง</label>
                                    </div>
                                    <br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="quiz9_1" id="quiz9_1"
                                            value="3" {{($forms[0]->quiz9_1 == '3' ?  'checked' : '')}}>
                                        <label class="form-check-label" for="inlineRadio2">เครียดบางเวลา</label>
                                    </div>
                                    <br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="quiz9_1" id="quiz9_1"
                                            value="4" {{($forms[0]->quiz9_1 == '4' ?  'checked' : '')}}>
                                        <label class="form-check-label" for="inlineRadio2">ไม่เคยเครียด</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">9.2
                                        ท่านเคยรู้สึกเครียดบ่อยแค่ไหน<u>ที่บ้าน</u>ในช่วง 12 เดือนที่ผ่านมา</label>
                                    <br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="quiz9_2" id="quiz9_2"
                                            value="1" {{($forms[0]->quiz9_1 == '1' ?  'checked' : '')}}>
                                        <label class="form-check-label" for="inlineRadio1">เครียดตลอด</label>
                                    </div>
                                    <br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="quiz9_2" id="quiz9_2"
                                            value="2" {{($forms[0]->quiz9_2 == '2' ?  'checked' : '')}}>
                                        <label class="form-check-label" for="inlineRadio2">เครียดหลายๆครั้ง</label>
                                    </div>
                                    <br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="quiz9_2" id="quiz9_2"
                                            value="3" {{($forms[0]->quiz9_2 == '3' ?  'checked' : '')}}>
                                        <label class="form-check-label" for="inlineRadio2">เครียดบางเวลา</label>
                                    </div>
                                    <br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="quiz9_2" id="quiz9_2"
                                            value="4" {{($forms[0]->quiz9_2 == '4' ?  'checked' : '')}}>
                                        <label class="form-check-label" for="inlineRadio2">ไม่เคยเครียด</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">9.3
                                        ท่านมีความเครียดทางการเงินระดับไหน</label>
                                    <br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="quiz9_3" id="quiz9_3"
                                            value="1" {{($forms[0]->quiz9_3 == '1' ?  'checked' : '')}}>
                                        <label class="form-check-label" for="inlineRadio1">ระดับสูง/รุนแรง</label>
                                    </div>
                                    <br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="quiz9_3" id="quiz9_3"
                                            value="2" {{($forms[0]->quiz9_3 == '2' ?  'checked' : '')}}>
                                        <label class="form-check-label" for="inlineRadio2">ปานกลาง</label>
                                    </div>
                                    <br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="quiz9_3" id="quiz9_3"
                                            value="3" {{($forms[0]->quiz9_3 == '3' ?  'checked' : '')}}>
                                        <label class="form-check-label" for="inlineRadio2">เล็กน้อย</label>
                                    </div>
                                    <br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="quiz9_3" id="quiz9_3"
                                            value="4" {{($forms[0]->quiz9_3 == '4' ?  'checked' : '')}}>
                                        <label class="form-check-label" for="inlineRadio2">ไม่มีเลย</label>
                                    </div>
                                </div>
                               
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i>
                                        บันทึก
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <br>
                <div class="d-flex justify-content-between g-3">
                    <button type="button" onclick="window.location.href='{{url('/index')}}'" class="btn btn-primary">
                        <i class="bi bi-arrow-left-circle-fill"></i>
                        กลับหน้าหลักของแบบสอบถาม
                    </button>
                    <button type="button" onclick="window.location.href='{{ route('addCalenderuser')}}'"
                        class="btn btn-primary">ทำนัดหมาย
                        <i class="bi bi-arrow-right-circle-fill"></i>
                    </button>
                </div>
            </div>
    </section><!-- End Hero -->
</x-app-layout>