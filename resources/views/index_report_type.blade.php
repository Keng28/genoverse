<x-app-layout>
<main id="main">
<section id="userprocess" class="userprocess d-flex align-items-center" >

<div class="container" style="height: 100vh">

<header class="section-header"   data-aos="fade-up">
        <p>เพิ่มประเภทรายงาน</p>
        <div class="section-header-line"></div>
        
      </header>
    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    @if(session("success"))
                        <div class="alert alert-success">{{session('success')}}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">ประเภทรายงาน</div>
                        <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">ลำดับ</th>
                            <th scope="col">ชื่อรายงาน</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($i=1)
                            @foreach($typereport as $row)
                            <tr>
                                <th>{{$i++}}</th>
                                <td>{{$row->name}}</td>
                                <td>
                                    <a href="{{url('/reporttype/delete/'.$row->id)}}" class="btn btn-warning">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                   
                </div>
                <div class="col-md-4">
                    <div class="card">
                    <div class="card-header">เพิ่มประเภทรายงาน</div>
                    <div class="card-body">
                        <form action="{{route('addReportType')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="department_name">กรุณากรอกประเภทรายงาน</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            @error('name')
                            <div class="my-2">
                                <span class="text-danger">{{$message}}</span>
                            </div>
                            @enderror
                            <br>
                            <input type="submit" value="เพิ่ม" class="btn btn-primary">
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
</main>
</x-app-layout>