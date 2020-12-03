<?php

$cURLConnection = curl_init();

curl_setopt($cURLConnection, CURLOPT_URL, 'http://localhost:3000/api/file');
curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

$productList = curl_exec($cURLConnection);
curl_close($cURLConnection);

$jsonArrayResponse = json_decode($productList);
$data = $jsonArrayResponse->data;


foreach($data as $d){
    if($d->report_type == 'Daily'){
        echo '<tr>
        <td><a href="report.php?file-id='.$d->file_id.'">'.$d->file_id.'</a></td>
        <td><a href="report.php?file-id='.$d->file_id.'">'.$d->file_name.'</a></td>
        <td class="startingDate">'.$d->starting_date.'</td>
        <td>'.$d->company_name.'</td>
        <td>'.$d->report_name.'</td>
        <td>'.$d->report_type.'</td>
    </tr>';
    }
}