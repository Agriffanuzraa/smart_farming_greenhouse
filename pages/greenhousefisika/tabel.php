<!DOCTYPE html>
<html><body>
<?php
$servername = "localhost";
$dbname = "c39tanicerdas_LED";
$username = "c39tanicerdas";
$password = "Annisa369369";
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT id, tgl ,  waktu, kadar_n, kadar_p, kadar_k, kelem_t, suhu_u, kelem,ph_tanah, flow,tds FROM insert_sensor ORDER BY id DESC";
echo '<table cellspacing="5" cellpadding="5">
      <tr> 
        <td>id</td> 
        <td>tgl</td> 
        <td>waktu</td> 
        <td>kadar_n</td> 
        <td>kadar_p</td>
        <td>kadar_k</td> 
        <td>kelem_t</td> 
        <td>suhu_u</td> 
        <td>kelem</td> 
        <td>ph_tanah</td>
        <td>flow</td> 
        <td>tds</td> 
      </tr>';
 
if ($result = $conn->query($sql)) {
    while ($row = $result->fetch_assoc()) {
        $row_id = $row["id"];
        $row_tgl = $row["tgl"];
        $row_waktu = $row["waktu"];
        $row_kadar_n = $row["kadar_n"];
        $row_kadar_p = $row["kadar_p"]; 
        $row_kadar_k = $row["kadar_k"]; 
        $row_kelem_t = $row["kelem_t"];
        $row_suhu_u = $row["suhu_u"];
        $row_kelem = $row["kelem"];
        $row_ph_tanah = $row["ph_tanah"]; 
        $row_flow = $row["flow"]; 
        $row_tds = $row["tds"]; 
        echo '<tr> 
                <td>' . $row_id . '</td> 
                <td>' . $row_tgl . '</td> 
                <td>' . $row_waktu . '</td> 
                <td>' . $row_kadar_n . '</td> 
                <td>' . $row_kadar_p . '</td>
                <td>' . $row_kadar_k . '</td> 
                <td>' . $row_kelem_t . '</td> 
                <td>' . $row_suhu_u . '</td> 
                <td>' . $row_kelem . '</td> 
                <td>' . $row_ph_tanah . '</td>
                <td>' . $row_flow . '</td> 
                <td>' . $row_tds . '</td> 
              </tr>';
    }
    $result->free();
}
$conn->close();
?> 
</table>
</body>
</html>

