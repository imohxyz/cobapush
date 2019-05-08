<?php

// require_once 'vendor/autoload.php';

// // Choose a Mink driver. More about it in later chapters.
// $driver = new \Behat\Mink\Driver\GoutteDriver(); 
// $session = new \Behat\Mink\Session($driver);

// $baseurl = 'http://aksikita.id/';

// // start the session

// $session->start();
// $session->visit($baseurl);
// $session->stop();
// $page = $session->getPage();

// // Hasil

// // echo $session->getStatusCode();
// // print_r($session->getResponseHeaders());
// echo $page->getContent();
$url = "https://pemilu2019.kpu.go.id/static/json/wilayah/0.json";

$arrContextOptions=array(
      "ssl"=>array(
            "verify_peer"=>false,
            "verify_peer_name"=>false,
        ),
    );  

$response = file_get_contents($url, false, stream_context_create($arrContextOptions));
$response = json_decode($response,true);
// echo count($response);
// $response = array_values($response)[0];
// echo json_encode($response);
foreach($response as $key => $response) {
    $response1 = file_get_contents("https://pemilu2019.kpu.go.id/static/json/hhcw/dprri/".$key.".json", false, stream_context_create($arrContextOptions));
    $response1 = json_decode($response1,true);
    $data1 = $response1["table"];
    foreach($data1 as $key1 => $data1) {
        $response2 = file_get_contents("https://pemilu2019.kpu.go.id/static/json/hhcw/dprri/".$key."/".$key1.".json", false, stream_context_create($arrContextOptions));
        $response2 = json_decode($response2,true);
        $data2 = $response2["table"];
        foreach($data2 as $key2 => $data2) {
            $response3 = file_get_contents("https://pemilu2019.kpu.go.id/static/json/hhcw/dprri/".$key."/".$key1."/".$key2.".json", false, stream_context_create($arrContextOptions));
            $response3 = json_decode($response3,true);
            $data3 = $response3["table"];
            foreach($data3 as $key3 => $data3) {
                $response4 = file_get_contents("https://pemilu2019.kpu.go.id/static/json/hhcw/dprri/".$key."/".$key1."/".$key2."/".$key3.".json", false, stream_context_create($arrContextOptions));
                $response4 = json_decode($response4,true);
                $data4 = $response4["table"];
                foreach($data4 as $key4 => $data4) {
                    $linkurl = "https://pemilu2019.kpu.go.id/static/json/hhcw/dprri/".$key."/".$key1."/".$key2."/".$key3."/".$key4.".json";
                    $my_save_dir = '/home/hanurata/public_html/mink/JSON/DPRRI/';
                    $filename = basename($linkurl);
                    $complete_save_loc = $my_save_dir.$filename;
                    file_put_contents($complete_save_loc,file_get_contents($linkurl,false, stream_context_create($arrContextOptions)));
                    
                    
                    
                }
            }
        }
        
    }
    
}
echo shell_exec('sh D:/BitKit/Tabulasi-2/pushgit.sh');
?>

<!--<a href="http://hanurata.id/mink/hanurata_dprri.php">Download Gambar</a>-->