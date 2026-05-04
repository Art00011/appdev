<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Length Conversion Chart</title>

<style>
    body {
        font-family: Arial, sans-serif;
        background: #eef2f7;
        margin: 0;
        padding: 20px;
    }

    .wrapper {
        max-width: 900px;
        margin: auto;
    }

    h1 {
        text-align: center;
        color: #2c3e50;
    }

    .section {
        background: white;
        margin-top: 20px;
        padding: 15px;
        border-left: 6px solid #3498db;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .section h2 {
        margin-top: 0;
        color: #3498db;
    }

    .row {
        border-bottom: 1px solid #ddd;
        padding: 6px 0;
    }

    .row span {
        display: inline-block;
        width: 45%;
    }
</style>
</head>
<body>

<div class="wrapper">

<h1>MEASURE CONVERSION CHART – LENGTHS (UK)</h1>

<?php
// ---------- METRIC CONVERSIONS ----------
$mm_from_cm = 1 * 10;
$cm_from_dm = 1 * 10;
$cm_from_m  = 1 * 100;
$m_from_km  = 1 * 1000;
?>

<div class="section">
<h2>Metric Conversions</h2>
<div class="row"><span>1 centimetre</span>= <?php echo $mm_from_cm; ?> millimetres</div>
<div class="row"><span>1 decimetre</span>= <?php echo $cm_from_dm; ?> centimetres</div>
<div class="row"><span>1 metre</span>= <?php echo $cm_from_m; ?> centimetres</div>
<div class="row"><span>1 kilometre</span>= <?php echo $m_from_km; ?> metres</div>
</div>

<?php
// ---------- IMPERIAL CONVERSIONS ----------
$in_from_ft = 1 * 12;
$ft_from_yd = 1 * 3;
$yd_from_ch = 1 * 22;
$yd_from_fur = 1 * 220;
$yd_from_mi = 1 * 1760;
?>

<div class="section">
<h2>Imperial Conversions</h2>
<div class="row"><span>1 foot</span>= <?php echo $in_from_ft; ?> inches</div>
<div class="row"><span>1 yard</span>= <?php echo $ft_from_yd; ?> feet</div>
<div class="row"><span>1 chain</span>= <?php echo $yd_from_ch; ?> yards</div>
<div class="row"><span>1 furlong</span>= <?php echo $yd_from_fur; ?> yards</div>
<div class="row"><span>1 mile</span>= <?php echo $yd_from_mi; ?> yards</div>
</div>

<?php
// ---------- METRIC TO IMPERIAL ----------
$in_from_mm = 1 * 0.03937;
$in_from_cm = 1 * 0.39370;
$in_from_m  = 1 * 39.37008;
$ft_from_m  = 1 * 3.28084;
$yd_from_m  = 1 * 1.09361;
$yd_from_km = 1 * 1093.6133;
$mi_from_km = 1 * 0.62137;
?>

<div class="section">
<h2>Metric → Imperial</h2>
<div class="row"><span>1 millimetre</span>= <?php echo $in_from_mm; ?> inches</div>
<div class="row"><span>1 centimetre</span>= <?php echo $in_from_cm; ?> inches</div>
<div class="row"><span>1 metre</span>= <?php echo $in_from_m; ?> inches</div>
<div class="row"><span>1 metre</span>= <?php echo $ft_from_m; ?> feet</div>
<div class="row"><span>1 metre</span>= <?php echo $yd_from_m; ?> yards</div>
<div class="row"><span>1 kilometre</span>= <?php echo $yd_from_km; ?> yards</div>
<div class="row"><span>1 kilometre</span>= <?php echo $mi_from_km; ?> miles</div>
</div>

<?php
// ---------- IMPERIAL TO METRIC ----------
$cm_from_in = 1 * 2.54;
$cm_from_ft = 1 * 30.48;
$cm_from_yd = 1 * 91.44;
$m_from_yd  = 1 * 0.9144;
$m_from_mi  = 1 * 1609.344;
$km_from_mi = 1 * 1.609344;
?>

<div class="section">
<h2>Imperial → Metric</h2>
<div class="row"><span>1 inch</span>= <?php echo $cm_from_in; ?> centimetres</div>
<div class="row"><span>1 foot</span>= <?php echo $cm_from_ft; ?> centimetres</div>
<div class="row"><span>1 yard</span>= <?php echo $cm_from_yd; ?> centimetres</div>
<div class="row"><span>1 yard</span>= <?php echo $m_from_yd; ?> metres</div>
<div class="row"><span>1 mile</span>= <?php echo $m_from_mi; ?> metres</div>
<div class="row"><span>1 mile</span>= <?php echo $km_from_mi; ?> kilometres</div>
</div>

</div>
</body>
</html>