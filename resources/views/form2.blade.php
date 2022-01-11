<x-app-layout>
    <script type="text/javascript">
    function show1() {
        document.getElementById('div1').style.display = 'none';
    }

    function show2() {
        document.getElementById('div1').style.display = 'block';
    }

    function show3() {
        document.getElementById('div2').style.display = 'none';
        document.getElementById('div3').style.display = 'none';
    }

    function show4() {
        document.getElementById('div2').style.display = 'block';
        document.getElementById('div3').style.display = 'block';
    }
    </script>

    <style>
    .hide {
        display: none;
    }
    </style>

    <!-- ======= Hero Section ======= -->
    <section id="userform" class="userform  d-flex align-items-center">
        <div class="container " data-aos="fade-up">
            <header class="section-header d-flex justify-content-between">
                <div>
                    <p>ส่วนที่ 2</p>
                    <div class="section-header-line"></div>
                    <h3>ประวัติการเจ็บป่วย</h3>
                </div>
                <div>
                    <a>User_ID: ....</a>
                </div>
            </header>





            <div class="row d-flex justify-content-center ">
                <div class="col-md-7 ">
                    <div class="row gy-4 ">
                        <form class="row g-3">
                            <div class="col-12">
                                <label for="inputAddress" class="form-label">2.1
                                    ประวัติการเจ็บป่วยของตัวท่าน</label>
                                <label for="inputAddress" class="form-label">ท่านมีปัญหาสุขภาพต่อไปนี้หรือไม่</label>
                            </div>
                            <div class="col-12">
                                <label for="inputAddress"
                                    class="form-label">1.ความดันโลหิตสูง(ความดันในเลือดสูง)</label>
                                <div class="questionnaire">
                                    <div>
                                        <a>- แพทย์เคยบอกท่านหรือไม่ว่าท่านมีการเจ็บป่วยเหล่านี้</a>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio1" value="option1" onclick="show2();">
                                        <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="option2" onclick="show1();">
                                        <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                    </div>
                                    <div class="title hide" id="div1">
                                        <a>- เริ่มเป็นเมื่อใด(วินิฉัยโดยแพทย์)</a>
                                        <div class="input">
                                            <input type="text" class="form-control" id="inputAddress"
                                                placeholder="2533">
                                        </div>
                                        <div class="title">
                                            <a>- ปัจจุบันท่านรับการรักษาสำหรับการเจ็บป่วยนี้อยู่หรือไม่</a>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">2.ไขมันในเลือดสูง</label>
                                <div class="questionnaire">
                                    <div>
                                        <a>- แพทย์เคยบอกท่านหรือไม่ว่าท่านมีการเจ็บป่วยเหล่านี้</a>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions2"
                                            id="inlineRadio3" value="option3" onclick="show4();">
                                        <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions2"
                                            id="inlineRadio4" value="option4" onclick="show3();">
                                        <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                    </div>
                                    <div class="title hide" id="div2">
                                        <a>- เริ่มเป็นเมื่อใด(วินิฉัยโดยแพทย์)</a>
                                        <div class="input">
                                            <input type="text" class="form-control" id="inputAddress"
                                                placeholder="2533">
                                        </div>
                                        <div class="title">
                                            <a>- ปัจจุบันท่านรับการรักษาสำหรับการเจ็บป่วยนี้อยู่หรือไม่</a>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">3.เบาหวาน</label>
                                <div class="questionnaire">
                                    <div>
                                        <a>- แพทย์เคยบอกท่านหรือไม่ว่าท่านมีการเจ็บป่วยเหล่านี้</a>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions3"
                                            id="inlineRadio1" value="option1" onclick="show4();">
                                        <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions3"
                                            id="inlineRadio2" value="option2" onclick="show3();">
                                        <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                    </div>
                                    <div class="title hide" id="div3">
                                        <a>- เริ่มเป็นเมื่อใด(วินิฉัยโดยแพทย์)</a>
                                        <div class="input">
                                            <input type="text" class="form-control" id="inputAddress"
                                                placeholder="2533">
                                        </div>
                                        <div class="title">
                                            <a>- ปัจจุบันท่านรับการรักษาสำหรับการเจ็บป่วยนี้อยู่หรือไม่</a>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-12">
                                <label for="inputAddress"
                                    class="form-label">4.โรคเส้นเลือดหัวใจตีบ(การอุดตันของเส้นเลือดแดงที่ไปเลี้ยงหัวใจ)</label>
                                <div class="questionnaire">
                                    <div>
                                        <a>- แพทย์เคยบอกท่านหรือไม่ว่าท่านมีการเจ็บป่วยเหล่านี้</a>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                    </div>
                                    <div class="title hide" id="div3">
                                        <a>- เริ่มเป็นเมื่อใด(วินิฉัยโดยแพทย์)</a>
                                        <div class="input">
                                            <input type="text" class="form-control" id="inputAddress"
                                                placeholder="2533">
                                        </div>
                                        <div class="title">
                                            <a>- ปัจจุบันท่านรับการรักษาสำหรับการเจ็บป่วยนี้อยู่หรือไม่</a>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">5.กล้ามเนื้อหัวใจตาย (ภาวะ
                                    กล้ามเนื้อหัวใจตายเฉียบพลัน)</label>
                                <div class="questionnaire">
                                    <div>
                                        <a>- แพทย์เคยบอกท่านหรือไม่ว่าท่านมีการเจ็บป่วยเหล่านี้</a>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                    </div>
                                    <div class="title hide" id="div3">
                                        <a>- เริ่มเป็นเมื่อใด(วินิฉัยโดยแพทย์)</a>
                                        <div class="input">
                                            <input type="text" class="form-control" id="inputAddress"
                                                placeholder="2533">
                                        </div>
                                        <div class="title">
                                            <a>- ปัจจุบันท่านรับการรักษาสำหรับการเจ็บป่วยนี้อยู่หรือไม่</a>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">6.การทำงานของหัวใจล้มเหลว</label>
                                <div class="questionnaire">
                                    <div>
                                        <a>- แพทย์เคยบอกท่านหรือไม่ว่าท่านมีการเจ็บป่วยเหล่านี้</a>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                    </div>
                                    <div class="title hide" id="div3">
                                        <a>- เริ่มเป็นเมื่อใด(วินิฉัยโดยแพทย์)</a>
                                        <div class="input">
                                            <input type="text" class="form-control" id="inputAddress"
                                                placeholder="2533">
                                        </div>
                                        <div class="title">
                                            <a>- ปัจจุบันท่านรับการรักษาสำหรับการเจ็บป่วยนี้อยู่หรือไม่</a>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="inputAddress"
                                    class="form-label">7.เส้นเลือดส่วนปลายตีบ(การอุดตันของเส้นเลือดแดงที่ไปเลี้ยงขา”PAD”)</label>
                                <div class="questionnaire">
                                    <div>
                                        <a>- แพทย์เคยบอกท่านหรือไม่ว่าท่านมีการเจ็บป่วยเหล่านี้</a>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                    </div>
                                    <div class="title hide" id="div3">
                                        <a>- เริ่มเป็นเมื่อใด(วินิฉัยโดยแพทย์)</a>
                                        <div class="input">
                                            <input type="text" class="form-control" id="inputAddress"
                                                placeholder="2533">
                                        </div>
                                        <div class="title">
                                            <a>- ปัจจุบันท่านรับการรักษาสำหรับการเจ็บป่วยนี้อยู่หรือไม่</a>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">8.โรคหลอดเลือดสมอง</label>
                                <div class="questionnaire">
                                    <div>
                                        <a>- แพทย์เคยบอกท่านหรือไม่ว่าท่านมีการเจ็บป่วยเหล่านี้</a>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                    </div>
                                    <div class="title hide" id="div3">
                                        <a>- เริ่มเป็นเมื่อใด(วินิฉัยโดยแพทย์)</a>
                                        <div class="input">
                                            <input type="text" class="form-control" id="inputAddress"
                                                placeholder="2533">
                                        </div>
                                        <div class="title">
                                            <a>- ปัจจุบันท่านรับการรักษาสำหรับการเจ็บป่วยนี้อยู่หรือไม่</a>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-12">
                                <label for="inputAddress" class="form-label">9.โรคพาร์กินสัน</label>
                                <div class="questionnaire">
                                    <div>
                                        <a>- แพทย์เคยบอกท่านหรือไม่ว่าท่านมีการเจ็บป่วยเหล่านี้</a>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                    </div>
                                    <div class="title hide" id="div3">
                                        <a>- เริ่มเป็นเมื่อใด(วินิฉัยโดยแพทย์)</a>
                                        <div class="input">
                                            <input type="text" class="form-control" id="inputAddress"
                                                placeholder="2533">
                                        </div>
                                        <div class="title">
                                            <a>- ปัจจุบันท่านรับการรักษาสำหรับการเจ็บป่วยนี้อยู่หรือไม่</a>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">10.โรคลมชัก</label>
                                <div class="questionnaire">
                                    <div>
                                        <a>- แพทย์เคยบอกท่านหรือไม่ว่าท่านมีการเจ็บป่วยเหล่านี้</a>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                    </div>
                                    <div class="title hide" id="div3">
                                        <a>- เริ่มเป็นเมื่อใด(วินิฉัยโดยแพทย์)</a>
                                        <div class="input">
                                            <input type="text" class="form-control" id="inputAddress"
                                                placeholder="2533">
                                        </div>
                                        <div class="title">
                                            <a>- ปัจจุบันท่านรับการรักษาสำหรับการเจ็บป่วยนี้อยู่หรือไม่</a>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">11.โรคหอบหืด (Asthma)</label>
                                <div class="questionnaire">
                                    <div>
                                        <a>- แพทย์เคยบอกท่านหรือไม่ว่าท่านมีการเจ็บป่วยเหล่านี้</a>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                    </div>
                                    <div class="title hide" id="div3">
                                        <a>- เริ่มเป็นเมื่อใด(วินิฉัยโดยแพทย์)</a>
                                        <div class="input">
                                            <input type="text" class="form-control" id="inputAddress"
                                                placeholder="2533">
                                        </div>
                                        <div class="title">
                                            <a>- ปัจจุบันท่านรับการรักษาสำหรับการเจ็บป่วยนี้อยู่หรือไม่</a>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">12.โรคถุงลมโป่งพอง (COPD)</label>
                                <div class="questionnaire">
                                    <div>
                                        <a>- แพทย์เคยบอกท่านหรือไม่ว่าท่านมีการเจ็บป่วยเหล่านี้</a>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                    </div>
                                    <div class="title hide" id="div3">
                                        <a>- เริ่มเป็นเมื่อใด(วินิฉัยโดยแพทย์)</a>
                                        <div class="input">
                                            <input type="text" class="form-control" id="inputAddress"
                                                placeholder="2533">
                                        </div>
                                        <div class="title">
                                            <a>- ปัจจุบันท่านรับการรักษาสำหรับการเจ็บป่วยนี้อยู่หรือไม่</a>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">13.โรคไต (ที่ไม่ใช่มะเร็ง)</label>
                                <div class="questionnaire">
                                    <div>
                                        <a>- แพทย์เคยบอกท่านหรือไม่ว่าท่านมีการเจ็บป่วยเหล่านี้</a>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                    </div>
                                    <div class="title hide" id="div3">
                                        <a>- เริ่มเป็นเมื่อใด(วินิฉัยโดยแพทย์)</a>
                                        <div class="input">
                                            <input type="text" class="form-control" id="inputAddress"
                                                placeholder="2533">
                                        </div>
                                        <div class="title">
                                            <a>- ปัจจุบันท่านรับการรักษาสำหรับการเจ็บป่วยนี้อยู่หรือไม่</a>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">14.โรคภูมิแพ้(Allergy)</label>
                                <div class="questionnaire">
                                    <div>
                                        <a>- แพทย์เคยบอกท่านหรือไม่ว่าท่านมีการเจ็บป่วยเหล่านี้</a>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                    </div>
                                    <div class="title hide" id="div3">
                                        <a>- เริ่มเป็นเมื่อใด(วินิฉัยโดยแพทย์)</a>
                                        <div class="input">
                                            <input type="text" class="form-control" id="inputAddress"
                                                placeholder="2533">
                                        </div>
                                        <div class="title">
                                            <a>- ปัจจุบันท่านรับการรักษาสำหรับการเจ็บป่วยนี้อยู่หรือไม่</a>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">15.โรคข้ออักเสบรูมาตอยด์(Rheumatoid
                                    arthritis)</label>
                                <div class="questionnaire">
                                    <div>
                                        <a>- แพทย์เคยบอกท่านหรือไม่ว่าท่านมีการเจ็บป่วยเหล่านี้</a>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                    </div>
                                    <div class="title hide" id="div3">
                                        <a>- เริ่มเป็นเมื่อใด(วินิฉัยโดยแพทย์)</a>
                                        <div class="input">
                                            <input type="text" class="form-control" id="inputAddress"
                                                placeholder="2533">
                                        </div>
                                        <div class="title">
                                            <a>- ปัจจุบันท่านรับการรักษาสำหรับการเจ็บป่วยนี้อยู่หรือไม่</a>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">16.โรคลูปัส (ภูมิแพ้ต่อตนเอง, systemic
                                    lupuserythematosus SLE)</label>
                                <div class="questionnaire">
                                    <div>
                                        <a>- แพทย์เคยบอกท่านหรือไม่ว่าท่านมีการเจ็บป่วยเหล่านี้</a>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                    </div>
                                    <div class="title hide" id="div3">
                                        <a>- เริ่มเป็นเมื่อใด(วินิฉัยโดยแพทย์)</a>
                                        <div class="input">
                                            <input type="text" class="form-control" id="inputAddress"
                                                placeholder="2533">
                                        </div>
                                        <div class="title">
                                            <a>- ปัจจุบันท่านรับการรักษาสำหรับการเจ็บป่วยนี้อยู่หรือไม่</a>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">17.โรคตับอื่นๆ(ที่ไม่ใช่มะเร็ง)</label>
                                <div class="questionnaire">
                                    <div>
                                        <a>- แพทย์เคยบอกท่านหรือไม่ว่าท่านมีการเจ็บป่วยเหล่านี้</a>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                    </div>
                                    <div class="title hide" id="div3">
                                        <a>- เริ่มเป็นเมื่อใด(วินิฉัยโดยแพทย์)</a>
                                        <div class="input">
                                            <input type="text" class="form-control" id="inputAddress"
                                                placeholder="2533">
                                        </div>
                                        <div class="title">
                                            <a>- ปัจจุบันท่านรับการรักษาสำหรับการเจ็บป่วยนี้อยู่หรือไม่</a>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">18.ตับอักเสบ</label>
                                <div class="questionnaire">
                                    <div>
                                        <a>- แพทย์เคยบอกท่านหรือไม่ว่าท่านมีการเจ็บป่วยเหล่านี้</a>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                    </div>
                                    <div class="title hide" id="div3">
                                        <a>- เริ่มเป็นเมื่อใด(วินิฉัยโดยแพทย์)</a>
                                        <div class="input">
                                            <input type="text" class="form-control" id="inputAddress"
                                                placeholder="2533">
                                        </div>
                                        <div class="title">
                                            <a>- ปัจจุบันท่านรับการรักษาสำหรับการเจ็บป่วยนี้อยู่หรือไม่</a>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">19.โรคเม็ดเลือดแดงแตก</label>
                                <div class="questionnaire">
                                    <div>
                                        <a>- แพทย์เคยบอกท่านหรือไม่ว่าท่านมีการเจ็บป่วยเหล่านี้</a>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                    </div>
                                    <div class="title hide" id="div3">
                                        <a>- เริ่มเป็นเมื่อใด(วินิฉัยโดยแพทย์)</a>
                                        <div class="input">
                                            <input type="text" class="form-control" id="inputAddress"
                                                placeholder="2533">
                                        </div>
                                        <div class="title">
                                            <a>- ปัจจุบันท่านรับการรักษาสำหรับการเจ็บป่วยนี้อยู่หรือไม่</a>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">20.โรคโลหิตจํางหรือซีด</label>
                                <div class="questionnaire">
                                    <div>
                                        <a>- แพทย์เคยบอกท่านหรือไม่ว่าท่านมีการเจ็บป่วยเหล่านี้</a>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                    </div>
                                    <div class="title hide" id="div3">
                                        <a>- เริ่มเป็นเมื่อใด(วินิฉัยโดยแพทย์)</a>
                                        <div class="input">
                                            <input type="text" class="form-control" id="inputAddress"
                                                placeholder="2533">
                                        </div>
                                        <div class="title">
                                            <a>- ปัจจุบันท่านรับการรักษาสำหรับการเจ็บป่วยนี้อยู่หรือไม่</a>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">21.วัณโรค</label>
                                <div class="questionnaire">
                                    <div>
                                        <a>- แพทย์เคยบอกท่านหรือไม่ว่าท่านมีการเจ็บป่วยเหล่านี้</a>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                    </div>
                                    <div class="title hide" id="div3">
                                        <a>- เริ่มเป็นเมื่อใด(วินิฉัยโดยแพทย์)</a>
                                        <div class="input">
                                            <input type="text" class="form-control" id="inputAddress"
                                                placeholder="2533">
                                        </div>
                                        <div class="title">
                                            <a>- ปัจจุบันท่านรับการรักษาสำหรับการเจ็บป่วยนี้อยู่หรือไม่</a>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">22.ความผิดปกติทางจิต(ซึมเศร้า,
                                    โรคประสาท,
                                    จิตเภท)</label>
                                <div class="questionnaire">
                                    <div>
                                        <a>- แพทย์เคยบอกท่านหรือไม่ว่าท่านมีการเจ็บป่วยเหล่านี้</a>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                    </div>
                                    <div class="title hide" id="div3">
                                        <a>- เริ่มเป็นเมื่อใด(วินิฉัยโดยแพทย์)</a>
                                        <div class="input">
                                            <input type="text" class="form-control" id="inputAddress"
                                                placeholder="2533">
                                        </div>
                                        <div class="title">
                                            <a>- ปัจจุบันท่านรับการรักษาสำหรับการเจ็บป่วยนี้อยู่หรือไม่</a>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="inputAddress"
                                    class="form-label">23.ท่านเคยได้รับการผ่าตัดเปลี่ยนอวัยวะ</label>
                                <div class="questionnaire">
                                    <div>
                                        <a>- แพทย์เคยบอกท่านหรือไม่ว่าท่านมีการเจ็บป่วยเหล่านี้</a>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                    </div>
                                    <div class="title hide" id="div3">
                                        <a>- เริ่มเป็นเมื่อใด(วินิฉัยโดยแพทย์)</a>
                                        <div class="input">
                                            <input type="text" class="form-control" id="inputAddress"
                                                placeholder="2533">
                                        </div>
                                        <div class="title">
                                            <a>- ปัจจุบันท่านรับการรักษาสำหรับการเจ็บป่วยนี้อยู่หรือไม่</a>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">24.โรคไทรอยด์(ที่ไม่ใช่มะเร็ง)</label>
                                <div class="questionnaire">
                                    <div>
                                        <a>- แพทย์เคยบอกท่านหรือไม่ว่าท่านมีการเจ็บป่วยเหล่านี้</a>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                    </div>
                                    <div class="title hide" id="div3">
                                        <a>- เริ่มเป็นเมื่อใด(วินิฉัยโดยแพทย์)</a>
                                        <div class="input">
                                            <input type="text" class="form-control" id="inputAddress"
                                                placeholder="2533">
                                        </div>
                                        <div class="title">
                                            <a>- ปัจจุบันท่านรับการรักษาสำหรับการเจ็บป่วยนี้อยู่หรือไม่</a>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">25.โรคเก้าท์</label>
                                <div class="questionnaire">
                                    <div>
                                        <a>- แพทย์เคยบอกท่านหรือไม่ว่าท่านมีการเจ็บป่วยเหล่านี้</a>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                    </div>
                                    <div class="title hide" id="div3">
                                        <a>- เริ่มเป็นเมื่อใด(วินิฉัยโดยแพทย์)</a>
                                        <div class="input">
                                            <input type="text" class="form-control" id="inputAddress"
                                                placeholder="2533">
                                        </div>
                                        <div class="title">
                                            <a>- ปัจจุบันท่านรับการรักษาสำหรับการเจ็บป่วยนี้อยู่หรือไม่</a>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">26.ท่านเคยมีกระดูกสันหลังยุบ</label>
                                <div class="questionnaire">
                                    <div>
                                        <a>- แพทย์เคยบอกท่านหรือไม่ว่าท่านมีการเจ็บป่วยเหล่านี้</a>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                    </div>
                                    <div class="title hide" id="div3">
                                        <a>- เริ่มเป็นเมื่อใด(วินิฉัยโดยแพทย์)</a>
                                        <div class="input">
                                            <input type="text" class="form-control" id="inputAddress"
                                                placeholder="2533">
                                        </div>
                                        <div class="title">
                                            <a>- ปัจจุบันท่านรับการรักษาสำหรับการเจ็บป่วยนี้อยู่หรือไม่</a>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">27.โรคข้อเข่าเสื่อม
                                    (osteoarthritis)</label>
                                <div class="questionnaire">
                                    <div>
                                        <a>- แพทย์เคยบอกท่านหรือไม่ว่าท่านมีการเจ็บป่วยเหล่านี้</a>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                    </div>
                                    <div class="title hide" id="div3">
                                        <a>- เริ่มเป็นเมื่อใด(วินิฉัยโดยแพทย์)</a>
                                        <div class="input">
                                            <input type="text" class="form-control" id="inputAddress"
                                                placeholder="2533">
                                        </div>
                                        <div class="title">
                                            <a>- ปัจจุบันท่านรับการรักษาสำหรับการเจ็บป่วยนี้อยู่หรือไม่</a>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">28.โรคกระดูกพรุน (Osteoporosis)</label>
                                <div class="questionnaire">
                                    <div>
                                        <a>- แพทย์เคยบอกท่านหรือไม่ว่าท่านมีการเจ็บป่วยเหล่านี้</a>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                    </div>
                                    <div class="title hide" id="div3">
                                        <a>- เริ่มเป็นเมื่อใด(วินิฉัยโดยแพทย์)</a>
                                        <div class="input">
                                            <input type="text" class="form-control" id="inputAddress"
                                                placeholder="2533">
                                        </div>
                                        <div class="title">
                                            <a>- ปัจจุบันท่านรับการรักษาสำหรับการเจ็บป่วยนี้อยู่หรือไม่</a>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">ใช่</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">ไม่ใช่</label>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="col-12">
                                <label for="inputAddress" class="form-label">28.1ถ้าเคยเป็นโรคกระดูกพรุน
                                    แพทย์บอกว่าเกิดจากสาเหตุ(ตอบได้มากกว่า 1 ข้อ)</label>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        1.เป็นเบาหวานก่อนอายุ 40 ปี
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        2.กระดูกผิดปกติตั้งแต่กำเนิด
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        3.ไทรอยด์เป็นพิษและไม่ได้รักษา
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        4.กินไทรอยด์ ฮอร์โมน
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        5.ตัดรังไข่หรืออัณฑะออกแล้วระบุปีพ ศ...................
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        6.มีฮอร์โมนเพศน้อยกว่าคนในวัยเดียวกัน
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        7.ทุพโภชนาการ
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        8.โรคตับเรื้อรัง
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        9.ไม่ทราบสาเหตุ
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        10.สาเหตุอื่นๆ
                                    </label>
                                </div>
                            </div>


























                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>





                    </div>
                </div>

                <br>
                <div class="d-flex justify-content-between g-3">
                    <button type="button" onclick="window.location.href='{{url('/index')}}'" class="btn btn-primary">
                        <i class="bi bi-arrow-left-circle-fill"></i>
                        กลับหน้าหลักของแบบประเมิน
                    </button>
                    <button type="button" onclick="window.location.href='{{url('form3')}}'"
                        class="btn btn-primary">หน้าถัดไป
                        <i class="bi bi-arrow-right-circle-fill"></i>
                    </button>
                </div>
            </div>
        </div>
    </section><!-- End Hero -->
</x-app-layout>