<x-app-layout>
    <script>
    $(document).ready(function() {
        var value = $('input[name=quiz4_1]:checked', '#myForm1').val()
        if (value == "1") {
            $('.dvtext1').show();
        } else {
            $('.dvtext1').hide();
        }

        var value2 = $('input[name=quiz4_1]:checked', '#myForm1').val()
        if (value2 == "2") {
            $('.dvtext2').show();
        } else {
            $('.dvtext2').hide();
        }


        $("input[type=radio][name=quiz4_1]").on("change", function() {
            ($(this).val() == "1") ? $(this).siblings(".dvtext1").show(): $(this).siblings(
                ".dvtext1").hide()
        })
        $("input[type=radio][name=quiz4_1]").on("change", function() {
            ($(this).val() == "2") ? $(this).siblings(".dvtext2").show(): $(this).siblings(
                ".dvtext2").hide()
        })



        $(".createData").click(function() {

            let quiz4_1 = document.getElementByName('quiz4_1').value;
            let quiz4_1_1 = document.getElementByName('quiz4_1_1').value;
            let quiz4_1_2 = document.getElementByName('quiz4_1_2').value;
            let quiz4_1_3 = document.getElementByName('quiz4_1_3').value;
            let quiz4_2_1 = document.getElementByName('quiz4_2_1').value;
            let quiz4_2_2 = document.getElementByName('quiz4_2_2').value;
            let quiz4_2_3 = document.getElementByName('quiz4_2_3').value;

            let payload = {
                quiz4_1: quiz4_1,
                quiz4_1_1: quiz4_1_1,
                quiz4_1_2: quiz4_1_2,
                quiz4_1_3: quiz4_1_3,
                quiz4_2_1: quiz4_2_1,
                quiz4_2_2: quiz4_2_2,
                quiz4_2_3: quiz4_2_3,

            }
            let CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                /* the route pointing to the post function */
                url: '/form6/add',
                type: 'POST',
                /* send the csrf-token and the input to the controller */
                data: {
                    _token: CSRF_TOKEN,
                    ...payload
                },
                dataType: 'JSON',
                /* remind that 'data' is the response of the AjaxController */
                success: function(data) {
                    $(".writeinfo").append(data.msg);
                    location.reload();
                }
            });

        });
    });
    </script>


    <script>
    function check() {
        $('input[type="checkbox"]').prop("checked", true);
    }

    function uncheck() {
        //$('input[type="checkbox"]').prop("checked", false);
        $("#c1" ).prop("checked", false);
        $("#c2" ).prop("checked", false);
        $("#c3" ).prop("checked", false);
        $("#c4" ).prop("checked", false);
    }

    function uncheck2() {
        //$('input[type="checkbox"]').prop("checked", false);
        $("#c5" ).prop("checked", false);
        
    }

   
    </script>

    <!-- ======= Hero Section ======= -->
    <section id="userform" class="userform  d-flex align-items-center">
        <div class="container " data-aos="fade-up">
            <header class="section-header d-flex justify-content-between">
                <div>
                    <p>ส่วนที่ 4</p>
                    <div class="section-header-line"></div>
                    <h3>ประวัติการเจ็บป่วยระบบประสาท</h3>
                </div>

                <div>
                    <a>ผู้รับบริการ: {{$getbyid[0]->name}}</a>

                </div>
            </header>

            <div class="row d-flex justify-content-center ">
                <div class="col-md-7 ">
                    <div class="row gy-4 ">

                        <form id="myForm1" class="row g-3" action="{{url('/formupdate4/'.$getbyid[0]->id)}}"
                            method="post">
                            @csrf
                            <div class="col-12">
                                <label for="inputAddress" class="form-label">
                                    4.1 ท่านเคยเป็นอัมพาต หรือ อัมพฤกษ์ หรือไม่</label>
                            </div>

                            <div class="col-12">
                                <!-- <div class="form-check form-check-inline"> -->
                                <input class="form-check-input" type="radio" name="quiz4_1" value="1"
                                    {{($forms[0]->quiz4_1 == '1' ?  'checked' : '')}}>
                                <label class="form-check-label" for="inlineRadio1">ไม่เคย</label>
                                <!-- </div> -->
                                <div class="m-3 dvtext1">
                                    <div class="form-check">
                                        <p>
                                            ถ้าไม่เคยเป็นอัมพาต หรืออัมพฤกษ์ ท่านเคยมีอาการใดต่อไปนี้
                                            ที่เกิดขึ้นแบบทันทีทันใด
                                            หรือ ภายใน 1 วัน (ตอบได้มากกว่า 1 อย่าง)
                                        </p>
                                        <input id="c1" class="form-check-input c1" type="checkbox" value="1" name="quiz4_1_1[]" onclick="uncheck2()"
                                            {{in_array('"1"',explode(",",substr($forms[0]->quiz4_1_1,1,strlen($forms[0]->quiz4_1_1)-2))) == true ? "checked" : ""}}>

                                        <label class="form-check-label" for="flexCheckDefault">
                                            1. แขนขาข้างใดข้างหนึ่งอ่อนแรง
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input id="c2" class="form-check-input c2" type="checkbox" value="2" name="quiz4_1_1[]" onclick="uncheck2()"
                                            {{in_array('"2"',explode(",",substr($forms[0]->quiz4_1_1,1,strlen($forms[0]->quiz4_1_1)-2))) == true ? "checked" : ""}}>

                                        <label class="form-check-label" for="flexCheckDefault">
                                            2. ชาไม่รู้สึกด้านใดด้านหนึ่งของร่างกาย
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input id="c3" class="form-check-input c3" type="checkbox" value="3" name="quiz4_1_1[]" onclick="uncheck2()"
                                            {{in_array('"3"',explode(",",substr($forms[0]->quiz4_1_1,1,strlen($forms[0]->quiz4_1_1)-2))) == true ? "checked" : ""}}>

                                        <label class="form-check-label" for="flexCheckDefault">
                                            3. พูดไม่ชัด หรือ พูดไม่ได้
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input id="c4" class="form-check-input c4" type="checkbox" value="4" name="quiz4_1_1[]" onclick="uncheck2()"
                                            {{in_array('"4"',explode(",",substr($forms[0]->quiz4_1_1,1,strlen($forms[0]->quiz4_1_1)-2))) == true ? "checked" : ""}}>

                                        <label class="form-check-label" for="flexCheckDefault">
                                            4. ตาเห็นภาพซ้อน หรือมองไม่เห็นเฉียบพลัน
                                        </label>
                                    </div>


                                    <div class="form-check">
                                        <input id="c5"  class="form-check-input c5" type="checkbox"
                                            value="5" name="quiz4_1_1[]" onclick="uncheck()"
                                            {{in_array('"5"',explode(",",substr($forms[0]->quiz4_1_1,1,strlen($forms[0]->quiz4_1_1)-2))) == true ? "checked" : ""}}>

                                        <label class="form-check-label" for="flexCheckDefault">
                                            5. ไม่เคยมีอาการข้างต้น
                                        </label>
                                    </div>

                                    <div class="col-6 form9-input-text">
                                        <label for="inputAddress" class="form-label">
                                            ถ้ามี เป็นเมื่อไร
                                        </label>
                                        <div class="col-md-6 input-group">
                                            <span class="input-group-text">ปี พ.ศ. </span>
                                            <input type="text" class="form-control" placeholder="ถ้ามี เป็นเมื่อไร"
                                                aria-label="ถ้ามี เป็นเมื่อไร" name="quiz4_1_2"
                                                value="{{($forms[0]->quiz4_1_2)}}">
                                        </div>
                                    </div>

                                    <div class="col-6 form9-input-text">
                                        <label for="inputAddress" class="form-label">
                                            ตอนอายุ
                                        </label>
                                        <div class="col-md-6 input-group">
                                            <input type="text" class="form-control" placeholder="ตอนอายุ"
                                                aria-label="ตอนอายุ" name="quiz4_1_3"
                                                value="{{($forms[0]->quiz4_1_3)}}">
                                            <span class="input-group-text">ปี</span>
                                        </div>
                                    </div>
                                </div>

                                <br>

                                <input class="form-check-input" type="radio" name="quiz4_1" value="2"
                                    {{($forms[0]->quiz4_1 == '2' ?  'checked' : '')}}>
                                <label class="form-check-label" for="inlineRadio1">เคย</label>

                                <div class="m-3 dvtext2">
                                    <div class="col-6 form9-input-text">
                                        <div class="col-md-6 input-group">
                                            <span class="input-group-text">ปี พ.ศ. </span>
                                            <input type="text" class="form-control"
                                                placeholder="เป็มอัมพาต หรืออัมพฤกษ์ เมื่อปี พ.ศ. ใด"
                                                aria-label="เป็มอัมพาต หรืออัมพฤกษ์ เมื่อปี พ.ศ. ใด" name="quiz4_2_1"
                                                value="{{($forms[0]->quiz4_2_1)}}">
                                        </div>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1" name="quiz4_2_2[]"
                                            {{in_array('"1"',explode(",",substr($forms[0]->quiz4_2_2,1,strlen($forms[0]->quiz4_2_2)-2))) == true ? "checked" : ""}}>

                                        <label class="form-check-label" for="flexCheckDefault">
                                            1. แขนขาข้างใดข้างหนึ่งอ่อนแรง
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="2" name="quiz4_2_2[]"
                                            {{in_array('"2"',explode(",",substr($forms[0]->quiz4_2_2,1,strlen($forms[0]->quiz4_2_2)-2))) == true ? "checked" : ""}}>

                                        <label class="form-check-label" for="flexCheckDefault">
                                            2. ชาไม่รู้สึกด้านใดด้านหนึ่งของร่างกาย
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="3" name="quiz4_2_2[]"
                                            {{in_array('"3"',explode(",",substr($forms[0]->quiz4_2_2,1,strlen($forms[0]->quiz4_2_2)-2))) == true ? "checked" : ""}}>
                                        <label class="form-check-label" for="flexCheckDefault">
                                            3. พูดไม่ชัด หรือ พูดไม่ได้
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="4" name="quiz4_2_2[]"
                                            {{in_array('"4"',explode(",",substr($forms[0]->quiz4_2_2,1,strlen($forms[0]->quiz4_2_2)-2))) == true ? "checked" : ""}}>

                                        <label class="form-check-label" for="flexCheckDefault">
                                            4. ตาเห็นภาพซ้อน หรือมองไม่เห็นเฉียบพลัน
                                        </label>
                                    </div>

                                    <div class="form-check">

                                        <input class="form-check-input" type="checkbox" value="5" name="quiz4_2_2[]"
                                            {{in_array('"5"',explode(",",substr($forms[0]->quiz4_2_2,1,strlen($forms[0]->quiz4_2_2)-2))) == true ? "checked" : ""}}>

                                        <label class="form-check-label" for="flexCheckDefault">
                                            5. อาการอื่นๆ คือ
                                        </label>
                                        <div class="col-md-6 input-group">

                                            <input type="text" name="quiz4_2_3" class="form-control"
                                                placeholder="โปรดระบุ" aria-label="โปรดระบุ"
                                                value="{{($forms[0]->quiz4_2_3)}}">
                                        </div>
                                    </div>
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
                    <button type="button" onclick="window.location.href='{{url('/form5/'.$getbyid[0]->id)}}'"
                        class="btn btn-primary">หน้าถัดไป
                        <i class="bi bi-arrow-right-circle-fill"></i>
                    </button>
                </div>
            </div>
        </div>
    </section><!-- End Hero -->
</x-app-layout>