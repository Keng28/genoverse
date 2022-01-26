<x-app-layout>
    <script>
    $(document).ready(function() {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $(".postbutton1").click(function() {
            console.log('og!');
            var ele = document.getElementsByName('genre');

            for (i = 0; i < ele.length; i++) {
                if (ele[i].checked)
                    document.getElementById("result").innerHTML = "genre: " + ele[i].value;
            }

            console.log('id! =>>', ele[i].value);

        });
        $(".postbutton1").click(function() {})
        //$('#exampleModal2').modal('show');

    });

    $(document).ready(function() {
        $(".ondel").click(function() {
            let value = $(this).attr("value")
            let id = value;
            console.log(id);
            let CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            Swal.fire({
                title: 'ลบการนัดหมาย',
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
                        url: '/addCalenderuser/del',
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

    function displayRadioValue() {
        var ele = document.getElementsByName('genre');
        var select_id = 0;
        for (i = 0; i < ele.length; i++) {
            if (ele[i].checked) {
                console.log('ele[i].value', ele[i].value);
                select_id = ele[i].value;
                document.getElementById("result").innerHTML = "genre: " + ele[i].value;

            }
        }
        console.log('select_id', select_id);
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        var id = select_id;

        Swal.fire({
            title: 'เพิ่มการนัดหมาย',
            // text: "คุณจะไม่สามารถย้อนกลับได้",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',

            cancelButtonText: 'ยกเลิก',
            confirmButtonText: 'เพิ่ม'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    /* the route pointing to the post function */
                    url: '/addCalender/update/' + id,
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
    }



    function selectPopup(flag) {
        console.log('flag', flag);
        if (flag == 1) {
            $('#exampleModal1').modal('show');
        } else if (flag == 2) {
            $('#exampleModal2').modal('show');
        } else if (flag == 3) {
            $('#exampleModal3').modal('show');
        }
    }
    </script>
    <main id="main">
        <!-- ======= UserProcess Section ======= -->
        <section id="userprocess" class="userprocess d-flex align-items-center">
            <div class="container">

                <header class="section-header d-flex justify-content-between" data-aos="fade-up">
                    <div>
                        <p>นัดหมาย</p>
                        <div class="section-header-line"></div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a>ผู้รับบริการ : {{Auth::user()->name}}</a>
                    </div>
                </header>

                <!-- {{$calendar}} -->

                <!-- {{$tmp11}}
----
{{$tmp22}}
---
{{$tmp33}} -->

                <div class="row justify-content-md-center">
                    <div class="col-lg-10 ">
                        <div class="row justify-content-md-center">
                            <div class="col-lg-12 mb-4">
                                <!-- Tables -->
                                <div class="card">

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal1" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Choose Appointment</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body col-lg-12">
                                                    <form action="" method="post">
                                                        @csrf
                                                        <h5 class="modal-title" style="color: #000;">Pre-test Counseling
                                                        </h5>
                                                        <table class="table table-striped table-bordered table-sm ">
                                                            <thead class="thead-light">
                                                                <tr>
                                                                    
                                                                    <th>วันที่</th>
                                                                    <th>เริ่มเวลา</th>
                                                                    <th>สิ้นสุดเวลา</th>
                                                                    <th>เลือกนัด</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @php($i=1)
                                                                @foreach($calendar as $row)
                                                                @if($row->category == 'Pre-test Counseling')

                                                                <tr>
                                                                    
                                                                    <td>{{\Carbon\Carbon::parse($row->date)->format('d  M  Y')}}
                                                                    </td>
                                                                    <td>{{\Carbon\Carbon::createFromFormat('H:i:s',$row->time)->format('h:i')}}
                                                                        น.</td>
                                                                    <td>{{\Carbon\Carbon::createFromFormat('H:i:s',$row->time2)->format('h:i')}}
                                                                        น.</td>
                                                                    <td>
                                                                        <input type="radio" name="genre"
                                                                            value="{{$row->id}}">
                                                                        <!-- ID : {{$row->id}} -->
                                                                    </td>
                                                                </tr>
                                                                @endif
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">ยกเลิก</button>
                                                    <button class="btn btn-primary" type="button"
                                                        onclick="displayRadioValue()">
                                                        เพิ่มนัดหมาย
                                                    </button>
                                                </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal2" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Choose Appointment</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>

                                                <div class="modal-body col-lg-12">

                                                    <form action="" method="post">
                                                        @csrf
                                                        <h5 class="modal-title" style="color: #000;">Blood Collection
                                                        </h5>
                                                        <table class="table table-striped table-bordered table-sm ">
                                                            <thead class="thead-light">
                                                                <tr>
                                                                    
                                                                    <th>วันที่</th>
                                                                    <th>เริ่มเวลา</th>
                                                                    <th>สิ้นสุดเวลา</th>
                                                                    <th>เลือกนัด</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @php($i=1)
                                                                @foreach($calendar as $row)
                                                                @if($row->category == 'Blood Collection')

                                                                <tr>
                                                                    
                                                                    <td>{{\Carbon\Carbon::parse($row->date)->format('d  M  Y')}}
                                                                    </td>
                                                                    <td>{{\Carbon\Carbon::createFromFormat('H:i:s',$row->time)->format('h:i')}}
                                                                        น.</td>
                                                                    <td>{{\Carbon\Carbon::createFromFormat('H:i:s',$row->time2)->format('h:i')}}
                                                                        น.</td>
                                                                    <td>
                                                                        <input type="radio" name="genre"
                                                                            value="{{$row->id}}">
                                                                        <!-- ID : {{$row->id}} -->
                                                                    </td>
                                                                </tr>
                                                                @endif
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">ยกเลิก</button>
                                                    <button class="btn btn-primary" type="button"
                                                        onclick="displayRadioValue()">
                                                        เพิ่มนัดหมาย
                                                    </button>
                                                </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>


                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal3" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Choose Appointment</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body col-lg-12">

                                                    <form action="" method="post">
                                                        @csrf
                                                        <h5 class="modal-title" id="exampleModalLabel"
                                                            style="color: #000;">Post-test Counseling</h5>
                                                        <table class="table table-striped table-bordered table-sm ">
                                                            <thead class="thead-light">
                                                                <tr>
                                                                    
                                                                    <th>วันที่</th>
                                                                    <th>เริ่มเวลา</th>
                                                                    <th>สิ้นสุดเวลา</th>
                                                                    <th>เลือกนัด</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @php($i=1)
                                                                @foreach($calendar as $row)
                                                                @if($row->category == 'Post-test Counseling')

                                                                <tr>
                                                                   
                                                                    <td>{{\Carbon\Carbon::parse($row->date)->format('d  M  Y')}}
                                                                    </td>
                                                                    <td>{{\Carbon\Carbon::createFromFormat('H:i:s',$row->time)->format('h:i')}}
                                                                        น.</td>
                                                                    <td>{{\Carbon\Carbon::createFromFormat('H:i:s',$row->time2)->format('h:i')}}
                                                                        น.</td>
                                                                    <td>
                                                                        <input type="radio" name="genre"
                                                                            value="{{$row->id}}">
                                                                        <!-- ID : {{$row->id}} -->
                                                                    </td>
                                                                </tr>
                                                                @endif
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">ยกเลิก</button>
                                                    <button class="btn btn-primary" type="button"
                                                        onclick="displayRadioValue()">
                                                        เพิ่มนัดหมาย
                                                    </button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="table" style="overflow-x:auto;" data-aos="fade-up">
                                        <table class="table table-striped table-bordered table-sm">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>ลำดับ</th>
                                                    <th>ประเภทนัดหมาย</th>
                                                    <th>วัน</th>
                                                    <th>เริ่มเวลา</th>
                                                    <th>สิ้นสุดเวลา</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Pre-test Counseling</td>
                                                    <td>
                                                        @if($tmp11)
                                                        {{ \Carbon\Carbon::parse($tmp1->date)->format('d  M  Y')}}
                                                        @else
                                                        <button type="button" onclick="selectPopup(1)"
                                                            class="btn btn-primary">
                                                            <i class="bi bi-plus-lg"></i> เพิ่มนัดหมาย
                                                        </button>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if($tmp11)
                                                        {{\Carbon\Carbon::createFromFormat('H:i:s',$tmp1->time)->format('h:i')}}
                                                        น.
                                                        @else
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if($tmp11)
                                                        {{\Carbon\Carbon::createFromFormat('H:i:s',$tmp1->time2)->format('h:i')}}
                                                        น.
                                                        @else
                                                        @endif
                                                    </td>

                                                    <td>
                                                        @if($tmp11)
                                                        <a class="btn btn-primary" href="{{$tmp1->link}}"
                                                            role="button"><i class="bi bi-telephone-fill"></i></a>
                                                        <a class="btn btn-danger  ondel" value="{{$tmp1->id}}"
                                                            role="button"><i class="bi bi-archive-fill"></i>
                                                        </a>
                                                        @endif
                                                    </td>



                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Blood Collection</td>
                                                    <td>
                                                        @if($tmp22)
                                                        {{ \Carbon\Carbon::parse($tmp2->date)->format('d  M  Y')}}
                                                        @else
                                                        <button type="button" onclick="selectPopup(2)"
                                                            class="btn btn-primary">
                                                            <i class="bi bi-plus-lg"></i> เพิ่มนัดหมาย
                                                        </button>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if($tmp22)
                                                        {{\Carbon\Carbon::createFromFormat('H:i:s',$tmp2->time)->format('h:i')}}
                                                        น.
                                                        @else

                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if($tmp22)
                                                        {{\Carbon\Carbon::createFromFormat('H:i:s',$tmp2->time2)->format('h:i')}}
                                                        น.
                                                        @else

                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if($tmp22)

                                                        <a class="btn btn-primary" href="{{$tmp2->link}}"
                                                            role="button"><i class="bi bi-telephone-fill"></i></a>
                                                        <a class="btn btn-danger postbutton3 ondel"
                                                            value="{{$tmp2->id}}" role="button"><i
                                                                class="bi bi-archive-fill"></i>
                                                        </a>
                                                    </td>
                                                    @endif
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Post-test Counseling</td>
                                                    <td>

                                                        @if($tmp33)
                                                        {{ \Carbon\Carbon::parse($tmp3->date)->format('d  M  Y')}}
                                                        @else
                                                        <button type="button" onclick="selectPopup(3)"
                                                            class="btn btn-primary">
                                                            <i class="bi bi-plus-lg"></i> เพิ่มนัดหมาย
                                                        </button>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if($tmp33)
                                                        {{\Carbon\Carbon::createFromFormat('H:i:s',$tmp3->time)->format('h:i')}}
                                                        น.

                                                        @else

                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if($tmp33)
                                                        {{\Carbon\Carbon::createFromFormat('H:i:s',$tmp3->time2)->format('h:i')}}
                                                        น.
                                                        @else

                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if($tmp33)
                                                        <a class="btn btn-primary" href="{{$tmp3->link}}"
                                                            role="button"><i class="bi bi-telephone-fill"></i></a>
                                                        <a class="btn btn-danger postbutton3 ondel"
                                                            value="{{$tmp3->id}}" role="button"><i
                                                                class="bi bi-archive-fill"></i>
                                                        </a>
                                                    </td>
                                                    @endif
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <h2>
                                    หากท่านมีข้อสงสัย กรุณาติดต่อเจ้าหน้าที่ <br>
                                    Email:  genoverse.project@gmail.com <br>
                                    Tel. 095-9955645
                                </h2>
                            </div>
                        </div>
                        <!--Row-->

                        <br>

                        <div id="result" style="visibility: hidden"></div>

                        <script>
                        </script>
                    </div>
                </div>
            </div>

            </div>

        </section><!-- End UserProcess -->
    </main>
</x-app-layout>