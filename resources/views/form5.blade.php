<x-app-layout>

    <script>
    $(document).ready(function() {
        var value = $('input[name=quiz5_1]:checked', '#myForm1').val()
        if (value == "1") {
            $('.dvtext2').show();
        } else {
            $('.dvtext2').hide();
        }
        var value = $('input[name=quiz5_2]:checked', '#myForm1').val()
        if (value == "1") {
            $('.dvtext1').show();
        } else {
            $('.dvtext1').hide();
        }



        $("input[type=radio][name=quiz5_1]").on("change", function() {
            ($(this).val() == "1") ? $(this).siblings(".dvtext2").show(): $(this).siblings(
                ".dvtext2").hide()
        })
        $("input[type=radio][name=quiz5_2]").on("change", function() {
            ($(this).val() == "1") ? $(this).siblings(".dvtext1").show(): $(this).siblings(
                ".dvtext1").hide()
        })
        $('.datepicker').datepicker({
            inline: true
        });

        



        
    });
    </script>


    <!-- ======= Hero Section ======= -->
    <section id="userform" class="userform  d-flex align-items-center">
        <div class="container ">
            <header class="section-header d-flex justify-content-between">
                <div>
                    <p>ส่วนที่ 5</p>
                    <div class="section-header-line"></div>
                    <h3>การรับประทานยา/อาหารเสริม</h3>
                </div>
                <div>
                    <a>ผู้รับบริการ: {{$getbyid[0]->name}}</a>
                </div>
            </header>


            <div class="row d-flex justify-content-center ">
                @if(session("success"))
                <div class="alert alert-success">{{session('success')}}</div>
                @endif
                <div class="col-md-9 ">
                    <div class="row gy-4 ">
                        <form id="myForm1" class="row g-3" action="{{url('/formupdate5/'.$getbyid[0]->id)}}"
                            method="post">
                            @csrf
                            <div class="row justify-content-md-center">
                                <div class="col-12">

                                    <label for="inputAddress" class="form-label">5.1
                                        ท่านมียาที่ใช้อยู่ในปัจจุบันหรือไม่</label>
                                    <h6>โปรดระบุ ชื่อของยาท้ังหมด ขนาด และจํานวนคร้ังที่ท่านรับประทานในแต่ละวัน</h6>
                                    <h6> <u>หมายเหตุ:</u> ระบุชื่อยาที่ท่านซื้อรับประทานเอง ถ้าใช้เป็นประจำ
                                        รวมท้ังการรักษาด้วยฮอร์โมนทดแทน (hormone replacement therapy: HRT)
                                        และการใช้ยาคุมกำเนิดแบบรับประทานหรือยาฉีดหรือยาฝัง</h6>


                                    <!-- <div class="form-check form-check-inline"> -->
                                    <input class="form-check-input" type="radio" value="0" name="quiz5_1"
                                        {{($forms[0]->quiz5_1 == '0' ?  'checked' : '')}}>
                                    <label class="form-check-label" for="inlineRadio2">ไม่มี</label>
                                    <!-- </div> -->
                                    <br>
                                    <!-- <div class="form-check form-check-inline"> -->
                                    <input class="form-check-input" type="radio" value="1" name="quiz5_1"
                                        {{($forms[0]->quiz5_1 == '1' ?  'checked' : '')}}>
                                    <label class="form-check-label" for="inlineRadio2">มี</label>
                                    <!-- </div> -->

                                    <div class="col-lg-12 dvtext2">
                                        <div class="row justify-content-md-center">
                                            <div class="col-lg-12 mb-4">
                                                <!-- Tables -->
                                                <div class="card">
                                                    <div class="card-header d-flex bd-highlight mb-3">
                                                        <div class="me-auto p-2 bd-highlight">
                                                            <!-- Button trigger modal -->
                                                        </div>
                                                        <div class="p-2 bd-highlight">
                                                            <button type="button" class="btn btn-primary"
                                                                data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <i class="bi bi-plus-lg"></i>
                                                                เพิ่มยาที่ท่านใช้อยู่ในปัจจุบัน
                                                            </button>
                                                        </div>
                                                    </div>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel"
                                                                        style="color: #000;">
                                                                        ยาที่ท่านใช้อยู่ในปัจจุบัน</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body col-lg-12">

                                                                    <div class="input-group mb-3">
                                                                        <span class="input-group-text"
                                                                            id="basic-addon1">ชื่อยา</span>
                                                                        <input type="text" class="form-control"
                                                                            placeholder="โปรดระบุชื่อยา (เช่น คลอเฟนิรามีน)"
                                                                            aria-label="โปรดระบุชื่อยา"
                                                                            aria-describedby="basic-addon1"
                                                                            name="drug_1">
                                                                    </div>




                                                                    <div class="input-group mb-3">
                                                                        <label class="input-group-text"
                                                                            for="inputGroupSelect01">ยาชนิดนี้ใช้มานานเท่าใด</label>
                                                                        <input type="text" class="form-control"
                                                                            aria-label="Text input with dropdown button"
                                                                            name="drug_2">
                                                                        <select
                                                                            class="form-select btn btn-outline-secondary dropdown-toggle "
                                                                            name="drug_3">
                                                                            <option>กรุณาเลือก</option>
                                                                            <option value="เดือน">
                                                                                เดือน
                                                                            </option>
                                                                            <option value="ปี">
                                                                                ปี</option>
                                                                        </select>
                                                                    </div>

                                                                    <div class="input-group mb-3">
                                                                        <label class="input-group-text"
                                                                            for="inputGroupSelect01">ขนาดยาที่ใช้</label>
                                                                        <input type="text" class="form-control"
                                                                            aria-label="Text input with dropdown button"
                                                                            name="drug_4">
                                                                        <select
                                                                            class="form-select btn btn-outline-secondary dropdown-toggle "
                                                                            name="drug_5">
                                                                            <option>กรุณาเลือก</option>
                                                                            <option value="มิลลิกรัม">
                                                                                มิลลิกรัม (ยาเม็ด)
                                                                            </option>
                                                                            <option value="มิลลิลิตร">
                                                                                มิลลิลิตร (ยาน้ำ)</option>
                                                                            <option value="พัฟฟ์">
                                                                                พัฟฟ์ (ยาพ่น)</option>
                                                                        </select>
                                                                    </div>

                                                                    <div class="input-group mb-3">
                                                                        <label class="input-group-text"
                                                                            for="inputGroupSelect01">จำนวนครั้งที่ใช้ยา</label>
                                                                        <input type="text" class="form-control"
                                                                            aria-label="Text input with dropdown button"
                                                                            name="drug_6">
                                                                        <select
                                                                            class="form-select btn btn-outline-secondary dropdown-toggle "
                                                                            name="drug_7">
                                                                            <option>กรุณาเลือก</option>
                                                                            <option value="ครั้ง/วัน">
                                                                                ครั้ง/วัน
                                                                            </option>
                                                                            <option value="ครั้ง/เดือน">
                                                                                ครั้ง/เดือน</option>
                                                                            <option value="ครั้ง/ปี">
                                                                                ครั้ง/ปี</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">ยกเลิก</button>
                                                                    <button id="createData"
                                                                        class="btn btn-primary createData">เพิ่ม</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="table" style="overflow-x:auto;" data-aos="fade-up">
                                                        <table class="table align-items-center table-flush">
                                                            <thead class="thead-light">
                                                                <tr>
                                                                    <th scope="col">ลำดับ</th>
                                                                    <th>ยาที่ท่านใช้</th>
                                                                    <th>ยาชนิดนี้ใช้มานานเท่าใด</th>
                                                                    <th>ขนาดยาที่ใช้</th>
                                                                    <th>จำนวนครั้งที่ใช้ยา</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @php($i=1)
                                                                @foreach($drug as $row)
                                                                <tr>
                                                                    <th>{{$i++}}</th>
                                                                    <td>{{$row->drug_1}}</td>
                                                                    <td>{{$row->drug_2}} {{$row->drug_3}}</td>
                                                                    <td>{{$row->drug_4}} {{$row->drug_5}}</td>
                                                                    <td>{{$row->drug_6}} {{$row->drug_7}}</td>
                                                                    <td>
                                                                        <a href="{{url('/formupdate5/del2/'.$row->id)}}"
                                                                            class="btn btn-danger" role="button"><i
                                                                                class="bi bi-archive-fill"></i>
                                                                        </a>
                                                                    </td>

                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>






                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">5.2
                                        ท่านเคยใช้ผลิตภัณฑ์อาหารเสริมที่ไม่ใช่สมุนไพร บ้างหรือไม่</label>

                                    <br>
                                    <!-- <div class="form-check form-check-inline"> -->
                                    <input class="form-check-input" type="radio" value="0" name="quiz5_2"
                                        {{($forms[0]->quiz5_2 == '0' ?  'checked' : '')}}>
                                    <label class="form-check-label" for="inlineRadio2">ไม่เคย</label>
                                    <!-- </div> -->
                                    <br>
                                    <!-- <div class="form-check form-check-inline"> -->
                                    <input class="form-check-input" type="radio" value="1" name="quiz5_2"
                                        {{($forms[0]->quiz5_2 == '1' ?  'checked' : '')}}>
                                    <label class="form-check-label" for="inlineRadio2">เคย</label>
                                    <!-- </div> -->

                                    <div class="dvtext1 col-lg-12">
                                        <label for="inputAddress" class="form-label">5.2.1
                                            ชนิดผลิตภัณฑ์อาหารเสริม</label>


                                        <div class="row justify-content-md-center">
                                            <div class="col-lg-12 mb-4">
                                                <!-- Tables -->
                                                <div class="card">
                                                    <div class="card-header d-flex bd-highlight mb-3">
                                                        <div class="me-auto p-2 bd-highlight">
                                                            <!-- Button trigger modal -->
                                                        </div>
                                                        <div class="p-2 bd-highlight">
                                                            <button type="button" class="btn btn-primary"
                                                                data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                                                <i class="bi bi-plus-lg"></i>
                                                                เพิ่มอาหารเสริมที่ท่านใช้อยู่ในปัจจุบัน
                                                            </button>
                                                        </div>
                                                    </div>


                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal2" tabindex="-1"
                                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel"
                                                                        style="color: #000;">
                                                                        อาหารเสริมที่ท่านใช้</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body col-lg-12">


                                                                    <div class="input-group mb-3">
                                                                        <span class="input-group-text"
                                                                            id="basic-addon1">ชื่ออาหารเสริม</span>
                                                                        <input type="text" class="form-control"
                                                                            name="health_1">
                                                                    </div>


                                                                    <div class="input-group mb-3">
                                                                        <label class="input-group-text"
                                                                            for="inputGroupSelect01">ปริมาณที่ใช้ต่อวัน</label>
                                                                        <input type="text" class="form-control"
                                                                            aria-label="Text input with dropdown button"
                                                                            name="health_2">
                                                                        <select
                                                                            class="form-select btn btn-outline-secondary dropdown-toggle "
                                                                            name="health_3">
                                                                            <option>กรุณาเลือก</option>
                                                                            <option value="เม็ด">
                                                                                เม็ด
                                                                            </option>
                                                                            <option value="ขวด">
                                                                                ขวด</option>
                                                                            <option value="ห่อ">
                                                                                ห่อ
                                                                            </option>
                                                                        </select>
                                                                    </div>

                                                                    <div class="input-group mb-3">
                                                                        <span class="input-group-text"
                                                                            id="basic-addon1">เป็นเวลากี่วันต่อสัปดาห์</span>
                                                                        <input type="text" class="form-control"
                                                                            name="health_4">
                                                                    </div>



                                                                    <div class="input-group mb-3">
                                                                        <label class="input-group-text"
                                                                            for="inputGroupSelect01">ระยะเวลาที่ใช้ต่อเนื่อง</label>
                                                                        <input type="text" class="form-control"
                                                                            aria-label="Text input with dropdown button"
                                                                            name="health_5">

                                                                        <select
                                                                            class="form-select btn btn-outline-secondary dropdown-toggle "
                                                                            name="health_6">
                                                                            <option>กรุณาเลือก</option>
                                                                            <option value="วัน">
                                                                                วัน
                                                                            </option>
                                                                            <option value="เดือน">
                                                                                เดือน</option>
                                                                            <option value="ปี">
                                                                                ปี
                                                                            </option>
                                                                        </select>
                                                                    </div>


                                                                    <!-- <div class="input-group mb-3">
                                                                        <label class="input-group-text"
                                                                            for="inputGroupSelect01">ครั้งสุดท้ายที่ใช้</label>
                                                                        <input type="text" class="form-control"
                                                                            aria-label="Text input with dropdown button"
                                                                            name="health_7">
                                                                        <select
                                                                            class="form-select btn btn-outline-secondary dropdown-toggle "
                                                                            name="health_8">
                                                                            <option>กรุณาเลือก</option>
                                                                            <option value="วัน">
                                                                                วัน
                                                                            </option>
                                                                            <option value="เดือน">
                                                                                เดือน</option>
                                                                            <option value="ปี">
                                                                                ปี
                                                                            </option>
                                                                        </select>
                                                                    </div> -->


                                                                    <div class="input-group mb-3">
                                                                        <!-- Date input -->
                                                                        <label class="input-group-text"
                                                                            for="inputGroupSelect01">ครั้งสุดท้ายที่ใช้</label>
                                                                        <input class="form-control" id="date"
                                                                            name="health_7" placeholder="dd-mm-yyyy"
                                                                            type="date" onclick="mydate();" />

                                                                    </div>

                      


                                                                </div>









                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">ยกเลิก</button>
                                                                    <button id="createData"
                                                                        class="btn btn-primary createData">เพิ่ม</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="table" style="overflow-x:auto;" data-aos="fade-up">
                                                        <table class="table align-items-center table-flush">
                                                            <thead class="thead-light">
                                                                <tr>
                                                                    <th scope="col">ลำดับ</th>
                                                                    <th>อาหารเสริม</th>
                                                                    <th>ปริมาณที่ใช้/วัน</th>
                                                                    <th>เป็นเวลากี่วัน/สัปดาห์</th>
                                                                    <th>ระยะเวลาที่ใช้ต่อเนื่อง</th>
                                                                    <th>ครั้งสุดท้ายที่ใช้</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @php($i=1)
                                                                @foreach($health as $row)
                                                                <tr>
                                                                    <th>{{$i++}}</th>
                                                                    <td>{{$row->health_1}}</td>
                                                                    <td>{{$row->health_2}} {{$row->health_3}}</td>
                                                                    <td>{{$row->health_4}}</td>
                                                                    <td>{{$row->health_5}} {{$row->health_6}}</td>
                                                                    <td>{{\Carbon\Carbon::parse($row->health_7)->format('d  M  Y')}}</td>
                                                                    <td>
                                                                        <a href="{{url('/formupdate5/del3/'.$row->id)}}"
                                                                            class="btn btn-danger" role="button"><i
                                                                                class="bi bi-archive-fill"></i>
                                                                        </a>
                                                                    </td>

                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Row-->
                                        <div class="col-12">
                                            <label for="inputAddress" class="form-label">5.2.2
                                                ท่านใช้ผลิตภัณฑ์อาหารเสริม สำหรับรักษาโรค/บรรเทาอาการอะไร (ตอบได้มากกว่า
                                                1 ข้อ)</label>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="1"
                                                    name="quiz5_2_1_1[]"
                                                    {{in_array('"1"',explode(",",substr($forms[0]->quiz5_2_1_1,1,strlen($forms[0]->quiz5_2_1_1)-2))) == true ? "checked" : ""}}>
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    1. ปวดข้อ ปวดเมื่อย
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="2"
                                                    name="quiz5_2_1_1[]"
                                                    {{in_array('"2"',explode(",",substr($forms[0]->quiz5_2_1_1,1,strlen($forms[0]->quiz5_2_1_1)-2))) == true ? "checked" : ""}}>
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    2. หอบหืด / ภูมิแพ้
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="3"
                                                    name="quiz5_2_1_1[]"
                                                    {{in_array('"3"',explode(",",substr($forms[0]->quiz5_2_1_1,1,strlen($forms[0]->quiz5_2_1_1)-2))) == true ? "checked" : ""}}>
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    3. บํารุงร่างกาย / บำรุงโลหิต
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="4"
                                                    name="quiz5_2_1_1[]"
                                                    {{in_array('"4"',explode(",",substr($forms[0]->quiz5_2_1_1,1,strlen($forms[0]->quiz5_2_1_1)-2))) == true ? "checked" : ""}}>
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    4. เพื่อskin / ความงาม
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="5"
                                                    name="quiz5_2_1_1[]"
                                                    {{in_array('"5"',explode(",",substr($forms[0]->quiz5_2_1_1,1,strlen($forms[0]->quiz5_2_1_1)-2))) == true ? "checked" : ""}}>
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    5. ติดเชื้อ
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="6"
                                                    name="quiz5_2_1_1[]"
                                                    {{in_array('"6"',explode(",",substr($forms[0]->quiz5_2_1_1,1,strlen($forms[0]->quiz5_2_1_1)-2))) == true ? "checked" : ""}}>
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    6. ท้องอืด ท้องเฟ้อ ท้องผูก
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="7"
                                                    name="quiz5_2_1_1[]"
                                                    {{in_array('"7"',explode(",",substr($forms[0]->quiz5_2_1_1,1,strlen($forms[0]->quiz5_2_1_1)-2))) == true ? "checked" : ""}}>
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    7. อาการหวัด
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="8"
                                                    name="quiz5_2_1_1[]"
                                                    {{in_array('"8"',explode(",",substr($forms[0]->quiz5_2_1_1,1,strlen($forms[0]->quiz5_2_1_1)-2))) == true ? "checked" : ""}}>
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    8. อาการไอ
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="9"
                                                    name="quiz5_2_1_1[]"
                                                    {{in_array('"9"',explode(",",substr($forms[0]->quiz5_2_1_1,1,strlen($forms[0]->quiz5_2_1_1)-2))) == true ? "checked" : ""}}>
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    9. เบาหวาน
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="10"
                                                    name="quiz5_2_1_1[]"
                                                    {{in_array('"10"',explode(",",substr($forms[0]->quiz5_2_1_1,1,strlen($forms[0]->quiz5_2_1_1)-2))) == true ? "checked" : ""}}>
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    10. ความดันโลหิตสูง
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="11"
                                                    name="quiz5_2_1_1[]"
                                                    {{in_array('"11"',explode(",",substr($forms[0]->quiz5_2_1_1,1,strlen($forms[0]->quiz5_2_1_1)-2))) == true ? "checked" : ""}}>
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    11. บำรุงไต / ขับปัสสาวะ
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="12"
                                                    name="quiz5_2_1_1[]"
                                                    {{in_array('"12"',explode(",",substr($forms[0]->quiz5_2_1_1,1,strlen($forms[0]->quiz5_2_1_1)-2))) == true ? "checked" : ""}}>
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    12. บำรุงตับ
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="13"
                                                    name="quiz5_2_1_1[]"
                                                    {{in_array('"13"',explode(",",substr($forms[0]->quiz5_2_1_1,1,strlen($forms[0]->quiz5_2_1_1)-2))) == true ? "checked" : ""}}>
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    13. เพิ่มในเรื่องภูมิคุ้มกัน
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="14"
                                                    name="quiz5_2_1_1[]"
                                                    {{in_array('"14"',explode(",",substr($forms[0]->quiz5_2_1_1,1,strlen($forms[0]->quiz5_2_1_1)-2))) == true ? "checked" : ""}}>
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    14. บำรุงความจำ
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="15"
                                                    name="quiz5_2_1_1[]"
                                                    {{in_array('"15"',explode(",",substr($forms[0]->quiz5_2_1_1,1,strlen($forms[0]->quiz5_2_1_1)-2))) == true ? "checked" : ""}}>
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    15. อาการทางประจำเดือน
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="16"
                                                    name="quiz5_2_1_1[]"
                                                    {{in_array('"16"',explode(",",substr($forms[0]->quiz5_2_1_1,1,strlen($forms[0]->quiz5_2_1_1)-2))) == true ? "checked" : ""}}>
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    16. อาการทางระบบประสาท เช่น นอนไม่หลับ ชา
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="17"
                                                    name="quiz5_2_1_1[]"
                                                    {{in_array('"17"',explode(",",substr($forms[0]->quiz5_2_1_1,1,strlen($forms[0]->quiz5_2_1_1)-2))) == true ? "checked" : ""}}>
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    17. ลด/ควบคุมน้ำหนัก
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="18"
                                                    name="quiz5_2_1_1[]"
                                                    {{in_array('"18"',explode(",",substr($forms[0]->quiz5_2_1_1,1,strlen($forms[0]->quiz5_2_1_1)-2))) == true ? "checked" : ""}}>
                                                <input type="text" class="form-control" placeholder="อื่นๆ โปรดระบุ"
                                                    name="quiz5_2_1_2" aria-label="โปรดระบุ"
                                                    value="{{($forms[0]->quiz5_2_1_2)}}">
                                            </div>
                                        </div>



                                        <div class="col-12">
                                            <label for="inputAddress" class="form-label">5.2.3
                                                ท่านซื้อหรือได้รับผลิตภัณฑ์อาหารเสริม มาจากที่ใด (ตอบได้มากกว่า 1
                                                ข้อ)</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="1"
                                                    name="quiz5_2_2_1[]"
                                                    {{in_array('"1"',explode(",",substr($forms[0]->quiz5_2_2_1,1,strlen($forms[0]->quiz5_2_2_1)-2))) == true ? "checked" : ""}}>
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    1. โรงพยาบาล / คลินิค
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="2"
                                                    name="quiz5_2_2_1[]"
                                                    {{in_array('"2"',explode(",",substr($forms[0]->quiz5_2_2_1,1,strlen($forms[0]->quiz5_2_2_1)-2))) == true ? "checked" : ""}}>
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    2. สถานีอนามัย / ศูนย์บริการสาธารณสุขในชุมชน
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="3"
                                                    name="quiz5_2_2_1[]"
                                                    {{in_array('"3"',explode(",",substr($forms[0]->quiz5_2_2_1,1,strlen($forms[0]->quiz5_2_2_1)-2))) == true ? "checked" : ""}}>
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    3. ร้านยา
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="4"
                                                    name="quiz5_2_2_1[]"
                                                    {{in_array('"4"',explode(",",substr($forms[0]->quiz5_2_2_1,1,strlen($forms[0]->quiz5_2_2_1)-2))) == true ? "checked" : ""}}>
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    4. ร้านค้า
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="5"
                                                    name="quiz5_2_2_1[]"
                                                    {{in_array('"5"',explode(",",substr($forms[0]->quiz5_2_2_1,1,strlen($forms[0]->quiz5_2_2_1)-2))) == true ? "checked" : ""}}>
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    5. เพื่อน ญาติ คนรู้จัก
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="6"
                                                    name="quiz5_2_2_1[]"
                                                    {{in_array('"6"',explode(",",substr($forms[0]->quiz5_2_2_1,1,strlen($forms[0]->quiz5_2_2_1)-2))) == true ? "checked" : ""}}>
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    6. วัด
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="7"
                                                    name="quiz5_2_2_1[]"
                                                    {{in_array('"7"',explode(",",substr($forms[0]->quiz5_2_2_1,1,strlen($forms[0]->quiz5_2_2_1)-2))) == true ? "checked" : ""}}>
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    7. การขายตรง
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="8"
                                                    name="quiz5_2_2_1[]"
                                                    {{in_array('"8"',explode(",",substr($forms[0]->quiz5_2_2_1,1,strlen($forms[0]->quiz5_2_2_1)-2))) == true ? "checked" : ""}}>
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    8. ซื้อจากงานแสดงสินค้าโอทอป
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="9"
                                                    name="quiz5_2_2_1[]"
                                                    {{in_array('"9"',explode(",",substr($forms[0]->quiz5_2_2_1,1,strlen($forms[0]->quiz5_2_2_1)-2))) == true ? "checked" : ""}}>
                                                <input type="text" class="form-control" placeholder="อื่นๆ โปรดระบุ"
                                                    aria-label="โปรดระบุ" name="quiz5_2_2_2"
                                                    value="{{($forms[0]->quiz5_2_2_2)}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="col-12">
                                    <br>
                                    <button type="submit" class="btn btn-primary">บันทึก</button>
                                </div>
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
                <button type="button" onclick="window.location.href='{{url('/form6/'.$getbyid[0]->id)}}'"
                    class="btn btn-primary">หน้าถัดไป
                    <i class="bi bi-arrow-right-circle-fill"></i>
                </button>
            </div>
        </div>
    </section><!-- End Hero -->
</x-app-layout>


