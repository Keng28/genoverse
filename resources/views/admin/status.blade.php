<x-app-layout>


    <script>
        $(document).ready(function(){
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $(".postbutton1").click(function(){
                var id = document.getElementById('demo').getAttribute('value');
                Swal.fire({
                          title: 'Up Status',
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
                              url: '/statusupdate',
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
            });
            $(".postbutton2").click(function(){
                var id = document.getElementById('demo').getAttribute('value');
                Swal.fire({
                          title: 'Down Status',
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
                              url: '/statusupdate2',
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
            });
       });    
    </script>
<main id="main">
<section id="userprocess" class="userprocess d-flex align-items-center" >
    <div class="container" >
      <header class="section-header d-flex justify-content-between" data-aos="fade-up">
        <div>
          <p>Status</p>
          <div class="section-header-line"></div>
        </div>
        <div class="d-flex justify-content-end">
          <a>User_ID: {{$getbyid[0]->name}}</a>
        </div>
      </header>


      <!--{{$getbyid}}-->
      <br>
      <!--{{$getstatusall}}-->
        <div class="row justify-content-md-center" >
          <div class="col-lg-10 ">
            <div class="row justify-content-md-center">
              <div class="col-lg-12 mb-4">
                <!-- Tables -->
                <div class="card">   
               
                  
                  <div class="table" data-aos="fade-up">

                    <table class="table align-items-center table-flush">
                      <thead class="thead-light">
                        <tr>
                          <th>No</th>
                          <th>Step</th>
                          <th>Completed</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php($i=1)
                        @foreach($getstatusall as $row)
                        <tr>
                          <td>{{$i}}</td>
                          <td>{{$row->statusName}}</td>
                          <td>
                            @if($i<=$getbyid[0]->status_id)
                              <input class="form-check-input" disabled type="checkbox" value="" id="flexCheckDefault" checked>

                            @else
                              <input class="form-check-input" disabled type="checkbox" value="" id="flexCheckDefault" >
                            @endif
                            
                          </td>
                        </tr>

                        @php($i++)                        
                        @endforeach
                      </tbody>
                      

                    </table>

                    </div>
                    <div class="card-header d-flex bd-highlight mb-3">
                    <div class="me-auto p-2 bd-highlight" >
                      <!-- Button trigger modal -->
                      
                    </div>
                    <div id="demo"  value="{{$getbyid[0]->id}}" class="p-2 bd-highlight">
                        
                        <button type="button" class="btn btn-danger postbutton2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                          <i class="bi bi-arrow-left-square"></i>
                          Step backward
                        </button>
                        <button type="button" class="btn btn-primary postbutton1" data-bs-toggle="modal" data-bs-target="#exampleModal">
                          Step Forward
                          <i class="bi bi-arrow-right-square"></i> 
                        </button>
                        <div class="writeinfo"></div>
                    </div>
                  </div>

                    <!-- <div id="demo"  value="{{$getbyid[0]->id}}">
                    <button type="button" class="btn btn-primary postbutton1 ">Up</button>
                    <button type="button" class="btn btn-danger postbutton2 ">Down</button>
                    <div class="writeinfo"></div> -->

                  
                  
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
