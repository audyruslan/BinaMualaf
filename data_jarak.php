<?php
$title = "Proses Algoritma - Puskesmas Bahodopi";
$menu = "Proses Algoritma";
require 'layouts/header.php';
require 'layouts/sidebar_mobile.php';
require 'layouts/sidebar.php';
?>
<div class="content">
    <?php require 'layouts/navbar.php'; ?>
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Proses Algoritma K-NN
        </h2>
    </div>
  
    <table id="distanceTable" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th class="whitespace-nowrap">No.</th>
            <th class="whitespace-nowrap">Nama Pasien</th>
            <?php 
                for($i = 0; $i < 22; $i++){
            ?>
            <th class="whitespace-nowrap"><?= $i ?></th>
            <?php } ?>
            <th class="whitespace-nowrap">Distance</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $i = 1;
            $sql = mysqli_query($conn, "SELECT * FROM tb_training 
            INNER JOIN tb_pasien ON tb_training.id_pasien=tb_pasien.id");
            while ($row = mysqli_fetch_assoc($sql)) {
                $id_training = $row["id_rm"]
            ?>
        <tr class="intro-x">
            <td class="w-20">
                <?= $i; ?>
            </td>
            <td><?= $row["nama_lengkap"]; ?></td>
            <?php 
                $query1 = mysqli_query($conn, "SELECT * FROM tb_gejala_training WHERE id_rm=$id_training");
                while ($result1 = mysqli_fetch_assoc($query1)) {    
                    echo "<td class='text-center'>$result1[id_gejala]</td>";
                }
            ?>
        </tr>

        <?php $i++; ?>
        <?php
            }
        ?>
    </tbody>
</table>

</div>


</div>
<!-- BEGIN: JS Assets-->
<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
</script>
<script src="dist/js/app.js"></script>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<script>
  $(function () {
    // dataTable Rekammedis
    $('#distanceTable').DataTable({
      "paging": true,
      "lengthChange": false,
      "autoWidth": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "responsive": true,
      "language": {
        url: 'assets/json/id.json'
        }
    });
  });
</script>

</body>

</html>