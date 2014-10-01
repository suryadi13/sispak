<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="user-scalable=no,widht=device-width"/>
<link rel="stylesheet" href="css/themes/default/jquery.mobile-1.4.3.min.css">
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
<script src="js/jquery-1.9.1.js"></script>
<script src="js/jquery.mobile-1.4.3.min.js"></script>
</head>

<body>
<div data-role="page" id="home">
  <div data-role="header">
      <h1><img src="jquery.mobile/images/header.jpg" width="354" height="117"></h1>
  </div>
  <fieldset>
  <div data-role="fieldcontain">
  
  <label for="nama">Nama</label>
  <input type="text" name="nama" id="nama" />
  
   <label for="umur">Umur</label>
  <input type="text" name="umur" id="umur" />
  
   <label for="tanggal">Tanggal rekam</label>
  <input type="text" name="tanggal" id="tanggal"  />
  
   <label for="tekanan">Tekanan Darah</label>
  <input name="tekanan" type="text" id="tekanan" size="4" maxlength="4" width="10px"/> 
  <input type="text" name="tekanan1" id="tekanan1" size="4" maxlength="4" width="10px"/>
  
  
  
    </div>
 <button type="submit" name="submit" id="submit" value="submit-value" data-icon=check data-iconpos="right">Simpan</button>
 </fieldset>
  <a href="home.php" data-role="button" data-icon="arrow-l" data-iconpos="right"> Back </a>
    
    <div data-role="footer">
    <h4>@2014 Design by Yusvian</h4>
  </div>
</div>
</body>
</html>
