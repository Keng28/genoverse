<x-app-layout>
    <script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-Token': $('meta[name=_token]').attr('content')
        }
    });
    jQuery.ajax({
        url: '/forms1/{id}',
        type: 'GET',
        data: {
            user_id: 2,
            quiz_1: 2
        },
        success: function(data) {

            console.log(data);
        },
        error: function(xhr, b, c) {
            console.log("xhr=" + xhr + " b=" + b + " c=" + c);
        }
    });
    </script>
    <section id="userform" class="userform  d-flex align-items-center">
        <div class="container" data-aos="fade-up">
            <header class="section-header d-flex justify-content-between">
                <div>
                    <p>ส่วนที่ 1</p>
                    <div class="section-header-line"></div>
                    <h3>ข้อมูลส่วนบุคคล</h3>
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
                        <form class="row g-3" action="{{url('/formsupdate1/'.$getbyid[0]->id)}}" method="post">
                            @csrf
                            <div class="col-12">
                                <label for="inputAddress" class="form-label">1.1 สถานภาพทางสังคมในปัจจุบัน</label>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="quiz_1" id="inlineRadio1"
                                        value="1" {{($forms1[0]->quiz_1 == '1' ?  'checked' : '')}}>
                                    <label class="form-check-label" for="inlineRadio1">โสด</label>
                                </div>

                                <div class="form-check">
                                    <a>(ไม่เคยแต่งงาน)</a>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="quiz_1" id="inlineRadio2"
                                        value="2" {{(($forms1[0]->quiz_1) == '2' ?  'checked' : '') }}>
                                    <label class="form-check-label" for="inlineRadio2">สมรส</label>
                                </div>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="quiz_1" id="inlineRadio2"
                                        value="3" {{(($forms1[0]->quiz_1) == '3' ?  'checked' : ''),TRUE }}>
                                    <label class="form-check-label" for="inlineRadio2">หม้าย</label>
                                </div>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="quiz_1" id="inlineRadio2"
                                        value="4" {{(($forms1[0]->quiz_1) == '4' ?  'checked' : ''),TRUE }}>
                                    <label class="form-check-label" for="inlineRadio2">แยกกันอยู่/เลิก/หย่า</label>
                                </div>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="quiz_1" id="inlineRadio2"
                                        value="5" {{(($forms1[0]->quiz_1) == '5' ?  'checked' : '') ,TRUE}}>
                                    <label class="form-check-label" for="inlineRadio2">อาศัยอยู่ด้วยกัน</label>
                                </div>
                                <div class="form-check">
                                    <a>(ไม่ได้จดทะเบียนสมรส)</a>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">1.2
                                    อาชีพหลักของท่านตรงกับข้อใดมากที่สุด</label>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="quiz_2" id="inlineRadio1"
                                        value="1" {{($forms1[0]->quiz_2) == '1' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="inlineRadio1">ผู้จัดการ</label>
                                </div>
                                <div class="form-check">
                                    <a>(เช่น ฝ่ายบริหารระดับสูง เจ้าหน้า ที่อาวุโส และผู้ออกกฎหมาย
                                        ผู้จัดการทางด้านการบริหาร การค้า และธุรกิจ เป็นต้น)</a>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="quiz_2" id="inlineRadio2"
                                        value="2" {{($forms1[0]->quiz_2) == '2' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="inlineRadio2">วิชาชีพ</label>
                                </div>
                                <div class="form-check">
                                    <a>(เช่น งานทางด้านวิทยาศาสตร์ และวิศวกร งานทางด้านสุขภาพ ครู อาจารย์ เป็นต้น)</a>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="quiz_2" id="inlineRadio3"
                                        value="3" {{($forms1[0]->quiz_2) == '3' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="inlineRadio2">เจ้าหน้าที่เทคนิค</label>
                                </div>
                                <div class="form-check">
                                    <a>(เช่น งานด้านวิทยาศาสตร์และวิศวกรรม งานด้านสุขภาพ งานด้านการสอน เป็นต้น)</a>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="quiz_2" id="inlineRadio4"
                                        value="4" {{($forms1[0]->quiz_2) == '4' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="inlineRadio2">งานเสมียน</label>
                                </div>
                                <div class="form-check">
                                    <a>(เช่น เสมียน เลขานุการ)</a>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="quiz_2" id="inlineRadio5"
                                        value="5" {{($forms1[0]->quiz_2) == '5' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="inlineRadio2">งานบริการ
                                        และงานขาย</label>
                                </div>
                                <div class="form-check">
                                    <a>(เช่น ผู้ประกอบอาหาร พนักงานเสิร์ฟ และบาร์เทนเดอร์ พนักงานขาย เป็นต้น)</a>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="quiz_2" id="inlineRadio6"
                                        value="6" {{($forms1[0]->quiz_2) == '6' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="inlineRadio2">งานทางด้านเกษตรกรรม
                                        ป่าไม้ และประมง</label>
                                </div>
                                <div class="form-check">
                                    <a>(เช่น ชาวนา ชาวประมง นายพราน ชาวสวน เป็นต้น)</a>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="quiz_2" id="inlineRadio7"
                                        value="7" {{($forms1[0]->quiz_2) == '7' ? 'checked' : '' }}>
                                    <label class="form-check-label"
                                        for="inlineRadio2">ผู้ที่ทำงานเกี่ยวกับงานฝีมือและการค้า</label>
                                </div>
                                <div class="form-check">
                                    <a>(เช่น ช่างตีเหล็ก ช่างซ่อมเครื่องจักร และช่างซ่อมแซม ช่างทาสี)</a>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="quiz_2" id="inlineRadio8"
                                        value="8" {{($forms1[0]->quiz_2) == '8' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="inlineRadio2">แรงงานในโรงงาน</label>
                                </div>
                                <div class="form-check">
                                    <a>(ผู้ควบคุม เครื่องจักร และเครื่องมือในโรงงาน พนักงานขับรถ เป็นต้น)</a>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="quiz_2" id="inlineRadio9"
                                        value="9" {{($forms1[0]->quiz_2) == '9' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="inlineRadio2">ทหารและตํารวจ</label>
                                </div>

                                <br>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="quiz_2" id="inlineRadio10"
                                        value="10" {{($forms1[0]->quiz_2) == '10' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="inlineRadio2">งานที่ใช้ทักษะขั้นพื้นฐาน</label>
                                </div>
                                <div class="form-check">
                                    <a>(เช่น แรงงานในบ้าน พนักงานทําความสะอาดในโรงแรม และในสํานักงาน
                                        ผู้ใช้แรงงานในงานเหมืองแร่ และงานก่อสร้าง เป็นต้น)</a>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="quiz_2" id="inlineRadio11"
                                        value="11" {{($forms1[0]->quiz_2) == '11' ? 'checked' : '' }}>
                                    <input type="text" name="quiz_2_1" class="form-control" placeholder="อื่นๆ โปรดระบุ"
                                        aria-label="โปรดระบุ" value="{{($forms1[0]->quiz_2_1)}}">
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> บันทึก</button>
                            </div>
                        </form>
                    </div>
                </div>

                <br>
                <div class="d-flex justify-content-between g-3">
                    <button type="button" onclick="window.location.href='{{url('/index')}}'" class="btn btn-primary">
                        <i class="bi bi-arrow-left-circle-fill"></i>
                        กลับหน้าหลักของแบบสอบถาม
                    </button>
                    <button type="button" onclick="window.location.href='{{url('/form2/'.$getbyid[0]->id)}}'"
                        class="btn btn-primary">หน้าถัดไป
                        <i class="bi bi-arrow-right-circle-fill"></i>
                    </button>
                </div>
            </div>
        </div>
    </section><!-- End Hero -->
</x-app-layout>