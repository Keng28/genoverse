<x-app-layout>
    <!-- <script>
    $(document).ready(function() {
        $('input:radio').prop('disabled', function() {
            return !this.defaultChecked;
        });
        $('input:checkbox').prop('disabled', function() {
            return !this.defaultChecked;
        });
    });
    </script> -->

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


                <div class="row">
                    <div class="col-lg-12 d-flex flex-column justify-content-center">
                        <div class="row gy-4">
                            <div class="accordion" id="accordionPanelsStayOpenExample">

                                <div class="accordion-item ">
                                    <h2 class="accordion-header justify-content-between" id="panelsStayOpen-headingOne">
                                        <div class="progress ">
                                            <div class="progress-bar" role="progressbar" style="width: 25%;"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%
                                            </div>
                                        </div>
                                        <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                            data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                            aria-controls="panelsStayOpen-collapseOne">
                                            ส่วนที่ 1 ข้อมูลส่วนบุคคล

                                        </button>
                                    </h2>


                                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="panelsStayOpen-headingOne">
                                        <div class="accordion-body">
                                            @foreach($form1 as $row)
                                            <label for="inputAddress" class="form-label">1.1
                                                สถานภาพทางสังคมในปัจจุบัน</label>
                                            <br>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label" for="inlineRadio1">

                                                    {{($row->quiz_1) == '1' ? 'โสด' : '' }}
                                                    {{($row->quiz_1) == '2' ? 'สมรส' : '' }}
                                                    {{($row->quiz_1) == '3' ? 'หม้าย' : '' }}
                                                    {{($row->quiz_1) == '4' ? 'แยกกันอยู่/เลิก/หย่า' : '' }}
                                                    {{($row->quiz_1) == '5' ? 'อาศัยอยู่ด้วยกัน' : '' }}
                                                    {{($row->quiz_1) == null ? 'ผู้รับบริการยังไม่ได้​ตอบ' : '' }}

                                                </label>
                                            </div>
                                            <br>
                                            <label for="inputAddress" class="form-label">1.2
                                                อาชีพหลักของท่านตรงกับข้อใดมากที่สุด</label>
                                            <br>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label" for="inlineRadio1">
                                                    {{($row->quiz_2) == '1' ? 'ผู้จัดการ' : '' }}
                                                    {{($row->quiz_2) == '2' ? 'วิชาชีพ' : '' }}
                                                    {{($row->quiz_2) == '3' ? 'เจ้าหน้าที่เทคนิค' : '' }}
                                                    {{($row->quiz_2) == '4' ? 'งานเสมียน' : '' }}
                                                    {{($row->quiz_2) == '5' ? 'งานบริการ และงานขาย' : '' }}
                                                    {{($row->quiz_2) == '6' ? 'งานทางด้านเกษตรกรรม ป่าไม้ และประมง' : '' }}
                                                    {{($row->quiz_2) == '7' ? 'ผู้ที่ทำงานเกี่ยวกับงานฝีมือและการค้า' : '' }}
                                                    {{($row->quiz_2) == '8' ? 'แรงงานในโรงงาน' : '' }}
                                                    {{($row->quiz_2) == '9' ? 'ทหารและตํารวจ' : '' }}
                                                    {{($row->quiz_2) == '10' ? 'งานที่ใช้ทักษะขั้นพื้นฐาน' : '' }}
                                                    {{($row->quiz_2) == '11' ? $row->quiz_2_1 : '' }}
                                                    {{($row->quiz_2) == null ? 'ผู้รับบริการยังไม่ได้​ตอบ' : '' }}


                                                </label>
                                            </div>
                                            <!-- {{$form1}} -->
                                            @endforeach
                                        </div>
                                    </div>
                                </div>







                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo"
                                            aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                            ส่วนที่ 2 ประวัติการเจ็บป่วย
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="panelsStayOpen-headingTwo">
                                        <div class="accordion-body">
                                            <div class="col-12">
                                                <label for="inputAddress" class="form-label">2.1
                                                    ความดันในเลือดสูง</label>

                                            </div>
                                            <div class="col-12">
                                                <label for="inputAddress" class="form-label">2.1
                                                    ความดันในเลือดสูง</label>

                                            </div>

                                            <strong>This is </strong> It is <code>body</code>,overflow.
                                        </div>
                                    </div>
                                </div>







                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree"
                                            aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                            ส่วนที่ 3 ประวัติการเจ็บป่วยโรคมะเร็ง
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="panelsStayOpen-headingThree">
                                        <div class="accordion-body">
                                            <strong>This is </strong> It is <code>body</code>,overflow.
                                        </div>
                                    </div>
                                </div>







                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour"
                                            aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                                            ส่วนที่ 4 ประวัติการเจ็บป่วยระบบประสาท
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="panelsStayOpen-headingFour">
                                        <div class="accordion-body">
                                            <strong>This is </strong> It is <code>body</code>,overflow.
                                        </div>
                                    </div>
                                </div>








                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingFive">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive"
                                            aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
                                            ส่วนที่ 5 การรับประทานยา/อาหารเสริม
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse"
                                        aria-labelledby="panelsStayOpen-headingFive">
                                        <div class="accordion-body">
                                            <strong>This is </strong> It is <code>body</code>,overflow.
                                        </div>
                                    </div>
                                </div>









                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingSix">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSix"
                                            aria-expanded="false" aria-controls="panelsStayOpen-collapseSix">
                                            ส่วนที่ 6 ประวัติการแพ้อาหาร การแพ้ยา
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse"
                                        aria-labelledby="panelsStayOpen-headingSix">
                                        <div class="accordion-body">
                                            <strong>This is </strong> It is <code>body</code>,overflow.
                                        </div>
                                    </div>
                                </div>







                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingSeven">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSeven"
                                            aria-expanded="false" aria-controls="panelsStayOpen-collapseSeven">
                                            ส่วนที่ 7 ประวัติครอบครัว
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse"
                                        aria-labelledby="panelsStayOpen-headingSeven">
                                        <div class="accordion-body">
                                            <div class="d-flex justify-content-center">
                                                <div class="col-10">
                                                    <div class="table col-10" style="overflow-x:auto;"
                                                        data-aos="fade-up">
                                                        <table style="overflow-x:auto;"
                                                            class="table table-striped table-bordered border-primary table-responsive">
                                                            <tr class="something">
                                                                <th rowspan="2">ปัญหาสุขภาพ</th>
                                                                <th rowspan="2" style="width: 90px;">
                                                                    ไม่มีคนในครอบครัวที่มีปัญหาสุขภาพดังกล่าว</th>
                                                                <th colspan="6">มีคนในครอบครัวที่มีปัญหาสุขภาพดังกล่าว
                                                                    <br>(ระบุได้มากกว่า 1
                                                                    คน)
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="1" style="width: 84px;">บิดา/มารดา</td>
                                                                <td colspan="1" style="width: 84px;">พี่/น้อง</td>
                                                                <td colspan="1" style="width: 84px;">ปู่/ย่า/ตา/ยาย</td>
                                                                <td colspan="1" style="width: 84px;">ลุง/ป้า/น้า/อา</td>
                                                                <td colspan="1" style="width: 84px;">ลูกพี่/ลูกน้อง</td>
                                                                <td colspan="1" style="width: 84px;">อื่นๆ</td>
                                                            </tr>

                                                            <tr>
                                                                <td style=" text-align: left;">1. ความดันโลหิตสูง</td>
                                                                <td>
                                                                    <input class="form-check-input uncheck1 "
                                                                        type="radio" value="1" disabled name="quiz7_1"
                                                                        {{($form7[0]->quiz7_1 == '1' ?  'checked' : '')}}>
                                                                </td>

                                                                <td>
                                                                    <input id="quiz7_1_1" class="form-check-input "
                                                                        type="checkbox" value="1" name="quiz7_1_1[]"
                                                                        onclick="clearRadioButtons1()" disabled
                                                                        {{in_array('"1"',explode(",",substr($form7[0]->quiz7_1_1,1,strlen($form7[0]->quiz7_1_1)-2))) == true ? "checked" : ""}}>
                                                                </td>

                                                                <td>
                                                                    <input id="quiz7_1_2" class="form-check-input"
                                                                        type="checkbox" value="2" name="quiz7_1_1[]"
                                                                        onclick="clearRadioButtons1()" disabled
                                                                        {{in_array('"2"',explode(",",substr($form7[0]->quiz7_1_1,1,strlen($form7[0]->quiz7_1_1)-2))) == true ? "checked" : ""}}>
                                                                </td>

                                                                <td>
                                                                    <input id="quiz7_1_3" class="form-check-input"
                                                                        type="checkbox" value="3" name="quiz7_1_1[]"
                                                                        onclick="clearRadioButtons1()" disabled
                                                                        {{in_array('"3"',explode(",",substr($form7[0]->quiz7_1_1,1,strlen($form7[0]->quiz7_1_1)-2))) == true ? "checked" : ""}}>
                                                                </td>

                                                                <td>
                                                                    <input id="quiz7_1_4" class="form-check-input"
                                                                        type="checkbox" value="4" name="quiz7_1_1[]"
                                                                        onclick="clearRadioButtons1()" disabled
                                                                        {{in_array('"4"',explode(",",substr($form7[0]->quiz7_1_1,1,strlen($form7[0]->quiz7_1_1)-2))) == true ? "checked" : ""}}>
                                                                </td>
                                                                <td>
                                                                    <input id="quiz7_1_5" class="form-check-input"
                                                                        type="checkbox" value="5" name="quiz7_1_1[]"
                                                                        onclick="clearRadioButtons1()" disabled
                                                                        {{in_array('"5"',explode(",",substr($form7[0]->quiz7_1_1,1,strlen($form7[0]->quiz7_1_1)-2))) == true ? "checked" : ""}}>
                                                                </td>

                                                                <td>
                                                                    <input id="quiz7_1_6" class="form-check-input"
                                                                        type="checkbox" value="6" name="quiz7_1_1[]"
                                                                        onclick="clearRadioButtons1()" disabled
                                                                        {{in_array('"6"',explode(",",substr($form7[0]->quiz7_1_1,1,strlen($form7[0]->quiz7_1_1)-2))) == true ? "checked" : ""}}>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td style=" text-align: left;">2. ไขมันในเลือดสูง</td>
                                                                <td>
                                                                    <input class="form-check-input uncheck2 "
                                                                        type="radio" value="1" disabled name="quiz7_2"
                                                                        {{($form7[0]->quiz7_2 == '1' ?  'checked' : '')}}>
                                                                </td>

                                                                <td>
                                                                    <input id="quiz7_2_1" class="form-check-input "
                                                                        type="checkbox" value="1" name="quiz7_2_1[]"
                                                                        onclick="clearRadioButtons2()" disabled
                                                                        {{in_array('"1"',explode(",",substr($form7[0]->quiz7_2_1,1,strlen($form7[0]->quiz7_2_1)-2))) == true ? "checked" : ""}}>
                                                                </td>

                                                                <td>
                                                                    <input id="quiz7_2_2" class="form-check-input"
                                                                        type="checkbox" value="2" name="quiz7_2_1[]"
                                                                        onclick="clearRadioButtons2()" disabled
                                                                        {{in_array('"2"',explode(",",substr($form7[0]->quiz7_2_1,1,strlen($form7[0]->quiz7_2_1)-2))) == true ? "checked" : ""}}>
                                                                </td>

                                                                <td>
                                                                    <input id="quiz7_2_3" class="form-check-input"
                                                                        type="checkbox" value="3" name="quiz7_2_1[]"
                                                                        onclick="clearRadioButtons2()" disabled
                                                                        {{in_array('"3"',explode(",",substr($form7[0]->quiz7_2_1,1,strlen($form7[0]->quiz7_2_1)-2))) == true ? "checked" : ""}}>
                                                                </td>

                                                                <td>
                                                                    <input id="quiz7_2_4" class="form-check-input"
                                                                        type="checkbox" value="4" name="quiz7_2_1[]"
                                                                        onclick="clearRadioButtons2()" disabled
                                                                        {{in_array('"4"',explode(",",substr($form7[0]->quiz7_2_1,1,strlen($form7[0]->quiz7_2_1)-2))) == true ? "checked" : ""}}>
                                                                </td>
                                                                <td>
                                                                    <input id="quiz7_2_5" class="form-check-input"
                                                                        type="checkbox" value="5" name="quiz7_2_1[]"
                                                                        onclick="clearRadioButtons2()" disabled
                                                                        {{in_array('"5"',explode(",",substr($form7[0]->quiz7_2_1,1,strlen($form7[0]->quiz7_2_1)-2))) == true ? "checked" : ""}}>
                                                                </td>

                                                                <td>
                                                                    <input id="quiz7_2_6" class="form-check-input"
                                                                        type="checkbox" value="6" name="quiz7_2_1[]"
                                                                        onclick="clearRadioButtons2()" disabled
                                                                        {{in_array('"6"',explode(",",substr($form7[0]->quiz7_2_1,1,strlen($form7[0]->quiz7_2_1)-2))) == true ? "checked" : ""}}>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td style=" text-align: left;">3. หลอดเลือดสมองตีบ</td>
                                                                <td>
                                                                    <input class="form-check-input uncheck3 "
                                                                        type="radio" value="1" disabled name="quiz7_3"
                                                                        {{($form7[0]->quiz7_3 == '1' ?  'checked' : '')}}>
                                                                </td>

                                                                <td>
                                                                    <input id="quiz7_3_1" class="form-check-input "
                                                                        type="checkbox" value="1" name="quiz7_3_1[]"
                                                                        onclick="clearRadioButtons3()" disabled
                                                                        {{in_array('"1"',explode(",",substr($form7[0]->quiz7_3_1,1,strlen($form7[0]->quiz7_3_1)-2))) == true ? "checked" : ""}}>
                                                                </td>

                                                                <td>
                                                                    <input id="quiz7_3_2" class="form-check-input"
                                                                        type="checkbox" value="2" name="quiz7_3_1[]"
                                                                        onclick="clearRadioButtons3()" disabled
                                                                        {{in_array('"2"',explode(",",substr($form7[0]->quiz7_3_1,1,strlen($form7[0]->quiz7_3_1)-2))) == true ? "checked" : ""}}>
                                                                </td>

                                                                <td>
                                                                    <input id="quiz7_3_3" class="form-check-input"
                                                                        type="checkbox" value="3" name="quiz7_3_1[]"
                                                                        onclick="clearRadioButtons3()" disabled
                                                                        {{in_array('"3"',explode(",",substr($form7[0]->quiz7_3_1,1,strlen($form7[0]->quiz7_3_1)-2))) == true ? "checked" : ""}}>
                                                                </td>

                                                                <td>
                                                                    <input id="quiz7_3_4" class="form-check-input"
                                                                        type="checkbox" value="4" name="quiz7_3_1[]"
                                                                        onclick="clearRadioButtons3()" disabled
                                                                        {{in_array('"4"',explode(",",substr($form7[0]->quiz7_3_1,1,strlen($form7[0]->quiz7_3_1)-2))) == true ? "checked" : ""}}>
                                                                </td>
                                                                <td>
                                                                    <input id="quiz7_3_5" class="form-check-input"
                                                                        type="checkbox" value="5" name="quiz7_3_1[]"
                                                                        onclick="clearRadioButtons3()" disabled
                                                                        {{in_array('"5"',explode(",",substr($form7[0]->quiz7_3_1,1,strlen($form7[0]->quiz7_3_1)-2))) == true ? "checked" : ""}}>
                                                                </td>

                                                                <td>
                                                                    <input id="quiz7_3_6" class="form-check-input"
                                                                        type="checkbox" value="6" name="quiz7_3_1[]"
                                                                        onclick="clearRadioButtons3()" disabled
                                                                        {{in_array('"6"',explode(",",substr($form7[0]->quiz7_3_1,1,strlen($form7[0]->quiz7_3_1)-2))) == true ? "checked" : ""}}>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td style=" text-align: left;">4. เบาหวาน</td>
                                                                <td>
                                                                    <input class="form-check-input uncheck4 "
                                                                        type="radio" value="1" disabled name="quiz7_4"
                                                                        {{($form7[0]->quiz7_4 == '1' ?  'checked' : '')}}>
                                                                </td>

                                                                <td>
                                                                    <input id="quiz7_4_1" class="form-check-input "
                                                                        type="checkbox" value="1" name="quiz7_4_1[]"
                                                                        onclick="clearRadioButtons4()" disabled
                                                                        {{in_array('"1"',explode(",",substr($form7[0]->quiz7_4_1,1,strlen($form7[0]->quiz7_4_1)-2))) == true ? "checked" : ""}}>
                                                                </td>

                                                                <td>
                                                                    <input id="quiz7_4_2" class="form-check-input"
                                                                        type="checkbox" value="2" name="quiz7_4_1[]"
                                                                        onclick="clearRadioButtons4()" disabled
                                                                        {{in_array('"2"',explode(",",substr($form7[0]->quiz7_4_1,1,strlen($form7[0]->quiz7_4_1)-2))) == true ? "checked" : ""}}>
                                                                </td>

                                                                <td>
                                                                    <input id="quiz7_4_3" class="form-check-input"
                                                                        type="checkbox" value="3" name="quiz7_4_1[]"
                                                                        onclick="clearRadioButtons4()" disabled
                                                                        {{in_array('"3"',explode(",",substr($form7[0]->quiz7_4_1,1,strlen($form7[0]->quiz7_4_1)-2))) == true ? "checked" : ""}}>
                                                                </td>

                                                                <td>
                                                                    <input id="quiz7_4_4" class="form-check-input"
                                                                        type="checkbox" value="4" name="quiz7_4_1[]"
                                                                        onclick="clearRadioButtons4()" disabled
                                                                        {{in_array('"4"',explode(",",substr($form7[0]->quiz7_4_1,1,strlen($form7[0]->quiz7_4_1)-2))) == true ? "checked" : ""}}>
                                                                </td>
                                                                <td>
                                                                    <input id="quiz7_4_5" class="form-check-input"
                                                                        type="checkbox" value="5" name="quiz7_4_1[]"
                                                                        onclick="clearRadioButtons4()" disabled
                                                                        {{in_array('"5"',explode(",",substr($form7[0]->quiz7_4_1,1,strlen($form7[0]->quiz7_4_1)-2))) == true ? "checked" : ""}}>
                                                                </td>

                                                                <td>
                                                                    <input id="quiz7_4_6" class="form-check-input"
                                                                        type="checkbox" value="6" name="quiz7_4_1[]"
                                                                        onclick="clearRadioButtons4()" disabled
                                                                        {{in_array('"6"',explode(",",substr($form7[0]->quiz7_4_1,1,strlen($form7[0]->quiz7_4_1)-2))) == true ? "checked" : ""}}>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td style=" text-align: left;">5. โรคเส้นเลือดหัวใจตีบ
                                                                </td>
                                                                <td>
                                                                    <input class="form-check-input uncheck5 "
                                                                        type="radio" value="1" disabled name="quiz7_5"
                                                                        {{($form7[0]->quiz7_5 == '1' ?  'checked' : '')}}>
                                                                </td>

                                                                <td>
                                                                    <input id="quiz7_5_1" class="form-check-input "
                                                                        type="checkbox" value="1" name="quiz7_5_1[]"
                                                                        onclick="clearRadioButtons5()" disabled
                                                                        {{in_array('"1"',explode(",",substr($form7[0]->quiz7_5_1,1,strlen($form7[0]->quiz7_5_1)-2))) == true ? "checked" : ""}}>
                                                                </td>

                                                                <td>
                                                                    <input id="quiz7_5_2" class="form-check-input"
                                                                        type="checkbox" value="2" name="quiz7_5_1[]"
                                                                        onclick="clearRadioButtons5()" disabled
                                                                        {{in_array('"2"',explode(",",substr($form7[0]->quiz7_5_1,1,strlen($form7[0]->quiz7_5_1)-2))) == true ? "checked" : ""}}>
                                                                </td>

                                                                <td>
                                                                    <input id="quiz7_5_3" class="form-check-input"
                                                                        type="checkbox" value="3" name="quiz7_5_1[]"
                                                                        onclick="clearRadioButtons5()" disabled
                                                                        {{in_array('"3"',explode(",",substr($form7[0]->quiz7_5_1,1,strlen($form7[0]->quiz7_5_1)-2))) == true ? "checked" : ""}}>
                                                                </td>

                                                                <td>
                                                                    <input id="quiz7_5_4" class="form-check-input"
                                                                        type="checkbox" value="4" name="quiz7_5_1[]"
                                                                        onclick="clearRadioButtons5()" disabled
                                                                        {{in_array('"4"',explode(",",substr($form7[0]->quiz7_5_1,1,strlen($form7[0]->quiz7_5_1)-2))) == true ? "checked" : ""}}>
                                                                </td>
                                                                <td>
                                                                    <input id="quiz7_5_5" class="form-check-input"
                                                                        type="checkbox" value="5" name="quiz7_5_1[]"
                                                                        onclick="clearRadioButtons5()" disabled
                                                                        {{in_array('"5"',explode(",",substr($form7[0]->quiz7_5_1,1,strlen($form7[0]->quiz7_5_1)-2))) == true ? "checked" : ""}}>
                                                                </td>

                                                                <td>
                                                                    <input id="quiz7_5_6" class="form-check-input"
                                                                        type="checkbox" value="6" name="quiz7_5_1[]"
                                                                        onclick="clearRadioButtons5()" disabled
                                                                        {{in_array('"6"',explode(",",substr($form7[0]->quiz7_5_1,1,strlen($form7[0]->quiz7_5_1)-2))) == true ? "checked" : ""}}>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td style=" text-align: left;">6. กล้ามเนื้อหัวใจตาย
                                                                </td>
                                                                <td>
                                                                    <input class="form-check-input uncheck6 "
                                                                        type="radio" value="1" disabled name="quiz7_6"
                                                                        {{($form7[0]->quiz7_6 == '1' ?  'checked' : '')}}>
                                                                </td>

                                                                <td>
                                                                    <input id="quiz7_6_1" class="form-check-input "
                                                                        type="checkbox" value="1" name="quiz7_6_1[]"
                                                                        onclick="clearRadioButtons6()" disabled
                                                                        {{in_array('"1"',explode(",",substr($form7[0]->quiz7_6_1,1,strlen($form7[0]->quiz7_6_1)-2))) == true ? "checked" : ""}}>
                                                                </td>

                                                                <td>
                                                                    <input id="quiz7_6_2" class="form-check-input"
                                                                        type="checkbox" value="2" name="quiz7_6_1[]"
                                                                        onclick="clearRadioButtons6()" disabled
                                                                        {{in_array('"2"',explode(",",substr($form7[0]->quiz7_6_1,1,strlen($form7[0]->quiz7_6_1)-2))) == true ? "checked" : ""}}>
                                                                </td>

                                                                <td>
                                                                    <input id="quiz7_6_3" class="form-check-input"
                                                                        type="checkbox" value="3" name="quiz7_6_1[]"
                                                                        onclick="clearRadioButtons6()" disabled
                                                                        {{in_array('"3"',explode(",",substr($form7[0]->quiz7_6_1,1,strlen($form7[0]->quiz7_6_1)-2))) == true ? "checked" : ""}}>
                                                                </td>

                                                                <td>
                                                                    <input id="quiz7_6_4" class="form-check-input"
                                                                        type="checkbox" value="4" name="quiz7_6_1[]"
                                                                        onclick="clearRadioButtons6()" disabled
                                                                        {{in_array('"4"',explode(",",substr($form7[0]->quiz7_6_1,1,strlen($form7[0]->quiz7_6_1)-2))) == true ? "checked" : ""}}>
                                                                </td>
                                                                <td>
                                                                    <input id="quiz7_6_5" class="form-check-input"
                                                                        type="checkbox" value="5" name="quiz7_6_1[]"
                                                                        onclick="clearRadioButtons6()" disabled
                                                                        {{in_array('"5"',explode(",",substr($form7[0]->quiz7_6_1,1,strlen($form7[0]->quiz7_6_1)-2))) == true ? "checked" : ""}}>
                                                                </td>

                                                                <td>
                                                                    <input id="quiz7_6_6" class="form-check-input"
                                                                        type="checkbox" value="6" name="quiz7_6_1[]"
                                                                        onclick="clearRadioButtons6()" disabled
                                                                        {{in_array('"6"',explode(",",substr($form7[0]->quiz7_6_1,1,strlen($form7[0]->quiz7_6_1)-2))) == true ? "checked" : ""}}>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td style=" text-align: left;">7. เส้นเลือดส่วนปลายตีบ
                                                                </td>
                                                                <td>
                                                                    <input class="form-check-input uncheck7 "
                                                                        type="radio" value="1" disabled name="quiz7_7"
                                                                        {{($form7[0]->quiz7_7 == '1' ?  'checked' : '')}}>
                                                                </td>

                                                                <td>
                                                                    <input id="quiz7_7_1" class="form-check-input "
                                                                        type="checkbox" value="1" name="quiz7_7_1[]"
                                                                        onclick="clearRadioButtons7()" disabled
                                                                        {{in_array('"1"',explode(",",substr($form7[0]->quiz7_7_1,1,strlen($form7[0]->quiz7_7_1)-2))) == true ? "checked" : ""}}>
                                                                </td>

                                                                <td>
                                                                    <input id="quiz7_7_2" class="form-check-input"
                                                                        type="checkbox" value="2" name="quiz7_7_1[]"
                                                                        onclick="clearRadioButtons7()" disabled
                                                                        {{in_array('"2"',explode(",",substr($form7[0]->quiz7_7_1,1,strlen($form7[0]->quiz7_7_1)-2))) == true ? "checked" : ""}}>
                                                                </td>

                                                                <td>
                                                                    <input id="quiz7_7_3" class="form-check-input"
                                                                        type="checkbox" value="3" name="quiz7_7_1[]"
                                                                        onclick="clearRadioButtons7()" disabled
                                                                        {{in_array('"3"',explode(",",substr($form7[0]->quiz7_7_1,1,strlen($form7[0]->quiz7_7_1)-2))) == true ? "checked" : ""}}>
                                                                </td>

                                                                <td>
                                                                    <input id="quiz7_7_4" class="form-check-input"
                                                                        type="checkbox" value="4" name="quiz7_7_1[]"
                                                                        onclick="clearRadioButtons7()" disabled
                                                                        {{in_array('"4"',explode(",",substr($form7[0]->quiz7_7_1,1,strlen($form7[0]->quiz7_7_1)-2))) == true ? "checked" : ""}}>
                                                                </td>
                                                                <td>
                                                                    <input id="quiz7_7_5" class="form-check-input"
                                                                        type="checkbox" value="5" name="quiz7_7_1[]"
                                                                        onclick="clearRadioButtons7()" disabled
                                                                        {{in_array('"5"',explode(",",substr($form7[0]->quiz7_7_1,1,strlen($form7[0]->quiz7_7_1)-2))) == true ? "checked" : ""}}>
                                                                </td>

                                                                <td>
                                                                    <input id="quiz7_7_6" class="form-check-input"
                                                                        type="checkbox" value="6" name="quiz7_7_1[]"
                                                                        onclick="clearRadioButtons7()" disabled
                                                                        {{in_array('"6"',explode(",",substr($form7[0]->quiz7_7_1,1,strlen($form7[0]->quiz7_7_1)-2))) == true ? "checked" : ""}}>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td style=" text-align: left;">8. โรคสมองเสื่อม</td>
                                                                <td>
                                                                    <input class="form-check-input uncheck8 "
                                                                        type="radio" value="1" disabled name="quiz7_8"
                                                                        {{($form7[0]->quiz7_8 == '1' ?  'checked' : '')}}>
                                                                </td>

                                                                <td>
                                                                    <input id="quiz7_8_1" class="form-check-input "
                                                                        type="checkbox" value="1" name="quiz7_8_1[]"
                                                                        onclick="clearRadioButtons8()" disabled
                                                                        {{in_array('"1"',explode(",",substr($form7[0]->quiz7_8_1,1,strlen($form7[0]->quiz7_8_1)-2))) == true ? "checked" : ""}}>
                                                                </td>

                                                                <td>
                                                                    <input id="quiz7_8_2" class="form-check-input"
                                                                        type="checkbox" value="2" name="quiz7_8_1[]"
                                                                        onclick="clearRadioButtons8()" disabled
                                                                        {{in_array('"2"',explode(",",substr($form7[0]->quiz7_8_1,1,strlen($form7[0]->quiz7_8_1)-2))) == true ? "checked" : ""}}>
                                                                </td>

                                                                <td>
                                                                    <input id="quiz7_8_3" class="form-check-input"
                                                                        type="checkbox" value="3" name="quiz7_8_1[]"
                                                                        onclick="clearRadioButtons8()" disabled
                                                                        {{in_array('"3"',explode(",",substr($form7[0]->quiz7_8_1,1,strlen($form7[0]->quiz7_8_1)-2))) == true ? "checked" : ""}}>
                                                                </td>

                                                                <td>
                                                                    <input id="quiz7_8_4" class="form-check-input"
                                                                        type="checkbox" value="4" name="quiz7_8_1[]"
                                                                        onclick="clearRadioButtons8()" disabled
                                                                        {{in_array('"4"',explode(",",substr($form7[0]->quiz7_8_1,1,strlen($form7[0]->quiz7_8_1)-2))) == true ? "checked" : ""}}>
                                                                </td>
                                                                <td>
                                                                    <input id="quiz7_8_5" class="form-check-input"
                                                                        type="checkbox" value="5" name="quiz7_8_1[]"
                                                                        onclick="clearRadioButtons8()" disabled
                                                                        {{in_array('"5"',explode(",",substr($form7[0]->quiz7_8_1,1,strlen($form7[0]->quiz7_8_1)-2))) == true ? "checked" : ""}}>
                                                                </td>

                                                                <td>
                                                                    <input id="quiz7_8_6" class="form-check-input"
                                                                        type="checkbox" value="6" name="quiz7_8_1[]"
                                                                        onclick="clearRadioButtons8()" disabled
                                                                        {{in_array('"6"',explode(",",substr($form7[0]->quiz7_8_1,1,strlen($form7[0]->quiz7_8_1)-2))) == true ? "checked" : ""}}>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td style=" text-align: left;">9. มีปัญหากระดูกต้นขา
                                                                </td>
                                                                <td>
                                                                    <input class="form-check-input uncheck9 "
                                                                        type="radio" value="1" disabled name="quiz7_9"
                                                                        {{($form7[0]->quiz7_9 == '1' ?  'checked' : '')}}>
                                                                </td>

                                                                <td>
                                                                    <input id="quiz7_9_1" class="form-check-input "
                                                                        type="checkbox" value="1" name="quiz7_9_1[]"
                                                                        onclick="clearRadioButtons9()" disabled
                                                                        {{in_array('"1"',explode(",",substr($form7[0]->quiz7_9_1,1,strlen($form7[0]->quiz7_9_1)-2))) == true ? "checked" : ""}}>
                                                                </td>

                                                                <td>
                                                                    <input id="quiz7_9_2" class="form-check-input"
                                                                        type="checkbox" value="2" name="quiz7_9_1[]"
                                                                        onclick="clearRadioButtons9()" disabled
                                                                        {{in_array('"2"',explode(",",substr($form7[0]->quiz7_9_1,1,strlen($form7[0]->quiz7_9_1)-2))) == true ? "checked" : ""}}>
                                                                </td>

                                                                <td>
                                                                    <input id="quiz7_9_3" class="form-check-input"
                                                                        type="checkbox" value="3" name="quiz7_9_1[]"
                                                                        onclick="clearRadioButtons9()" disabled
                                                                        {{in_array('"3"',explode(",",substr($form7[0]->quiz7_9_1,1,strlen($form7[0]->quiz7_9_1)-2))) == true ? "checked" : ""}}>
                                                                </td>

                                                                <td>
                                                                    <input id="quiz7_9_4" class="form-check-input"
                                                                        type="checkbox" value="4" name="quiz7_9_1[]"
                                                                        onclick="clearRadioButtons9()" disabled
                                                                        {{in_array('"4"',explode(",",substr($form7[0]->quiz7_9_1,1,strlen($form7[0]->quiz7_9_1)-2))) == true ? "checked" : ""}}>
                                                                </td>
                                                                <td>
                                                                    <input id="quiz7_9_5" class="form-check-input"
                                                                        type="checkbox" value="5" name="quiz7_9_1[]"
                                                                        onclick="clearRadioButtons9()" disabled
                                                                        {{in_array('"5"',explode(",",substr($form7[0]->quiz7_9_1,1,strlen($form7[0]->quiz7_9_1)-2))) == true ? "checked" : ""}}>
                                                                </td>

                                                                <td>
                                                                    <input id="quiz7_9_6" class="form-check-input"
                                                                        type="checkbox" value="6" name="quiz7_9_1[]"
                                                                        onclick="clearRadioButtons9()" disabled
                                                                        {{in_array('"6"',explode(",",substr($form7[0]->quiz7_9_1,1,strlen($form7[0]->quiz7_9_1)-2))) == true ? "checked" : ""}}>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td style=" text-align: left;">10. โรคกล้ามเนื้ออ่อนแรง
                                                                </td>
                                                                <td>
                                                                    <input class="form-check-input uncheck10 "
                                                                        type="radio" value="1" disabled name="quiz7_10"
                                                                        {{($form7[0]->quiz7_10 == '1' ?  'checked' : '')}}>
                                                                </td>

                                                                <td>
                                                                    <input id="quiz7_10_1" class="form-check-input "
                                                                        type="checkbox" value="1" name="quiz7_10_1[]"
                                                                        onclick="clearRadioButtons10()" disabled
                                                                        {{in_array('"1"',explode(",",substr($form7[0]->quiz7_10_1,1,strlen($form7[0]->quiz7_10_1)-2))) == true ? "checked" : ""}}>
                                                                </td>

                                                                <td>
                                                                    <input id="quiz7_10_2" class="form-check-input"
                                                                        type="checkbox" value="2" name="quiz7_10_1[]"
                                                                        onclick="clearRadioButtons10()" disabled
                                                                        {{in_array('"2"',explode(",",substr($form7[0]->quiz7_10_1,1,strlen($form7[0]->quiz7_10_1)-2))) == true ? "checked" : ""}}>
                                                                </td>

                                                                <td>
                                                                    <input id="quiz7_10_3" class="form-check-input"
                                                                        type="checkbox" value="3" name="quiz7_10_1[]"
                                                                        onclick="clearRadioButtons10()" disabled
                                                                        {{in_array('"3"',explode(",",substr($form7[0]->quiz7_10_1,1,strlen($form7[0]->quiz7_10_1)-2))) == true ? "checked" : ""}}>
                                                                </td>

                                                                <td>
                                                                    <input id="quiz7_10_4" class="form-check-input"
                                                                        type="checkbox" value="4" name="quiz7_10_1[]"
                                                                        onclick="clearRadioButtons10()" disabled
                                                                        {{in_array('"4"',explode(",",substr($form7[0]->quiz7_10_1,1,strlen($form7[0]->quiz7_10_1)-2))) == true ? "checked" : ""}}>
                                                                </td>
                                                                <td>
                                                                    <input id="quiz7_10_5" class="form-check-input"
                                                                        type="checkbox" value="5" name="quiz7_10_1[]"
                                                                        onclick="clearRadioButtons10()" disabled
                                                                        {{in_array('"5"',explode(",",substr($form7[0]->quiz7_10_1,1,strlen($form7[0]->quiz7_10_1)-2))) == true ? "checked" : ""}}>
                                                                </td>

                                                                <td>
                                                                    <input id="quiz7_10_6" class="form-check-input"
                                                                        type="checkbox" value="6" name="quiz7_10_1[]"
                                                                        onclick="clearRadioButtons10()" disabled
                                                                        {{in_array('"6"',explode(",",substr($form7[0]->quiz7_10_1,1,strlen($form7[0]->quiz7_10_1)-2))) == true ? "checked" : ""}}>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>








                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingEight">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseEight"
                                            aria-expanded="false" aria-controls="panelsStayOpen-collapseEight">
                                            ส่วนที่ 8 การสูบบุหรี่ และเครื่องดื่มแอลกอฮอล์
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseEight" class="accordion-collapse collapse"
                                        aria-labelledby="panelsStayOpen-headingEight">
                                        <div class="accordion-body">
                                            @foreach($form8 as $row)
                                            <div class="col-12">
                                                <label for="inputAddress" class="form-label">8.1 ท่านสูบบุหรี่หรือไม่
                                                    เดือนที่ผ่านมา</label><br>
                                                <div class="form-check form-check-inline">
                                                    @if($row->quiz8_1 == 1)
                                                    ไม่เคยสูบบุหรี่
                                                    @elseif($row->quiz8_1 == 2)
                                                    สูบวันละ {{$row->quiz8_1_1_1}} มวล
                                                    สูบมาได้ {{$row->quiz8_1_1_2}} {{$row->quiz8_1_1_3}}
                                                    @elseif($row->quiz8_1 == 3)
                                                    ระยะเวลาที่เคยสูบ {{$row->quiz8_1_2_1}} {{$row->quiz8_1_2_2}}
                                                    หยุดสูบมา {{$row->quiz8_1_2_3}} {{$row->quiz8_1_2_4}}
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="inputAddress" class="form-label">8.2
                                                    ท่านสูบบุหรี่ไฟฟ้าหรือไม่</label><br>
                                                <div class="form-check form-check-inline">
                                                    @if($row->quiz8_2 == 1)
                                                    ไม่เคยสูบบุหรี่ไฟฟ้า
                                                    @elseif($row->quiz8_2 == 2)
                                                    สูบวันละ {{$row->quiz8_2_1_1}} ครั้ง
                                                    สูบมาได้ {{$row->quiz8_2_1_2}} {{$row->quiz8_2_1_3}}
                                                    น้ำยา 1 หยดใช้ได้ {{$row->quiz8_2_1_4}} {{$row->quiz8_2_1_5}}
                                                    @elseif($row->quiz8_2 == 3)
                                                    ระยะเวลาที่เคยสูบ {{$row->quiz8_2_2_1}} {{$row->quiz8_2_2_2}}
                                                    หยุดสูบมา {{$row->quiz8_2_2_3}} {{$row->quiz8_2_2_4}}
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="inputAddress" class="form-label">8.3
                                                    ท่านดื่มเครื่องดื่มแอลกอฮอล์หรือไม่</label><br>
                                                <div class="form-check form-check-inline">
                                                    @if($row->quiz8_3 == 1)
                                                    ไม่เคยดื่ม
                                                    @elseif($row->quiz8_3 == 2)
                                                    เคยดื่มแต่ปัจจุบันไม่ได้ดื่มแล้ว
                                                    @elseif($row->quiz8_3 == 3)
                                                    ดื่มบางครั้งตามงานสังคม
                                                    @elseif($row->quiz8_3 == 4)
                                                    ปัจจุบันนี้ท่านดื่มเครื่องดื่มแอลกอฮอล์เกือบทุกวัน
                                                    (อย่างน้อยสัปดาห์ละครั้ง)
                                                </div>
                                                <br>
                                                <div class="form-check form-check-inline">
                                                    <label for="inputAddress" class="form-label">8.3.1
                                                        ในหนึ่งวันท่านดื่มเบียร์มากกว่า 3
                                                        แก้วเบียร์ (3 x 285 มล.)
                                                    </label><br>
                                                    <div class="form-check form-check-inline">
                                                        {{($row->quiz8_3_1) == '1' ? 'ใช่' : '' }}
                                                        {{($row->quiz8_3_1) == '2' ? 'ไม่ใช่' : '' }}
                                                        {{($row->quiz8_3_1) == null ? 'ผู้รับบริการยังไม่ได้​ตอบ' : '' }}
                                                    </div>
                                                </div>

                                                <br>
                                                <div class="form-check form-check-inline">
                                                    <label for="inputAddress" class="form-label">8.3.2
                                                        ในหนึ่งวันท่านดื่มสุรามากกว่า
                                                        3
                                                        ก๊ง (3
                                                        x 30 มล.)</label><br>
                                                    <div class="form-check form-check-inline">
                                                        {{($row->quiz8_3_2) == '1' ? 'ใช่' : '' }}
                                                        {{($row->quiz8_3_2) == '2' ? 'ไม่ใช่' : '' }}
                                                        {{($row->quiz8_3_2) == null ? 'ผู้รับบริการยังไม่ได้​ตอบ' : '' }}
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="form-check form-check-inline">
                                                    <label for="inputAddress" class="form-label">8.3.3
                                                        ในหนึ่งวันท่านดื่มไวน์มากกว่า
                                                        3
                                                        แก้วไวน์ (3 x 120 มล.)</label>
                                                    <br>
                                                    <div class="form-check form-check-inline">
                                                        {{($row->quiz8_3_3) == '1' ? 'ใช่' : '' }}
                                                        {{($row->quiz8_3_3) == '2' ? 'ไม่ใช่' : '' }}
                                                        {{($row->quiz8_3_3) == null ? 'ผู้รับบริการยังไม่ได้​ตอบ' : '' }}
                                                    </div>
                                                </div>

                                                <br>
                                                <div class="form-check form-check-inline">
                                                    <label for="inputAddress" class="form-label">8.3.4
                                                        จำนวนความถี่ในการดื่มแอลกอฮอล์ของท่าน</label>
                                                    <br>
                                                    <div class="form-check form-check-inline">
                                                        {{($row->quiz8_3_4) == '1' ? '1-2 ครั้ง/สัปดาห์' : '' }}
                                                        {{($row->quiz8_3_4) == '2' ? '3-4 ครั้ง/สัปดาห์' : '' }}
                                                        {{($row->quiz8_3_4) == '3' ? '5-6 ครั้ง/สัปดาห์' : '' }}
                                                        {{($row->quiz8_3_4) == '4' ? 'ทุกวัน' : '' }}
                                                        {{($row->quiz8_3_4) == null ? 'ผู้รับบริการยังไม่ได้​ตอบ' : '' }}

                                                    </div>
                                                </div>
                                                @elseif($row->quiz8_3 == null)
                                                ผู้รับบริการยังไม่ได้​ตอบ

                                                @endif
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>







                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingNine">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseNine"
                                            aria-expanded="true" aria-controls="panelsStayOpen-collapseNine">
                                            ส่วนที่ 9 ความเครียด
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseNine" class="accordion-collapse collapse"
                                        aria-labelledby="panelsStayOpen-headingNine">
                                        <div class="accordion-body">
                                            @foreach($form9 as $row)
                                            <div class="col-12">
                                                <label for="inputAddress" class="form-label">9.1
                                                    ท่านเคยรู้สึกเครียดบ่อยแค่ไหนใน<u>ที่ทำงาน</u>ในช่วง 12
                                                    เดือนที่ผ่านมา</label><br>
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label" for="inlineRadio1">

                                                        {{($row->quiz9_1) == '1' ? 'เครียดตลอด' : '' }}
                                                        {{($row->quiz9_1) == '2' ? 'เครียดหลายๆครั้ง' : '' }}
                                                        {{($row->quiz9_1) == '3' ? 'เครียดบางเวลา' : '' }}
                                                        {{($row->quiz9_1) == '4' ? 'ไม่เคยเครียด' : '' }}
                                                        {{($row->quiz9_1) == null ? 'ผู้รับบริการยังไม่ได้​ตอบ' : '' }}

                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="inputAddress" class="form-label">9.2
                                                    ท่านเคยรู้สึกเครียดบ่อยแค่ไหน<u>ที่บ้าน</u>ในช่วง 12
                                                    เดือนที่ผ่านมา</label><br>
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label" for="inlineRadio1">

                                                        {{($row->quiz9_2) == '1' ? 'เครียดตลอด' : '' }}
                                                        {{($row->quiz9_2) == '2' ? 'เครียดหลายๆครั้ง' : '' }}
                                                        {{($row->quiz9_2) == '3' ? 'เครียดบางเวลา' : '' }}
                                                        {{($row->quiz9_2) == '4' ? 'ไม่เคยเครียด' : '' }}
                                                        {{($row->quiz9_2) == null ? 'ผู้รับบริการยังไม่ได้​ตอบ' : '' }}

                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="inputAddress" class="form-label">9.3
                                                    ท่านมีความเครียดทางการเงินระดับไหน</label><br>
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label" for="inlineRadio1">

                                                        {{($row->quiz9_3) == '1' ? 'ระดับสูง/รุนแรง' : '' }}
                                                        {{($row->quiz9_3) == '2' ? 'ปานกลาง' : '' }}
                                                        {{($row->quiz9_3) == '3' ? 'เล็กน้อย' : '' }}
                                                        {{($row->quiz9_3) == '4' ? 'ไม่มีเลย' : '' }}
                                                        {{($row->quiz9_3) == null ? 'ผู้รับบริการยังไม่ได้​ตอบ' : '' }}
                                                    </label>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Hero -->
    </main><!-- End #main -->
</x-app-layout>