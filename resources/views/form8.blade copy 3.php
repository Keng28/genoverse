<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>test</title>
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
  </head>
  
  <style>
    .dvtext {
      display: none;
    }
  </style>

  <body>
    <div>
      <form id="myForm1">
        <input type="radio" name="1" value="somethings">somethings <br />
        <input type="radio" name="1" value="Other" Checked>Other
        <div class="dvtext1">
          <input type="text" class="txtBox" />
        </div>
        <br />
        <!-- <input type="radio" name="2" value="somethings">somethings <br />
        <input type="radio" name="2" value="Other" Checked>Other
        <div class="dvtext2">
          <input type="text" class="txtBox" />
        </div> -->
      </form>
    </div>


    <script>
      var value = $('input[name=1]:checked', '#myForm1').val()
      
      if (value == "Other") {
        $('.dvtext1').show();
      } else {
        $('.dvtext1').hide();
      }

      // var value2 = $('input[name=2]:checked', '#myForm1').val()
      // if (value2 == "Other") {
      //   $('.dvtext2').show();
      // } else {
      //   $('.dvtext2').hide();

      // }

      $("input[name=1]").on("change", function() {
        ($(this).val() == "Other") ? $(this).siblings(".dvtext1").show(): $(this).siblings(".dvtext1").hide()
      })

      // $("input[name=2]").on("change", function() {
      //   ($(this).val() == "Other") ? $(this).siblings(".dvtext2").show(): $(this).siblings(".dvtext2").hide()
      // })

    </script>
  </body>
</html>