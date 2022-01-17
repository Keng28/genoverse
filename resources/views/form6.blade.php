<x-app-layout>

    <script>
    $(document).ready(function() {

        $('#add_row').click(function() {
            //Add row
            row = '';
            row += '<tr><td><input type="text" class="form-control"></td>';
            row += '<td><button class="btn btn-outline-danger delete_row">remove</button></td></tr>';
            $("tbody").append(row);
        })

        $("#add_table").on('click', '.delete_row', function() {
            $(this).closest('tr').remove();
        });

    });
    </script>


    <!-- ======= Hero Section ======= -->
    <section id="userform" class="userform  d-flex align-items-center">
        <div class="container " data-aos="fade-up">
            <header class="section-header d-flex justify-content-between">
                <div>
                    <p>ส่วนที่ 6</p>
                    <div class="section-header-line"></div>
                    <h3>ประวัติการแพ้ อาหาร การแพ้ยา</h3>
                </div>
                <div>
                    <a>User_ID: ....</a>
                </div>
            </header>



            <div class="row d-flex justify-content-center ">

                <div class="col-md-7 ">


                    <div class="row gy-4 ">

                        <form class="row g-3">

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">6.1 ท่านเคยมีประวัติการแพ้อาหาร</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">ไม่เคย</label>
                                </div>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">เคย </label>
                                    <!-- <input type="text" class="form-control" id="inputAddress" placeholder="โปรดระบุ"> -->


                                    <div class="m-3">
                                        <table id="add_table" class="table" data-toggle="table"
                                            data-mobile-responsive="true">
                                            <thead>
                                                <tr>
                                                    <th>อาหารที่แพ้</th>
                                                    <th>
                                                        <button class="btn btn-outline-success" id="add_row"
                                                            class="add"> add
                                                        </button>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <input type="text" class="form-control">
                                                    </td>
                                                    <td>
                                                        <button
                                                            class="btn btn-outline-danger delete_row">remove</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="inputAddress" class="form-label">6.2 ท่านเคยมีประวัติการแพ้ยา</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">ไม่เคย</label>
                                </div>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">เคย </label>
                                    <div class="m-3">
                                        <table id="add_table" class="table" data-toggle="table"
                                            data-mobile-responsive="true">
                                            <thead>
                                                <tr>
                                                    <th>ยาที่แพ้</th>
                                                    <th>
                                                        <button class="btn btn-outline-success" id="add_row"
                                                            class="add"> add
                                                        </button>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <input type="text" class="form-control">
                                                    </td>
                                                    <td>
                                                        <button
                                                            class="btn btn-outline-danger delete_row">remove</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
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
                    <button type="button" onclick="window.location.href='{{url('/index')}}'"
                        class="btn btn-primary">
                        <i class="bi bi-arrow-left-circle-fill"></i>
                        กลับหน้าหลักของแบบประเมิน
                    </button>
                    <button type="button" onclick="window.location.href='{{url('form7')}}'"
                        class="btn btn-primary">หน้าถัดไป
                        <i class="bi bi-arrow-right-circle-fill"></i>
                    </button>
                </div>
            </div>
        </div>



    </section><!-- End Hero -->

</x-app-layout>