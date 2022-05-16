  <script src="../assets/modules/sweetalert/sweet2.js"></script>
  <link rel="stylesheet" href="../assets/modules/sweetalert/sweet2.css">

  <?php
    include 'connect.php';

    $tipe = $_GET['type'];
    $id = $_GET['id'];

    $sql = mysqli_query($conn, "DELETE FROM $tipe WHERE id='$id'");
    ?>
  <script>
      setTimeout(function() {
          swal({
              title: "Sukses",
              text: "Hapus data berhasil!",
              type: "success"
          }, function() {
              <?php
                if ($tipe == "ruang_inap") {
<<<<<<< HEAD
                    echo 'window.location.href="../ruangan.php";';
=======
                    echo 'window.location.href="../ruangan_admin.php";';
>>>>>>> Master
                } else {
                    echo 'window.location.href="../'.$tipe.'.php";';
                }
                ?>
          });
      }, 500);
  </script>