<x-app-layout>
    <script>
    $(document).ready(function() {
        var value = $('input[name=quiz8_1]:checked', '#myForm1').val()
        if (value == "2") {
            $('.dvtext1').show();
        } else {
            $('.dvtext1').hide();
        }

        var value2 = $('input[name=quiz8_1]:checked', '#myForm1').val()
        if (value2 == "3") {
            $('.dvtext2').show();
        } else {
            $('.dvtext2').hide();
        }

        var value3 = $('input[name=quiz8_2]:checked', '#myForm1').val()
        if (value3 == "2") {
            $('.dvtext3').show();
        } else {
            $('.dvtext3').hide();
        }
        var value4 = $('input[name=quiz8_2]:checked', '#myForm1').val()
        if (value4 == "3") {
            $('.dvtext4').show();
        } else {
            $('.dvtext4').hide();
        }
        var value5 = $('input[name=quiz8_3]:checked', '#myForm1').val()
        if (value5 == "4") {
            $('.dvtext5').show();
        } else {
            $('.dvtext5').hide();
        }



        $("input[name=quiz8_1]").on("change", function() {
            ($(this).val() == "2") ? $(this).siblings(".dvtext1").show(): $(this).siblings(
                ".dvtext1").hide()
        })
        $("input[type=radio][name=quiz8_1]").on("change", function() {
            ($(this).val() == "3") ? $(this).siblings(".dvtext2").show(): $(this).siblings(
                ".dvtext2").hide()
        })
        $("input[type=radio][name=quiz8_2]").on("change", function() {
            ($(this).val() == "2") ? $(this).siblings(".dvtext3").show(): $(this).siblings(
                ".dvtext3").hide()
        })
        $("input[type=radio][name=quiz8_2]").on("change", function() {
            ($(this).val() == "3") ? $(this).siblings(".dvtext4").show(): $(this).siblings(
                ".dvtext4").hide()
        })
        $("input[type=radio][name=quiz8_3]").on("change", function() {
            ($(this).val() == "4") ? $(this).siblings(".dvtext5").show(): $(this).siblings(
                ".dvtext5").hide()
        })




    });
    </script>

    <style>
    .dvtext {
        display: none;
    }
    </style>

    <!-- ======= Hero Section ======= -->
    <section id="userform" class="userform  d-flex align-items-center">
        <div class="container " data-aos="fade-up">
            <header class="section-header d-flex justify-content-between">
                <div>
                    <p>ส่วนที่ 8</p>
                    <div class="section-header-line"></div>
                    <h3>การสูบบุหรี่ และเครื่องดื่มแอลกอฮอล์</h3>
                </div>
                <div>
                    <a>ผู้รับบริการ: {{$getbyid[0]->name}}</a>
                </div>
            </header>

            <div class="row d-flex justify-content-center ">
                @if(session("success"))
                <div class="alert alert-success">{{session('success')}}</div>
                @endif


                <div class="col-md-7">
                    <form id="myForm1" class="row" action="{{url('/formupdate8/'.$getbyid[0]->id)}}" method="post">
                        @csrf
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">8.1 ท่านสูบบุหรี่หรือไม่</label>
                            <br>

                            <!-- <div class="form-check form-check-inline"> -->
                            <input class="form-check-input" type="radio" name="quiz8_1" id="inlineRadio1" value="1"
                                {{($forms[0]->quiz8_1 == '1' ?  'checked' : '')}}>
                            <label class="form-check-label" for="inlineRadio1">ไม่เคยสูบบุหรี่</label>
                            <!-- </div> -->


                            <br>
                            <!-- <div class="form-check"> -->
                            <input class="form-check-input" type="radio" name="quiz8_1" id="inlineRadio2" value="2"
                                {{($forms[0]->quiz8_1 == '2' ?  'checked' : '')}}>
                            <label class="form-check-label" for="inlineRadio2">ปัจจุบันกำลังสูบบุหรี่</label>
                            <!-- </div> -->

                            <div class="dvtext1 col-md-6">
                                <div class="row form9-input-text ">
                                    <div class="col-md-6 input-group">
                                        <input type="text" class="form-control" placeholder="สูบวันละกี่มวน"
                                            aria-label="สูบวันละกี่มวน" name="quiz8_1_1_1"
                                            value="{{($forms[0]->quiz8_1_1_1)}}">
                                        <span class="input-group-text">มวน</span>
                                    </div>
                                </div>

                                <div class="row form9-input-text ">
                                    <div class="col-md-6 input-group">
                                        <input type="text" class="form-control width" placeholder="สูบมาได้นานเท่าใด"
                                            aria-label="สูบมาได้นานเท่าใด" name="quiz8_1_1_2"
                                            value="{{($forms[0]->quiz8_1_1_2)}}">
                                        <select class="form-select btn btn-outline-secondary dropdown-toggle "
                                            id="inputGroupSelect01" name="quiz8_1_1_3">
                                            <option>กรุณาเลือก</option>
                                            <option value="เดือน"
                                                {{($forms[0]->quiz8_1_1_3 == 'เดือน' ?  'selected' : '')}}>เดือน
                                            </option>
                                            <option value="ปี" {{($forms[0]->quiz8_1_1_3 == 'ปี' ?  'selected' : '')}}>
                                                ปี</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <!-- </div> -->
                            <br>
                            <!-- <div class="form-check"> -->
                            <input class="form-check-input" type="radio" name="quiz8_1" id="inlineRadio2" value="3"
                                {{($forms[0]->quiz8_1 == '3' ?  'checked' : '')}}>
                            <label class="form-check-label" for="inlineRadio2">เคยสูบแต่ปัจจุบันหยุดสูบบุหรี่แล้ว
                            </label>
                            <div class="dvtext2 col-md-6">

                                <div class="row form9-input-text ">
                                    <div class="col-md-6 input-group">
                                        <input type="text" class="form-control width"
                                            placeholder="ระยะเวลาที่เคยสูบมานานเท่าใด"
                                            aria-label="ระยะเวลาที่เคยสูบมานานเท่าใด" name="quiz8_1_2_1"
                                            value="{{($forms[0]->quiz8_1_2_1)}}">
                                        <select class="form-select btn btn-outline-secondary dropdown-toggle "
                                            name="quiz8_1_2_2">
                                            <option>กรุณาเลือก</option>
                                            <option value="เดือน"
                                                {{($forms[0]->quiz8_1_2_2 == 'เดือน' ?  'selected' : '')}}>เดือน
                                            </option>
                                            <option value="ปี" {{($forms[0]->quiz8_1_2_2 == 'ปี' ?  'selected' : '')}}>
                                                ปี</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row form9-input-text ">
                                    <div class="col-md-6 input-group">
                                        <input type="text" class="form-control width" placeholder="หยุดสูบมานานเท่าใด"
                                            aria-label="หยุดสูบมานานเท่าใด" name="quiz8_1_2_3"
                                            value="{{($forms[0]->quiz8_1_2_3)}}">
                                        <select class="form-select btn btn-outline-secondary dropdown-toggle "
                                            name="quiz8_1_2_4">
                                            <option>กรุณาเลือก</option>
                                            <option value="เดือน"
                                                {{($forms[0]->quiz8_1_2_4 == 'เดือน' ?  'selected' : '')}}>เดือน
                                            </option>
                                            <option value="ปี" {{($forms[0]->quiz8_1_2_4 == 'ปี' ?  'selected' : '')}}>
                                                ปี</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- </div> -->
                        </div>


                        <div class="col-12">
                            <label for="inputAddress" class="form-label">8.2 ท่านสูบบุหรี่ไฟฟ้าหรือไม่</label>
                            <br>
                            <!-- <div class="form-check form-check-inline"> -->
                            <input class="form-check-input" type="radio" name="quiz8_2" id="inlineRadio1" value="1"
                                {{($forms[0]->quiz8_2 == '1' ?  'checked' : '')}}>
                            <label class="form-check-label" for="inlineRadio1">ไม่เคยสูบบุหรี่ไฟฟ้า</label>
                            <!-- </div> -->
                            <br>

                            <!-- <div class="form-check "> -->
                            <input class="form-check-input" type="radio" name="quiz8_2" id="inlineRadio2" value="2"
                                {{($forms[0]->quiz8_2 == '2' ?  'checked' : '')}}>
                            <label class="form-check-label" for="inlineRadio2">ปัจจุบันกำลังสูบบุหรี่ไฟฟ้า</label>
                            <div class="dvtext3 col-md-6">
                                <div class="row form9-input-text ">
                                    <div class="col-md-6 input-group">
                                        <input type="text" class="form-control" placeholder="สูบวันละกี่ครั้ง"
                                            aria-label="สูบวันละกี่มวน" name="quiz8_2_1_1"
                                            value="{{($forms[0]->quiz8_2_1_1)}}">
                                        <span class="input-group-text">ครั้ง</span>

                                    </div>
                                </div>

                                <div class="row form9-input-text ">
                                    <div class="col-md-6 input-group">
                                        <input type="text" class="form-control width" placeholder="สูบมาได้นานเท่าใด"
                                            aria-label="สูบมาได้นานเท่าใด" name="quiz8_2_1_2"
                                            value="{{($forms[0]->quiz8_2_1_2)}}">
                                        <select class="form-select btn btn-outline-secondary dropdown-toggle "
                                            name="quiz8_2_1_3">
                                            <option>กรุณาเลือก</option>
                                            <option value="เดือน"
                                                {{($forms[0]->quiz8_2_1_3 == 'เดือน' ?  'selected' : '')}}>เดือน
                                            </option>
                                            <option value="ปี" {{($forms[0]->quiz8_2_1_3 == 'ปี' ?  'selected' : '')}}>
                                                ปี</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row form9-input-text ">
                                    <div class="col-md-6 input-group">
                                        <input type="text" class="form-control width"
                                            placeholder="น้ำยา 1 หยดใช้ได้นานเท่าใด"
                                            aria-label="น้ำยา 1 หยดใช้ได้นานเท่าใด" name="quiz8_2_1_4"
                                            value="{{($forms[0]->quiz8_2_1_4)}}">
                                        <select class="form-select btn btn-outline-secondary dropdown-toggle "
                                            name="quiz8_2_1_5">
                                            <option>กรุณาเลือก</option>
                                            <option value="ชั่วโมง"
                                                {{($forms[0]->quiz8_2_1_5 == 'ชั่วโมง' ?  'selected' : '')}}>ชั่วโมง
                                            </option>
                                            <option value="วัน"
                                                {{($forms[0]->quiz8_2_1_5 == 'วัน' ?  'selected' : '')}}>วัน</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- </div> -->
                            <br>
                            <!-- <div class="form-check "> -->
                            <input class="form-check-input" type="radio" name="quiz8_2" id="inlineRadio2" value="3"
                                {{($forms[0]->quiz8_2 == '3' ?  'checked' : '')}}>
                            <label class="form-check-label" for="inlineRadio2">
                                เคยสูบแต่ปัจจุบันหยุดสูบบุหรี่ไฟฟ้าแล้ว
                            </label>
                            <div class="dvtext4 col-md-6">
                                <div class="row form9-input-text ">
                                    <div class="col-md-6 input-group">
                                        <input type="text" class="form-control width"
                                            placeholder="ระยะเวลาที่เคยสูบมานานเท่าใด"
                                            aria-label="ระยะเวลาที่เคยสูบมานานเท่าใด" name="quiz8_2_2_1"
                                            value="{{($forms[0]->quiz8_2_2_1)}}">
                                        <select class="form-select btn btn-outline-secondary dropdown-toggle "
                                            name="quiz8_2_2_2">
                                            <option>กรุณาเลือก</option>
                                            <option value="เดือน"
                                                {{($forms[0]->quiz8_2_2_2 == 'เดือน' ?  'selected' : '')}}>เดือน
                                            </option>
                                            <option value="ปี" {{($forms[0]->quiz8_2_2_2 == 'ปี' ?  'selected' : '')}}>
                                                ปี</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row form9-input-text ">
                                    <div class="col-md-6 input-group">
                                        <input type="text" class="form-control width" placeholder="หยุดสูบมานานเท่าใด"
                                            aria-label="หยุดสูบมานานเท่าใด" name="quiz8_2_2_3"
                                            value="{{($forms[0]->quiz8_2_2_3)}}">
                                        <select class="form-select btn btn-outline-secondary dropdown-toggle "
                                            name="quiz8_2_2_4">
                                            <option>กรุณาเลือก</option>
                                            <option value="เดือน"
                                                {{($forms[0]->quiz8_2_2_4 == 'เดือน' ?  'selected' : '')}}>เดือน
                                            </option>
                                            <option value="ปี" {{($forms[0]->quiz8_2_2_4 == 'ปี' ?  'selected' : '')}}>
                                                ปี</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- </div> -->
                        </div>



                        <div class="col-12">
                            <label for="inputAddress" class="form-label">8.3
                                ท่านดื่มเครื่องดื่มแอลกอฮอล์หรือไม่</label>
                            <br>
                            <input class="form-check-input" type="radio" name="quiz8_3" id="inlineRadio1" value="1"
                                {{($forms[0]->quiz8_3 == '1' ?  'checked' : '')}}>
                            <label class="form-check-label" for="inlineRadio1">ไม่เคยดื่ม</label>
                            <br>

                            <input class="form-check-input" type="radio" name="quiz8_3" id="inlineRadio2" value="2"
                                {{($forms[0]->quiz8_3 == '2' ?  'checked' : '')}}>
                            <label class="form-check-label" for="inlineRadio2">เคยดื่มแต่ปัจจุบันไม่ได้ดื่มแล้ว</label>
                            <br>

                            <input class="form-check-input" type="radio" name="quiz8_3" id="inlineRadio2" value="3"
                                {{($forms[0]->quiz8_3 == '3' ?  'checked' : '')}}>
                            <label class="form-check-label" for="inlineRadio2">ดื่มบางครั้งตามงานสังคม</label>
                            <br>

                            <input class="form-check-input" type="radio" name="quiz8_3" id="inlineRadio2" value="4"
                                {{($forms[0]->quiz8_3 == '4' ?  'checked' : '')}}>
                            <label class="form-check-label"
                                for="inlineRadio2">ปัจจุบันนี้ท่านดื่มเครื่องดื่มแอลกอฮอล์เกือบทุกวัน
                                (อย่างน้อยสัปดาห์ละครั้ง)</label>

                            <div class="dvtext5 form9-input-text">

                                <div class="col-12 ">
                                    <label for="inputAddress" class="form-label">8.3.1
                                        ในหนึ่งวันท่านดื่มเบียร์มากกว่า 3
                                        แก้วเบียร์ (3 x 285 มล.)</label>
                                    <br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="quiz8_3_1" id="inlineRadio1"
                                            value="1" {{($forms[0]->quiz8_3_1 == '1' ?  'checked' : '')}}>
                                        <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                    </div>
                                    <br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="quiz8_3_1" id="inlineRadio2"
                                            value="2" {{($forms[0]->quiz8_3_1 == '2' ?  'checked' : '')}}>
                                        <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">8.3.2 ในหนึ่งวันท่านดื่มสุรามากกว่า
                                        3
                                        ก๊ง (3
                                        x 30 มล.)</label>
                                    <br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="quiz8_3_2" id="inlineRadio1"
                                            value="1" {{($forms[0]->quiz8_3_2 == '1' ?  'checked' : '')}}>
                                        <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                    </div>
                                    <br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="quiz8_3_2" id="inlineRadio2"
                                            value="2" {{($forms[0]->quiz8_3_2 == '2' ?  'checked' : '')}}>
                                        <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">8.3.3 ในหนึ่งวันท่านดื่มไวน์มากกว่า
                                        3
                                        แก้วไวน์ (3 x 120 มล.)</label>
                                    <br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="quiz8_3_3" id="inlineRadio1"
                                            value="1" {{($forms[0]->quiz8_3_3 == '1' ?  'checked' : '')}}>
                                        <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                    </div>
                                    <br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="quiz8_3_3" id="inlineRadio2"
                                            value="2" {{($forms[0]->quiz8_3_3 == '2' ?  'checked' : '')}}>
                                        <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">8.3.4
                                        จำนวนความถี่ในการดื่มแอลกอฮอล์ของท่าน</label>
                                    <br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="quiz8_3_4" id="inlineRadio1"
                                            value="1" {{($forms[0]->quiz8_3_4 == '1' ?  'checked' : '')}}>
                                        <label class="form-check-label" for="inlineRadio1">1-2 ครั้ง/สัปดาห์</label>
                                    </div>
                                    <br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="quiz8_3_4" id="inlineRadio2"
                                            value="2" {{($forms[0]->quiz8_3_4 == '2' ?  'checked' : '')}}>
                                        <label class="form-check-label" for="inlineRadio2">3-4 ครั้ง/สัปดาห์</label>
                                    </div>
                                    <br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="quiz8_3_4" id="inlineRadio2"
                                            value="3" {{($forms[0]->quiz8_3_4 == '3' ?  'checked' : '')}}>
                                        <label class="form-check-label" for="inlineRadio2">5-6 ครั้ง/สัปดาห์</label>
                                    </div>
                                    <br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="quiz8_3_4" id="inlineRadio2"
                                            value="4" {{($forms[0]->quiz8_3_4 == '4' ?  'checked' : '')}}>
                                        <label class="form-check-label" for="inlineRadio2">ทุกวัน</label>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-12">
                            <br>
                            <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i>
                                บันทึก
                            </button>
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
                <button type="button" onclick="window.location.href='{{url('/form9/'.$getbyid[0]->id)}}'"
                    class="btn btn-primary">หน้าถัดไป
                    <i class="bi bi-arrow-right-circle-fill"></i>
                </button>
            </div>
        </div>
    </section><!-- End Hero -->
</x-app-layout>