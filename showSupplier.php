<?php
include "database.php";

while ($data = get_supplier())
{
    echo
    "<tr>
        <td>".$data['sid']."</td>
        <td>".$data['nama']."</td>
    </tr>";
}
?>

