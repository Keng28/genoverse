<x-app-layout>

<main id="main">
 <!-- ======= UserProcess Section ======= -->
 <section id="userprocess" class="userprocess d-flex align-items-center" >
    <div class="container" >

      <header class="section-header"  data-aos="fade-up">
        <p>การแปลผล</p>
        <div class="section-header-line"></div>
      </header>

        <div class="row justify-content-md-center" >
          <div class="col-lg-10 ">
            <div class="row justify-content-md-center">
              <div class="col-lg-12 mb-4">
                <!-- Tables -->
                <div class="card">                  
                  <div class="table" data-aos="fade-up">
                    <table class="table table-striped table-bordered table-sm ">
                      <thead class="thead-light">
                        <tr>
                          <th>ลำดับ</th>
                          <th >ประเภทรายงาน</th>
                          <th>วันที่อัพโหลด</th>
                          <th>ผู้อัพโหลด</th>
                          <th >ดูรายงาน</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>wellness</td>
                          <td>12/02/21</td>
                          <td>นายแพทย์ ก</td>
                          <td>
                            <a class="btn btn-primary" href="{{url('reportdetail')}}" role="button"><i class="bi bi-eye-fill"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>illness</td>
                          <td>12/02/21</td>
                          <td>นายแพทย์ ก</td>
                          <td>
                            <a class="btn btn-primary" href="{{url('reportdetail')}}" role="button"><i class="bi bi-eye-fill"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Recommenation</td>
                          <td>12/02/21</td>
                          <td>นายแพทย์ ก</td>
                          <td>
                            <a class="btn btn-primary" href="{{url('reportdetail')}}" role="button"><i class="bi bi-eye-fill"></i></a>
                          </td>
                        </tr>
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
