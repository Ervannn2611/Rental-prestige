<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Form</title>
</head>
<style>
    a{
     text-decoration: none;
    } 

     body {
         max-width: 700px;
         margin: 0 auto;
         padding: 20px;
     }
     body {
         font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
         background-color: #f2f2f2;
         padding: 20px;
     }

     .container-md {
         font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
         font-weight: 200 ;
         text-align: center;
         color: #000000;
         margin-bottom: 20px;
         background-color: #ff9c08;
         padding: 20px;
         border-radius: 5px;
         box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
         text-align: center;
       
     }.navbar-brand {
         font-weight: 100;       
         font-size: 1.5rem;
     }


     label {
         display: block;
         margin-bottom: 5px;
     }

     form {
         display: grid;
         grid-template-columns: repeat(2, 1fr);
         gap: 10px;
     }

     input[type="text"],
     input[type="number"],
     select {
         width: 100%;
         padding: 10px;
         margin-bottom: 10px;
         border-radius: 5px;
         border: 1px solid #ddd;
     }

     input[type="submit"] {
         background-color: #4CAF50;
         color: #fff;
         padding: 10px 20px;
         border: none;
         border-radius: 5px;
         cursor: pointer;
     }

     input[type="submit"]:hover {
         background-color: #45a049;
     }

     label {
         display: block;
         margin-bottom: 10px;
     }

     input[type="text"],
     input[type="number"],
     select {
         width: 100%;
         padding: 10px;
         margin-bottom: 20px;
     }

     #tipe_mobil-box {
         
     }

     #kirim {
         background-color: #4CAF50;
         color: white;
         padding: 14px 20px;
         border: none;
         cursor: pointer;
         width: 100%;
     }

     #kirim:hover {
         background-color: #ff9c08;
         opacity: 0.7;
     }
     .buton{
         border-radius: 5px;
         border: 1px solid #ddd;
     }

     .buton a {
         display: block;
         text-align: center;
         background-color: #ff0000;
         color: #fff;
         border-radius: 5px;
         cursor: pointer;
         padding: 14px 20px;
         border: none;
         cursor: pointer;
         width: 100%;
         height: 100%;
         color: #fff;
         text-decoration: none;
     }

     .buton a:hover{
         background-color: #ff9c08;
         opacity: 0.7;
     }
 </style>
<body>
    <div class="container-md">
        <a class="navbar-brand mt-3" href="#"><strong>RENTAL MOBIL PRESTIGE</strong></a>
    </div>
    <form action="detail.php" method="post">
        <div>
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" required>
        </div>
        <div>
            <label for="alamat">Alamat</label> 
            <input type="text" id="alamat" name="alamat" required>
        </div>
        <div>
            <label for="telp">No Telp</label> 
            <input type="text" id="telp" name="telp" required>
        </div>
        <div>
            <label for="sewa">Paket hari</label>
            <input type="number" id="sewa" name="sewa" min="0" required>
        </div>
        <div>
            <label for="pengambilan">Tanggal Sewa Mobil</label>
            <input type="date" id="pengambilan" name="pengambilan"  required>
        </div>
        <div>
            <label for="pengembalian">Tanggal Pengembalian Mobil</label>
            <input type="date" id="pengembalian" name="pengembalian" required>
        </div>
        <div id="tipe_mobil-box">
            <label for="tipe_mobil">Tipe Mobil</label>
            <select name="tipe" id="tipe" required>
                <option value="">pilih tipe mobil</option>
                <option value="mclaren">Mclaren</option>
                <option value="ferari">Ferari</option>
                <option value="rubicon">Rubiccon</option>
                <option value="lamborghini">Lambhorghini</option>
                <option value="bmw">BMW</option>
                <option value="tesla">Tesla</option>
            </select>
        </div>
        <div></div>
        <input type="submit" value="kirim" id="kirim">
        <div class="buton">
            <a href="rm.php">Kembali</a>
        </div>
    </form>
</body>
</html>
