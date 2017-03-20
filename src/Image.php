<?php
/**
 * Created by PhpStorm.
 * User: Ugwu
 * Date: 3/17/2017
 * Time: 7:39 PM
 */

namespace Captcha;


class Image extends Color
{
    const PNG = 'imagepng';


    private $properties = [];
    protected $image = null;
    private $font = null;
    private $font_dir;
    private $inline = null;

    private $margin = 20;

    public function __construct(int $width, int $height, string $background = self::TRANSPARENT)
    {
        $this->properties['width'] = $width;
        $this->properties['height'] = $height;
        $this->properties['background']['color'] = $background;
        $this->font_dir = __DIR__ . DIRECTORY_SEPARATOR . 'fonts' . DIRECTORY_SEPARATOR;
        $this->font = $this->font_dir . 'Aller_Rg.ttf';
    }

    public function border(array $size, array $color): void
    {
        $this->properties['border']['top'] = $size[0] ?? 0;
        $this->properties['border']['right'] = $size[1] ?? 0;
        $this->properties['border']['bottom'] = $size[2] ?? 0;
        $this->properties['border']['left'] = $size[3] ?? 0;
        $this->properties['border']['color'] = $color ?? 'black';
    }

    private function randomLogic(array $haystack, string $key): string
    {
        $reference = $haystack[$key];

        if ( ! is_array($reference))
        {
            return $reference;
        }

        $size = count($reference) - 1;
        if ($size > 0)
        {
            $reference = $haystack[$key][rand(0, $size)];
        }
        else
        {
            $reference = $haystack[$key][0];
        }

        return $reference;
    }

    private function backgroundImage(int $width, int $top, int $left, int $height)
    {
        $bg = $this->properties['background']['image'];
        $type = exif_imagetype($bg); // [] if you don't have exif you could use getImageSize()
        if (!in_array($type, [1, 2, 3, 6]))
        {
            return false;
        }



        switch ($type)
        {
            case 1 :
                $_bg = @imageCreateFromGif($bg);
                break;
            case 2 :
                $_bg = @imageCreateFromJpeg($bg);
                break;
            case 3 :
                $_bg = @imageCreateFromPng($bg);
                break;
            case 6 :
                $_bg = @imageCreateFromBmp($bg);
                break;
        }

        if ($_bg)
        {

        }






        #imagefilledrectangle($this->image, $width, $top, $left, $height, $this->color($this->properties['background']['color']));
    }

    private function create(string $type)
    {
        $height = $this->properties['height'];
        $width = $this->properties['width'];

        $border_left = $this->properties['border']['left'] ?? 0;
        $border_right = $this->properties['border']['right'] ?? 0;
        $border_top = $this->properties['border']['top'] ?? 0;
        $border_bottom = $this->properties['border']['bottom'] ?? 0;
        $border_color = $this->properties['border']['color'] ?? null;

        $this->image = imagecreatetruecolor($width, $height);
        if (isset($this->properties['border']))
        {
            if ($border_top !== 0)
            {
                $color = $this->color($border_color[0] ?? $border_color[0]);
                for ($i = 0; $i <= $border_top; $i++)
                {
                    imageline($this->image, 0, 0 + $i, $width, 0 + $i, $color);
                }
            }
            if ($border_bottom !== 0)
            {
                $color = $this->color($border_color[2] ?? $border_color[0]);
                for ($i = 0; $i <= $border_bottom; $i++)
                {
                    imageline($this->image, 0, $height - 1 - $i, $width, $height - 1 - $i, $color);
                }
            }
            if ($border_left !== 0)
            {
                $color = $this->color($border_color[3] ?? $border_color[0]);
                for ($i = 0; $i <= $border_left; $i++)
                {
                    imageline($this->image, 0 + $i, $height, 0 + $i, 0, $color);
                }
            }
            if ($border_right !== 0)
            {
                $color = $this->color($border_color[1] ?? $border_color[0]);
                for ($i = 0; $i <= $border_right; $i++)
                {
                    imageline($this->image, $width - 1 - $i, 0, $width - 1 - $i, $height, $color);
                }
            }
        }

        if ( ! isset($this->properties['background']['image']))
        {
            imagefilledrectangle($this->image,
                ($width - $border_right - 1),
                (0 + $border_top),
                (0 + $border_left),
                ($height - $border_bottom - 1),
                $this->color($this->properties['background']['color'])
            );
        }
        else
        {
            #$this->backgroundImage(($width - $border_right - 1), (0 + $border_top), (0 + $border_left), ($height - $border_bottom - 1));
        }



        if (isset($this->properties['character']))
        {
            foreach ($this->properties['character'] as $_characters)
            {
                $font = null;
                $color = null;
                $font_size = null;
                $rotate = null;
                $margin_x = null;
                $margin_y = null;
                $shadow = null;

                $characters = $_characters['style'];
                $text = $_characters['char'];

                if (isset($characters['font']))
                {
                    $font = $this->randomLogic($characters, 'font');
                    $font =  $this->font_dir . $font;
                }
                else
                {
                    $font = $this->font;
                }

                if (isset($characters['color']))
                {
                    $color = $this->randomLogic($characters, 'color');
                }

                if (isset($characters['font_size']))
                {
                    $font_size = $this->randomLogic($characters, 'font_size');
                }

                if (isset($characters['rotate']))
                {
                    $rotate = $this->randomLogic($characters, 'rotate');
                }

                if (isset($characters['margin']))
                {
                    $margin =  $this->randomLogic($characters, 'margin');
                    list($margin_y, $margin_x) = explode(' ', $margin);

                    $margin_x = (int) $margin_x + $this->inline + $border_left;
                    $margin_y = (int) $margin_y + (int) $font_size + $border_top;

                    $pecentage = (20 / 100) * $font_size;
                    $this->inline += ((int) $font_size - (int) $pecentage) * strlen($text);
                }

                if (isset($characters['shadow']))
                {
                    $_color = $this->randomLogic($characters['shadow'], 2);
                    $_margin_x = $margin_x + $characters['shadow'][0];
                    $_margin_y =  $margin_y + $characters['shadow'][1];
                    imagettftext($this->image, $font_size, $rotate, $_margin_x, $_margin_y, $this->color($_color), $font, $text);
                }

                imagettftext($this->image, $font_size, $rotate, $margin_x, $margin_y, $this->color($color), $font, $text);
            }
        }

        #imagefilledellipse ($this->image, 50, 150, 75, 75, $this->color('green'));      // CIRCLE

    }


    public function setBackground(string $image, array $setting)
    {
        $this->properties['background']['image'] = $image;
        $this->properties['background']['settings'] = $setting;
    }

    #TODO: #1 make sure image ext works with type also make sure filter works with type
    public function save(string $name, string $type = self::PNG, int $quality = null, string $filter = null)
    {
        $this->create($type);
        $type($this->image, $name, $quality, $filter);
        imagedestroy($this->image);
    }

    public function setFont(string $font)
    {

        if (preg_match('/\!(.*)|\%/', $font, $matches))
        {
            $fonts = array_diff(scandir($this->font_dir), array('..', '.'));
            if ($matches[0] == self::RAND)
            {
                $font = array_rand($fonts, 1);
            }
            else
            {
                $not = explode(',', $matches[1]);
                do
                {
                    $font = array_rand($fonts, 1);
                }
                while (in_array($font, $not));
            }

            $font = $fonts[$font];
        }
        $this->font = $this->font_dir . $font;
    }

    public function addCharacter(string $character, array $style = null)
    {
        $this->properties['character'][] = ['char' => $character, 'style' => $style];
    }

    #TODO: #2 == #1
    public function output(string $type = self::PNG, int $quality = null, string $filter = null)
    {
        $this->create($type);
        $type($this->image, null, $quality, $filter);
        imagedestroy($this->image);
    }
}