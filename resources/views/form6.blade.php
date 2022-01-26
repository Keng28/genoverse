<x-app-layout>



    <script>
    $(document).ready(function() {
        var value = $('input[name=quiz6_1]:checked', '#myForm1').val()
        if (value == "2") {
            $('.dvtext1').show();
        } else {
            $('.dvtext1').hide();
        }

        var value2 = $('input[name=quiz6_2]:checked', '#myForm1').val()
        if (value2 == "2") {
            $('.dvtext2').show();
        } else {
            $('.dvtext2').hide();
        }


        $("input[type=radio][name=quiz6_1]").on("change", function() {
            ($(this).val() == "2") ? $(this).siblings(".dvtext1").show(): $(this).siblings(
                ".dvtext1").hide()
        })
        $("input[type=radio][name=quiz6_2]").on("change", function() {
            ($(this).val() == "2") ? $(this).siblings(".dvtext2").show(): $(this).siblings(
                ".dvtext2").hide()
        })


        $(".ondel").click(function() {
            let value = $(this).attr("value")
            let id = value;
            let CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            Swal.fire({
                title: 'ลบ',
                text: "คุณจะไม่สามารถย้อนกลับได้",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'ปิด',

                confirmButtonText: 'ยืนยัน'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        /* the route pointing to the post function */
                        url: '/formupdate6/del',
                        type: 'POST',
                        /* send the csrf-token and the input to the controller */
                        data: {
                            _token: CSRF_TOKEN,
                            id: id
                        },
                        dataType: 'JSON',
                        /* remind that 'data' is the response of the AjaxController */
                        success: function(data) {
                            $(".writeinfo").append(data.msg);
                            location.reload();
                        }
                    });
                }
            })
        });



    });


    // $("createData").click(function() {
    //     alert('Button clicked.');
    //     let user_id = '2';
    //     let quiz6_1 = document.getElementById('quiz6_1').value;
    //     let quiz6_1_1 = document.getElementByName('quiz6_1_1').value;
    //     let quiz6_2 = document.getElementByName('quiz6_2').value;
    //     let quiz6_2_1 = document.getElementByName('quiz6_2_1').value;
    //     console.log('kkk');

    //     let payload = {
    //         user_id: user_id,
    //         quiz6_1: quiz6_1,
    //         quiz6_1_1: quiz6_1_1,
    //         quiz6_2: quiz6_2,
    //         quiz6_2_1: quiz6_2_1,
    //     }
    //     let CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

    //     $.ajax({
    //         /* the route pointing to the post function */
    //         url: '/form6/add',
    //         type: 'POST',
    //         /* send the csrf-token and the input to the controller */
    //         data: {
    //             _token: CSRF_TOKEN,
    //             ...payload
    //         },
    //         dataType: 'JSON',
    //         /* remind that 'data' is the response of the AjaxController */
    //         success: function(data) {
    //             $(".writeinfo").append(data.msg);
    //             location.reload();
    //         }
    //     });


    // });

    // function createData() {
    //     let quiz6_1 = document.getElementById('quiz6_1').value;
    //     // let quiz6_1_1 = document.getElementByName('quiz6_1_1').value;
    //     // let quiz6_2 = document.getElementByName('quiz6_2').value;
    //     // let quiz6_2_1 = document.getElementByName('quiz6_2_1').value;

    //     let payload = {

    //         quiz6_1: quiz6_1,
    //         // quiz6_1_1: quiz6_1_1,
    //         // quiz6_2: quiz6_2,
    //         // quiz6_2_1: quiz6_2_1,
    //     }
    //     let CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

    //     $.ajax({
    //         /* the route pointing to the post function */
    //         url: '/form6/add',
    //         type: 'POST',
    //         /* send the csrf-token and the input to the controller */
    //         data: {
    //             _token: CSRF_TOKEN,
    //             ...payload
    //         },
    //         dataType: 'JSON',
    //         /* remind that 'data' is the response of the AjaxController */
    //         // success: function(data) {
    //         //     $(".writeinfo").append(data.msg);
    //         //     location.reload();
    //         // }
    //     });
    //     console.log('kkk');


    // }
    </script>


    <!-- ======= Hero Section ======= -->
    <section id="userform" class="userform  d-flex align-items-center">
        <div class="container ">
            <header class="section-header d-flex justify-content-between">
                <div>
                    <p>ส่วนที่ 6</p>
                    <div class="section-header-line"></div>
                    <h3>ประวัติการแพ้ อาหาร การแพ้ยา</h3>
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


                        <form id="myForm1" class="row g-3" action="{{url('/formupdate6/'.$getbyid[0]->id)}}"
                        method="post">


                        @csrf
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">6.1 ท่านเคยมีประวัติการแพ้อาหาร</label><br>
                            <!-- <div class="form-check form-check-inline"> -->
                            <input class="form-check-input" type="radio" name="quiz6_1" id="quiz6_1" value="1"
                                {{($forms[0]->quiz6_1 == '1' ?  'checked' : '')}}>
                            <label class="form-check-label" for="inlineRadio1">ไม่เคย</label>
                            <!-- </div> -->
                            <br>
                            <!-- <div class="form-check form-check-inline"> -->
                            <input class="form-check-input" type="radio" name="quiz6_1" id="quiz6_1" value="2"
                                {{($forms[0]->quiz6_1 == '2' ?  'checked' : '')}}>
                            <label class="form-check-label" for="inlineRadio1">เคย </label>
                            <!-- <input type="text" class="form-control" id="inputAddress" placeholder="โปรดระบุ"> -->


                            <div class="dvtext1">
                                <div class="col-lg-11 ">
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
                                                            เพิ่มอาหารที่ท่านแพ้
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
                                                                    อาหารที่ท่านแพ้</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body col-lg-12">
                                                                <div class="mb-3">
                                                                    <label for="recipient-name"
                                                                        class="col-form-label">ใส่อาหารที่ท่านแพ้:</label>
                                                                    <input type="text" class="form-control"
                                                                        id="recipient-name" name="quiz6_1_1">
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


                                                <div class="table" style="overflow-x:auto;">
                                                    <table class="table align-items-center table-flush">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th scope="col">ลำดับที่</th>
                                                                <th>อาหารที่แพ้</th>
                                                                <th>ลบ</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @php($i=1)
                                                            <!-- {{$calendar ?? ''}} -->
                                                            @foreach($history_allergies as $row)
                                                            <tr>
                                                                <th>{{$i++}}</th>
                                                                <td>{{$row->quiz6_1_1}}</td>
                                                                <!-- <td>{{$row->id}}</td> -->

                                                                <td>

                                                                    <a href="{{url('/formupdate6/del/'.$row->id)}}" class="btn btn-danger"
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
                            <!-- </div> -->
                        </div>


                        <div class="col-12">
                            <label for="inputAddress" class="form-label">6.2 ท่านเคยมีประวัติการแพ้ยา</label><br>
                            <!-- <div class="form-check form-check-inline"> -->
                            <input class="form-check-input" type="radio" name="quiz6_2" id="inlineRadio1" value="1"
                                {{($forms[0]->quiz6_2 == '1' ?  'checked' : '')}}>
                            <label class="form-check-label" for="inlineRadio1">ไม่เคย</label>
                            <!-- </div> -->

                            <br>
                            <!-- <div class="form-check form-check-inline"> -->
                            <input class="form-check-input" type="radio" name="quiz6_2" id="inlineRadio1" value="2"
                                {{($forms[0]->quiz6_2 == '2' ?  'checked' : '')}}>
                            <label class="form-check-label" for="inlineRadio1">เคย </label>

                            <div class="dvtext2">
                                <div class="col-lg-11 ">
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
                                                            เพิ่มยาที่ท่านแพ้
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
                                                                    ยาที่ท่านแพ้</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body col-lg-12">
                                                                <div class="mb-3">
                                                                    <label for="recipient-name"
                                                                        class="col-form-label">ใส่ชื่อยาที่ท่านแพ้:</label>
                                                                    <input type="text" class="form-control"
                                                                        id="recipient-name" name="quiz6_2_1">
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

                                                <div class="table" style="overflow-x:auto;">
                                                    <table class="table align-items-center table-flush">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th scope="col">ลำดับที่</th>
                                                                <th>ยาที่แพ้</th>
                                                                <th>ลบ</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @php($i=1)
                                                            <!-- {{$calendar ?? ''}} -->
                                                            @foreach($history_allergy_drugs as $row)
                                                            <tr>
                                                                <th>{{$i++}}</th>
                                                                <td>{{$row->quiz6_2_1}}</td>
                                                                <!-- <td>{{$row->id}}</td> -->
                                                                 <td>
                                                                    <a href="{{url('/formupdate6/del2/'.$row->id)}}" class="btn btn-danger"
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
                            <!-- <table id="add_table" class="table" data-toggle="table"
                                        data-mobile-responsive="true">
                                        <thead>
                                            <tr>
                                                <th>ยาที่แพ้</th>
                                                <th>
                                                    <button class="btn btn-outline-success" id="add_row"
                                                        name="quiz6_2_1" class="add"> add
                                                    </button>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <input name="quiz6_2_1[]" type="text" class="form-control">
                                                </td>
                                                <td>
                                                    <button class="btn btn-outline-danger delete_row">remove</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table> -->
                        </div>
                        <!-- </div> -->

                    </div>


                    <br>
                    <div class="col-12">
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
                <button type="button" onclick="window.location.href='{{url('/form7/'.$getbyid[0]->id)}}'"
                    class="btn btn-primary">หน้าถัดไป
                    <i class="bi bi-arrow-right-circle-fill"></i>
                </button>
            </div>
        </div>
        </div>



    </section><!-- End Hero -->

</x-app-layout>