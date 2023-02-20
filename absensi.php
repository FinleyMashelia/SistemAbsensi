
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Daily Employee Attendance</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="css/absen.css">
</head>
<body>
	<br>
	<br>
	<br>
	<br>
   <h1>Absensi Magang Diskominfo</h1>
   <form action="" onkeydown="return event.key!= 'Enter';">
     <h3>Kode Absensi</h3>
     <p>
     <input type="text" id="att_barcode">
     <p id="att_barcode2"></p>
     </p>
     <p>
     <button type="button" id="btn_clear" class="btn btn-success"><span class="glyphicon glyphicon-remove"></span>  Clear Barcode</button>
     <a href="user_page.php" class="btn btn-primary">KEMBALI</a>
     </p>
     <div id="result"></div>
   </form>
<script>
$(document).ready(function(){
   $('#att_barcode').val("").focus();
   $('#att_barcode').keyup(function(e){
     var theBarcode = $('#att_barcode').val();
     console.log(theBarcode);
     if(theBarcode !=="" && e.keyCode===13){
        //ajax
        $.ajax({
          url: "page2.php",
          type: "POST",
          data: {"att_barcode":theBarcode},
          beforeSend:function(response){
             $('#result').html("<p>Sedang memproses data, silahkan tunggu...</p>");
          },
          success: function(data){
             $("#result").html(data);
          }
        });   
        $('#att_barcode').val("");
        $('#att_barcode2').html("<b>" + theBarcode + "</b>");
     }
   });
   $('#btn_clear').click(function(){
     $('#att_barcode').val("").focus();
     $('#att_barcode2').html("");
   });
});

</script>
</body>
</html>