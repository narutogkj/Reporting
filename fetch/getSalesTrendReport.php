<?php

$cURLConnection = curl_init();

curl_setopt($cURLConnection, CURLOPT_URL, 'http://localhost:3000/api/report//salesTrendReport');
curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

$productList = curl_exec($cURLConnection);
curl_close($cURLConnection);

$jsonArrayResponse = json_decode($productList);
$data = $jsonArrayResponse->data;


foreach($data as $d){
        echo '<tr>
        <td>'.$d->Trans_ID.'</td>
        <td>'.$d->Store.'</td>
        <td>'.$d->System_Category.'</td>
        <td>'.$d->Salesperson.'</td>
        <td>'.$d->Contract_Type.'</td>
        <td>'.$d->Department.'</td>
        <td>'.$d->Customer.'</td>
        <td>'.$d->Category.'</td>
        <td>'.$d->Trans_Type.'</td>
        <td>'.$d->Product_Desc.'</td>
        <td>'.$d->Product_ID.'</td>
        <td>'.$d->Qty.'</td>
        <td>'.$d->Unit_Cost.'</td>
        <td>'.$d->Unit_Price.'</td>
        <td>'.$d->Discounts.'</td>
        <td>'.$d->Ext_Cost.'</td>
        <td>'.$d->Ext_Price.'</td>
        <td>'.$d->gp.'</td>
        <td>'.$d->Tax.'</td>
        <td>'.$d->Total_Sales.'</td>
        <td>'.$d->Activated_Mobile_Number.'</td>
        <td>'.$d->Serial_1.'</td>
        <td>'.$d->SKU.'</td>
        <td>'.$d->Trans_Date.'</td>
        <td>'.$d->Trans_Day.'</td>
        <td>'.$d->Trans_Month.'</td>
        <td>'.$d->Trans_Year.'</td>

    </tr>';
    
}