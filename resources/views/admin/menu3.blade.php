<x-app-layout>

<main id="main">
<section id="userprocess" class="userprocess d-flex align-items-center" >
    <div class="container" >

      <header class="section-header"  data-aos="fade-up">
        <p>รายงานผล</p>
        <div class="section-header-line"></div>
      </header>

        <div class="row justify-content-md-center" >
          <div class="col-lg-10 ">
            <div class="row justify-content-md-center">
              <div class="col-lg-12 mb-4">
                <!-- Tables -->
                <div class="card">     
                <div class="card-header d-flex bd-highlight mb-3">

                <div class="me-auto p-2 bd-highlight" >
                      <!-- Button trigger modal -->
                      
                  </div>
                  <div class="p-2 bd-highlight">
                      <button type="button" class="btn btn-primary" onclick="window.location.href='{{route('allReportType')}}';">
                        <i class="bi bi-plus-lg"></i> เพิ่มประเภทรายงาน
                      </button>
                  </div>
                </div>

                  
                  <div class="table" data-aos="fade-up">
                    <table class="table align-items-center table-flush">
                      <thead class="thead-light">
                        <tr>
                          <th>No</th>
                          <th>User_ID</th>
                          <th >Status</th>
                          <th >View</th>
                        </tr>
                      </thead>
                      @php($i=1)
                      @foreach($user as $row)
                      <tbody>
                        <tr>
                          <td>{{$i++}}</td>
                          <td>{{$row->name}}</td>
                          <td>{{$row->statusName}}</td>
                          <td>
                            <a class="btn btn-primary" href="{{url('/report/'.$row->id)}}" role="button"><i class="bi bi-eye-fill"></i></a>
                          </td>
                          
                        </tr>
                        
                      </tbody>
                      @endforeach
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
  


</main><!-- End #main -->
</x-app-layout>
