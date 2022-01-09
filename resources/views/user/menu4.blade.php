<x-app-layout>

<main id="main">
 <!-- ======= UserProcess Section ======= -->
 <section id="userprocess" class="userprocess d-flex align-items-center " >
    <div class="container" >      
      <header class="section-header d-flex justify-content-between" data-aos="fade-up">
        <div>
          <p>รายงานผล</p>
          <div class="section-header-line"></div>
        </div>
        <div class="d-flex justify-content-end">
          <a>ผู้รับบริการ : {{Auth::user()->name}}</a>
        </div>
      </header>

        <div class="row justify-content-md-center " >
          <div class="col-lg-10 ">
            <div class="row justify-content-md-center">
              <div class="col-lg-12 mb-4">
                <!-- Tables -->
                <div class="">                  
                  <div class="table" style="overflow-x:auto;" data-aos="fade-up">
                    <table class="table table-striped table-bordered table-sm ">
                      <thead class="thead-light">
                        <tr>
                          <th>ลำดับ</th>
                          <th>ประเภทรายงาน</th>
                          <th>วันที่อัพโหลด</th>
                          <th>ดู</th>
                          <th>ดาวน์โหลด</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php($i=1)
                        <!-- {{$getreport}} -->
                        @foreach($getreport as $row)
                        <tr>
                          <td>{{$i++}}</td>
                          <td>{{$row->category}}</td>
                          <td>{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$row->updated_at)->format('d M Y')}}</td>
                          <td>
                            <a class="btn btn-primary" href="{{$row->file_path}}" target="_blank" role="button"><i class="bi bi-eye"></i></a>
                          </td>
                          <td>
                            <a class="btn btn-success" href="{{$row->file_path}}" download role="button"><i class="bi bi-box-arrow-in-down"></i></a>
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
  

</main><!-- End #main -->
</x-app-layout>
