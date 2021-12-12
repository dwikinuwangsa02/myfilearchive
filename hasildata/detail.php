<!DOCTYPE html>
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../login.php");
    exit;
}

?>
<?php
    if(isset($_GET['nisn'])){
        $nisn    =$_GET['nisn'];
    }
    else {
        die ("Dipilih Dulu Dong Datanya!");    
    }
    include "../config/koneksi.php";
    $query    =mysqli_query($conn, "SELECT * FROM peserta_didik WHERE nisn='$nisn'");
    $result    =mysqli_fetch_array($query);
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com    @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>HASIL PENCARIAN - <?php echo $result['nama']?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style type="text/css">
    	body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;    
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}

    </style>

<link rel="icon" type="image/png" sizes="192x192" href="../img/content/myfilearchive.png" />

</head>

<body>
<div class="container">
    <div class="main-body">
<div class="alert alert-danger" role="alert">
  JANGAN DIPAKE YANG ANEH ANEH YA DATANYA! <a href="../cek-data-siswa.php" class="alert-link">KLIK SINI</a> KALO MAU NYARI LAGI.
</div>
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://image.flaticon.com/icons/png/512/16/16363.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?php echo $result['nama']?></h4>
                      <form action="kirim-email.php" method="post" enctype="multipart/form-data">
			<input type="hidden" name="peserta_didik_id" value="<?php echo $result['peserta_didik_id']?>" required>
			<input type="hidden" name="nama" value="<?php echo $result['nama']?>" required>
			<input type="hidden" name="jenis_kelamin" value="<?php echo $result['jenis_kelamin']?>" required>
			<input type="hidden" name="nisn" value="<?php echo $result['nisn']?>" required>
      <input type="hidden" name="nik" value="<?php echo $result['nik']?>" required>
			<input type="hidden" name="agama_id" value="<?php echo $result['agama_id']?>" required>
			<input type="hidden" name="tempat_lahir" value="<?php echo $result['tempat_lahir']?>" required>
			<input type="hidden" name="tanggal_lahir" value="<?php echo $result['tanggal_lahir']?>" required>
			<input type="hidden" name="alamat_jalan" value="<?php echo $result['alamat_jalan']?>" required>
			<input type="hidden" name="nama_dusun" value="<?php echo $result['nama_dusun']?>" required>
			<input type="hidden" name="desa_kelurahan" value="<?php echo $result['desa_kelurahan']?>" required>
			<input type="hidden" name="kode_pos" value="<?php echo $result['kode_pos']?>" required>
			<input type="hidden" name="nama_ayah" value="<?php echo $result['nama_ayah']?>" required>
			<input type="hidden" name="nama_ibu_kandung" value="<?php echo $result['nama_ibu_kandung']?>" required>
			<input type="hidden" name="last_sync" value="<?php echo $result['last_sync']?>" required>
<br>

      <input class="form-control" type="text" name="emailtujuan" placeholder="Email Tujuan" required>
      <br>
			<input type="submit" class="btn btn-primary btn-lg btn-block" name="upload" value="Kirim Data Ke Email">

  
</form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Id Peserta Didik :</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $result['peserta_didik_id']?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nama Lengkap :</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $result['nama']?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Jenis Kelamin :</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $result['jenis_kelamin']?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">NISN :</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $result['nisn']?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">NIK :</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $result['nik']?>
                    </div>
                  </div>
				  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Agama :</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $result['agama_id']?>
                    </div>
                  </div>
				  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Tempat Lahir :</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $result['tempat_lahir']?>
                    </div>
                  </div>
				  <hr>
				  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Tanggal Lahir :</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $result['tanggal_lahir']?>
                    </div>
                  </div>
				  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Alamat Rumah :</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $result['alamat_jalan']?>
                    </div>
                  </div>
				  <hr>
				  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">RT :</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $result['rt']?>
                    </div>
                  </div>
				  <hr>
				  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">RW :</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $result['rw']?>
                    </div>
                  </div>
				  <hr>
				  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Kecamatan :</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $result['nama_dusun']?>
                    </div>
                  </div>
				  <hr>
				  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Kelurahan :</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $result['desa_kelurahan']?>
                    </div>
                  </div>
				  <hr>
				  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Kode Pos :</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $result['kode_pos']?>
                    </div>
                  </div>
				  <hr>
				  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Bujur :</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $result['bujur']?>
                    </div>
                  </div>
				  <hr>
				  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">NIK Ayah :</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $result['nik_ayah']?>
                    </div>
                  </div>
				  <hr>
				  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">NIK Ibu :</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $result['nik_ibu']?>
                    </div>
                  </div>
				  <hr>
				  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Anak Ke :</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $result['anak_keberapa']?>
                    </div>
                  </div>
				  <hr>
				  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">NIK Wali :</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $result['nik_wali']?>
                    </div>
                  </div>
				  <hr>
				  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">No Telepon Rumah :</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $result['nomor_telepon_rumah']?>
                    </div>
                  </div>
				  <hr>
				  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">No Telpon Seluler :</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $result['nomor_telepon_seluler']?>
                    </div>
                  </div>
				  <hr>
				  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">E-mail :</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $result['email']?>
                    </div>
                  </div>
				  <hr>
				  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Reg Akta Lahir :</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $result['reg_akta_lahir']?>
                    </div>
                  </div>
				  <hr>
				  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Rekening Bank :</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $result['rekening_bank']?>
                    </div>
                  </div>
				  <hr>
				  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nama KCP :</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $result['nama_kcp']?>
                    </div>
                  </div>
				  <hr>
				  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Rekening Atas Nama :</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $result['rekening_atas_nama']?>
                    </div>
                  </div>
				  <hr>	
				  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nama Ayah :</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $result['nama_ayah']?>
                    </div>
                  </div>
				  <hr>		
				  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Tahun Lahir Ayah :</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $result['tahun_lahir_ayah']?>
                    </div>
                  </div>
				  <hr>		
				  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nama Ibu Kandung :</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $result['nama_ibu_kandung']?>
                    </div>
                  </div>
				  <hr>		
				  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Tahun Lahir Ibu :</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $result['tahun_lahir_ibu']?>
                    </div>
                  </div>
				  <hr>		
				  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nama Wali :</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $result['nama_wali']?>
                    </div>
                  </div>
				  <hr>		
				  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Tahun Lahir Wali :</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $result['tahun_lahir_wali']?>
                    </div>
                  </div>
				  <hr>		
				  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Kewarganegaraan :</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $result['kewarganegaraan']?>
                    </div>
                  </div>
				  <hr>	
                </div>
              </div>
              <div class="row gutters-sm">
                
                
              </div>
            </div>
          </div>
        </div>
    </div>
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>