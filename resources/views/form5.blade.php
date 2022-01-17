<x-app-layout>

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
                    <a>User_ID: ....</a>
                </div>
            </header>


            <div class="row d-flex justify-content-center ">
                <div class="col-md-7 ">
                    <div class="row gy-4 ">
                        <form class="row g-3">
                            <label for="inputAddress" class="form-label">5.1 ยาที่ท่านใช้อยู่ในปัจจุบัน</label><br>

                            <div class="row justify-content-md-center">
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
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body col-lg-12">
                                                                <div class="input-group mb-12 ">
                                                                    <div class="input-group-prepend">
                                                                        <label class="input-group-text"
                                                                            for="inputGroupSelect01">ชื่อยา</label>
                                                                    </div>
                                                                    <input type="text" id="" name="">
                                                                </div>
                                                                <br>


                                                                <div class="input-group mb-3">
                                                                    <label class="input-group-text"
                                                                        for="inputGroupSelect01">ยาชนิดนี้ใช้มานานเท่าใด</label>
                                                                    <input type="text" class="form-control"
                                                                        aria-label="Text input with dropdown button">
                                                                    <button
                                                                        class="btn btn-outline-secondary dropdown-toggle"
                                                                        type="button" data-bs-toggle="dropdown"
                                                                        aria-expanded="false">Dropdown</button>
                                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                                        <li><a class="dropdown-item" href="#">Action</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item" href="#">Another
                                                                                action</a></li>
                                                                        <li><a class="dropdown-item" href="#">Something
                                                                                else here</a></li>
                                                                        <li>
                                                                            <hr class="dropdown-divider">
                                                                        </li>
                                                                        <li><a class="dropdown-item" href="#">Separated
                                                                                link</a></li>
                                                                    </ul>
                                                                </div>

                                                                <div class="input-group mb-3">
                                                                    <label class="input-group-text"
                                                                        for="inputGroupSelect01">ขนาดยาที่ใช้</label>
                                                                    <input type="text" class="form-control"
                                                                        aria-label="Text input with dropdown button">
                                                                    <button
                                                                        class="btn btn-outline-secondary dropdown-toggle"
                                                                        type="button" data-bs-toggle="dropdown"
                                                                        aria-expanded="false">Dropdown</button>
                                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                                        <li><a class="dropdown-item" href="#">Action</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item" href="#">Another
                                                                                action</a></li>
                                                                        <li><a class="dropdown-item" href="#">Something
                                                                                else here</a></li>
                                                                        <li>
                                                                            <hr class="dropdown-divider">
                                                                        </li>
                                                                        <li><a class="dropdown-item" href="#">Separated
                                                                                link</a></li>
                                                                    </ul>
                                                                </div>

                                                                <div class="input-group mb-3">
                                                                    <label class="input-group-text"
                                                                        for="inputGroupSelect01">จำนวนครั้งที่ใช้ยา</label>
                                                                    <input type="text" class="form-control"
                                                                        aria-label="Text input with dropdown button">
                                                                    <button
                                                                        class="btn btn-outline-secondary dropdown-toggle"
                                                                        type="button" data-bs-toggle="dropdown"
                                                                        aria-expanded="false">Dropdown</button>
                                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                                        <li><a class="dropdown-item" href="#">Action</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item" href="#">Another
                                                                                action</a></li>
                                                                        <li><a class="dropdown-item" href="#">Something
                                                                                else here</a></li>
                                                                        <li>
                                                                            <hr class="dropdown-divider">
                                                                        </li>
                                                                        <li><a class="dropdown-item" href="#">Separated
                                                                                link</a></li>
                                                                    </ul>
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

                                                <div class="table" style="overflow-x:auto;" data-aos="fade-up">
                                                    <table class="table align-items-center table-flush">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th scope="col">No</th>
                                                                <th>ยาที่ท่านใช้</th>
                                                                <th>ยาชนิดนี้ใช้มานานเท่าใด</th>
                                                                <th>ขนาดยาที่ใช้</th>
                                                                <th>จำนวนครั้งที่ใช้ยา</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @php($i=1)
                                                            <!-- {{$calendar ?? ''}} -->
                                                            <tr>
                                                                <th>{{$i++}}</th>
                                                                <td>aaaaaa</td>
                                                                <td>1 ปี</td>
                                                                <td>10 มิลลิกรัม</td>
                                                                <td>2 วัน</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Row-->
                                </div>



                                <label for="inputAddress" class="form-label">5.2
                                    ประวัติการใช้ผลิตภัณฑ์อาหารเสริม</label><br>


                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">5.2.1
                                        ท่านเคยใช้ผลิตภัณฑ์อาหารเสริมที่ไม่ใช่สมุนไพร บ้างหรือไม่</label>

                                    <br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">ไม่เคย</label>
                                    </div>
                                    <br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">เคย</label>
                                    </div>

                                </div>
                                <div class="col-lg-11 ">
                                    <label for="inputAddress" class="form-label">5.2.1.1
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
                                                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                            <i class="bi bi-plus-lg"></i>
                                                            เพิ่มอาหารเสริมที่ท่านใช้อยู่ในปัจจุบัน
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
                                                                    อาหารเสริมที่ท่านใช้</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body col-lg-12">
                                                                <div class="input-group mb-12 ">
                                                                    <div class="input-group-prepend">
                                                                        <label class="input-group-text"
                                                                            for="inputGroupSelect01">ชื่อยา</label>
                                                                    </div>
                                                                    <input type="text" id="" name="">
                                                                </div>
                                                                <br>


                                                                <div class="input-group mb-3">
                                                                    <label class="input-group-text"
                                                                        for="inputGroupSelect01">ยาชนิดนี้ใช้มานานเท่าใด</label>
                                                                    <input type="text" class="form-control"
                                                                        aria-label="Text input with dropdown button">
                                                                    <button
                                                                        class="btn btn-outline-secondary dropdown-toggle"
                                                                        type="button" data-bs-toggle="dropdown"
                                                                        aria-expanded="false">Dropdown</button>
                                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                                        <li><a class="dropdown-item" href="#">Action</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item" href="#">Another
                                                                                action</a></li>
                                                                        <li><a class="dropdown-item" href="#">Something
                                                                                else here</a></li>
                                                                        <li>
                                                                            <hr class="dropdown-divider">
                                                                        </li>
                                                                        <li><a class="dropdown-item" href="#">Separated
                                                                                link</a></li>
                                                                    </ul>
                                                                </div>

                                                                <div class="input-group mb-3">
                                                                    <label class="input-group-text"
                                                                        for="inputGroupSelect01">ขนาดยาที่ใช้</label>
                                                                    <input type="text" class="form-control"
                                                                        aria-label="Text input with dropdown button">
                                                                    <button
                                                                        class="btn btn-outline-secondary dropdown-toggle"
                                                                        type="button" data-bs-toggle="dropdown"
                                                                        aria-expanded="false">Dropdown</button>
                                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                                        <li><a class="dropdown-item" href="#">Action</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item" href="#">Another
                                                                                action</a></li>
                                                                        <li><a class="dropdown-item" href="#">Something
                                                                                else here</a></li>
                                                                        <li>
                                                                            <hr class="dropdown-divider">
                                                                        </li>
                                                                        <li><a class="dropdown-item" href="#">Separated
                                                                                link</a></li>
                                                                    </ul>
                                                                </div>

                                                                <div class="input-group mb-3">
                                                                    <label class="input-group-text"
                                                                        for="inputGroupSelect01">จำนวนครั้งที่ใช้ยา</label>
                                                                    <input type="text" class="form-control"
                                                                        aria-label="Text input with dropdown button">
                                                                    <button
                                                                        class="btn btn-outline-secondary dropdown-toggle"
                                                                        type="button" data-bs-toggle="dropdown"
                                                                        aria-expanded="false">Dropdown</button>
                                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                                        <li><a class="dropdown-item" href="#">Action</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item" href="#">Another
                                                                                action</a></li>
                                                                        <li><a class="dropdown-item" href="#">Something
                                                                                else here</a></li>
                                                                        <li>
                                                                            <hr class="dropdown-divider">
                                                                        </li>
                                                                        <li><a class="dropdown-item" href="#">Separated
                                                                                link</a></li>
                                                                    </ul>
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

                                                <div class="table" style="overflow-x:auto;" data-aos="fade-up">
                                                    <table class="table align-items-center table-flush">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th scope="col">No</th>
                                                                <th>อาหารเสริมที่ท่านใช้</th>
                                                                <th>ปริมาณที่ใช้ต่ออวัน</th>
                                                                <th>เป็นเวลากี่วันต่อสัปดาห์</th>
                                                                <th>ระยะเวลาที่ใช้ต่อเนื่อง</th>
                                                                <th>ครั้งสุดท้ายที่ใช้</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @php($i=1)
                                                            <!-- {{$calendar ?? ''}} -->
                                                            <tr>
                                                                <th>{{$i++}}</th>
                                                                <td>aaaaaa</td>
                                                                <td>1 ปี</td>
                                                                <td>10 มิลลิกรัม</td>
                                                                <td>2 วัน</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Row-->
                                    <div class="col-12">
                                        <label for="inputAddress" class="form-label">5.2.1.2
                                            ท่านใช้ผลิตภัณฑ์อาหารเสริม สำหรับรักษาโรค/บรรเทาอาการอะไร</label>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                1. ปวดข้อ ปวดเมื่อย
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                2. หอบหืด/ภูมิแพ้
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                3. บํารุงร่างกาย/บำรุงโลหิต
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                4. เพื่อskin/ความงาม
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                5. ติดเช้ือ
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                6. ท้องอืด ท้องเฟ้อ ท้องผูก
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                7. อาการหวัด
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                8. อาการไอ
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                9. เบาหวาน
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                10. ความดันโลหิตสูง
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                11. บำรุงไต/ ขับปัสสาวะ
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                12. บำรุงตับ
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                13. เพิ่มภูมิคุ้มกัน
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                14. บำรุงความจำ
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                15. อาการทางประจำเดือน
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                16. อาการทางระบบประสาท เช่น นอนไม่หลับ ชา
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                17.ลด/ควบคุมน้ำหนัก
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <input type="text" class="form-control" placeholder="อื่นๆ โปรดระบุ"
                                                aria-label="โปรดระบุ">
                                        </div>
                                    </div>



                                    <div class="col-12">
                                        <label for="inputAddress" class="form-label">5.2.1.3
                                            ท่านซื้อหรือได้รับผลิตภัณฑ์อาหารเสริม มาจากที่ใด</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                1.โรงพยาบาล/คลินิค
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                2.สถานีอนามัย/ศูนย์บริการสาธารณสุขในชุมชน
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                3.ร้านยา
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                4.ร้านค้า
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                5. เพื่อน ญาติ คนรู้จัก
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                6.วัด
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                7.การขายตรง
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                8. ซื้อจากงานแสดงสินค้าโอทอป
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <input type="text" class="form-control" placeholder="อื่นๆ โปรดระบุ"
                                                aria-label="โปรดระบุ">
                                        </div>
                                    </div>
                                </div>



                        </form>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">บันทึก</button>
                    </div>
                </div>
            </div>
            <br>
            <div class="d-flex justify-content-between g-3">
                <button type="button" onclick="window.location.href='{{url('/index')}}'" class="btn btn-primary">
                    <i class="bi bi-arrow-left-circle-fill"></i>
                    กลับหน้าหลักของแบบประเมิน
                </button>
                <button type="button" onclick="window.location.href='{{url('form6')}}'"
                    class="btn btn-primary">หน้าถัดไป
                    <i class="bi bi-arrow-right-circle-fill"></i>
                </button>
            </div>
        </div>


        </div>
    </section><!-- End Hero -->
</x-app-layout>