<?php

ini_set('display_errors', 1);
require_once './vendor/autoload.php';

use App\Strategies\SCheckText as SCheckText;
use App\Functions\CheckText\Antiplagiat as TextAntiplagiat;
use App\Functions\CheckText\Seo as TextSeo;
use App\Functions\CheckText\Spelling as TextSpelling;

$antiplagiat = new SCheckText(new TextAntiplagiat());
echo $antiplagiat -> getResultByText("example");

$seo = new SCheckText(new TextSeo());
echo $seo -> getResultByText("example");

$spell = new SCheckText(new TextSpelling());
echo $spell -> getResultByText("example");
