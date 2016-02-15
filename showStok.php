<?php
include "database.php";

while ($data = get_ATK())
{
    echo
    "<tr>
        <td>".$data['aid']."</td>
        <td>".$data['jenis']."</td>
        <td>".$data['stok']."</td>
        <td>".$data['stok_min']."</td>
    </tr>";
}
?>
