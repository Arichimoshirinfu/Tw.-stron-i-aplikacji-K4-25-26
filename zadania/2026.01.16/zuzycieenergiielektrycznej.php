<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zyzycie energii</title>
    <link rel="stylesheet" href="zuzycieenergii.css">
</head>
<body>

    <?php
    $taryfa_d=0.90;
    $taryfa_n=0.45;
    ?>

    
    <p><strong>Zużycie energii elektrycznej - tydzień</strong></p>

    <p style="font-weight: bold;">Taryfa dzienna: <u><?= number_format($taryfa_d,2,",") ?> zł/kWh</u></p>

    <p style="font-weight: bold;">Taryfa nocna: <u><?= number_format($taryfa_n,2,",") ?> zł/kWh</u></p>

    <?php 
    $pon_zuzycie_d=5.2;
    $pon_zuzycie_n=2.1;
    $wt_zuzycie_d=4.8;
    $wt_zuzycie_n=2.6;
    $sr_zuzycie_d=6.1;
    $sr_zuzycie_n=1.9;
    $czw_zuzycie_d=5.5;
    $czw_zuzycie_n=2.3;
    $pt_zuzycie_d=6.4;
    $pt_zuzycie_n=2.8;
    $sob_zuzycie_d=4.9;
    $sob_zuzycie_n=3.2;
    $nied_zuzycie_d=5.7;
    $nied_zuzycie_n=2.5;


    $pon_koszt_d=$pon_zuzycie_d*$taryfa_d;
    $pon_koszt_n=$pon_zuzycie_n*$taryfa_n;
    $pon_koszt_dob=$pon_koszt_d+$pon_koszt_n;
    $wt_koszt_d=$wt_zuzycie_d*$taryfa_d;
    $wt_koszt_n=$wt_zuzycie_n*$taryfa_n;
    $wt_koszt_dob=$wt_koszt_d+$wt_koszt_n;
    $sr_koszt_d=$sr_zuzycie_d*$taryfa_d;
    $sr_koszt_n=$sr_zuzycie_n*$taryfa_n;
    $sr_koszt_dob=$sr_koszt_d+$sr_koszt_n;$czw_koszt_d=$czw_zuzycie_d*$taryfa_d;
    $czw_koszt_n=$czw_zuzycie_n*$taryfa_n;
    $czw_koszt_dob=$czw_koszt_d+$czw_koszt_n;
    $pt_koszt_d=$pt_zuzycie_d*$taryfa_d;
    $pt_koszt_n=$pt_zuzycie_n*$taryfa_n;
    $pt_koszt_dob=$pt_koszt_d+$pt_koszt_n;
    $sob_koszt_d=$sob_zuzycie_d*$taryfa_d;
    $sob_koszt_n=$sob_zuzycie_n*$taryfa_n;
    $sob_koszt_dob=$sob_koszt_d+$sob_koszt_n;
    $nied_koszt_d=$nied_zuzycie_d*$taryfa_d;
    $nied_koszt_n=$nied_zuzycie_n*$taryfa_n;
    $nied_koszt_dob=$nied_koszt_d+$nied_koszt_n;
    ?>

    <table>

    <!-- First row  -->
    <tr style="font-weight:bold">

        <th> Dzień </td>
        <th> Zużycie dziennie [kWh]</th>
        <th> Koszt dzienny [zł]</th>
        <th> Zużycie nocne [kWH]</th>
        <th> Koszt nocny [zł] </th>
        <th> Koszt dobowy [zł] </th>

    </tr>

    <!-- Poniedziałek  -->
    <tr>

    <td>Poniedziałek</td>
    <td> <?php echo number_format($pon_zuzycie_d,1,",") ?> </td>
    <td> <?= number_format($pon_koszt_d,2,",") ?>  </td>
    <td> <?php echo number_format($pon_zuzycie_n,1,",") ?> </td>
    <td> <?php echo number_format($pon_koszt_n,2,",") ?></td>
    <td> <?= number_format($pon_koszt_dob,2,",") ?></td>

    </tr>

    <!-- Wtorek  -->
    <tr>

    <td>Wtorek</td>
    <td> <?php echo number_format($wt_zuzycie_d,1,",") ?> </td>
    <td> <?= number_format($wt_koszt_d,2,",") ?> </td>
    <td> <?php echo number_format($wt_zuzycie_n,1,",") ?> </td>
    <td> <?= number_format($wt_koszt_n,2,",") ?> </td>
    <td> <?= number_format($wt_koszt_dob,2,",") ?> </td>

    </tr>

    <!-- Środa  -->
    <tr>

    <td> Środa </td>
    <td> <?php echo number_format($sr_zuzycie_d,1,",") ?> </td>
    <td> <?= number_format($sr_koszt_d,2,",") ?> </td>
    <td> <?php echo number_format($sr_zuzycie_n,1,",") ?> </td>
    <td> <?= number_format($sr_koszt_n,2,",") ?> </td>
    <td> <?= number_format($sr_koszt_dob,2,",") ?> </td>

    </tr>

    <!-- Czwartek  -->
    <tr>

    <td> Czwartek </td>
    <td> <?php echo number_format($czw_zuzycie_d,1,",") ?> </td>
    <td> <?= number_format($czw_koszt_d,2,",") ?> </td>
    <td> <?php echo number_format($czw_zuzycie_n,1,",") ?> </td>
    <td> <?= number_format($czw_koszt_n,2,",") ?> </td>
    <td> <?= number_format($czw_koszt_dob,2,",") ?> </td>

    </tr>

    <!-- Piątek  -->
    <tr>

    <td> Piątek </td>
    <td> <?php echo number_format($pt_zuzycie_d,1,",") ?> </td>
    <td> <?= number_format($pt_koszt_d,2,",") ?> </td>
    <td> <?php echo number_format($pt_zuzycie_n,1,",") ?> </td>
    <td> <?= number_format($pt_koszt_n,2,",") ?></td>
    <td> <?= number_format($pt_koszt_dob,2,",") ?> </td>

    </tr>

    <!-- Sobota  -->
    <tr>

    <td> Sobota </td>
    <td> <?php echo number_format($sob_zuzycie_d,1,",") ?> </td>
    <td> <?= number_format($sob_koszt_d,2,",") ?> </td>
    <td> <?php echo number_format($sob_zuzycie_n,1,",") ?> </td>
    <td> <?= number_format($sob_koszt_n,2,",") ?> </td>
    <td> <?= number_format($sob_koszt_dob,2,",") ?> </td>

    </tr>

    <!-- Niedziela  -->
    <tr>

    <td> Niedziela </td>
    <td> <?php echo number_format($nied_zuzycie_d,1,",") ?> </td>
    <td> <?= number_format($nied_koszt_d,2,",") ?> </td>
    <td> <?php echo number_format($nied_zuzycie_n,1,",") ?> </td>
    <td> <?= number_format($nied_koszt_n,2,",") ?> </td>
    <td> <?= number_format($nied_koszt_dob,2,",") ?> </td>

    </tr>

    <?php $suma_tyg=$pon_koszt_dob+$wt_koszt_dob+$sr_koszt_dob+$czw_koszt_dob+$pt_koszt_dob+$sob_koszt_dob+$nied_koszt_dob; ?>


    <th class="last_row" colspan="6">Łączny koszt w całym tygodniu: <u> <?php echo number_format($suma_tyg,2,",") ?> zł</u> </th>


    </table>
    
</body>
</html>