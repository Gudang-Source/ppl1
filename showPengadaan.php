<?php
include "database.php";

while ($data = get_pengadaan())
{
    echo
    "<tr>
        <td>".$data['aid']."</td>
        <td>".$data['a_sid']."</td>
        <td>".$data['a_aid']."</td>
        <td>".$data['jumlah']."</td>
        <td>".$data['tgl_pesan']."</td>
        <td>".$data['tgl_datang']."</td>
    </tr>";
}
?>

