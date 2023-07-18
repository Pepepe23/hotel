<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Rekap</title>
    <?php
 
    include 'alerts.php';
    include 'koneksi.php';


    //     $sql = mysql_query("SELECT id, nama, jns_kel, notelp, jalan, kota, provinsi, kd_pos, keterangan FROM kamar");
    $sql = "SELECT id, nama, jns_kel, notelp, jalan, kota, provinsi, kd_pos, keterangan, no_kamar FROM tamu ORDER BY id DESC";
    $result = $koneksi->query($sql) 
    // $sql1 = mysql_query("SELECT no_kamar, tipe_kamar, jml_ranjang FROM kamar ORDER BY no_kamar DESC");
    ?>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/datepicker.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
  </head>
  <body>
    <div class="container">
      <?php include 'navuser.php'; ?>
      <div class="row">
        <div class="col-lg-12">
          <div class="page-header">
          </div>
        </div>
      </div>
      <div class="row">
      	<div class="col-md-12">
          <div class="panel panel-primary">
        <div class="panel-body">
      		 <table class="table table-hover table-bordered">
      			<thead>
      			  <tr class="info">
                  <th>No</th>
                  <th>No. Ktp</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Telephone</th>
                  <th>No Kamar</th>
                  <th>Keterangan</th>
      				</tr>
      			</thead>
            <tbody>

                <?php
                $no=1;
                ?>
                <?php while ($row = $result->fetch_assoc()) { ?>
                <tr class="striped">
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['kota']; ?></td>
                    <td><?php echo $row['notelp']; ?></td>
                    <td><?php echo $row['no_kamar']; ?></td>
                    <td><?php echo $row['keterangan']; ?></td>
              </tr>
                <?php   }   ?>
          </tbody>
      		</table>
          </div>
        </div>
      </div>
    </div>
    <div class="col">
				<a href="logout.php" class="btn btn-danger btn-sm d-flex justify-content-center"> Logout </a>
			</div>
  </body>
</html>
