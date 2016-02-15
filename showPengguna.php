<?php
include "database.php"

while ($data = get_user())
{
    echo
    "<tr>
        <td>".$data['uid']."</td>
        <td>".$data['nama']."</td>
    </tr>";
}
 ?>
