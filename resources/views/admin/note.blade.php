<x-app-layout>
    <main id="main">
        <section id="userprocess" class="userprocess d-flex align-items-center">

            <div class="container" style="height: 100vh">

                <header class="section-header" data-aos="fade-up">
                    <p>ประวัติการนัดหมาย</p>
                    <div class="section-header-line"></div>
                    <div class="d-flex justify-content-end">
                        <a>User_ID: {{$getbyid[0]->name}}</a>
                    </div>

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
                                                    <th>ครั้งที่</th>
                                                    <th>ประเภท</th>
                                                    <th>วันที่</th>
                                                    <th>รายละเอียด</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php($i=1)
                                                @foreach($calendar as $row)
                                                <tr>
                                                    <th>{{$i++}}</th>
                                                    <td>{{$row->category}}</td>
                                                    <td>{{\Carbon\Carbon::parse($row->date)->format('d  M  Y')}}</td>
                                                    <td>
                                                        <a class="btn btn-secondary" href="{{url('/noteDetail/'.$row->id)}}"
                                                            role="button"><i class="bi bi-clock-history"></i></a>
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


                        {{$calendar}}
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-app-layout>