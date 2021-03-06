<style>
    body { background: #efefef;}
</style>
<?php

include 'src/Color.php';
include 'src/Image.php';
include 'src/Captcha.php';


$image = new \Captcha\Captcha(300, 60, 'white');

$image->border([5, 1, 2, 5], ['red']);



$image->setFont(\Captcha\Captcha::RAND);
$image->addCharacter('Holly', [
    'shadow'    => [1, 1, ['gray']],
    'color'     => [\Captcha\Captcha::RAND],
    'font_size' => [20],
    'margin'    => [mt_rand(0, 10) . ' ' . mt_rand(1, 30)],
    'rotate'    => [0],
    'display'   => ['inline']
]);

$image->setFont(\Captcha\Captcha::RAND);
$image->addCharacter('Molly', [
    'shadow'    => [1, 1, ['gray']],
    'color'     => [\Captcha\Captcha::RAND],
    'font_size' => [mt_rand(10, 35)],
    'margin'    => [mt_rand(0, 10) . ' ' . mt_rand(30, 100)],
]);



/*$image->addCharacter('Y', 'white');
$image->addCharacter('M', 'blue');
$image->addCharacter('A', 'green');
$image->addCharacter('N', 'red');*/
$image->save('text.png');
echo '<img src="text.png">';