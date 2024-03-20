<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>biodata diri</h1>
    <?php
    $nama="budi";
    $umur='17';
    $tempat_pkl="DINAS KOMINFO";
    $lama_sd='6';
    $lama_smp='3';
    $lama_smk='3';
    $total_sekolah=$lama_sd + $lama_smp+ $lama_smk;    
    ?>
nama saya: 
<?php  echo $nama; ?> <br>
umur saya: 
<?php echo $umur; ?> TAHUN<br>
Tempat PKL:
<?php echo $tempat_pkl; ?><br>
menempuh pendidikan dari sd s/d smp selama 
<?php echo $total_sekolah ?> TAHUN
</body>
</html>