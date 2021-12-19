<?php
// Load file koneksi.php
include "../config/koneksi.php";

// Ambil Data yang Dikirim dari Form
$emailtujuan        = $_POST['emailtujuan'];
$peserta_didik_id         = $_POST['peserta_didik_id'];
$nama                 = $_POST['nama'];
$jenis_kelamin                = $_POST['jenis_kelamin'];
$nisn     = $_POST['nisn'];
$nik     = $_POST['nik'];
$agama_id     = $_POST['agama_id'];
$tempat_lahir     = $_POST['tempat_lahir'];
$tanggal_lahir     = $_POST['tanggal_lahir'];
$alamat_jalan     = $_POST['alamat_jalan'];
$nama_dusun     = $_POST['nama_dusun'];
$desa_kelurahan     = $_POST['desa_kelurahan'];
$kode_pos     = $_POST['kode_pos'];
$nama_ayah     = $_POST['nama_ayah'];
$nama_ibu_kandung     = $_POST['nama_ibu_kandung'];
$last_sync     = $_POST['last_sync'];

     //kirim email
error_reporting(E_ALL);
require 'PHPMailer/src/PHPMailer.php' ;
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';
$mail =  new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP(); 
    $mail->IsHTML(true);
    $mail->SMTPAuth 	= true; 
    $mail->Host 		= "myfilearchive.xyz";
    $mail->Port 		= 465;
    $mail->SMTPSecure 	= "ssl";
    $mail->Username 	= "admin@myfilearchive.xyz"; //username SMTP
    $mail->Password 	= "MyFiLeArChIvE";   //password SMTP
	$mail->From    		= "admin@myfilearchive.xyz"; //sender email
	$mail->FromName 	= "MyFileArcive";      //sender name
	$mail->AddAddress("$emailtujuan", "Archiver");//recipient: email and name
	$mail->Subject  	=  "Request Data $nama";
    $mail->Body    = "
<html>
<head>
  <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
  <meta property='og:title' content='Proto.io Email Template'>
  <title>Proto.io Email Template</title>
  <style type='text/css'>
    #outlook a{
      			padding:0;
      		}
      		body{
      			width:100% !important;
      			-webkit-text-size-adjust:none;
      			margin:0;
      			padding:0;
      		}
      		img{
      			border:none;
      			font-size:14px;
      			font-weight:bold;
      			height:auto;
      			line-height:100%;
      			outline:none;
      			text-decoration:none;
      			text-transform:capitalize;
      		}
      		#backgroundTable{
      			height:100% !important;
      			margin:0;
      			padding:10px;
      			width:100% !important;
      		}
      		body,.backgroundTable{
      			background-color:rgba(235,235,235,0.59);
      		}
      		h1,.h1{
      			color:#000;
      			display:block;
      			font-family:Open Sans,Arial;
      			font-size:24px;
      			font-weight:lighter;
      			line-height:100%;
      			margin-bottom:30px;
      			text-align:left;
      		}
      		h2,.h2{
      			color:#000;
      			display:block;
      			font-family:Open Sans,Arial;
      			font-size:22px;
      			font-weight:lighter;
      			line-height:100%;
      			margin-bottom:20px;
      			text-align:left;
      		}
      		h3,.h3{
      			color:#000;
      			display:block;
      			font-family:Open Sans,Arial;
      			font-size:18px;
      			font-weight:lighter;
      			line-height:100%;
      			margin-bottom:10px;
      			text-align:left;
      		}
      		h4,.h4{
      			color:#000;
      			display:block;
      			font-family:Open Sans,Arial;
      			font-size:14px;
      			font-weight:bold;
      			line-height:100%;
      			margin-bottom:10px;
      			text-align:left;
      		}
      		.preheaderContent div{
      			color:#fff;
      			font-family:Open Sans,Arial;
      			font-size:10px;
      			line-height:100%;
      			text-align:left;
      		}
      		.preheaderContent div a:link,.preheaderContent div a:visited{
      			color:#00A1C0;
      			font-weight:normal;
      			text-decoration:underline;
      		}
      		.preheaderContent div img{
      			height:auto;
      			max-width:600px;
      		}
      		#templateContainer{
      			background:white;
      		}
      		#templateHeader{
      			background-color:#FFFFFF;
      			border-bottom:0;
      			max-width:520px;
      			width:100%;
      		}
      		.themeBack{
      			max-width:600px;
      			padding:36px 0 189px 0;
      			background:no-repeat center auto 100%;
      		}
      		.headerContent{
      			color:#000;
      			font-family:Open Sans, Arial;
      			font-size:11px;
      			font-weight:bold;
      			line-height:100%;
      			padding:30px 20px 0px 20px;
      			vertical-align:middle;
      		}
      		.headerContent a:link,.headerContent a:visited{
      			color:#00A1C0;
      			font-weight:normal;
      			text-decoration:underline;
      		}
      		#headerImage{
      			height:auto;
      			max-width:600px !important;
      		}
      		.bodyContent{
      			background-color:#fff;
      		}
      		.bodyContent .bodyContentArea{
      			margin:50px 20px 0px 20px;
      			padding-bottom:30px;
      			color:#000;
      			font-family:Open Sans,Arial;
      			font-size:12px;
      			line-height:150%;
      			text-align:left;
      			border-bottom:1px solid #EBEBEB;
      		}
      		.bodyContent .bodyContentArea a:link,.bodyContent .bodyContentArea a:visited{
      			color:#00A1C0;
      			font-weight:normal;
      			text-decoration:underline;
      		}
      		.bodyContent img{
      			display:inline;
      			margin-bottom:10px;
      		}
      		.bodyContent li{
      			color:#00A1C0;
      			padding-bottom:5px;
      			padding-top:5px;
      		}
      		.bodyContent li span{
      			color:#222222;
      		}
      		.bodyContent .btn{
      			border:1px solid #00A1C0;
      			padding:10px;
      			text-align:center;
      		}
      		.bodyContent .bodyContentArea .btn a:link,.bodyContent .bodyContentArea .btn a:visited{
      			text-decoration:none;
      		}
      		.bodyContent .btn span{
      			color:#00A1C0;
      			text-transform:uppercase;
      			margin:0 20px;
      			font-size:14px;
      			font-family:Open Sans,Arial;
      		}
      		.bodyContent .btnOuterDark .btn{
      			background:#00A1C0;
      		}
      		.bodyContent .btnOuterDark .btn span{
      			color:white;
      		}
      		#templateFooter{
      			border-top:0;
      		}
      		.footerContent div{
      			color:rgba(235,235,235,0.59);
      			font-family:Open Sans, Arial;
      			font-size:12px;
      			line-height:125%;
      			text-align:left;
      		}
      		.footerContent div a:link,.footerContent div a:visited{
      			color:#00A1C0;
      			font-weight:normal;
      			text-decoration:underline;
      		}
      		.footerContent img{
      			display:inline;
      		}
      		#learnMore{
      			background-color:#fff;
      			color:#000;
      		}
      		#learnMore div{
      			color:#000;
      			font-size:10px;
      			line-height:165%;
      			text-align:center;
      		}
      		#social{
      			background-color:#fff;
      			padding:0 0 20px 0;
      		}
      		#social img{
      			padding:0 4px;
      		}
      		#addressArea{
      			border-top:1px solid #F5F5F5;
      			background:#f2f2f2;
      		}
      		#addressArea div{
      			text-align:center;
      			color:#606060;
      			font-family:Open Sans, Arial;
      			font-size:10px;
      			line-height:165%;
      		}
      		#addressArea div a:link,#addressArea div a:visited{
      			color:#404040;
      			font-weight:normal;
      			text-decoration:underline;
      			font-family:Open Sans,Arial;
      		}
      		.bodyContent .bodyContentArea .usefullLinks{
      			margin:0 auto;
      			text-align:center;
      			width:100%;
      		}
      		.bodyContent .bodyContentArea .usefullLinks a:link,.bodyContent .bodyContentArea .usefullLinks a:visited{
      			text-decoration:none;
      		}
      	@media only screen and (min-device-width: 480px){
      		#learnMore div{
      			padding:0 30px;
      		}
      
      }
  </style>
</head>

<body leftmargin='0' marginwidth='0' topmargin='0' marginheight='0' offset='0' style='-webkit-text-size-adjust: none;margin: 0;padding: 0;background-color: rgba(235,235,235,0.59);width: 100% !important;'>
  <center>
    <table border='0' cellpadding='0' cellspacing='0' height='100%' width='100%' id='backgroundTable' style='margin: 0;padding: 10px;height: 100% !important;width: 100% !important;'>
      <tr>
        <td align='center' valign='top'>
          <table border='0' cellpadding='0' cellspacing='0' style='max-width: 600px;background: white;' id='templateContainer'>
            <tr>
              <td align='center' valign='top'>
                <img align='none' src='https://i.imgur.com/jRHYSBX.png' style='width: 100%;max-width: 600px;border: none;height: auto;line-height: 100%;outline: none;text-decoration: none;font-size: 14px;font-weight: bold;text-transform: capitalize;'>
              </td>
            </tr>
            <tr>
              <td align='center' valign='top'>
                <table border='0' cellpadding='0' cellspacing='0' style='max-width:520px;' id='templateBody'>
                  <tr>
                    <td valign='top' class='bodyContent' style='background-color: #fff;'>
                      <table border='0' cellpadding='0' cellspacing='0' width='100%'>
                        <tr>
                          <td valign='top'>
                            <div class='bodyContentArea' style='margin: 50px 20px 0px 20px;padding-bottom: 30px;color: #000;font-family: Open Sans,Arial;font-size: 12px;line-height: 150%;text-align: left;border-bottom: 1px solid #EBEBEB;'>Halo Archiver!,
                              <br>
                              <br>Berikut ini data atas nama $nama yang kamu inginkan, mohon dipakai dengan bijak data ini.
                              <br>
                              <br>
                              Id Peserta Didik  : $peserta_didik_id
                              <br>
                              Nama Lengkap  : $nama
                              <br>
                              Jenis Kelamin : $jenis_kelamin
                              <br>
                              NISN  : $nisn
                              <br>
                              NIK   : $nik
                              <br>
                              Agama : $agama_id
                              <br>
                              Tempat Lahir : $tempat_lahir
                              <br>
                              Tanggal Lahir : $tanggal_lahir
                              <br>
                              Alamat : $alamat_jalan
                              <br>
                              Kecamatan : $nama_dusun
                              <br>
                              Kelurahan : $desa_kelurahan
                              <br>
                              Kode Pos : $kode_pos
                              <br>
                              Nama Ayah : $nama_ayah
                              <br>
                              Nama Ibu Kandung : $nama_ibu_kandung
                              <br>
                              Last Sync : $last_sync
                              <br>
                              <br>
                              <br>Terima Kasih,
                              <br>
                              <br> <span class='h4' style='color: #000;display: block;font-family: Open Sans,Arial;font-size: 14px;font-weight: bold;line-height: 100%;margin-bottom: 10px;text-align: left;'>-MyFileArchive-</span>

                            </div>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
            <tr>
              <td align='center' valign='top'>
                <img src='https://imgur.com/ltGulZX.png' style='margin: 20px auto 0px auto;width: 150px;height: 50px;border: none;font-size: 14px;font-weight: bold;line-height: 100%;outline: none;text-decoration: none;text-transform: capitalize;max-width: 800px !important;'
                  id='headerImage'>
                <table border='0' cellpadding='0' cellspacing='0' style='max-width: 700px;border-top: 0;' id='templateFooter'>
                  <tr>
                    <td valign='top' class='footerContent'>
                      <table border='0' cellpadding='20' cellspacing='0' width='100%'>

                        <tr>
                          <td valign='middle' id='social' style='background-color: #fff;padding: 0 0 20px 0;'>
                            <center>

                            </center>
                          </td>
                        </tr>
                        <tr>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
          <br>
        </td>
      </tr>
    </table>
  </center>
</body>

</html>";
	
    //$mail->AddAttachment("/cpanel.png","filesaya");
    if(!$mail->Send()) {
        echo "Message could not be sent.  ";
        echo "Mailer Error: " . $mail->ErrorInfo;
        exit; 
      } //echo getcwd(); 
     header("Location:../index.php?pesan=berhasil") //redirects to a page named index.php;

?>