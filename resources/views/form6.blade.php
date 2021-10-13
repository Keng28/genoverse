<x-app-layout>
    
  <!-- ======= Hero Section ======= -->
  <section id="userform" class="userform  d-flex align-items-center">
    <div class="container " data-aos="fade-up" >
      <header class="section-header">
        <p>ส่วนที่ 6</p>
        <div class="section-header-line">
        </div>
        <h3>ประวัติครอบครัว</h3>
        {{"User_ID"}}

      </header>



      <div class="row d-flex justify-content-center " >
      
        <div class="col-md-7 " >


    <div class="row gy-4 " >

    <form class="row g-3">
      <div class="col-12">
        <label for="inputAddress" class="form-label">1.สถํานภําพทํางสังคมในปัจจบุัน(เลือกเพียงหนึ่งข้อ)</label>
        <br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
          <label class="form-check-label" for="inlineRadio1">โสด (ไม่เคยแต่งงําน)</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
          <label class="form-check-label" for="inlineRadio2">คู่ (จดทะเบียนสมรส)</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
          <label class="form-check-label" for="inlineRadio2">หม้ําย</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
          <label class="form-check-label" for="inlineRadio2">แยกกันอยู่/เลิก/หยํา่</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
          <label class="form-check-label" for="inlineRadio2">อําศัยอยู่ดว้ ยกัน (ไม่ได้จดทะเบียนสมรส)</label>
        </div>
      </div>


  <div class="col-12">
    <label for="inputAddress" class="form-label">1.2 สถํานภําพกํารท ํางํานในช่วง12เดือนที่ผ่ํานมํา (ท ําเครื่องหมําย ข้อที่ตรงกับท่ําน)
(ตัวอย่ํางเช่น ถ้ําท่ํานเลือกข้อ 1 ไม่ได้ท ํางําน กรุณําตอบข้อ 1.1 และ1.2 ถ้ําท่ํานก ําลังท ํางํานอยู่กรุณําเลือกข้อ 2)</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>

<div class="col-12">
ส าหรับสุภาพบุรุษ และท่านไม่ได้ท างาน(กรุณาข้ามไปยังส่วนที่2)

</div>

<div class="col-12">
1.3 ถ้ําท่ํานทํางํานอยู่ ปัจจุบัน ท่ํานมีงํานทที่ ํากอ่ี ย่ําง (งานที่กอ่ ให้เกดิ รายได)้
<input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">

</div>

<div class="col-12">
1.4
</div>
<div class="col-12">
1.5
</div>

<div class="col-12">
1.5.1
</div>

<div class="col-12">
1.5.2
<input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">

</div>

<div class="col-12">
1.5.3
<input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">

</div>

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