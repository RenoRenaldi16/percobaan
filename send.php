<?php 


if(isset($_POST['kirim'])){

$nama = $_POST['nama'];
$ruangan = $_POST['ruangan'];
$kerusakan = $_POST['kerusakan'];
$noWa = $_POST['no_hp/wa'];


$token = "6CNDzRL+3@NU2JrMZjYy";
$noWa1 = "083144023656";
$noWa2 = "6285828139238";
$curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://api.fonnte.com/send',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => array(
    'target' => $noWa1,
    'message' => 'Assalamualaikum TIM IT saya '. $nama .' Boleh minta tolong untuk keruang '. $ruangan . ' ada '. $kerusakan . ' Terima Kasih',
    ),
      CURLOPT_HTTPHEADER => array(
        "Authorization: $token"
      ),
    ));
    
    $response = curl_exec($curl);
    
    curl_close($curl);
    echo $response;

    header("location:lapor.php ");
    
}else{
    echo "
        <script>
            window.location=history.go(-1);
        </script>
    ";
}



?>

