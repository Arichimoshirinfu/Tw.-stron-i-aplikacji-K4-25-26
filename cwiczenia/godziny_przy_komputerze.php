<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="godziny_przy_komputerze.css">
</head>
<body>

    <?php 

    $pon1=strtotime("12:00");
    $pon2=strtotime("15:30");
    $wt1=strtotime("08:05");
    $wt2=strtotime("10:15");
    $sr1=strtotime("06:45");
    $sr2=strtotime("11:25");
    $czw1=strtotime("09:55");
    $czw2=strtotime("10:35");
    $pt1=strtotime("13:50");
    $pt2=strtotime("16:10");
    $sob1=strtotime("20:05");
    $sob2=strtotime("22:35");
    $nied1=strtotime("16:00");
    $nied2=strtotime("18:50");

    $pon1_obj=date_create("12:00");
    $pon2_obj=date_create("15:30");
    $wt1_obj=date_create("08:05");
    $wt2_obj=date_create("10:15");
    $sr1_obj=date_create("06:45");
    $sr2_obj=date_create("11:25");
    $czw1_obj=date_create("09:55");
    $czw2_obj=date_create("10:35");
    $pt1_obj=date_create("13:50");
    $pt2_obj=date_create("16:10");
    $sob1_obj=date_create("20:05");
    $sob2_obj=date_create("22:35");
    $nied1_obj=date_create("16:00");
    $nied2_obj=date_create("18:50"); 

    $pon_roz_h=date_diff($pon1_obj, $pon2_obj)->format("%h");
    $pon_roz_m=date_diff($pon1_obj, $pon2_obj)->format("%i");
    $wt_roz_h=date_diff($wt1_obj, $wt2_obj)->format("%h");
    $wt_roz_m=date_diff($wt1_obj, $wt2_obj)->format("%i");
    $sr_roz_h=date_diff($sr1_obj, $sr2_obj)->format("%h");
    $sr_roz_m=date_diff($sr1_obj, $sr2_obj)->format("%i");
    $czw_roz_h=date_diff($czw1_obj, $czw2_obj)->format("%h");
    $czw_roz_m=date_diff($czw1_obj, $czw2_obj)->format("%i");
    $pt_roz_h=date_diff($pt1_obj, $pt2_obj)->format("%h");
    $pt_roz_m=date_diff($pt1_obj, $pt2_obj)->format("%i");
    $sob_roz_h=date_diff($sob1_obj, $sob2_obj)->format("%h");
    $sob_roz_m=date_diff($sob1_obj, $sob2_obj)->format("%i");
    $nied_roz_h=date_diff($nied1_obj, $nied2_obj)->format("%h");
    $nied_roz_m=date_diff($nied1_obj, $nied2_obj)->format("%i");
    ?>

    <table>
        <tr>

            <th id="puste"> </th>
            <th> Poniedziałek </th>
            <th> Wtorek </th>
            <th> Środa </th>
            <th> Czwartek </th>
            <th> Piątek </th>
            <th> Sobota </th>
            <th> Niedziela </th>

        </tr>

        <tr>

            <td> Godziny przy komputerze </td>

            <td>
            od <span class="date"> <?= date("h:i", $pon1) ?></span>
            do <span class="date"> <?= date("H:i", $pon2) ?></span>
            </td>

            <td>
            od <span class="date"> <?= date("H:i", $wt1) ?></span> 
            do <span class="date"> <?= date("H:i", $wt2) ?></span>
            </td>

            <td>
            od <span class="date"> <?= date("H:i", $sr1) ?></span> 
            do <span class="date"> <?= date("H:i", $sr2) ?></span> 
            </td>

            <td>
            od <span class="date"> <?= date("H:i", $czw1) ?></span> 
            do <span class="date"> <?= date("H:i", $czw2) ?></span> 
            </td>

            <td>
            od <span class="date"> <?= date("H:i", $pt1) ?></span> 
            do<span class="date">  <?= date("H:i", $pt2) ?></span> 
            </td>

            <td>
            od <span class="date"> <?= date("H:i", $sob1) ?></span> 
            do <span class="date"> <?= date("H:i", $sob2) ?></span> 
            </td>

            <td>
            od <span class="date"> <?= date("H:i", $nied1) ?></span> 
            do <span class="date"> <?= date("H:i", $nied2) ?></span>
             </td>

        </tr>

        <tr>

            <td> Różnica [h:m] </td>

            <td> 
            <span class="date"> <?php echo "$pon_roz_h:$pon_roz_m" ?> </span> 
            ( <span id="niebo"> <?= $pon_roz_h * 60 + $pon_roz_m ?> </span> minut ) 
            </td>

            <td>
            <span class="date"> <?php echo "$wt_roz_h:$wt_roz_m" ?></span>
            (<span id="niebo">  <?= $wt_roz_h * 60 + $wt_roz_m ?></span> minut ) 
            </td>

            <td>
            <span class="date"> <?php echo "$sr_roz_h:$sr_roz_m" ?></span> ( <span id="niebo"> <?= $sr_roz_h * 60 + $sr_roz_m ?></span> minut )
            </td>

            <td>
            <span class="date"> <?php echo "$czw_roz_h:$czw_roz_m" ?></span> 
            ( <span id="niebo"> <?= $czw_roz_h * 60 + $czw_roz_m ?></span> minut )
            </td>

            <td>
            <span class="date"> <?php echo "$pt_roz_h:$pt_roz_m" ?></span> 
            ( <span id="niebo"> <?= $pt_roz_h * 60 + $pt_roz_m ?> </span> minut )
            </td>

            <td>
            <span class="date"> <?php echo "$sob_roz_h:$sob_roz_m" ?></span> 
            ( <span id="niebo"> <?= $sob_roz_h * 60 + $sob_roz_m ?></span> minut )
            </td>

            <td>
            <span class="date"> <?php echo "$nied_roz_h:$nied_roz_m" ?></span> 
            ( <span id="niebo"> <?= $nied_roz_h * 60 + $nied_roz_m ?></span> minut )
            </td>

        </tr>

    </table>

</body>
</html>