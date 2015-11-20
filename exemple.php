<?php

// path to where you installed the library
require '../googlechartphplib/lib/GoogleChart.php';

$chart = new GoogleChart('lc', 500, 200);

echo $chart->toHtml();