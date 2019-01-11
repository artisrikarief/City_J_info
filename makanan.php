<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Makanan</title>
    <link rel="stylesheet" type="text/css" href="asset/css/main.css">
    <link rel="stylesheet" type="text/css" href="asset/css/slide.css">
    <script src="asset/makanan.js"></script>
    <style media="screen">

    </style>
  </head>
  <body>
    <div id="container">
  		<div>
  			<?php include "asset/navbar.php";?>
  		</div>

      <div id="konten_makanan">
        <ul>
          <li onclick="asinan();"><img src="makanan/asinanbetawi.jpg" alt=""> <br> Asinan Betawi </li>
          <li onclick="bir();"><img src="makanan/birpletok.jpg" alt=""><br> Bir Pletok</li>
          <li onclick="dodolbetawi();"><img src="makanan/dodolbetawi.jpg" alt=""><br> Dodol Betawi </li>
          <li onclick="gadogado();"><img src="makanan/gadogadobetawi.jpg" alt=""><br> Gado-Gado Betawi</li>
          <li onclick="getuk();"><img src="makanan/getuklindri.jpg" alt=""><br> Getuk Lindri</li>
          <li onclick="kerak();"><img src="makanan/keraktelor.jpg" alt=""><br>Kerak Telor</li>

          <li onclick="sotobetawi();"><img src="makanan/sotobetawi.jpg" alt=""><br> Soto Betawi </li>
          <li onclick="semurjengkol();"><img src="makanan/semurjengkol.jpg" alt=""><br> Semur Jengkol </li>
          <li onclick="rotigambang();"><img src="makanan/rotigambang.jpg" alt=""><br> Roti Gambang </li>
          <li onclick="centemanis();"><img src="makanan/centemanis.jpg" alt=""><br> Kue Cente Manis </li>
          <li onclick="rotibuaya();"><img src="makanan/rotibuaya.jpg" alt=""><br> Roti Buaya </li>
          <li onclick="nasiudukbetawi();"><img src="makanan/nasiudukbetawi.jpg" alt=""><br> Nasi Uduk Betawi </li>
          <li onclick="kuetalam();"><img src="makanan/kuetalam.jpg" alt=""><br> Kue Talam </li>
          <li onclick="kuerangi();"><img src="makanan/kuerangi.jpg" alt=""><br> Kue Rangi </li>
          <li onclick="kuecucur();"><img src="makanan/kuecucur.jpg" alt=""><br> Kue Cucur </li>
        </ul>
      </div>
      <div id="deskripsi_makanan">
        <br>
        <h4 style="text-decoration:underline;margin-left:10px;">Deskripsi Makanan : </h4>
        <br>
        <div id="judul_makanan"></div>
        <div id="isi_makanan"></div>
      </div>
      <div class="clear"></div>
    </div>

      <script src="asset/makanan.js"></script>
  </body>
</html>
