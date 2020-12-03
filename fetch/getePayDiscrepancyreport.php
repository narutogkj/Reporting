<?php

$cURLConnection = curl_init();

curl_setopt($cURLConnection, CURLOPT_URL, 'http://localhost:3000/api/report/ePayDiscrepancyreport');
curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

$productList = curl_exec($cURLConnection);
curl_close($cURLConnection);

$jsonArrayResponse = json_decode($productList);
$data = $jsonArrayResponse->data;


foreach($data as $d){
        echo '<tr>
        <td>'.$d->source.'</td>
        <td>'.$d->date.'</td>
        <td>'.$d->trans_id.'</td>
        <td>'.$d->salesperson.'</td>
        <td>'.$d->product_desc.'</td>
        <td>'.$d->store.'</td>
        <td>'.$d->customer.'</td>
        <td>'.$d->trans_type.'</td>
        <td>'.$d->serial.'</td>
        <td>'.$d->qty.'</td>
        <td>'.$d->unit_cost.'</td>
        <td>'.$d->unit_price.'</td>
        <td>'.$d->ext_cost.'</td>
        <td>'.$d->sales.'</td>
        <td>'.$d->discount.'</td>
        <td>'.$d->tax.'</td>
        <td>'.$d->gp.'</td>
        <td>'.$d->upc.'</td>

    </tr>';
    
}