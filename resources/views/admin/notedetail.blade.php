<x-app-layout>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>


    <script>
    tinymce.init({
        selector: 'textarea#editor',
        menubar: false
    });
    </script>
    <main id="main">
        <section id="userprocess" class="userprocess d-flex align-items-center">

            <div class="container" style="height: 100vh">

                <header class="section-header" data-aos="fade-up">
                    <p>บันทึกรายละเอียดการนัดหมาย</p>
                    <div class="section-header-line"></div>
                    <div class="d-flex justify-content-end">
                        <a>User_ID: {{$calendar2[0]->NameUsers}}</a>
                    </div>

                </header>
                <div class="py-12">
                    <div class="container">
                        <form class="image-upload" method="post" action="#"
                            enctype="multipart/form-data">

                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">สรุปนัดหมาย</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                            value="{{$calendar2[0]->note}}"></textarea>
                                    </div>
                                    <h5 class="card-title">TinyMCE Editor</h5>
                                    {{$calendar2[0]->category}}
                                    {{$calendar2[0]->date}}


                                    <!-- TinyMCE Editor -->
                                    <textarea class="tinymce-editor">
                                  <p>{{$calendar2[0]->note}}</p>
                                  <p>This is TinyMCE <strong>full</strong> editor</p>
                                </textarea><!-- End TinyMCE Editor -->

                                </div>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-success btn-sm">Save</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="container mt-4 mb-4">
                    <div class="row justify-content-md-center">
                        <div class="col-md-12 col-lg-8">
                            <h1 class="h2 mb-4">Submit issue</h1>
                            <label>Describe the issue in detail</label>
                            <div class="form-group">
                                <textarea id="editor">

                                          {{$calendar2[0]->note}}

         </textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-app-layout>