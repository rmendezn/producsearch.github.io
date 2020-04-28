<?php
require_once 'conexion.php';

$id=$_GET['id'];

?>

<table id="TblProdLoc" class="display nowrap" style="width: 100% !important;">
    <thead>
      <tr align="center">
        <th>Product Name</th>
        <th>Row</th>
        <th>Rack</th>
        <th>Shelf</th>
        <th>Position</th>
        <th>Relocate</th>
      </tr>
    </thead>
    <tbody style="font-size: 1rem;">
    <?php
        $connC=conexion();
          $cont = 1;
          $sql1 = "SELECT * FROM relprodloc rpl LEFT JOIN product p ON rpl.id_product = p.id_product LEFT JOIN location l ON rpl.id_location = l.id_location WHERE rpl.id_product = '$id'";
          $sqlquery1 = mysqli_query($connC,$sql1);
        mysqli_close($connC);
        while ($row = mysqli_fetch_array($sqlquery1))
        {
        echo "<tr>";
        echo "<td align='center' id='idrel' hidden>".$row['id_rel']."</td>";
        echo "<td align='center'>".utf8_encode($row['nameProduct'])."</td>";
        echo "<td align='center'>".$row['rows']."</td>";
        echo "<td align='center'>".$row["racks"]."</td>";
        echo "<td align='center'>".$row['shelfs']."</td>";
        echo "<td align='center'>".$row['position']."</td>";
        echo "<td align='center' data-toggle='modal' data-target='#modalRelocation' onclick='loadrelprod()'><i class='fa fa-refresh'></i></td>";
        echo "</tr>";
        $cont++;
        } ?>
    </tbody>
    <tfoot>
    </tfoot>
</table>

<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.10/js/dataTables.bootstrap.min.js"></script> 
<script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.bootstrap.min.js"></script>

<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.1.0/js/buttons.print.min.js"></script>

<script>
// $('#TblProdLoc').DataTable({
//         "dom": '<lf<t>ip>',
//         "searching": false,
//         "pageLength": 15,
//         "lengthMenu": [15, 20, 25, 30],
//         "targets": 'no-sort',
//         "bSort": false,
//         "order": [],
//         "language": {
//             "emptyTable": "No hay datos disponibles",
//             "lengthMenu": "Mostrar _MENU_ ",
//             "info": "Mostrando _START_ hasta _END_ de _TOTAL_ entries",
//             "infoEmpty": " ",
//             "paginate": {
//                 "previous": "Atras",
//                 "next": "Siguiente"
//             }
//         }
// });
</script>