<?php

$fileId = $_GET['file-id'];

$cURLConnection = curl_init();

curl_setopt($cURLConnection, CURLOPT_URL, "http://localhost:3000/api/file/{$fileId}");
curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

$productList = curl_exec($cURLConnection);
curl_close($cURLConnection);

$jsonArrayResponse = json_decode($productList);
$data = $jsonArrayResponse->data;

echo '
<div class="row">
<div class="col-sm-12">
    <div class="page-title-box">
      <h3 class="text-center">
      '.$data->title.'
      
      </h3>
    </div>
</div>
</div>


<div class="row">
<div class="col-xl-12">
    <div class="row">



        <div class="col-lg-3">
            <div class="card">
                    <div class="d-flex flex-row">
                        
                        <div class="col-9 align-self-center text-left m-2">
                            <div class="m-l-10">
                                <h5 class="mt-0 badge bg-soft-warning">Report Id</h5>
                                <p class="mb-0 text-muted" id="fileID">
                                '.$_GET['file-id'] .'
                                </p>
                            </div>
                        </div>
                    </div>
                   
            </div>
            <!--end card-->
        </div>
        <!--<div class="col-lg-2">
            <div class="card">
                    <div class="d-flex flex-row"> 
                        <div class="col-9 align-self-center text-left m-2">
                            <div class="m-l-10">
                                <h5 class="mt-0 badge bg-soft-primary">File Name</h5>
                                <p class="mb-0 text-muted">
                                '.$data->file_name.'
                                </p>
                            </div>
                        </div>
                    </div>
            </div>
        </div>-->
       
        <div class="col-lg-2">
            <div class="card">
                    <div class="d-flex flex-row">
                        
                        <div class="col-9 align-self-center text-left m-2">
                            <div class="m-l-10">
                                <h5 class="mt-0 badge bg-soft-secondary">Start Date</h5>
                                <p class="mb-0 text-muted">
                                   '.$data->starting_date.'
                                </p>
                            </div>
                        </div>
                    </div>
                   
            </div>
            <!--end card-->
        </div>

        <div class="col-lg-2">
            <div class="card">
                    <div class="d-flex flex-row">
                        
                        <div class="col-9 align-self-center text-left m-2">
                            <div class="m-l-10">
                                <h5 class="mt-0 badge bg-soft-success">End date</h5>
                                <p class="mb-0 text-muted">
                                '.$data->ending_date.'
                                </p>
                            </div>
                        </div>
                    </div>
                   
            </div>
            <!--end card-->
        </div>

        <!--<div class="col-lg-3">
            <div class="card">
                    <div class="d-flex flex-row">
                        
                        <div class="col-9 align-self-center text-left m-2">
                            <div class="m-l-10">
                                <h4 class="mt-0 badge bg-soft-danger">Company</h4>
                                <p class="mb-0 text-muted">
                                '.$data->title.'
                                </p>
                            </div>
                        </div>
                    </div>
                   
            </div>
        </div>-->
        <div class="col-lg-3">
            <div class="card">
                    <div class="d-flex flex-row">
                        
                        <div class="col-9 align-self-center text-left m-2">
                            <div class="m-l-10">
                                <h5 class="mt-0 badge bg-soft-warning">Report Name</h5>
                                <p class="mb-0 text-muted">
                                '.$data->report_name.'
                                </p>
                            </div>
                        </div>
                    </div>
                   
            </div>
            <!--end card-->
        </div>
        <div class="col-lg-2">
            <div class="card">
                    <div class="d-flex flex-row">
                        
                        <div class="col-9 align-self-center m-2">
                            <div class="m-l-10">
                                <h5 class="mt-0 badge bg-soft-info">Report Type</h5>
                                <p class="mb-0 text-muted">
                                '.$data->report_type.'
                                </p>
                            </div>
                        </div>
                    </div>
                   
            </div>
            <!--end card-->
        </div>
        
    
        <!--end col-->
    </div>
    
</div>

</div>
<style>
.btn {
    display: inline-block;
    font-weight: 400;
    color: #212529;
    text-align: center;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: .25rem;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    padding: 0px 8px;
    color: #252121;
}
.button-list {
    padding: 15px;
}
</style>
<!--end row-->
';