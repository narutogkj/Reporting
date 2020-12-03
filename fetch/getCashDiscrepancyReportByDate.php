
<?php 
    if ( isset( $_POST['submit'] ) ) {
        echo '<h3 class="text-center">'.$_POST["dateInput"].'<h3>';
        $date =  $_POST["dateInput"];

        $cURLConnection = curl_init();

        curl_setopt($cURLConnection, CURLOPT_URL, "http://localhost:3000/api/report/cashDiscrepancyReport/$date");
        curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

        $productList = curl_exec($cURLConnection);
        curl_close($cURLConnection);

        $jsonArrayResponse = json_decode($productList);
        $data = $jsonArrayResponse->data;


        foreach($data as $d){
                echo '<tr>
                <td>'.$d->source.'</td>
                <td>'.$d->store.'</td>
                <td>'.$d->customer.'</td>
                <td>'.$d->created_by.'</td>
                <td>'.$d->register.'</td>
                <td>'.$d->batch_id.'</td>
                <td>'.$d->trans_id.'</td>
                <td>'.$d->trans_type.'</td>
                <td>'.$d->tender_type.'</td>
                <td>'.$d->amount.'</td>
                <td>'.$d->tender_type_note.'</td>
                <td>'.$d->date.'</td>
            </tr>';
            
        }
    }
