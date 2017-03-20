# Captcha

```php
! READY FOR USE

$image = new \Captcha\Captcha(300, 60, 'white');
$image->border([1, 1, 1, 1], ['gray']);


$image->setFont(\Captcha\Color::RAND);
$image->addCharacter('Holly', [
    'shadow'    => [1, 1, ['gray']],
    'color'     => [\Captcha\Color::RAND],
    'font_size' => [20],
    'margin'    => ['10, 10'],
    'rotate'    => [0]
]);

$image->save('text.png');
echo '<img src="text.png">';

```