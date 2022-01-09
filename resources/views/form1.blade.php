<x-app-layout>
    
  <!-- ======= Hero Section ======= -->
  <section id="userform" class="userform  d-flex align-items-center">
    <div class="container " data-aos="fade-up" >
      <header class="section-header d-flex justify-content-between">
        <div>
          <p>ส่วนที่ 1</p>
          <div class="section-header-line"></div>
          <h3>ข้อมูลส่วนบุคคล</h3>
        </div>
        <div >
          <a>User_ID: ....</a>
        </div>
      </header>






      <div class="row d-flex justify-content-center " >
      
        <div class="col-md-7 " >


    <div class="row gy-4 " >

    <form class="row g-3">
      <div class="col-12">
        <label for="inputAddress" class="form-label">1.สถานภาพทางสังคมในปัจจุบัน</label>
        <br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
          <label class="form-check-label" for="inlineRadio1">โสด (ไม่เคยแต่งงาน)</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
          <label class="form-check-label" for="inlineRadio2">คู่ (จดทะเบียนสมรส)</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
          <label class="form-check-label" for="inlineRadio2">หม้าย</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
          <label class="form-check-label" for="inlineRadio2">แยกกันอยู่/เลิก/หย่า</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
          <label class="form-check-label" for="inlineRadio2">อาศัยอยู่ด้วยกัน (ไม่ได้จดทะเบียนสมรส)</label>
        </div>
      </div>


  <div class="col-12">
    <label for="inputAddress" class="form-label">1.2 สถานภาพการทำงานในช่วง 12 เดือน ที่ผ่านมา</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="โปรดระบุ">
  </div>

<div class="col-12">
สำหรับสุภาพบุรุษ และท่านไม่ได้ทำงาน(กรุณาข้ามไปยังส่วนที่2)

</div>

<div class="col-12">
1.3 ถ้าท่านทำงานอยู่ปัจจุบัน ท่านมีงานทำกี่อย่าง (ที่ทำให้เกิดอันตราย)?
<input type="text" class="form-control" id="inputAddress2" placeholder="จำนวนงาน">

</div>

<div class="col-12">
1.4 อาชีพหลักของท่านตรงกับข้อใดมากที่สุด 
</div>
<div class="col-12">
1.5 สุขภาพของสุภาพสตรี
</div>

<div class="col-12">
  ภาวะหมดประจำเดือน
</div>

<div class="col-12">
1.5.1 ท่านหมดประจำเดือนแล้วหรือไม่ (หมดประจำเดือนหมายถึงการไม่มีประจำเดือนเป็นเวลา <u>12 เดือนติดต่อกัน</u> ในผู้หญิงที่ไม่ได้ตั้งครรภ์หรือกำลังให้นมบุตร) 
</div>

<div class="col-12">
1.5.2 ท่านหมดประจำเดือนเมื่ออายุเท่าไหร่
<input type="text" class="form-control" id="inputAddress2" placeholder="โปรดระบุ">

</div>

<div class="col-12">
1.5.3 ท่านหมดประจำเดือน
<input type="text" class="form-control" id="inputAddress2" placeholder="โปรดระบุ">
</div>



{% if fname == null or fname == '' %}NO NAME CONTENT{% else %}WITH NAME CONTENT{% endif %}STATIC CONTENT


  <div class="col-12">
    <button type="submit" class="btn btn-primary">Save</button>
  </div>
</form>


    </div>
    </div>
    </div>
    </div>


    
  </section><!-- End Hero -->

</x-app-layout>