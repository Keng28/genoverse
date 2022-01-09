<x-app-layout>

    <main id="main">
        <section id="userprocess" class="userprocess d-flex align-items-center">
            <div class="container">

                <header class="section-header" data-aos="fade-up">
                    <p>ข้อมูลผู้รับบริการ</p>
                    <div class="section-header-line"></div>
                </header>


                <div class="row justify-content-md-center">
                    <div class="col-lg-10 ">
                        <div class="row justify-content-md-center">
                            <div class="col-lg-12 mb-4">
                                <!-- Tables -->
                                <div class="card">

                                    <div class="table" style="overflow-x:auto;" data-aos="fade-up">
                                        <table class="table align-items-center table-flush">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>ลำดับ</th>
                                                    <th>ผู้รับบริการ</th>
                                                    <th>​Email</th>
                                                    <th>ขั้นตอนที่เสร็จสมบูรณ์ล่าสุด</th>
                                                    <th>อัปเดตขั้นตอนที่เสร็จสมบูรณ์</th>
                                                    <th>แบบประเมินประวัติสุขภาพ</th>
                                                    <th>ประวัติการนัดหมาย</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php($i=1)
                                                @foreach($listname as $row)
                                                <tr>
                                                    <th>{{$i++}}</th>
                                                    <td>{{$row->name}}</td>
                                                    <td>{{$row->email}}</td>
                                                    <td>{{$row->statusName}}</td>
                                                    <td>
                                                        <a class="btn btn-success" href="{{url('/status/'.$row->id)}}"
                                                            role="button"><i class="bi bi-ui-checks"></i></a>
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-primary"
                                                            href="{{url('/details/'.$row->id)}}" role="button"><i
                                                                class="bi bi-eye-fill"></i></a>
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-secondary"
                                                            href="{{url('#')}}" role="button"><i
                                                                class="bi bi-clock-history"></i></a>
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


                        <!--{{$listname}}-->
                    </div>
                </div>
            </div>

            </div>

        </section><!-- End UserProcess -->
    </main><!-- End #main -->
</x-app-layout>