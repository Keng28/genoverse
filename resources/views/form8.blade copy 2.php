<!DOCTYPE html>
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
    <!--give outer divs to seprate-->
    <div>
        <input type="radio" name="1" value="" hidden checked>
        <input type="radio" name="1" value="somethings">somethings <br />
        <input type="radio" name="1" value="Other" checked>Other
        <!--use class-->
        <div class="dvtext">
            <input type="text" class="txtBox" />
        </div>
    </div>
    <div>
        <input type="radio" name="2" value="" hidden checked>
        <input type="radio" name="2" value="somethings">somethings <br />
        <input type="radio" name="2" value="Other" checked>Other
        <!--use class here-->
        <div class="dvtext">
            <input type="text" class="txtBox" />
        </div>
    </div>

    <script>
    $("input[type=radio]").on("change", function() {
        //check if radio is checked and value of checked one is `others`
        ($(this).val() == "Other") ? $(this).siblings(".dvtext").show(): $(this).siblings(".dvtext").hide()
    })
    
    $('input[type=radio]:checked').val(function() {
        ($(this).val() == "Other") ? $(this).siblings(".dvtext").show(): $(this).siblings(".dvtext").hide()
    });
   
    </script>    
</body>
</html>