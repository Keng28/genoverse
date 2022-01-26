<x-app-layout>

    <script>
    $(document).ready(function() {
        var value = $('input[name=quiz3_1]:checked', '#myForm1').val()
        if (value == "3") {
            $('.dvtext3').show();
        } else {
            $('.dvtext3').hide();
        }

        var value = $('input[name=quiz3_2]:checked', '#myForm1').val()
        if (value == "2") {
            $('.dvtext1').show();
        } else {
            $('.dvtext1').hide();
        }

        var value = $('input[name=quiz3_2]:checked', '#myForm1').val()
        if (value == "3") {
            $('.dvtext2').show();
        } else {
            $('.dvtext2').hide();
        }






        // function myFunction() {
        //     ($(this).val() == "1") ? $(this).siblings(".dvtext2").show(): $(this).siblings(
        //         ".dvtext2").hide()
        // }

        $("input[name=quiz3_1]").on("change", function() {
            ($(this).val() == "3") ? $(this).siblings(".dvtext3").show(): $(this).siblings(
                ".dvtext3").hide()
        })

        $("input[name=quiz3_2]").on("change", function() {
            ($(this).val() == "2") ? $(this).siblings(".dvtext1").show(): $(this).siblings(
                ".dvtext1").hide()
        })
        $("input[name=quiz3_2]").on("change", function() {
            ($(this).val() == "3") ? $(this).siblings(".dvtext2").show(): $(this).siblings(
                ".dvtext2").hide()
        })





    });
    </script>


    <!-- ======= Hero Section ======= -->
    <section id="userform" class="userform  d-flex align-items-center">
        <div class="container ">
            <header class="section-header d-flex justify-content-between">
                <div>
                    <p>ส่วนที่ 3</p>
                    <div class="section-header-line"></div>
                    <h3>ประวัติการเจ็บป่วยโรคมะเร็ง</h3>
                </div>
                <div>
                    <a>ผู้รับบริการ: {{$getbyid[0]->name}}</a>
                </div>
            </header>

            <div class="row d-flex justify-content-center ">
                @if(session("success"))
                <div class="alert alert-success">{{session('success')}}</div>
                @endif
                <div class="col-md-8 ">
                    <div class="row gy-4 ">
                        <form id="myForm1" class="row g-3" action="{{url('/formupdate3/'.$getbyid[0]->id)}}"
                            method="post">
                            @csrf
                            <div class="col-12">
                                <label for="inputAddress" class="form-label">3.1
                                    ท่านมีญาติสายเลือดเดียวกันกับท่านเป็นโรคมะเร็ง (ชนิดใดก็ได้) บ้างหรือไม่</label><br>


                                <input class="form-check-input" type="radio" name="quiz3_1" value="1"
                                    {{($forms[0]->quiz3_1 == '1' ?  'checked' : '')}}>
                                <label class="form-check-label" for="inlineRadio1">ไม่มี</label>
                                <br>
                                <input class="form-check-input" type="radio" name="quiz3_1" value="2"
                                    {{($forms[0]->quiz3_1 == '2' ?  'checked' : '')}}>
                                <label class="form-check-label" for="inlineRadio1">ไม่แน่ใจ</label>
                                <br>
                                <input class="form-check-input" type="radio" name="quiz3_1" value="3"
                                    {{($forms[0]->quiz3_1 == '3' ?  'checked' : '')}}>
                                <label class="form-check-label" for="inlineRadio1">มี (โปรดระบุรายละเอียด)
                                </label>
                                <div class="dvtext3">

                                    <div class="col-lg-12 ">
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
                                                                เพิ่มข้อมูลญาติ
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
                                                                        เพิ่มญาติที่ป่วยเป็นโรคมะเร็ง</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>

                                                                <div class="modal-body col-lg-12">
                                                                    <div class="input-group mb-3">
                                                                        <span class="input-group-text"
                                                                            id="basic-addon1">ลำดับญาติที่เป็น</span>
                                                                        <input type="text" class="form-control"
                                                                            placeholder="โปรดระบุลำดับญาติ (เช่น ปู่/ย่า)" aria-label="โปรดระบุลำดับญาติ (เช่น ปู่/ย่า)"
                                                                            aria-describedby="basic-addon1" name="cancer3_1" >
                                                                    </div>
                                                                    <div class="input-group mb-3">
                                                                        <span class="input-group-text"
                                                                            id="basic-addon1">ชนิดของมะเร็งที่เป็น</span>
                                                                        <input type="text" class="form-control"
                                                                            placeholder="โปรดระบุชนิดมะเร็ง (เช่น มะเร็งปอด)" aria-label="โปรดระบุชนิดมะเร็ง (เช่น มะเร็งปอด)"
                                                                            aria-describedby="basic-addon1" name="cancer3_2" >
                                                                    </div>

                                                                    <div class="input-group mb-3">
                                                                        <span class="input-group-text"
                                                                            id="basic-addon1">เป็นเมื่ออายุ</span>
                                                                        <input type="number" class="form-control"
                                                                            placeholder="โปรดระบุอายุ (เช่น 58)" aria-label="โปรดระบุอายุ (เช่น 58)"
                                                                            aria-describedby="basic-addon1" name="cancer3_3" >
                                                                        <span class="input-group-text">ปี</span>
                                                                    </div>

                                                                    <div class="input-group mb-3">
                                                                        <span class="input-group-text"
                                                                            id="basic-addon1">ปัจจุบันอายุ</span>
                                                                        <input type="number" class="form-control"
                                                                            placeholder="โปรดระบุอายุ (เช่น 58)" aria-label="โปรดระบุอายุ (เช่น 58)"
                                                                            aria-describedby="basic-addon1" name="cancer3_4">
                                                                        <span class="input-group-text">ปี</span>
                                                                    </div>

                                                                    <select class="form-select"
                                                                        aria-label="Default select example"  name="cancer3_5">
                                                                        <option selected>สถานะการมีชีวิตอยู่</option>
                                                                        <option value="มีชีวิตอยู่">มีชีวิตอยู่</option>
                                                                        <option value="ถึงแก่กรรม">ถึงแก่กรรม</option>
                                                                    </select>










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
                                                                    <th>ลำดับญาติที่เป็น</th>
                                                                    <th>ชนิดของมะเร็ง</th>
                                                                    <th>เป็นเมื่ออายุ</th>
                                                                    <th>ปัจจุบันอายุ</th>
                                                                    <th>สถานะการมีชีวิต</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @php($i=1)
                                                                @foreach($cancers as $row)
                                                                <tr>
                                                                    <th>{{$i++}}</th>
                                                                    <td>{{$row->cancer3_1}}</td>
                                                                    <td>{{$row->cancer3_2}}</td>
                                                                    <td>{{$row->cancer3_3}}</td>
                                                                    <td>{{$row->cancer3_4}}</td>
                                                                    <td>{{$row->cancer3_5}}</td>
                                                                    <td>
                                                                        <a href="{{url('/formupdate3/del2/'.$row->id)}}" class="btn btn-danger"
                                                                        role="button"><i
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
                                    </div>
                                </div>
                            </div>


                            <div class="col-12 ">
                                <label for="inputAddress" class="form-label">3.2 ท่านเคยป่วยด้วยโรคมะเร็ง
                                    หรือไม่</label><br>


                                <input class="form-check-input" type="radio" name="quiz3_2" value="1"
                                    {{($forms[0]->quiz3_2 == '1' ?  'checked' : '')}}>
                                <label class="form-check-label" for="inlineRadio1">ไม่เคย</label>
                                <br>


                                <!-- <div class="form-check form-check-inline"> -->
                                <input class="form-check-input" type="radio" name="quiz3_2" value="2"
                                    {{($forms[0]->quiz3_2 == '2' ?  'checked' : '')}}>
                                <label class="form-check-label" for="inlineRadio1">เคย (โปรดระบุรายละเอียด)
                                </label>
                                <!-- </div> -->
                                <br>
                                <div class="dvtext1">
                                    <br>
                                    <input type="text" class="form-control" placeholder="ชนิดของมะเร็งที่เป็น"
                                        name="quiz3_2_1" value="{{($forms[0]->quiz3_2_1)}}">



                                    <div class="col-12">
                                        <label for="inputAddress" class="form-label">ระยะโรค</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz3_2_2"
                                                id="inlineRadio1" value="1"
                                                {{($forms[0]->quiz3_2_2 == '1' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio1">ระยะ 1</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz3_2_2"
                                                id="inlineRadio1" value="2"
                                                {{($forms[0]->quiz3_2_2 == '2' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio1">ระยะ 2</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz3_2_2"
                                                id="inlineRadio1" value="3"
                                                {{($forms[0]->quiz3_2_2 == '3' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio1">ระยะ 3</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz3_2_2"
                                                id="inlineRadio1" value="4"
                                                {{($forms[0]->quiz3_2_2 == '4' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio1">ระยะ 4</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz3_2_2"
                                                id="inlineRadio1" value="0"
                                                {{($forms[0]->quiz3_2_2 == '0' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio1">ไม่ทราบ</label>
                                        </div>
                                    </div>


                                    <br>
                                    <div class="col-12">
                                        <label for="inputAddress" class="form-label">การรักษาที่ได้รับ (ตอบได้มากกว่า 1
                                            อย่าง)</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="1"
                                                id="flexCheckDefault" name="quiz3_2_3[]"
                                                {{in_array('"1"',explode(",",substr($forms[0]->quiz3_2_3,1,strlen($forms[0]->quiz3_2_3)-2))) == true ? "checked" : ""}}>
                                            <label class="form-check-label" for="flexCheckDefault">
                                                ผ่าตัด
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="2"
                                                id="flexCheckDefault" name="quiz3_2_3[]"
                                                {{in_array('"2"',explode(",",substr($forms[0]->quiz3_2_3,1,strlen($forms[0]->quiz3_2_3)-2))) == true ? "checked" : ""}}>
                                            <label class="form-check-label" for="flexCheckDefault">
                                                รังสีรักษา
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="3"
                                                id="flexCheckDefault" name="quiz3_2_3[]"
                                                {{in_array('"3"',explode(",",substr($forms[0]->quiz3_2_3,1,strlen($forms[0]->quiz3_2_3)-2))) == true ? "checked" : ""}}>
                                            <label class="form-check-label" for="flexCheckDefault">
                                                เคมีบำบัด
                                            </label>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="col-12">
                                        <label for="inputAddress" class="form-label">ผลของการรักษา</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz3_2_4"
                                                id="inlineRadio1" value="0"
                                                {{($forms[0]->quiz3_2_4 == '0' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio1">หายแล้ว ปี พ.ศ.
                                                ที่รักษาหาย
                                            </label>
                                            <input type="text" class="form-control" name="quiz3_2_5"
                                                placeholder="โปรดระบุ ปี พ.ศ. (เช่น 2565)"
                                                value="{{($forms[0]->quiz3_2_5)}}">

                                        </div>

                                        <br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz3_2_4"
                                                id="inlineRadio1" value="1"
                                                {{($forms[0]->quiz3_2_4 == '1' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio1">ยังเป็นอยู่</label>
                                        </div>
                                        <br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz3_2_4"
                                                id="inlineRadio1" value="2"
                                                {{($forms[0]->quiz3_2_4 == '2' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio1">ขาดการติดตามรักษา</label>
                                        </div>
                                    </div>
                                    <hr>

                                    <br>
                                </div>

                                <!-- <div class="col-12"> -->
                                <!-- <div class="form-check form-check-inline"> -->
                                <input class="form-check-input" type="radio" name="quiz3_2" value="3"
                                    {{($forms[0]->quiz3_2 == '3' ?  'checked' : '')}}>
                                <label class="form-check-label" for="inlineRadio1">ไม่แน่ใจ</label>
                                <!-- </div> -->
                                <!-- </div>  -->
                                <div class="dvtext2">
                                    <!--3.ไม่แน่ใจ กรุณาตอบข้อ 3.1-3.4-->
                                    <div class="col-12">
                                        <label for="inputAddress" class="form-label">หากไม่แน่ใจ
                                            ว่าท่านเป็นเนื้องอกหรือมะเร็ง
                                        </label>
                                        <input type="text" class="form-control" name="quiz3_3_1"
                                            placeholder="โปรดระบุอวัยวะที่เป็น" value="{{($forms[0]->quiz3_3_1)}}">
                                    </div>


                                    <br>

                                    <div class="col-12">
                                        <label class="form-check-label"
                                            for="inlineRadio1">ได้รับการวินิจฉัยครั้งแรกเมื่อ
                                            พ.ศ.
                                        </label><br>
                                        <input type="text" class="form-control" name="quiz3_3_2"
                                            placeholder="โปรดระบุ ปี พ.ศ. (เช่น 2565)"
                                            value="{{($forms[0]->quiz3_3_2)}}">
                                    </div>
                                    <br>
                                    <div class="col-12">
                                        <label class="form-check-label" for="inlineRadio1">ที่โรงพยาบาล</label><br>
                                        <input type="text" class="form-control" name="quiz3_3_3"
                                            placeholder="โปรดระบุชื่อโรงพยาบาล" value="{{($forms[0]->quiz3_3_3)}}">
                                    </div>
                                    <br>
                                    <div class="col-12">
                                        <label class="form-check-label" for="inlineRadio1">จังหวัด</label><br>
                                        <input type="text" class="form-control" name="quiz3_3_4"
                                            placeholder="โปรดระบุชื่อจังหวัดที่ตั้งของโรงพยาบาล"
                                            value="{{($forms[0]->quiz3_3_4)}}">
                                    </div>

                                    <br>



                                    <div class="col-12">
                                        <label for="inputAddress" class="form-label">การรักษาที่ได้รับ (ตอบได้มากกว่า 1
                                            อย่าง)</label>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="0"
                                                id="flexCheckDefault" name="quiz3_3_5[]"
                                                {{in_array('"0"',explode(",",substr($forms[0]->quiz3_3_5,1,strlen($forms[0]->quiz3_3_5)-2))) == true ? "checked" : ""}}>

                                            <label class="form-check-label" for="flexCheckDefault">
                                                ผ่าตัด
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="1"
                                                id="flexCheckDefault" name="quiz3_3_5[]"
                                                {{in_array('"1"',explode(",",substr($forms[0]->quiz3_3_5,1,strlen($forms[0]->quiz3_3_5)-2))) == true ? "checked" : ""}}>
                                            <label class="form-check-label" for="flexCheckDefault">
                                                รังสีรักษา
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="2"
                                                id="flexCheckDefault" name="quiz3_3_5[]"
                                                {{in_array('"2"',explode(",",substr($forms[0]->quiz3_3_5,1,strlen($forms[0]->quiz3_3_5)-2))) == true ? "checked" : ""}}>
                                            <label class="form-check-label" for="flexCheckDefault">
                                                เคมีบำบัด
                                            </label>
                                        </div>
                                    </div>


                                    <div class="col-12">
                                        <label for="inputAddress" class="form-label">ผลของการรักษา</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz3_3_6"
                                                id="inlineRadio1" value="0"
                                                {{($forms[0]->quiz3_3_6 == '0' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio1">หายแล้ว ปี พ.ศ.
                                                ที่รักษาหาย</label>
                                            <input type="text" class="form-control" name="quiz3_3_7"
                                                placeholder="โปรดระบุ ปี พ.ศ. (เช่น 2565)"
                                                value="{{($forms[0]->quiz3_3_7)}}">
                                        </div>
                                        <br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz3_3_6"
                                                id="inlineRadio1" value="1"
                                                {{($forms[0]->quiz3_3_6 == '1' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio1">ยังเป็นอยู่</label>
                                        </div>
                                        <br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="quiz3_3_6"
                                                id="inlineRadio1" value="2"
                                                {{($forms[0]->quiz3_3_6 == '2' ?  'checked' : '')}}>
                                            <label class="form-check-label" for="inlineRadio1">ขาดการติดตามรักษา</label>
                                        </div>
                                    </div>



                                </div>





                            </div>




                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">บันทึก</button>
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
                    <button type="button" onclick="window.location.href='{{url('/form4/'.$getbyid[0]->id)}}'"
                        class="btn btn-primary">หน้าถัดไป
                        <i class="bi bi-arrow-right-circle-fill"></i>
                    </button>

                </div>
            </div>
        </div>
    </section><!-- End Hero -->
</x-app-layout>