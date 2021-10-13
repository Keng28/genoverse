<x-app-layout>

<main id="main">
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
                    <table class="table align-items-center table-flush">
                      <thead class="thead-light">
                        <tr>
                          <th>No</th>
                          <th>User_ID</th>
                          <th >Status</th>
                          <th >View</th>
                        </tr>
                      </thead>

                      @foreach($user as $row)
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>{{$row->id}}</td>
                          <td>{{"Status"}}</td>
                          <td>
                            <a class="btn btn-primary" href="{{ route('menu8')}}" role="button"><i class="bi bi-eye-fill"></i></a>
                          </td>
                          
                        </tr>
                        
                      </tbody>
                      @endforeach
                    </table>
                    {{$user}}

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
