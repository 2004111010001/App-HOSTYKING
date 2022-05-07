<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  $page = "Riwayat Pemeriksaan (Pasien)";
  
  session_start();
  include 'auth/connect.php';
  include "part/head.php";
  include "part_func/tgl_ind.php";
  include "part_func/umur.php";

  $sessionid = $_SESSION['id_pasien'];
  $nama = mysqli_query($conn, "SELECT * FROM pasien WHERE id=$sessionid");
  $output = mysqli_fetch_array($nama);
  if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $berat = $_POST['berat'];
    $tinggi = $_POST['tinggi'];
    $tgl = $_POST['tgl'];

    $up2 = mysqli_query($conn, "UPDATE pasien SET nama_pasien='$nama', tgl_lahir='$tgl', berat_badan='$berat', tinggi_badan='$tinggi' WHERE id='$id'");
    echo '<script>
				setTimeout(function() {
					swal({
					title: "Data Diubah",
					text: "Data Pasien berhasil diubah!",
					icon: "success"
					});
					}, 500);
				</script>';
  }
  ?>
</head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>

      <?php
      include 'part/navbar_pasien.php';
      include 'part/sidebar_pasien.php';
      ?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?php echo $page; ?></h1>
          </div>
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Diri Anda</h4>
                    <div class="card-header-action">
                      <a href="booking_pasien.php" class="btn btn-primary">Ajukan Booking!</a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="form-group row align-items-left">
                       <label class="col-md-4 text-md-right text-left">Nama Lengkap</label>
                       <div class="col-lg-4 col-md-6">
                         <input type="hidden" name="nama" class="form-control" required="" value="<?php echo ucwords($output['nama_pasien']); ?>">
                         <input type="text" class="form-control" required="" value="<?php echo ucwords($output['nama_pasien']); ?>" disabled>
                       </div>
                     </div>
                     <div class="form-group row">
                       <label class="col-md-4 text-md-right text-left">Tanggal lahir</label>
                       <div class="col-lg-4 col-md-6">
                         <input type="text" class="form-control datepicker" name="tgl" required="" value="<?php echo $output['tgl_lahir']; ?>" disabled>
                       </div>
                     </div>
                     <div class="form-group row">
                       <label class="col-md-4 text-md-right text-left col-form-label">Tinggi Badan</label>
                       <div class="input-group col-sm-6 col-lg-4">
                         <input type="number" class="form-control" name="tinggi" required="" value="<?php echo $output['tinggi_badan']; ?>" disabled>
                         <div class="invalid-feedback">
                           Mohon data diisi!
                         </div>
                         <div class="input-group-prepend">
                           <div class="input-group-text">
                             cm
                           </div>
                         </div>
                       </div>
                     </div>
                     <div class="form-group row">
                       <label class="col-md-4 text-md-right text-left col-form-label">Berat Badan</label>
                       <div class="input-group col-sm-6 col-lg-4">
                         <input type="number" class="form-control" name="berat" required="" value="<?php echo $output['berat_badan']; ?>" disabled>
                         <div class="invalid-feedback">
                           Mohon data diisi!
                         </div>
                         <div class="input-group-prepend">
                           <div class="input-group-text">
                             Kg
                           </div>
                         </div>
                       </div>
                     </div>
                     <div class="form-group row">
                       <label class="col-md-4 text-md-right text-left">Alamat</label>
                       <div class="col-lg-4 col-md-6">
                        <input type="number" class="form-control" name="berat" required="" value="<?php echo $output['alamat']; ?>" disabled>
                         <div class="invalid-feedback">
                           Mohon data diisi!
                         </div>
                       </div>
                     </div>
                     <form method="POST" action="detail_pasien.php">
                        <span data-target="#editPasien" data-toggle="modal" data-id="<?php echo $idpasien; ?>" data-nama="<?php echo $row['nama_pasien']; ?>" data-lahir="<?php echo $row['tgl_lahir']; ?>" data-tinggi="<?php echo $row['tinggi_badan']; ?>" data-berat="<?php echo $row['berat_badan']; ?>">
                          <a class="btn btn-primary btn-action mr-1" title="Edit Data Pasien" data-toggle="tooltip">Edit Data</a>
                        </span>
                      </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      <div class="modal fade" tabindex="-1" role="dialog" id="editPasien">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Edit Data</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="" method="POST" class="needs-validation" novalidate="">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Nama Pasien</label>
                  <div class="col-sm-9">
                    <input type="hidden" class="form-control" name="id" required="" id="getId">
                    <input type="text" class="form-control" name="nama" required="" id="getNama">
                    <div class="invalid-feedback">
                      Mohon data diisi!
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Tanggal lahir</label>
                  <div class="form-group col-sm-9">
                    <input type="text" class="form-control datepicker" id="getTgl" name="tgl">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Berat Badan</label>
                  <div class="input-group col-sm-9">
                    <input type="number" class="form-control" name="berat" required="" id="getBerat">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        Kg
                      </div>
                    </div>
                    <div class="invalid-feedback">
                      Mohon data diisi!
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Tinggi Badan</label>
                  <div class="col-sm-9 input-group">
                    <input type="number" class="form-control" name="tinggi" required="" id="getTinggi">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        cm
                      </div>
                    </div>
                    <div class="invalid-feedback">
                      Mohon data diisi!
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Alamat</label>
                  <div class="col-sm-9">
                    <textarea type="text" class="form-control" name="alamat" required="" id="getAlamat"></textarea>
                    <div class="invalid-feedback">
                      Mohon data diisi!
                    </div>
                  </div>
                </div>
            </div>
            <div class="modal-footer bg-whitesmoke br">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" name="submit">Edit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      </div>

      <?php include 'part/footer.php'; ?>
    </div>
  </div>
  <?php include "part/all-js.php"; ?>

  <script>
    $('#editPasien').on('show.bs.modal', function(event) {
      var button = $(event.relatedTarget)
      var nama = button.data('nama')
      var id = button.data('id')
      var tgl = button.data('lahir')
      var berat = button.data('berat')
      var tinggi = button.data('tinggi')
      var modal = $(this)
      modal.find('#getId').val(id)
      modal.find('#getNama').val(nama)
      modal.find('#getTgl').val(tgl)
      modal.find('#getBerat').val(berat)
      modal.find('#getTinggi').val(tinggi)
    })
  </script>
</body>

</html>