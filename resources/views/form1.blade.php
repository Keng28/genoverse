<x-app-layout>
    <section id="userform" class="userform  d-flex align-items-center">
        <div class="container" data-aos="fade-up">
            <header class="section-header d-flex justify-content-between">
                <div>
                    <p>ส่วนที่ 1</p>
                    <div class="section-header-line"></div>
                    <h3>ข้อมูลส่วนบุคคล</h3>
                </div>
                <div>
                    <a>User_ID: ....</a>
                </div>
            </header>

            <div class="row d-flex justify-content-center ">
                <div class="col-md-7 ">
                    <div class="row gy-4 ">
                        <form class="row g-3" action="{{route('form1')}}" method="post">
                            <div class="col-12">
                                <label for="inputAddress" class="form-label">1.1 สถานภาพทางสังคมในปัจจุบัน</label>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">โสด</label>
                                </div>
                                <div class="form-check">
                                    <a>(ไม่เคยแต่งงาน)</a>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">สมรส</label>
                                </div>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">หม้าย</label>
                                </div>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">แยกกันอยู่/เลิก/หย่า</label>
                                </div>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">อาศัยอยู่ด้วยกัน</label>
                                </div>
                                <div class="form-check">
                                    <a>(ไม่ได้จดทะเบียนสมรส)</a>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">1.2
                                    อาชีพหลักของท่านตรงกับข้อใดมากที่สุด</label>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions2"
                                        id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">ผู้จัดการ</label>
                                </div>
                                <div class="form-check">
                                    <a>(เช่น ฝ่ายบริหารระดับสูง เจ้าหน้า ที่อาวุโส และผู้ออกกฎหมาย
                                        ผู้จัดการทางด้านการบริหาร การค้า และธุรกิจ เป็นต้น)</a>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions2"
                                        id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">วิชาชีพ</label>
                                </div>
                                <div class="form-check">
                                    <a>(เช่น งานทางด้านวิทยาศาสตร์ และวิศวกร งานทางด้านสุขภาพครู อาจารย์ เป็นต้น)</a>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions2"
                                        id="inlineRadio3" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">เจ้าหน้าที่เทคนิค</label>
                                </div>
                                <div class="form-check">
                                    <a>(เช่นงานด้านวิทยาศาสตร์ และวิศวกรรมงานด้านสุขภาพงานด้านการสอนเป็นต้น)</a>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions2"
                                        id="inlineRadio4" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">ผู้ที่ทำงานเสมียน</label>
                                </div>
                                <div class="form-check">
                                    <a>(เช่น เสมียน เลขานุการ)</a>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions2"
                                        id="inlineRadio5" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">ผู้ที่ทํางานบริการ
                                        และงานขาย</label>
                                </div>
                                <div class="form-check">
                                    <a>(เช่น ผู้ประกอบอาหาร พนักงานเสิร์ฟ และบาร์เทนเดอร์ พนักงานขาย เป็นต้น)</a>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions2"
                                        id="inlineRadio6" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">ผู้ที่ทำงานทางด้านเกษตรกรรม
                                        ป่าไม้ และประมง</label>
                                </div>
                                <div class="form-check">
                                    <a>(เช่น ชาวนา ชาวประมง นายพราน ชาวสวน เป็นต้น)</a>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions2"
                                        id="inlineRadio7" value="option2">
                                    <label class="form-check-label"
                                        for="inlineRadio2">ผู้ที่ทำงานเกี่ยวกับงานฝีมือและการค้า</label>
                                </div>
                                <div class="form-check">
                                    <a>(เช่น ช่างตีเหล็ก ช่างซ่อมเครื่องจักร และช่างซ่อมแซม ช่างทาสี)</a>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions2"
                                        id="inlineRadio8" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">แรงงานในโรงงาน</label>
                                </div>
                                <div class="form-check">
                                    <a>(ผู้ควบคุม เครื่องจักร และเครื่องมือในโรงงาน พนักงานขับรถ เป็นต้น)</a>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions2"
                                        id="inlineRadio9" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">ทหารและตํารวจ</label>
                                </div>

                                <br>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions2"
                                        id="inlineRadio10" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">งานที่ใช้ทักษะขั้นพื้นฐาน</label>
                                </div>
                                <div class="form-check">
                                    <a>(เช่น แรงงานในบ้าน พนักงานทําความสะอาดในโรงแรม และในสํานักงาน
                                        ผู้ใช้แรงงานในงานเหมืองแร่ และงานก่อสร้าง เป็นต้น)</a>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions2"
                                        id="inlineRadio11" value="option2">
                                    <input type="text" class="form-control" placeholder="อื่นๆ โปรดระบุ"
                                        aria-label="โปรดระบุ">
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary"><i class="bi bi-arrow-left-circle-fill"></i>Save</button>
                            </div>
                        </form>
                    </div>
                </div>
                
                <br>
                <div class="d-flex justify-content-between g-3">
                    <button type="button" onclick="window.location.href='{{url('/index')}}'"
                        class="btn btn-primary">
                        <i class="bi bi-arrow-left-circle-fill"></i>
                        กลับหน้าหลักของแบบประเมิน
                    </button>
                    <button type="button" onclick="window.location.href='{{url('form2')}}'"
                        class="btn btn-primary" >หน้าถัดไป #save
                        <i class="bi bi-arrow-right-circle-fill"></i>
                    </button>
                </div>
            </div>
        </div>
    </section><!-- End Hero -->
</x-app-layout>