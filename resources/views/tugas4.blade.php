<!DOCTYPE html>
<html>

<head>
  <title>Custom Feature Showcase</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function validateForm() {
      //   let x = document.forms["myForm"]["fname"].value;
      var name = document.getElementById("fname");
      var nrp = document.getElementById("nrp");
      // bahwa yang dicek cukup yang invalid
      // lakukan per jenis validasi, supaya user tahu salahnya apa

      if (name.value == "") { //isian kosong, berati text box tidak diisi/kosong
        alert("Nama harus diisi");
        name.focus();
        return false; //function ini ada return value, bukan void
        //Stop, gak dikirim ke server
      }
      if (nrp.value == "") { //isian kosong, berati text box tidak diisi/kosong
        alert("NRP harus diisi");
        nrp.focus();
        return false; //function ini ada return value, bukan void
        //Stop, gak dikirim ke server
      }
      if(isNaN(nrp.value) == true){
        alert("Isi menggunakan angka")
        nrp.focus();
        nrp.value = "";
        return false; //function ini ada return value, bukan void
        //Stop, gak dikirim ke server
      }
      if(nrp.value.length != 10){
        alert("Jumlah digit harus 10, anda memasukkan " + nrp.value.length + " digit!")
        nrp.focus();
        return false;
      }
      if(nrp.value.substring(0,4) != 5026){
        alert("Hanya untuk anak SI");
        nrp.focus;
        return false;
      }
      if(nrp.value.substring(4,6)!= 21 && nrp.value.substring(4,6)!= 22){
        alert("Hanya untuk angkatan 2021 & 2022");
        nrp.focus();
        return false;
      }
      return true; //boleh diberi boleh tidak, karena default function adalah true, pencegahan nilai ke false berfungsi supaya tidak jadi dikirimkan
    }
  </script>
</head>

<body>

  <h2>Pendaftaran Asisten Lab Sistem Informasi</h2>

  <form name="myForm" action="https://google.com" onsubmit="return validateForm()" method="post">
    <label for="fname">Name:</label>
    <input type="text" id="fname" name="fname" class="form-control">
    <label for="nrp">NRP:</label>
    <input type="text" id="nrp" name="nrp" class="form-control">
    <input type="submit" value="Submit" class="btn btn-primary">
    <input type="reset" value="kosongi" class="btn btn-warning">
  </form>

</body>

</html>
