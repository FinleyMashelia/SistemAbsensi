
<html>
  <head>
  <style type="text/css">
 body{
  background: url(syulit.jpeg) no-repeat fixed; 
  -webkit-background-size: 100% 100%;
   -moz-background-size: 100% 100%;
   -o-background-size: 100% 100%;
   background-size: 100% 100%;
   background-position: center;
   font-style: normal;
}

</style>
    <title>ID Card magang</title>
    <meta name="author" description="Diskominfo" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">  
    <link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/styleidcard.css" />
    <link rel="stylesheet" href="css/bootstrap2.css">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
  </head>
  <body>                                   
  
  <a type="button" class="btn btn-primary btn-lg px-4 me-md-3 fw-bold" href="admin_page.php">KEMBALI</a>
    </a></button>
    <center>
      <div class="form-box">
        
        <h3>DATA ID CARD</h3>
        <div align="right">
          <button id="myBtn" class="btn btn-primary">Buat Baru</button>

        </div>
        <div id="data">
          <div id="field">
            <label><h3>Nama</h3></label>
            <input
              type="text"
              onkeyup="getting('name',this.value)"
              value=""
            />
          </div>
          <div id="field">
            <label><h3>expired Card</h3></label>
            <input
              type="date"
              onchange="getting('dob',this.value)"
              value="0000-00-00"
            />
          </div>
          <div id="field">
            <label><h3>Photo</h3></label>
            <input type="file" accept="image/*" onchange="loadFile(event)" />
          </div>
        </div>
        <div id="field">
          <label><h3>barcode</h3></label>
          <input type="file" accept="imagebarcode/*" onchange="loadbarcode(event)" />
        </div>
        <button class="btn btn-warning" onclick="print_id()">Export PDF</button>
      </div>
      <br /><br /><br />

      <br /><br /><br />
      
      <div id="student_id" class="id-card">
        
        
        <h3>ID Card Magang</h3>
        <div class="box">
          <div id="_data" class="left-box">
            <div id="field_data">
              <p>
                Name&nbsp;&nbsp;&nbsp;<span id="setname"></span>
              </p>
            </div>
            <div id="field_data">
              <p>Expired&nbsp;&nbsp;&nbsp;<span id="setdob">0000-00-00</span></p>
            </div>
            
          <div class="right-box">
            <div class="photos">
              <img
                style="width: 25%; height: 25%"
                id="student_image"
                src="avatar.jpg"
              />
            </div>
          </div>
          <br>
          <br>
          <div class="photobarcode">
            <img
              style="width: 25%; height: 10%"
              id="barcodes"
              src="avatar.jpg"
            />
        </div>
        </div>
      </div>
      <br />
      <br />
    </center>
    <div id="contentPopup" class="popup-wrapper">
      <!-- datanya boss qu -->
      <div class="popup-content">
        <span class="close">X</span>
        <div id="field">
          <label>tipe label</label>
          <input type="text" id="get_label" />
        </div>
        <div id="field">
          <label>tipe file</label>
          <select id="get_type">
            <option value="text">Text</option>
            <option value="date">Date</option>
            <option value="number">Integer</option>
          </select>
          <br />
          <br />
          <br />
          <div align="right">
            <button
              onclick="addfield()"
              style="background-color: rgb(85, 188, 84); color: white"
              class="add_btn"
            >
              Tambahkan
            </button>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script src="student.js"></script>
</html>
