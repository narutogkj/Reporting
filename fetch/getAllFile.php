<?php

$cURLConnection = curl_init();

curl_setopt($cURLConnection, CURLOPT_URL, 'http://localhost:3000/api/file');
curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

$productList = curl_exec($cURLConnection);
curl_close($cURLConnection);

$jsonArrayResponse = json_decode($productList);
$data = $jsonArrayResponse->data;


$totalReport =  count($data);
$totalDailyReport = 0;
$totalWeeklyReport = 0;
$totalMonthlyReport = 0;

foreach($data as $d){
    if($d->report_type == 'Daily') {
        $totalDailyReport++;
    }
    if($d->report_type == 'Weekly'){
        $totalWeeklyReport++;
    }
    if($d->report_type == 'Monthly'){
        $totalMonthlyReport++;
    }
    
}
