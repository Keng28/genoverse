<x-app-layout>

<main id="main">
<!-- ======= UserProcess Section ======= -->
<section id="userprocess" class="userprocess d-flex align-items-center" >
    <div class="container" >

      <header class="section-header"  data-aos="fade-up">
        <p>นัดหมาย</p>
        <div class="section-header-line"></div>
      </header>

        <div class="row justify-content-md-center" >
          <div class="col-lg-10 ">
            <div class="row justify-content-md-center">
              <div class="col-lg-12 mb-4">
                <!-- Tables -->
                <div class="card" >
                  
  
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel" style="color: #000;">เลือกวันนัดหมาย</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
{{$calendar2}}
                        @foreach($calendar2 as $row)
                        <div class="modal-body col-lg-12">
                        <form action="{{url('/addCalender/update/'.$row->id)}}" method="post">
                        @csrf
                        <ul class="list-group">
                          <li class="list-group-item">
                            <input type="text" class="form-control" name="link" value="{{$row->link}}">

                            {{$row->date}}
                            {{$row->time}}
                          </li>
                        </ul>                
                        </div>
                        @endforeach

                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
                          <button type="submit" class="btn btn-primary">เลือกวันนัด</button>
                        </div>
                        </form>

                      </div>
                    </div>
                  </div>
                  
                  

                  
                  
                  
                  <div class="table" data-aos="fade-up">
                    <table class="table table-striped table-bordered table-sm">
                      <thead class="thead-light">
                        <tr>
                          <th>ลำดับ</th>
                          <th>ประเภทการนัดหมาย</th>
                          <th>วัน /เวลานัดหมาย</th>
                          <th>แพทย์</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Pre-test Counseling</td>
                          <td>
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="bi bi-plus-lg"></i> เลือกวันนัด
                      </button>                          </td>
                          <td>นายแพทย์ ก </td>
                          <td>
                            <a class="btn btn-primary" href="user.html" role="button"><i class="bi bi-telephone-fill"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Blood Collection</td>
                          <td>
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="bi bi-plus-lg"></i> เลือกวันนัด
                      </button>                          </td>
                          <td>นายแพทย์ ก </td>
                          <td>
                            <a class="btn btn-primary" href="user.html" role="button"><i class="bi bi-telephone-fill"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Post-test Counseling</td>
                          <td>
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="bi bi-plus-lg"></i> เลือกวันนัด
                      </button>                          </td>
                          <td>นายแพทย์ ก </td>
                          <td>
                            <a class="btn btn-primary" href="user.html" role="button"><i class="bi bi-telephone-fill"></i></a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                   

                  </div>
                  
                </div>
                <p class="text-muted">
                  **ท่านสามารถกดเลือดวันได้เพียงแค่ 1 ครั้งเท่านั้น หากต้องการปรับเปลี่ยนวัน และเวลานัดหมาย                
                </p>
                <p class="text-muted">
                  โปรดติดต่อ Admin ตามช่องทางดังต่อไปนี้                
                </p>
                <p class="text-muted">
                  E-mail: admin@gmail.com               
                </p>
                <p class="text-muted">
                Phone: 099-999-9999                
                </p>
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
