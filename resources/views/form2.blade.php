<x-app-layout>
    <script>
    $(document).ready(function() {
        for (i = 1; i < 29; i++) {
            var value = $('input[name=quiz2_' + i + ']:checked', '#myForm1').val()
            if (value == 1) {
                $('.dvtext' + i).show();
            } else {
                $('.dvtext' + i).hide();
            }
            console.log(i);
        }


        function myFunction() {
            ($(this).val() == "1") ? $(this).siblings(".dvtext2").show(): $(this).siblings(
                ".dvtext2").hide()
        }


        $("input[name=quiz2_1]").on("change", function() {
            ($(this).val() == "1") ? $(this).siblings(".dvtext1").show(): $(this).siblings(
                ".dvtext1").hide()
        })
        $("input[name=quiz2_2]").on("change", function() {
            ($(this).val() == "1") ? $(this).siblings(".dvtext2").show(): $(this).siblings(
                ".dvtext2").hide()
        })

        $("input[type=radio][name=quiz2_3]").on("change", function() {
            ($(this).val() == "1") ? $(this).siblings(".dvtext3").show(): $(this).siblings(
                ".dvtext3").hide()
        })

        $("input[type=radio][name=quiz2_4]").on("change", function() {
            ($(this).val() == "1") ? $(this).siblings(".dvtext4").show(): $(this).siblings(
                ".dvtext4").hide()
        })

        $("input[type=radio][name=quiz2_5]").on("change", function() {
            ($(this).val() == "1") ? $(this).siblings(".dvtext5").show(): $(this).siblings(
                ".dvtext5").hide()
        })

        $("input[type=radio][name=quiz2_6]").on("change", function() {
            ($(this).val() == "1") ? $(this).siblings(".dvtext6").show(): $(this).siblings(
                ".dvtext6").hide()
        })

        $("input[type=radio][name=quiz2_7]").on("change", function() {
            ($(this).val() == "1") ? $(this).siblings(".dvtext7").show(): $(this).siblings(
                ".dvtext7").hide()
        })

        $("input[type=radio][name=quiz2_8]").on("change", function() {
            ($(this).val() == "1") ? $(this).siblings(".dvtext8").show(): $(this).siblings(
                ".dvtext8").hide()
        })

        $("input[type=radio][name=quiz2_9]").on("change", function() {
            ($(this).val() == "1") ? $(this).siblings(".dvtext9").show(): $(this).siblings(
                ".dvtext9").hide()
        })

        $("input[type=radio][name=quiz2_10]").on("change", function() {
            ($(this).val() == "1") ? $(this).siblings(".dvtext10").show(): $(this).siblings(
                ".dvtext10").hide()
        })

        $("input[type=radio][name=quiz2_11]").on("change", function() {
            ($(this).val() == "1") ? $(this).siblings(".dvtext11").show(): $(this).siblings(
                ".dvtext11").hide()
        })

        $("input[type=radio][name=quiz2_12]").on("change", function() {
            ($(this).val() == "1") ? $(this).siblings(".dvtext12").show(): $(this).siblings(
                ".dvtext12").hide()
        })

        $("input[type=radio][name=quiz2_13]").on("change", function() {
            ($(this).val() == "1") ? $(this).siblings(".dvtext13").show(): $(this).siblings(
                ".dvtext13").hide()
        })

        $("input[type=radio][name=quiz2_14]").on("change", function() {
            ($(this).val() == "1") ? $(this).siblings(".dvtext14").show(): $(this).siblings(
                ".dvtext14").hide()
        })

        $("input[type=radio][name=quiz2_15]").on("change", function() {
            ($(this).val() == "1") ? $(this).siblings(".dvtext15").show(): $(this).siblings(
                ".dvtext15").hide()
        })

        $("input[type=radio][name=quiz2_16]").on("change", function() {
            ($(this).val() == "1") ? $(this).siblings(".dvtext16").show(): $(this).siblings(
                ".dvtext16").hide()
        })

        $("input[type=radio][name=quiz2_17]").on("change", function() {
            ($(this).val() == "1") ? $(this).siblings(".dvtext17").show(): $(this).siblings(
                ".dvtext17").hide()
        })

        $("input[type=radio][name=quiz2_18]").on("change", function() {
            ($(this).val() == "1") ? $(this).siblings(".dvtext18").show(): $(this).siblings(
                ".dvtext18").hide()
        })

        $("input[type=radio][name=quiz2_19]").on("change", function() {
            ($(this).val() == "1") ? $(this).siblings(".dvtext19").show(): $(this).siblings(
                ".dvtext19").hide()
        })

        $("input[type=radio][name=quiz2_20]").on("change", function() {
            ($(this).val() == "1") ? $(this).siblings(".dvtext20").show(): $(this).siblings(
                ".dvtext20").hide()
        })

        $("input[type=radio][name=quiz2_21]").on("change", function() {
            ($(this).val() == "1") ? $(this).siblings(".dvtext21").show(): $(this).siblings(
                ".dvtext21").hide()
        })

        $("input[type=radio][name=quiz2_22]").on("change", function() {
            ($(this).val() == "1") ? $(this).siblings(".dvtext22").show(): $(this).siblings(
                ".dvtext22").hide()
        })

        $("input[type=radio][name=quiz2_23]").on("change", function() {
            ($(this).val() == "1") ? $(this).siblings(".dvtext23").show(): $(this).siblings(
                ".dvtext23").hide()
        })

        $("input[type=radio][name=quiz2_24]").on("change", function() {
            ($(this).val() == "1") ? $(this).siblings(".dvtext24").show(): $(this).siblings(
                ".dvtext24").hide()
        })

        $("input[type=radio][name=quiz2_25]").on("change", function() {
            ($(this).val() == "1") ? $(this).siblings(".dvtext25").show(): $(this).siblings(
                ".dvtext25").hide()
        })

        $("input[type=radio][name=quiz2_26]").on("change", function() {
            ($(this).val() == "1") ? $(this).siblings(".dvtext26").show(): $(this).siblings(
                ".dvtext26").hide()
        })

        $("input[type=radio][name=quiz2_27]").on("change", function() {
            ($(this).val() == "1") ? $(this).siblings(".dvtext27").show(): $(this).siblings(
                ".dvtext27").hide()
        })

        $("input[type=radio][name=quiz2_28]").on("change", function() {
            ($(this).val() == "1") ? $(this).siblings(".dvtext28").show(): $(this).siblings(
                ".dvtext28").hide()
        })
    });
    </script>


    <style>
    .hide {
        display: none;
    }
    </style>

    <!-- ======= Hero Section ======= -->
    <section id="userform" class="userform  d-flex align-items-center">
        <div class="container " data-aos="fade-up">
            <header class="section-header d-flex justify-content-between">
                <div>
                    <p>ส่วนที่ 2</p>
                    <div class="section-header-line"></div>
                    <h3>ประวัติการเจ็บป่วย</h3>
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
                                    <h3>แพทย์เคยแจ้งว่าท่านมีการเจ็บป่วยเหล่านี้ ใช่หรือไม่ </h3>

                                </div>
                            </div>
                        </div>

                        <form id="myForm1" class="row g-3" action="{{url('/formupdate2/'.$getbyid[0]->id)}}"
                            method="post">
                            @csrf
                            <!-- <div class="col-12">
                                <label for="inputAddress" class="form-label">2.1
                                    ประวัติการเจ็บป่วยของตัวท่าน</label>
                                <label for="inputAddress" class="form-label">ท่านมีปัญหาสุขภาพต่อไปนี้หรือไม่</label>
                            </div> -->

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">2.1 ความดันในเลือดสูง</label>
                                <div class="questionnaire ">
                                    &nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="quiz2_1" value="1"
                                        {{($forms[0]->quiz2_1 == '1' ?  'checked' : '')}}>
                                    <label class="form-check-label">ใช่</label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="quiz2_1" value="0"
                                        {{($forms[0]->quiz2_1 == '0' ?  'checked' : '')}}>
                                    <label class="form-check-label">ไม่ใช่</label>


                                    <div class="title hide dvtext1" id="div1">
                                        <a>- เริ่มเป็นเมื่อ ปี พ.ศ. ใด (วินิจฉัยโดยแพทย์) </a>
                                        <div class="input">
                                            <input type="text" class="form-control" name="quiz2_1_1"
                                                placeholder="โปรดระบุ ปี พ.ศ. (เช่น 2565)"
                                                value="{{($forms[0]->quiz2_1_1)}}">
                                        </div>
                                        <div class="title">
                                            <a>- ปัจจุบันท่านรับการรักษาสำหรับการเจ็บป่วยนี้อยู่หรือไม่</a>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz2_1_2" value="1"
                                                {{($forms[0]->quiz2_1_2 == '1' ?  'checked' : '')}}>

                                            <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz2_1_2" value="0"
                                                {{($forms[0]->quiz2_1_2 == '0' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">2.2 ไขมันในเลือดสูง</label>
                                <div class="questionnaire">

                                    &nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="quiz2_2" value="1"
                                        {{($forms[0]->quiz2_2 == '1' ?  'checked' : '')}}>
                                    <label class="form-check-label">ใช่</label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="quiz2_2" value="0"
                                        {{($forms[0]->quiz2_2 == '0' ?  'checked' : '')}}>
                                    <label class="form-check-label">ไม่ใช่</label>


                                    <div class="dvtext2" id="div2">
                                        <a>- เริ่มเป็นเมื่อ ปี พ.ศ. ใด (วินิจฉัยโดยแพทย์) </a>
                                        <div class="input">
                                            <input type="text" class="form-control" name="quiz2_2_1"
                                                placeholder="โปรดระบุ ปี พ.ศ. (เช่น 2565)"
                                                value="{{($forms[0]->quiz2_2_1)}}">
                                        </div>
                                        <div class="title">
                                            <a>- ปัจจุบันท่านรับการรักษาสำหรับการเจ็บป่วยนี้อยู่หรือไม่</a>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz2_2_2" value="1"
                                                {{($forms[0]->quiz2_2_2 == '1' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz2_2_2" value="0"
                                                {{($forms[0]->quiz2_2_2 == '0' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">2.3 เบาหวาน</label>
                                <div class="questionnaire">

                                    &nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="quiz2_3" value="1"
                                        {{($forms[0]->quiz2_3 == '1' ?  'checked' : '')}}>
                                    <label class="form-check-label">ใช่</label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="quiz2_3" value="0"
                                        {{($forms[0]->quiz2_3 == '0' ?  'checked' : '')}}>
                                    <label class="form-check-label">ไม่ใช่</label>


                                    <div class="dvtext3">
                                        <a>- เริ่มเป็นเมื่อ ปี พ.ศ. ใด (วินิจฉัยโดยแพทย์) </a>
                                        <div class="input">
                                            <input type="text" class="form-control" name="quiz2_3_1"
                                                placeholder="โปรดระบุ ปี พ.ศ. (เช่น 2565)"
                                                value="{{($forms[0]->quiz2_3_1)}}">
                                        </div>
                                        <div class="title">
                                            <a>- ปัจจุบันท่านรับการรักษาสำหรับการเจ็บป่วยนี้อยู่หรือไม่</a>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz2_3_2" value="1"
                                                {{($forms[0]->quiz2_3_2 == '1' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz2_3_2" value="0"
                                                {{($forms[0]->quiz2_3_2 == '0' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">2.4 โรคเส้นเลือดหัวใจตีบ
                                    (การอุดตันของเส้นเลือดแดงที่ไปเลี้ยงหัวใจ)</label>
                                <div class="questionnaire">

                                    &nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="quiz2_4" id="inlineRadio1"
                                        value="1" {{($forms[0]->quiz2_4 == '1' ?  'checked' : '')}}>
                                    <label class="form-check-label">ใช่</label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="quiz2_4" id="inlineRadio2"
                                        value="0" {{($forms[0]->quiz2_4 == '0' ?  'checked' : '')}}>
                                    <label class="form-check-label">ไม่ใช่</label>



                                    <div class="dvtext4">
                                        <a>- เริ่มเป็นเมื่อ ปี พ.ศ. ใด (วินิจฉัยโดยแพทย์) </a>
                                        <div class="input">
                                            <input type="text" class="form-control" name="quiz2_4_1"
                                                placeholder="โปรดระบุ ปี พ.ศ. (เช่น 2565)"
                                                value="{{($forms[0]->quiz2_4_1)}}">
                                        </div>
                                        <div class="title">
                                            <a>- ปัจจุบันท่านรับการรักษาสำหรับการเจ็บป่วยนี้อยู่หรือไม่</a>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz2_4_2" value="1"
                                                {{($forms[0]->quiz2_4_2 == '1' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz2_4_2" value="0"
                                                {{($forms[0]->quiz2_4_2 == '0' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">2.5 กล้ามเนื้อหัวใจตาย
                                    (ภาวะกล้ามเนื้อหัวใจตายเฉียบพลัน)</label>
                                <div class="questionnaire">


                                    &nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="quiz2_5" value="1"
                                        {{($forms[0]->quiz2_5 == '1' ?  'checked' : '')}}>
                                    <label class="form-check-label">ใช่</label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="quiz2_5" value="0"
                                        {{($forms[0]->quiz2_5 == '0' ?  'checked' : '')}}>
                                    <label class="form-check-label">ไม่ใช่</label>

                                    <div class="dvtext5">
                                        <a>- เริ่มเป็นเมื่อ ปี พ.ศ. ใด (วินิจฉัยโดยแพทย์) </a>
                                        <div class="input">
                                            <input type="text" class="form-control" name="quiz2_5_1"
                                                placeholder="โปรดระบุ ปี พ.ศ. (เช่น 2565)"
                                                value="{{($forms[0]->quiz2_5_1)}}">
                                        </div>
                                        <div class="title">
                                            <a>- ปัจจุบันท่านรับการรักษาสำหรับการเจ็บป่วยนี้อยู่หรือไม่</a>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz2_5_2" value="1"
                                                {{($forms[0]->quiz2_5_2 == '1' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz2_5_2" value="0"
                                                {{($forms[0]->quiz2_5_2 == '0' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">2.6 การทำงานของหัวใจล้มเหลว</label>
                                <div class="questionnaire">

                                    &nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="quiz2_6" id="inlineRadio1"
                                        value="1" {{($forms[0]->quiz2_6 == '1' ?  'checked' : '')}}>
                                    <label class="form-check-label">ใช่</label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="quiz2_6" id="inlineRadio2"
                                        value="0" {{($forms[0]->quiz2_6 == '0' ?  'checked' : '')}}>
                                    <label class="form-check-label">ไม่ใช่</label>



                                    <div class="dvtext6">
                                        <a>- เริ่มเป็นเมื่อ ปี พ.ศ. ใด (วินิจฉัยโดยแพทย์) </a>
                                        <div class="input">
                                            <input type="text" class="form-control" name="quiz2_6_1"
                                                placeholder="โปรดระบุ ปี พ.ศ. (เช่น 2565)"
                                                value="{{($forms[0]->quiz2_6_1)}}">
                                        </div>
                                        <div class="title">
                                            <a>- ปัจจุบันท่านรับการรักษาสำหรับการเจ็บป่วยนี้อยู่หรือไม่</a>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz2_6_2" value="1"
                                                {{($forms[0]->quiz2_6_2 == '1' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz2_6_2" value="0"
                                                {{($forms[0]->quiz2_6_2 == '0' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">2.7 เส้นเลือดส่วนปลายตีบ
                                    (การอุดตันของเส้นเลือดแดงที่ไปเลี้ยงขา”PAD”)</label>
                                <div class="questionnaire">

                                    &nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="quiz2_7" value="1"
                                        {{($forms[0]->quiz2_7 == '1' ?  'checked' : '')}}>
                                    <label class="form-check-label">ใช่</label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="quiz2_7" value="0"
                                        {{($forms[0]->quiz2_7 == '0' ?  'checked' : '')}}>
                                    <label class="form-check-label">ไม่ใช่</label>

                                    <div class="dvtext7">
                                        <a>- เริ่มเป็นเมื่อ ปี พ.ศ. ใด (วินิจฉัยโดยแพทย์) </a>
                                        <div class="input">
                                            <input type="text" class="form-control" name="quiz2_7_1"
                                                placeholder="โปรดระบุ ปี พ.ศ. (เช่น 2565)"
                                                value="{{($forms[0]->quiz2_7_1)}}">
                                        </div>
                                        <div class="title">
                                            <a>- ปัจจุบันท่านรับการรักษาสำหรับการเจ็บป่วยนี้อยู่หรือไม่</a>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz2_7_2" value="1"
                                                {{($forms[0]->quiz2_7_2 == '1' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz2_7_2" value="0"
                                                {{($forms[0]->quiz2_7_2 == '0' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">2.8 โรคหลอดเลือดสมอง</label>
                                <div class="questionnaire">

                                    &nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="quiz2_8" value="1"
                                        {{($forms[0]->quiz2_8 == '1' ?  'checked' : '')}}>
                                    <label class="form-check-label">ใช่</label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="quiz2_8" value="0"
                                        {{($forms[0]->quiz2_8 == '0' ?  'checked' : '')}}>
                                    <label class="form-check-label">ไม่ใช่</label>



                                    <div class="dvtext8">
                                        <a>- เริ่มเป็นเมื่อ ปี พ.ศ. ใด (วินิจฉัยโดยแพทย์) </a>
                                        <div class="input">
                                            <input type="text" class="form-control" name="quiz2_8_1"
                                                placeholder="โปรดระบุ ปี พ.ศ. (เช่น 2565)"
                                                value="{{($forms[0]->quiz2_8_1)}}">
                                        </div>
                                        <div class="title">
                                            <a>- ปัจจุบันท่านรับการรักษาสำหรับการเจ็บป่วยนี้อยู่หรือไม่</a>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz2_8_2" value="1"
                                                {{($forms[0]->quiz2_8_2 == '1' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz2_8_2" value="0"
                                                {{($forms[0]->quiz2_8_2 == '0' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-12">
                                <label for="inputAddress" class="form-label">2.9 โรคพาร์กินสัน</label>
                                <div class="questionnaire">
                                    &nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="quiz2_9" value="1"
                                        {{($forms[0]->quiz2_9 == '1' ?  'checked' : '')}}>
                                    <label class="form-check-label">ใช่</label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="quiz2_9" value="0"
                                        {{($forms[0]->quiz2_9 == '0' ?  'checked' : '')}}>
                                    <label class="form-check-label">ไม่ใช่</label>

                                    <div class="dvtext9">
                                        <a>- เริ่มเป็นเมื่อ ปี พ.ศ. ใด (วินิจฉัยโดยแพทย์) </a>
                                        <div class="input">
                                            <input type="text" class="form-control" name="quiz2_9_1"
                                                placeholder="โปรดระบุ ปี พ.ศ. (เช่น 2565)" value="{{($forms[0]->quiz2_9_1)}}">
                                        </div>
                                        <div class="title">
                                            <a>- ปัจจุบันท่านรับการรักษาสำหรับการเจ็บป่วยนี้อยู่หรือไม่</a>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz2_9_2" value="1">
                                            <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz2_9_2" value="0">
                                            <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">2.10 โรคลมชัก</label>
                                <div class="questionnaire">


                                    &nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="quiz2_10" id="inlineRadio1"
                                        value="1" {{($forms[0]->quiz2_10 == '1' ?  'checked' : '')}}>
                                    <label class="form-check-label">ใช่</label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="quiz2_10" id="inlineRadio2"
                                        value="0" {{($forms[0]->quiz2_10 == '0' ?  'checked' : '')}}>
                                    <label class="form-check-label">ไม่ใช่</label>


                                    <div class="dvtext10">
                                        <a>- เริ่มเป็นเมื่อ ปี พ.ศ. ใด (วินิจฉัยโดยแพทย์) </a>
                                        <div class="input">
                                            <input type="text" class="form-control" name="quiz2_10_1"
                                                placeholder="โปรดระบุ ปี พ.ศ. (เช่น 2565)" value="{{($forms[0]->quiz2_10_1)}}">
                                        </div>
                                        <div class="title">
                                            <a>- ปัจจุบันท่านรับการรักษาสำหรับการเจ็บป่วยนี้อยู่หรือไม่</a>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz2_10_2" value="1"
                                                {{($forms[0]->quiz2_10_2 == '1' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz2_10_2" value="0"
                                                {{($forms[0]->quiz2_10_2 == '0' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">2.11 โรคหอบหืด (Asthma)</label>
                                <div class="questionnaire">

                                    &nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="quiz2_11" value="1"
                                        {{($forms[0]->quiz2_11 == '1' ?  'checked' : '')}}>
                                    <label class="form-check-label">ใช่</label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="quiz2_11" value="0"
                                        {{($forms[0]->quiz2_11 == '0' ?  'checked' : '')}}>
                                    <label class="form-check-label">ไม่ใช่</label>


                                    <div class="dvtext11">
                                        <a>- เริ่มเป็นเมื่อ ปี พ.ศ. ใด (วินิจฉัยโดยแพทย์) </a>
                                        <div class="input">
                                            <input type="text" class="form-control" name="quiz2_11_1"
                                                placeholder="โปรดระบุ ปี พ.ศ. (เช่น 2565)" value="{{($forms[0]->quiz2_11_1)}}">
                                        </div>
                                        <div class="title">
                                            <a>- ปัจจุบันท่านรับการรักษาสำหรับการเจ็บป่วยนี้อยู่หรือไม่</a>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz2_11_2" value="1"
                                                {{($forms[0]->quiz2_11_2 == '1' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz2_11_2" value="0"
                                                {{($forms[0]->quiz2_11_2 == '0' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">2.12 โรคถุงลมโป่งพอง (COPD)</label>
                                <div class="questionnaire">

                                    &nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="quiz2_12" value="1"
                                        {{($forms[0]->quiz2_12 == '1' ?  'checked' : '')}}>
                                    <label class="form-check-label">ใช่</label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="quiz2_12" value="0"
                                        {{($forms[0]->quiz2_12 == '0' ?  'checked' : '')}}>
                                    <label class="form-check-label">ไม่ใช่</label>


                                    <div class="dvtext12">
                                        <a>- เริ่มเป็นเมื่อ ปี พ.ศ. ใด (วินิจฉัยโดยแพทย์) </a>
                                        <div class="input">
                                            <input type="text" class="form-control" name="quiz2_12_1"
                                                placeholder="โปรดระบุ ปี พ.ศ. (เช่น 2565)" value="{{($forms[0]->quiz2_12_1)}}">
                                        </div>
                                        <div class="title">
                                            <a>- ปัจจุบันท่านรับการรักษาสำหรับการเจ็บป่วยนี้อยู่หรือไม่</a>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz2_12_2" value="1"
                                                {{($forms[0]->quiz2_12_2 == '1' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz2_12_2" value="0"
                                                {{($forms[0]->quiz2_12_2 == '0' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">2.13 โรคไต (ที่ไม่ใช่มะเร็ง)</label>
                                <div class="questionnaire">

                                    &nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="quiz2_13" value="1"
                                        {{($forms[0]->quiz2_13 == '1' ?  'checked' : '')}}>
                                    <label class="form-check-label">ใช่</label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="quiz2_13" value="0"
                                        {{($forms[0]->quiz2_13 == '0' ?  'checked' : '')}}>
                                    <label class="form-check-label">ไม่ใช่</label>

                                    <div class="dvtext13">
                                        <a>- เริ่มเป็นเมื่อ ปี พ.ศ. ใด (วินิจฉัยโดยแพทย์) </a>
                                        <div class="input">
                                            <input type="text" class="form-control" name="quiz2_13_1"
                                                placeholder="โปรดระบุ ปี พ.ศ. (เช่น 2565)" value="{{($forms[0]->quiz2_13_1)}}">
                                        </div>
                                        <div class="title">
                                            <a>- ปัจจุบันท่านรับการรักษาสำหรับการเจ็บป่วยนี้อยู่หรือไม่</a>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz2_13_2" value="1"
                                                {{($forms[0]->quiz2_13_2 == '1' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz2_13_2" value="0"
                                                {{($forms[0]->quiz2_13_2 == '0' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">2.14 โรคภูมิแพ้ (Allergy)</label>
                                <div class="questionnaire">

                                    &nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="quiz2_14" value="1"
                                        {{($forms[0]->quiz2_14 == '1' ?  'checked' : '')}}>
                                    <label class="form-check-label">ใช่</label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="quiz2_14" value="0"
                                        {{($forms[0]->quiz2_14 == '0' ?  'checked' : '')}}>
                                    <label class="form-check-label">ไม่ใช่</label>

                                    <div class="dvtext14">
                                        <a>- เริ่มเป็นเมื่อ ปี พ.ศ. ใด (วินิจฉัยโดยแพทย์) </a>
                                        <div class="input">
                                            <input type="text" class="form-control" name="quiz2_14_1"
                                                placeholder="โปรดระบุ ปี พ.ศ. (เช่น 2565)" value="{{($forms[0]->quiz2_14_1)}}">
                                        </div>
                                        <div class="title">
                                            <a>- ปัจจุบันท่านรับการรักษาสำหรับการเจ็บป่วยนี้อยู่หรือไม่</a>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz2_14_2" value="1"
                                                {{($forms[0]->quiz2_14_2 == '1' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz2_14_2" value="0"
                                                {{($forms[0]->quiz2_14_2 == '0' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">2.15 โรคข้ออักเสบรูมาตอยด์ (Rheumatoid
                                    arthritis)</label>
                                <div class="questionnaire">

                                    &nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="quiz2_15" value="1"
                                        {{($forms[0]->quiz2_15 == '1' ?  'checked' : '')}}>
                                    <label class="form-check-label">ใช่</label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="quiz2_15" value="0"
                                        {{($forms[0]->quiz2_15 == '0' ?  'checked' : '')}}>
                                    <label class="form-check-label">ไม่ใช่</label>

                                    <div class="dvtext15">
                                        <a>- เริ่มเป็นเมื่อ ปี พ.ศ. ใด (วินิจฉัยโดยแพทย์) </a>
                                        <div class="input">
                                            <input type="text" class="form-control" name="quiz2_15_1"
                                                placeholder="โปรดระบุ ปี พ.ศ. (เช่น 2565)" value="{{($forms[0]->quiz2_15_1)}}">
                                        </div>
                                        <div class="title">
                                            <a>- ปัจจุบันท่านรับการรักษาสำหรับการเจ็บป่วยนี้อยู่หรือไม่</a>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz2_15_2" value="1"
                                                {{($forms[0]->quiz2_15_2 == '1' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz2_15_2" value="0"
                                                {{($forms[0]->quiz2_15_2 == '0' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">2.16 โรคลูปัส (ภูมิแพ้ต่อตนเอง, systemic
                                    lupuserythematosus SLE)</label>
                                <div class="questionnaire">

                                    &nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="quiz2_16" value="1"
                                        {{($forms[0]->quiz2_16 == '1' ?  'checked' : '')}}>
                                    <label class="form-check-label">ใช่</label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="quiz2_16" value="0"
                                        {{($forms[0]->quiz2_16 == '0' ?  'checked' : '')}}>
                                    <label class="form-check-label">ไม่ใช่</label>

                                    <div class="dvtext16">
                                        <a>- เริ่มเป็นเมื่อ ปี พ.ศ. ใด (วินิจฉัยโดยแพทย์) </a>
                                        <div class="input">
                                            <input type="text" class="form-control" name="quiz2_16_1"
                                                placeholder="โปรดระบุ ปี พ.ศ. (เช่น 2565)" value="{{($forms[0]->quiz2_16_1)}}">
                                        </div>
                                        <div class="title">
                                            <a>- ปัจจุบันท่านรับการรักษาสำหรับการเจ็บป่วยนี้อยู่หรือไม่</a>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz2_16_2" value="1"
                                                {{($forms[0]->quiz2_16_2 == '1' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz2_16_2" value="0"
                                                {{($forms[0]->quiz2_16_2 == '0' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">2.17 โรคตับอื่นๆ (ที่ไม่ใช่มะเร็ง)</label>
                                <div class="questionnaire">

                                    &nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="quiz2_17" value="1"
                                        {{($forms[0]->quiz2_17 == '1' ?  'checked' : '')}}>
                                    <label class="form-check-label">ใช่</label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="quiz2_17" value="0"
                                        {{($forms[0]->quiz2_17 == '0' ?  'checked' : '')}}>
                                    <label class="form-check-label">ไม่ใช่</label>


                                    <div class="dvtext17">
                                        <a>- เริ่มเป็นเมื่อ ปี พ.ศ. ใด (วินิจฉัยโดยแพทย์) </a>
                                        <div class="input">
                                            <input type="text" class="form-control" name="quiz2_17_1"
                                                placeholder="โปรดระบุ ปี พ.ศ. (เช่น 2565)" value="{{($forms[0]->quiz2_17_1)}}">
                                        </div>
                                        <div class="title">
                                            <a>- ปัจจุบันท่านรับการรักษาสำหรับการเจ็บป่วยนี้อยู่หรือไม่</a>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz2_17_2" value="1"
                                                {{($forms[0]->quiz2_17_2 == '1' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz2_17_2" value="0"
                                                {{($forms[0]->quiz2_17_2 == '0' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">2.18 ตับอักเสบ</label>
                                <div class="questionnaire">

                                    &nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="quiz2_18" value="1"
                                        {{($forms[0]->quiz2_18 == '1' ?  'checked' : '')}}>
                                    <label class="form-check-label">ใช่</label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="quiz2_18" value="0"
                                        {{($forms[0]->quiz2_18 == '0' ?  'checked' : '')}}>
                                    <label class="form-check-label">ไม่ใช่</label>


                                    <div class="dvtext18">
                                        <a>- เริ่มเป็นเมื่อ ปี พ.ศ. ใด (วินิจฉัยโดยแพทย์) </a>
                                        <div class="input">
                                            <input type="text" class="form-control" name="quiz2_18_1"
                                                placeholder="โปรดระบุ ปี พ.ศ. (เช่น 2565)" value="{{($forms[0]->quiz2_18_1)}}">
                                        </div>
                                        <div class="title">
                                            <a>- ปัจจุบันท่านรับการรักษาสำหรับการเจ็บป่วยนี้อยู่หรือไม่</a>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz2_18_2" value="1"
                                                {{($forms[0]->quiz2_18_2 == '1' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz2_18_2" value="0"
                                                {{($forms[0]->quiz2_18_2 == '0' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">2.19 โรคเม็ดเลือดแดงแตก</label>
                                <div class="questionnaire">

                                    &nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="quiz2_19" value="1"
                                        {{($forms[0]->quiz2_19 == '1' ?  'checked' : '')}}>
                                    <label class="form-check-label">ใช่</label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="quiz2_19" value="0"
                                        {{($forms[0]->quiz2_19 == '0' ?  'checked' : '')}}>
                                    <label class="form-check-label">ไม่ใช่</label>


                                    <div class="dvtext19">
                                        <a>- เริ่มเป็นเมื่อ ปี พ.ศ. ใด (วินิจฉัยโดยแพทย์) </a>
                                        <div class="input">
                                            <input type="text" class="form-control" name="quiz2_19_1"
                                                placeholder="โปรดระบุ ปี พ.ศ. (เช่น 2565)" value="{{($forms[0]->quiz2_19_1)}}">
                                        </div>
                                        <div class="title">
                                            <a>- ปัจจุบันท่านรับการรักษาสำหรับการเจ็บป่วยนี้อยู่หรือไม่</a>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz2_19_2" value="1"
                                                {{($forms[0]->quiz2_19_2 == '1' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz2_19_2" value="0"
                                                {{($forms[0]->quiz2_19_2 == '0' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">2.20 โรคโลหิตจางหรือซีด</label>
                                <div class="questionnaire">


                                    &nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="quiz2_20" value="1"
                                        {{($forms[0]->quiz2_20 == '1' ?  'checked' : '')}}>
                                    <label class="form-check-label">ใช่</label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="quiz2_20" value="0"
                                        {{($forms[0]->quiz2_20 == '0' ?  'checked' : '')}}>
                                    <label class="form-check-label">ไม่ใช่</label>

                                    <div class="dvtext20">
                                        <a>- เริ่มเป็นเมื่อ ปี พ.ศ. ใด (วินิจฉัยโดยแพทย์) </a>
                                        <div class="input">
                                            <input type="text" class="form-control" name="quiz2_20_1"
                                                placeholder="โปรดระบุ ปี พ.ศ. (เช่น 2565)" value="{{($forms[0]->quiz2_20_1)}}">
                                        </div>
                                        <div class="title">
                                            <a>- ปัจจุบันท่านรับการรักษาสำหรับการเจ็บป่วยนี้อยู่หรือไม่</a>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz2_20_2" value="1"
                                                {{($forms[0]->quiz2_20_2 == '1' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz2_20_2" value="0"
                                                {{($forms[0]->quiz2_20_2 == '0' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">2.21 วัณโรค</label>
                                <div class="questionnaire">

                                    &nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="quiz2_21" value="1"
                                        {{($forms[0]->quiz2_21 == '1' ?  'checked' : '')}}>
                                    <label class="form-check-label">ใช่</label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="quiz2_21" value="0"
                                        {{($forms[0]->quiz2_21 == '0' ?  'checked' : '')}}>
                                    <label class="form-check-label">ไม่ใช่</label>


                                    <div class="dvtext21">
                                        <a>- เริ่มเป็นเมื่อ ปี พ.ศ. ใด (วินิจฉัยโดยแพทย์) </a>
                                        <div class="input">
                                            <input type="text" class="form-control" name="quiz2_21_1"
                                                placeholder="โปรดระบุ ปี พ.ศ. (เช่น 2565)" value="{{($forms[0]->quiz2_21_1)}}">
                                        </div>
                                        <div class="title">
                                            <a>- ปัจจุบันท่านรับการรักษาสำหรับการเจ็บป่วยนี้อยู่หรือไม่</a>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz2_21_2" value="1"
                                                {{($forms[0]->quiz2_21_2 == '1' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz2_21_2" value="0"
                                                {{($forms[0]->quiz2_21_2 == '0' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">2.22 ความผิดปกติทางจิต (ซึมเศร้า,
                                    โรคประสาท, จิตเภท)</label>
                                <div class="questionnaire">

                                    &nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="quiz2_22" value="1"
                                        {{($forms[0]->quiz2_22 == '1' ?  'checked' : '')}}>
                                    <label class="form-check-label">ใช่</label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="quiz2_22" value="0"
                                        {{($forms[0]->quiz2_22 == '0' ?  'checked' : '')}}>
                                    <label class="form-check-label">ไม่ใช่</label>

                                    <div class="dvtext22">
                                        <a>- เริ่มเป็นเมื่อ ปี พ.ศ. ใด (วินิจฉัยโดยแพทย์) </a>
                                        <div class="input">
                                            <input type="text" class="form-control" name="quiz2_22_1"
                                                placeholder="โปรดระบุ ปี พ.ศ. (เช่น 2565)" value="{{($forms[0]->quiz2_22_1)}}">
                                        </div>
                                        <div class="title">
                                            <a>- ปัจจุบันท่านรับการรักษาสำหรับการเจ็บป่วยนี้อยู่หรือไม่</a>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz2_22_2" value="1"
                                                {{($forms[0]->quiz2_22_2 == '1' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz2_22_2" value="0"
                                                {{($forms[0]->quiz2_22_2 == '0' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">2.23
                                    ท่านเคยได้รับการผ่าตัดเปลี่ยนอวัยวะ</label>
                                <div class="questionnaire">

                                    &nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="quiz2_23" value="1"
                                        {{($forms[0]->quiz2_23 == '1' ?  'checked' : '')}}>
                                    <label class="form-check-label">ใช่</label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="quiz2_23" value="0"
                                        {{($forms[0]->quiz2_23 == '0' ?  'checked' : '')}}>
                                    <label class="form-check-label">ไม่ใช่</label>


                                    <div class="dvtext23">
                                        <a>- เริ่มเป็นเมื่อ ปี พ.ศ. ใด (วินิจฉัยโดยแพทย์) </a>
                                        <div class="input">
                                            <input type="text" class="form-control" name="quiz2_23_1"
                                                placeholder="โปรดระบุ ปี พ.ศ. (เช่น 2565)" value="{{($forms[0]->quiz2_23_1)}}">
                                        </div>
                                        <div class="title">
                                            <a>- ปัจจุบันท่านรับการรักษาสำหรับการเจ็บป่วยนี้อยู่หรือไม่</a>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz2_23_2" value="1"
                                                {{($forms[0]->quiz2_23_2 == '1' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz2_23_2" value="0"
                                                {{($forms[0]->quiz2_23_2 == '0' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">2.24 โรคไทรอยด์ (ที่ไม่ใช่มะเร็ง)</label>
                                <div class="questionnaire">

                                    &nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="quiz2_24" value="1"
                                        {{($forms[0]->quiz2_24 == '1' ?  'checked' : '')}}>
                                    <label class="form-check-label">ใช่</label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="quiz2_24" value="0"
                                        {{($forms[0]->quiz2_24 == '0' ?  'checked' : '')}}>
                                    <label class="form-check-label">ไม่ใช่</label>


                                    <div class="dvtext24">
                                        <a>- เริ่มเป็นเมื่อ ปี พ.ศ. ใด (วินิจฉัยโดยแพทย์) </a>
                                        <div class="input">
                                            <input type="text" class="form-control" name="quiz2_24_1"
                                                placeholder="โปรดระบุ ปี พ.ศ. (เช่น 2565)" value="{{($forms[0]->quiz2_24_1)}}">
                                        </div>
                                        <div class="title">
                                            <a>- ปัจจุบันท่านรับการรักษาสำหรับการเจ็บป่วยนี้อยู่หรือไม่</a>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz2_24_2" value="1"
                                                {{($forms[0]->quiz2_24_2 == '1' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz2_24_2" value="0"
                                                {{($forms[0]->quiz2_24_2 == '0' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">2.25 โรคเก๊าท์</label>
                                <div class="questionnaire">

                                    &nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="quiz2_25" value="1"
                                        {{($forms[0]->quiz2_25 == '1' ?  'checked' : '')}}>
                                    <label class="form-check-label">ใช่</label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="quiz2_25" value="0"
                                        {{($forms[0]->quiz2_25 == '0' ?  'checked' : '')}}>
                                    <label class="form-check-label">ไม่ใช่</label>


                                    <div class="dvtext25">
                                        <a>- เริ่มเป็นเมื่อ ปี พ.ศ. ใด (วินิจฉัยโดยแพทย์) </a>
                                        <div class="input">
                                            <input type="text" class="form-control" name="quiz2_25_1"
                                                placeholder="โปรดระบุ ปี พ.ศ. (เช่น 2565)" value="{{($forms[0]->quiz2_25_1)}}">
                                        </div>
                                        <div class="title">
                                            <a>- ปัจจุบันท่านรับการรักษาสำหรับการเจ็บป่วยนี้อยู่หรือไม่</a>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz2_25_2" value="1"
                                                {{($forms[0]->quiz2_25_2 == '1' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz2_25_2" value="0"
                                                {{($forms[0]->quiz2_25_2 == '0' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">2.26 ท่านเคยมีกระดูกสันหลังยุบ</label>
                                <div class="questionnaire">

                                    &nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="quiz2_26" value="1"
                                        {{($forms[0]->quiz2_26 == '1' ?  'checked' : '')}}>
                                    <label class="form-check-label">ใช่</label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="quiz2_26" value="0"
                                        {{($forms[0]->quiz2_26 == '0' ?  'checked' : '')}}>
                                    <label class="form-check-label">ไม่ใช่</label>


                                    <div class="dvtext26">
                                        <a>- เริ่มเป็นเมื่อ ปี พ.ศ. ใด (วินิจฉัยโดยแพทย์) </a>
                                        <div class="input">
                                            <input type="text" class="form-control" name="quiz2_26_1"
                                                placeholder="โปรดระบุ ปี พ.ศ. (เช่น 2565)" value="{{($forms[0]->quiz2_26_1)}}">
                                        </div>
                                        <div class="title">
                                            <a>- ปัจจุบันท่านรับการรักษาสำหรับการเจ็บป่วยนี้อยู่หรือไม่</a>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz2_26_2" value="1"
                                                {{($forms[0]->quiz2_26_2 == '1' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz2_26_2" value="0"
                                                {{($forms[0]->quiz2_26_2 == '0' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">2.27 โรคข้อเข่าเสื่อม
                                    (osteoarthritis)</label>
                                <div class="questionnaire">

                                    &nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="quiz2_27" value="1"
                                        {{($forms[0]->quiz2_27 == '1' ?  'checked' : '')}}>
                                    <label class="form-check-label">ใช่</label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="quiz2_27" value="0"
                                        {{($forms[0]->quiz2_27 == '0' ?  'checked' : '')}}>
                                    <label class="form-check-label">ไม่ใช่</label>


                                    <div class="dvtext27">
                                        <a>- เริ่มเป็นเมื่อ ปี พ.ศ. ใด (วินิจฉัยโดยแพทย์) </a>
                                        <div class="input">
                                            <input type="text" class="form-control" name="quiz2_27_1"
                                                placeholder="โปรดระบุ ปี พ.ศ. (เช่น 2565)" value="{{($forms[0]->quiz2_27_1)}}">
                                        </div>
                                        <div class="title">
                                            <a>- ปัจจุบันท่านรับการรักษาสำหรับการเจ็บป่วยนี้อยู่หรือไม่</a>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz2_27_2" value="1"
                                                {{($forms[0]->quiz2_27_2 == '1' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz2_27_2" value="0"
                                                {{($forms[0]->quiz2_27_2 == '0' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">2.28 โรคกระดูกพรุน (Osteoporosis)</label>
                                <div class="questionnaire">

                                    &nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="quiz2_28" value="1"
                                        {{($forms[0]->quiz2_28 == '1' ?  'checked' : '')}}>
                                    <label class="form-check-label">ใช่</label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="quiz2_28" value="0"
                                        {{($forms[0]->quiz2_28 == '0' ?  'checked' : '')}}>
                                    <label class="form-check-label">ไม่ใช่</label>


                                    <div class="dvtext28">
                                        <a>- เริ่มเป็นเมื่อ ปี พ.ศ. ใด (วินิจฉัยโดยแพทย์) </a>
                                        <div class="input">
                                            <input type="text" class="form-control" name="quiz2_28_1"
                                                placeholder="โปรดระบุ ปี พ.ศ. (เช่น 2565)" value="{{($forms[0]->quiz2_28_1)}}">
                                        </div>
                                        <div class="title">
                                            <a>- ปัจจุบันท่านรับการรักษาสำหรับการเจ็บป่วยนี้อยู่หรือไม่</a>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz2_28_2" value="1"
                                                {{($forms[0]->quiz2_28_2 == '1' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz2_28_2" value="0"
                                                {{($forms[0]->quiz2_28_2 == '0' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                        </div>



                                        <div class="col-12">
                                            <label for="inputAddress" class="form-label">2.28.1 ถ้าเคยเป็นโรคกระดูกพรุน
                                                แพทย์บอกว่าเกิดจากสาเหตุ (ตอบได้มากกว่า 1 ข้อ)</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="1"
                                                    name="quiz2_28_3[]"
                                                    {{in_array('"1"',explode(",",substr($forms[0]->quiz2_28_3,1,strlen($forms[0]->quiz2_28_3)-2))) == true ? "checked" : ""}}>

                                                <label class="form-check-label" for="flexCheckDefault">
                                                    1.เป็นเบาหวานก่อนอายุ 40 ปี
                                                </label>
                                            </div>


                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="2"
                                                    name="quiz2_28_3[]"
                                                    {{in_array('"2"',explode(",",substr($forms[0]->quiz2_28_3,1,strlen($forms[0]->quiz2_28_3)-2))) == true ? "checked" : ""}}>

                                                <label class="form-check-label" for="flexCheckDefault">
                                                    2.กระดูกผิดปกติตั้งแต่กำเนิด
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="3"
                                                    name="quiz2_28_3[]"
                                                    {{in_array('"3"',explode(",",substr($forms[0]->quiz2_28_3,1,strlen($forms[0]->quiz2_28_3)-2))) == true ? "checked" : ""}}>
                                                
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    3.ไทรอยด์เป็นพิษและไม่ได้รักษา
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="4"
                                                    name="quiz2_28_3[]" 
                                                    {{in_array('"4"',explode(",",substr($forms[0]->quiz2_28_3,1,strlen($forms[0]->quiz2_28_3)-2))) == true ? "checked" : ""}}>
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    4.กินไทรอยด์ ฮอร์โมน
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="5"
                                                    name="quiz2_28_3[]"
                                                    {{in_array('"5"',explode(",",substr($forms[0]->quiz2_28_3,1,strlen($forms[0]->quiz2_28_3)-2))) == true ? "checked" : ""}}>
                                                
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    5.ตัดรังไข่หรืออัณฑะออกแล้วระบุปี พ.ศ.
                                                </label>
                                                <input type="text" name="quiz2_28_4" placeholder="โปรดระบุ ปี พ.ศ."
                                                    value="{{($forms[0]->quiz2_28_4)}}">
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="6"
                                                    name="quiz2_28_3[]"
                                                    {{in_array('"6"',explode(",",substr($forms[0]->quiz2_28_3,1,strlen($forms[0]->quiz2_28_3)-2))) == true ? "checked" : ""}}>
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    6.มีฮอร์โมนเพศน้อยกว่าคนในวัยเดียวกัน
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="7"
                                                    name="quiz2_28_3[]"
                                                    {{in_array('"7"',explode(",",substr($forms[0]->quiz2_28_3,1,strlen($forms[0]->quiz2_28_3)-2))) == true ? "checked" : ""}}>
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    7.ทุพโภชนาการ
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="8"
                                                    name="quiz2_28_3[]"
                                                    {{in_array('"8"',explode(",",substr($forms[0]->quiz2_28_3,1,strlen($forms[0]->quiz2_28_3)-2))) == true ? "checked" : ""}}>
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    8.โรคตับเรื้อรัง
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="9"
                                                    name="quiz2_28_3[]"
                                                    {{in_array('"9"',explode(",",substr($forms[0]->quiz2_28_3,1,strlen($forms[0]->quiz2_28_3)-2))) == true ? "checked" : ""}}>
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    9.ไม่ทราบสาเหตุ
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="10"
                                                    name="quiz2_28_3[]"
                                                    {{in_array('"10"',explode(",",substr($forms[0]->quiz2_28_3,1,strlen($forms[0]->quiz2_28_3)-2))) == true ? "checked" : ""}}>
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    10.สาเหตุอื่นๆ
                                                </label>
                                            </div>
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
                    <button type="button" onclick="window.location.href='{{url('/form3/'.$getbyid[0]->id)}}'"
                        class="btn btn-primary">หน้าถัดไป
                        <i class="bi bi-arrow-right-circle-fill"></i>
                    </button>
                </div>
            </div>
        </div>
    </section><!-- End Hero -->
</x-app-layout>