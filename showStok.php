<?php
$query = "SELECT * FROM atk";
$result = mysql_query($query);

while ($data = mysql_fetch_array($result))
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
