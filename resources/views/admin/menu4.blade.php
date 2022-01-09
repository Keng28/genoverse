<x-app-layout>
<script>
       function test(select_id){
         console.log('select_id ',select_id);
         let id = select_id;
         let CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
         Swal.fire({
                          title: 'Delete',
                          text: "You won't be able to revert this!",
                          icon: 'warning',
                          showCancelButton: true,
                          confirmButtonColor: '#3085d6',
                          cancelButtonColor: '#d33',
                          confirmButtonText: 'Yes'
                        }).then((result) => {
                          if (result.isConfirmed) {
                            $.ajax({
                              /* the route pointing to the post function */
                              url: '/report/del',
                              type: 'POST',
                              /* send the csrf-token and the input to the controller */
                              data: {_token: CSRF_TOKEN, id:id},
                              dataType: 'JSON',
                              /* remind that 'data' is the response of the AjaxController */
                              success: function (data) { 
                                  $(".writeinfo").append(data.msg); 
                                   location.reload();
                                  }
                              }); 
                          }
                        })

       }

       function test2(select_id){
         console.log('select_id ',select_id);
         let id = select_id;
         let CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
         Swal.fire({
                          title: 'Change Status',
                          text: "You won't be able to revert this!"+id,
                          icon: 'warning',
                          showCancelButton: true,
                          confirmButtonColor: '#3085d6',
                          cancelButtonColor: '#d33',
                          confirmButtonText: 'Yes'
                        }).then((result) => {
                          if (result.isConfirmed) {
                            $.ajax({
                              /* the route pointing to the post function */
                              url: '/report/',
                              type: 'POST',
                              /* send the csrf-token and the input to the controller */
                              data: {_token: CSRF_TOKEN, id:id},
                              dataType: 'JSON',
                              /* remind that 'data' is the response of the AjaxController */
                              success: function (data) { 
                                  $(".writeinfo").append(data.msg); 
                                   location.reload();
                                  }
                              }); 
                          }
                        })

       }


       
    </script>

<main id="main">
<section id="userprocess" class="userprocess d-flex align-items-center" >
    <div class="container" >

      <header class="section-header d-flex justify-content-between" data-aos="fade-up">
        <div>
          <p>Interpretation</p>
          <div class="section-header-line"></div>
        </div>
        <div class="d-flex justify-content-end">
          <a>User_ID: {{$getbyid[0]->name}}</a>
        </div>
      </header>

<!-- {{$reporttype}} -->




      @error('fileUpload')
      <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
      @enderror

        <div class="row justify-content-md-center" >
          <div class="col-lg-10 ">
            <div class="row justify-content-md-center">
              <div class="col-lg-12 mb-4">
                <!-- Tables -->
                <div class="card" >
                <div class="card-header d-flex bd-highlight mb-3">
                <div class="me-auto p-2 bd-highlight" >
                      <!-- Button trigger modal -->
                      
                  </div>
                  <div class="p-2 bd-highlight">
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="bi bi-plus-lg"></i> Add Report
                      </button>
                  </div>
                </div>
                  

                      
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel" style="color: #000;">Add Report</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body col-lg-12">
                      <form action="{{url('/addReport/'.$getbyid[0]->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="col-12">
                          <label class="visually-hidden" for="inlineFormSelectPref">Preference</label>
                          <select class="form-select" id="inlineFormSelectPref" name="category">
                            <option selected>Report Type</option>
                            @foreach($reporttype as $row)
                            <option value="{{$row->name}}">{{$row->name}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="formFile" class="form-label">Select File</label>
                          <input class="form-control" type="file" id="formFile" name="file">
                        </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                      </div>
                    </div>
                  </div>
              </form>
                  
                  

                  <!-- {{$getreport}} -->
                  
                  
                  <div class="table" style="overflow-x:auto;" data-aos="fade-up">
                    <table class="table align-items-center table-flush">
                      <thead class="thead-light">
                     

                        <tr>
                          <th scope="col">No</th>
                          <th>Report Type</th>
                          <!-- <th>User_ID</th> -->
                          <th>Doctor</th>
                          <th>Upload Date</th>
                          <th >Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php($i=1)
                        @foreach($getreport as $row)

                        <tr>
                          <th>{{$i++}}</th>
                          <td>{{$row->category}}</td>
                          <!-- <td>{{$row->NameUsers}}</td> -->
                          <td>{{$row->DoctorUsers}}</td>
                          <td>{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$row->updated_at)->format('d M Y H:i')}} น.</td>

                          <!-- <td>{{$row->updated_at}}</td> -->
                          <!-- <td>{{$row->file_path}}</td> -->
                          
                          <td>
                            <a class="btn btn-primary" href="{{$row->file_path}}" target="_blank" role="button"><i class="bi bi-eye"></i></a>
                            <a class="btn btn-success" href="{{$row->file_path}}" download role="button"><i class="bi bi-box-arrow-in-down"></i></a>
                            <a class="btn btn-danger postbutton1" onclick="test({{$row->id}})" role="button" ><i class="bi bi-archive-fill"></i></a>

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
  <!-- {{$getbyid}} -->
<br>
  <!-- {{$getreport}} -->

    
            </div>
          </div>
        </div>

    </div>

  </section><!-- End UserProcess -->
</main>
</x-app-layout>
