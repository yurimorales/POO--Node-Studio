<?php 

require_once 'vendor/autoload.php';

use Cocur\Slugify\Slugify;

$slug = new Slugify();

$string = 'Gerando uma slug para fins didádicos!';
echo $slug->slugify($string);


