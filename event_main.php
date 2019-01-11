<!DOCTYPE html>
<html>
<head>
	<title>Seminar Impor Zaman Now! Tinggal Klik!</title>
	<link rel="stylesheet" type="text/css" href="asset/css/main.css">
	<link rel="stylesheet" type="text/css" href="asset/css/slide.css">
  <style media="screen">
    table img{
      width: 200px;
      height: auto;
    }

    table td{
      vertical-align:top;
    }
    a{
      text-decoration: none;
      color: black;
    }
  </style>
</head>
<body>
	<div id="container">
		<div>
			<?php include "asset/navbar.php";?>
		</div>

    <div id="konten">
			<div id="main_konten">
        <a href="event2.php">
          <table>
            <tr>
              <td rowspan="2"><img src="event/event_2.jpg"></td>
              <td height="30px;"> <h4>Seminar Impor Zaman Now! Tinggal Klik!</h4> </td>
            </tr>
            <tr>
              <td width="600px">Setiap orang tua pasti ingin memberikan hadiah terbaik utk anak-anaknya, seperti Liburan keluar negeri, mobil, ataupun gadget terbaru.</td>
            </tr>
          </table>
        </a>

        <hr>

        <a href="event3.php">
          <table>
            <tr>
              <td rowspan="2"><img src="event/event_3.jpg"></td>
              <td height="30px;"> <h4>Beyond Artch Space 2018</h4> </td>
            </tr>
            <tr>
              <td width="600px">Hollaa Good People! Get yourself ready for BAS 2018! 30 November 2018 – 15 Desember.</td>
            </tr>
          </table>
        </a>

        <hr>

        <a href="event4.php">
          <table>
            <tr>
              <td rowspan="2"><img src="event/event_4.jpg"></td>
              <td height="30px;"> <h4>Seminar Perencanaan Keuangan Masa Kini</h4> </td>
            </tr>
            <tr>
              <td width="600px">Apa sih masalah keuangan yang sering dihadapi saat ini?</td>
            </tr>
          </table>
        </a>

			</div>
			<div id="sidebar">
				<?php include 'asset/sidebar.php';?>
			</div>
		</div>
		<div id="clear"></div>
		<div id="footer">
			<?php include'asset/footer.php'; ?>
		</div>
	</div>
</body>
</html>
