<?php
include "database.php";

while ($data = get_ATK())
{
    echo
    "<tr>
        <td>".$data['bid']."</td>
        <td>".$data['b_uid']."</td>
        <td>".$data['b_aid']."</td>
        <td>".$data['jumlah']."</td>
        <td>".$data['tanggal']."</td>
    </tr>";
}
?>
