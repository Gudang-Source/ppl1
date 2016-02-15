<?php
include "database.php";

while ($data = get_pemakaian())
{
    echo
    "<tr>
        <td>".$data['pid']."</td>
        <td>".$data['p_uid']."</td>
        <td>".$data['p_aid']."</td>
        <td>".$data['jumlah']."</td>
        <td>".$data['tanggal']."</td>
    </tr>";
}
?>

