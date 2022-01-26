<x-app-layout>
    <script>
    $(document).ready(function() {
        $("#b1").click(function() {
            alert("Value: " + $("#test").val());
        });

        $("#b2").click(function() {
            alert("Value: " + $("#test2").val());
        });


        $(".ondel").click(function() {
            let value = $(this).attr("value")
            let id = value;
            let CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            Swal.fire({
                title: 'Delete',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        /* the route pointing to the post function */
                        url: '/addCalender/del',
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

        $(".createData").click(function() {

            let category = document.getElementById('category').value;
            let date = document.getElementById('date').value;
            let time = document.getElementById('time').value;
            let time2 = document.getElementById('time2').value;
            let link = document.getElementById('link').value;
            let walkin = $('input[name=walkin]:checked', '#myRadioGroup').val();

            let payload = {
                category: category,
                date: date,
                time: time,
                time2: time2,
                link: link,
                walkin: category == "Post-test Counseling" ? walkin : null,
            }
            let CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                /* the route pointing to the post function */
                url: '/addCalender/add',
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

        $('#category').change(function() {
            let v = $(this).val()
            console.log(v);
            if (v == "Post-test Counseling") {
                document.getElementById("myRadioGroup").style.display = "block";
                document.getElementById("zoom1").style.display = "none";
            } else {
                document.getElementById("myRadioGroup").style.display = "none";
                document.getElementById("zoom1").style.display = "flex";
            }
            //console.log('is_posttest ::', is_posttest);
        });

        $('#myRadioGroup input').on('change', function() {
            let v = $('input[name=walkin]:checked', '#myRadioGroup').val();

            if (v == 3) {
                document.getElementById("show3").style.display = "block";
            } else {
                document.getElementById("show3").style.display = "none";
            }
        });





    });
    </script>

    <main id="main">
        <section id="userprocess" class="userprocess d-flex align-items-center">
            <div class="container">

                <header class="section-header" data-aos="fade-up">
                    <p>นัดหมาย</p>
                    <div class="section-header-line"></div>
                </header>

                <div class="row justify-content-md-center">
                    <div class="col-lg-10 ">
                        <div class="row justify-content-md-center">
                            <div class="col-lg-12 mb-4">
                                <!-- Tables -->
                                <div class="card">
                                    <div class="card-header d-flex bd-highlight mb-3">
                                        <div class="me-auto p-2 bd-highlight">
                                            <!-- Button trigger modal -->

                                        </div>
                                        <div class="p-2 bd-highlight">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                <i class="bi bi-plus-lg"></i> Add Appointment
                                            </button>
                                        </div>
                                    </div>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel" style="color: #000;">
                                                        Add Appointment</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body col-lg-12">

                                                    <div class="col-12">
                                                        <label class="visually-hidden"
                                                            for="inlineFormSelectPref">Preference</label>
                                                        <select class="form-select" id="category" name="category">
                                                            <option selected>select</option>
                                                            <option value="Pre-test Counseling">Pre-test Counseling
                                                            </option>
                                                            <option value="Blood Collection">Blood Collection</option>
                                                            <option value="Post-test Counseling">Post-test Counseling
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <br>
                                                    <div class="col-lg-12">
                                                        <div class="input-group mb-6 ">
                                                            <div class="input-group-prepend">
                                                                <label class="input-group-text"
                                                                    for="inputGroupSelect01">Date</label>
                                                            </div>
                                                            <input type="date" id="date" name="date">
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="input-group mb-12 ">
                                                        <div class="input-group-prepend">
                                                            <label class="input-group-text"
                                                                for="inputGroupSelect01">Start Time</label>
                                                        </div>
                                                        <input type="time" id="time" name="time">
                                                    </div>
                                                    <br>
                                                    <div class="input-group mb-12 ">
                                                        <div class="input-group-prepend">
                                                            <label class="input-group-text" for="inputGroupSelect01">End
                                                                Time</label>
                                                        </div>
                                                        <input type="time" id="time2" name="time2">
                                                    </div>
                                                    <br>

                                                    <div class="input-group mb-12" id="zoom1" style="display:flex;">
                                                        <span class="input-group-text"
                                                            id="basic-addon3">https://zoom.com/users/</span>
                                                        <input name="link" type="text" class="form-control" id="link"
                                                            aria-describedby="basic-addon3">
                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button id="createData"
                                                        class="btn btn-primary createData">Add</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link {{$flag==1?'active':''}}" id="home-tab"
                                                aria-current="page" aria-selected="false"
                                                href="{{ route('addCalenderindex') }}">Pre-test Counseling</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link {{$flag==2?'active':''}}" id="home-tab2"
                                                data-bs-toggle="tab2" aria-current="page" aria-selected=""
                                                href="{{ route('addCalenderindex2') }}">Blood Collection</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link {{$flag==3?'active':''}}" id="home-tab3"
                                                data-bs-toggle="tab3" aria-current="page" aria-selected=""
                                                href="{{ route('addCalenderindex3') }}">Post-test Counseling</a>
                                        </li>
                                    </ul>


                                    <div class="table" style="overflow-x:auto;" data-aos="fade-up">
                                        <table class="table align-items-center table-flush">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th>Date</th>
                                                    <th>Start Time</th>
                                                    <th>End Time</th>
                                                    <th>Status</th>
                                                    <th>User_ID</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php($i=1)
                                                <!-- {{$calendar}} -->

                                                @foreach($calendar as $row)

                                                <tr>
                                                    <th>{{$i++}}</th>
                                                    <td>{{\Carbon\Carbon::parse($row->date)->format('d  M  Y')}}</td>
                                                    <td>{{\Carbon\Carbon::createFromFormat('H:i:s',$row->time)->format('h:i')}}
                                                        น.</td>
                                                    <td>{{\Carbon\Carbon::createFromFormat('H:i:s',$row->time2)->format('h:i')}}
                                                        น.</td>
                                                    @if($row->user_id==null)
                                                    <td><span class="badge bg-success">Available</span></td>
                                                    @else
                                                    <td><span class="badge bg-danger">Booked</span></td>
                                                    @endif

                                                    <td>{{$row->NameUsers}}</td>

                                                    <!-- <td>{{$row->id}}</td> -->
                                                    <div>
                                                        <td>
                                                            @if($row->walkin==2)
                                                            <span class="badge bg-secondary">Walkin</span>
                                                            @else
                                                            <a class="btn btn-primary" href="{{$row->link}}"
                                                                target="_blank"><i class="bi bi-telephone-fill"></i>
                                                            </a>
                                                            @endif
                                                            <a class="btn btn-warning"
                                                                href="{{url('/noteDetail/'.$row->id)}}" target="_blank">
                                                                <i class="bi bi-file-earmark-plus"></i>
                                                            </a>
                                                            <a class="btn btn-danger postbutton1 ondel"
                                                                value="{{$row->id}}" role="button"><i
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

            </div>

        </section><!-- End UserProcess -->
    </main>
</x-app-layout>