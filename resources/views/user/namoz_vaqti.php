<?php
//  https://api.aladhan.com/v1/timingsByAddress/18-04-2022?address=Urgench,UAE&method=8
error_reporting(0);

date_default_timezone_set("Asia/Tashkent");

$apiData = file_get_contents("https://api.aladhan.com/v1/timingsByAddress/".date('d,m,Y')."?address=Urgench,UAE&method=8");
$prayerArray = json_decode($apiData, true );



$bomdod = $prayerArray['data']['timings']['Fajr'];
$quyosh = $prayerArray['data']['timings']['Sunrise'];
$peshin = $prayerArray['data']['timings']['Dhuhr'];
$asr = $prayerArray['data']['timings']['Asr'];
$shom = $prayerArray['data']['timings']['Sunset'];
$xufton = $prayerArray['data']['timings']['Isha'];

$xijriy_sana = $prayerArray['data']['date']['hijri']['day'].", ".$prayerArray['data']['date']['hijri']['month']['en'].", ".$prayerArray['data']['date']['hijri']['year'];


?>

<div class="col-6 col-lg-4" style="background: #15a879">

    <table class="table text-white">
        <h2 class="text-white text text-center">Taqvim  <p style="font-size: 16px">   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
            </svg> Urgench</p></h2>
        <tr>
            <th> <?php echo $xijriy_sana ?> </th>
            <th><?php echo date("d, M, Y") ?></th>
        </tr>


        <tr>
            <th>Bomdod</th>
            <th> <?php echo $bomdod ?> </th>
        </tr>
        <tr>
            <th>Quyosh</th>
            <th><?php echo $quyosh ?></th>
        </tr>
        <tr>
            <th>Peshin</th>
            <th><?php echo $peshin ?></th>
        </tr>
        <tr>
            <th>Asr</th>
            <th><?php echo $asr ?></th>
        </tr>
        <tr>
            <th>Shom</th>
            <th><?php echo $shom ?></th>
        </tr>
        <tr>
            <th>Xufton</th>
            <th><?php echo $xufton ?></th>
        </tr>

    </table>
</div>
