</div>
<!-- BEGIN: JS Assets-->
<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
</script>
<script src="dist/js/app.js"></script>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- Classic Editor -->
<script src="dist/js/ckeditor-classic.js"></script>

<?php
if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
?>
<script>
Swal.fire({
    title: '<?= $_SESSION['status'];  ?>',
    icon: '<?= $_SESSION['status_icon'];  ?>',
    text: '<?= $_SESSION['status_info'];  ?>'
});
</script>
<?php
    unset($_SESSION['status']);
}
?>

<script>
$('#nilai_k').keyup(function() {
    $('div.text-danger').remove();
    var inputVal = $(this).val();
    var characterReg = /^\d+(\.\d+)*$/;
    if (!characterReg.test(inputVal)) {
        $(this).after('<div class="text-danger mt-2">Hanya Angka</div>');
    }
});
</script>

<script>
$(document).ready(function() {
    // dataTable Rekammedis
    $('#rekammedisTable').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "responsive": true,
        "language": {
            url: 'assets/json/id.json'
        }
    });

    // dataTable Pasien
    $('#pasienTable').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "responsive": true,
        "language": {
            url: 'assets/json/id.json'
        }
    });

    // dataTable Penyakit
    $('#penyakitTable').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "responsive": true,
        "language": {
            url: 'assets/json/id.json'
        }
    });

    // dataTable Gejala
    $('#gejalaTable').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "responsive": true,
        "language": {
            url: 'assets/json/id.json'
        }
    });

    // dataTable Obat
    $('#obatTable').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "responsive": true,
        "language": {
            url: 'assets/json/id.json'
        }
    });

    // dataTable Ruangan
    $('#ruanganTable').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "responsive": true,
        "language": {
            url: 'assets/json/id.json'
        }
    });

    // dataTable Training
    $('#trainingTable').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "responsive": true,
        "language": {
            url: 'assets/json/id.json'
        }
    });

    // dataTable Eucliden Distance
    $('#distanceTable').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "responsive": true,
        "language": {
            url: 'assets/json/id.json'
        }
    });

    // dataTable Rangking
    $('#rangkingTable').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "responsive": true,
        "language": {
            url: 'assets/json/id.json'
        }
    });

    // dataTable Gejala Training
    $('#gejalaTrainingTable').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "responsive": true,
        "language": {
            url: 'assets/json/id.json'
        }
    });

    // dataTable Gejala Testing
    $('#gejalaTestingTable').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "responsive": true,
        "language": {
            url: 'assets/json/id.json'
        }
    });

    // dataTable Blog
    $('#blogTable').DataTable({
        "paging": true,
        "lengthChange": false,
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

<script>
$(function() {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData = {
        labels: [<?php while ($chart = mysqli_fetch_array($sqlChart)) {
                            echo '"' . $chart['nama_penyakit'] . '",';
                        } ?>],
        datasets: [{
            data: [<?= $totISPA; ?>, <?= $totGASTRITIS; ?>, <?= $totDIARE; ?>,
                <?= $totDERMATITIS; ?>, <?= $totHIPERTENSI; ?>
            ],
            backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc'],
        }]
    }
    var donutOptions = {
        maintainAspectRatio: false,
        responsive: true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
    })

})
</script>

</body>

</html>