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
                < class="card" >
                <div class="card-header d-flex bd-highlight mb-3 end">
     
                  <div class="p-2 bd-highlight">
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="bi bi-plus-lg"></i> เพิ่มรายงาน
                      </button>
                  </div>
                </div>
                  

                      
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel" style="color: #000;">เพิ่มวันนัดหมาย</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body col-lg-12">

                      <form action="{{route('addReport')}}" method="post">
                        @csrf
                        <div class="col-12">
                          <label class="visually-hidden" for="inlineFormSelectPref">Preference</label>
                          <select class="form-select" id="inlineFormSelectPref" name="category">
                            <option selected>ประเภทรายงาน</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="formFile" class="form-label">เลือกไฟล์</label>
                          <input class="form-control" type="file" id="formFile" name="file">
                        </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
                          <button type="submit" class="btn btn-primary">เพิ่มนัดหมาย</button>
                        </div>
                      </div>
                    </div>
                  </div>
              </form>
                  
                  

                  
                  
                  
                  <div class="table" style="overflow-x:auto;" data-aos="fade-up">
                    <table class="table align-items-center table-flush">
                      <thead class="thead-light">
                     

                        <tr>
                          <th scope="col">ลำดับ</th>
                          <th>ประเภทรายงาน</th>
                          <th>User_ID</th>
                          <th>Doctor</th>
                          <th>วันอัพ</th>
                          <th >Action</th>
                        </tr>
                      </thead>
                      <tbody>

                        <tr>
                          <th>{{"k"}}</th>
                          <td>{{"row->date"}}</td>
                          <td>{{"row->time"}}</td>
                          <td>{{"not link"}}</td>
                          <td>{{"row->user_id"}}</td>
                          <td>
                            <a class="btn btn-primary" href="{{url('/report')}}" role="button"><i class="bi bi-eye"></i></a>
                            <a class="btn btn-danger" href="#" role="button"  data-bs-toggle="modal" data-bs-target="#exampleModal" ><i class="bi bi-archive-fill"></i></a>
                          </td>
                        </tr>
                        
                        

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!--Row-->
  {{$calendar ?? ''}}
            
    
            </div>
          </div>
        </div>

    </div>

  </section><!-- End UserProcess -->
</main>
</x-app-layout>
