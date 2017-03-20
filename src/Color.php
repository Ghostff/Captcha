<?php

namespace Captcha;

class Color
{
    const TRANSPARENT = 'transparent';

    const RAND = '%';

    private $color = [
        'air_force_blue' => [93, 138, 168], 'alice_blue' => [240, 248, 255],'alizarin' => [227, 38, 54],'amaranth' => [229, 43, 80],'amber' => [255, 191, 0],
        'android_green' => [164, 198, 57],'apple_green' => [141, 182, 0],'apricot' => [251, 206, 177],'aquamarine' => [127, 255, 212],
        'army_green' => [75, 83, 32],'arsenic' => [59, 68, 75],'arylide_yellow' => [233, 214, 107],'ash_grey' => [178, 190, 181],
        'asparagus' => [135, 169, 107],'atomic_tangerine' => [255, 153, 102],'auburn' => [109, 53, 26],'azure' => [0, 127, 255],
        'baby_blue' => [137, 207, 240],'baby_blue_eyes' => [161, 202, 241],'baby_pink' => [244, 194, 194],'banana_yellow' => [255, 209, 42],
        'battleship_grey' => [132, 132, 130],'bazaar' => [152, 119, 123],'beige' => [245, 245, 220],'bistre' => [61, 43, 31],
        'black' => [0, 0, 0],'bleu_de_france' => [49, 140, 231],'blond' => [250, 240, 190],'blue' => [0, 0, 255],
        'blush' => [222, 93, 131],'bole' => [121, 68, 59],'boston_university_red' => [204, 0, 0],'brass' => [181, 166, 66],
        'bright_green' => [102, 255, 0],'bright_lavender' => [191, 148, 228],'bright_maroon' => [195, 33, 72],'bright_pink' => [255, 0, 127],
        'bright_turquoise' => [8, 232, 222],'bright_ube' => [209, 159, 232],'british_racing_green' => [0, 66, 37],'bronze' => [205, 127, 50],
        'brown' => [150, 75, 0],'bubble_gum' => [255, 193, 204],'bubbles' => [231, 254, 255],'buff' => [240, 220, 130],
        'burgundy' => [128, 0, 32],'burlywood' => [222, 184, 135],'burnt_orange' => [204, 85, 0],'burnt_sienna' => [233, 116, 81],
        'burnt_umber' => [138, 51, 36],'byzantine' => [189, 51, 164],'byzantium' => [112, 41, 99],'cadet' => [83, 104, 120],
        'cadmium_green' => [0, 107, 60],'cadmium_orange' => [237, 135, 45],'cadmium_red' => [227, 0, 34],'cambridge_blue' => [163, 193, 173],
        'camouflage_green' => [120, 134, 107],'canary_yellow' => [255, 239, 0],'candy_apple_red' => [255, 8, 0],'cardinal' => [196, 30, 58],
        'caribbean_green' => [0, 204, 153],'carmine' => [150, 0, 24],'carolina_blue' => [153, 186, 221],'carrot_orange' => [237, 145, 33],
        'ceil' => [146, 161, 207],'celadon' => [172, 225, 175],'cerulean' => [0, 123, 167],'cerulean_blue' => [42, 82, 190],
        'chamoisee' => [160, 120, 90],'champagne' => [247, 231, 206],'charcoal' => [54, 69, 79],'chartreuse' => [223, 255, 0],
        'cherry' => [222, 49, 99],'cherry_blossom_pink' => [255, 183, 197],'chestnut' => [205, 92, 92],'chocolate' => [123, 63, 0],
        'chrome_yellow' => [255, 167, 0],'cinereous' => [152, 129, 123],'cinnabar' => [227, 66, 52],'cinnamon' => [210, 105, 30],
        'citrine' => [228, 208, 10],'classic_rose' => [251, 204, 231],'clover' => [0, 255, 111],'cobalt' => [0, 71, 171],
        'columbia_blue' => [155, 221, 255],'cool_black' => [0, 46, 99],'cool_grey' => [140, 146, 172],'copper' => [184, 115, 51],
        'coquelicot' => [255, 56, 0],'coral' => [255, 127, 80],'cordovan' => [137, 63, 69],'corn' => [251, 236, 93],
        'cornell_red' => [179, 27, 27],'cornflower_blue' => [100, 149, 237],'cornsilk' => [255, 248, 220],'cream' => [255, 253, 208],
        'crimson' => [220, 20, 60],'cyan' => [0, 255, 255],'daffodil' => [255, 255, 49],'dandelion' => [240, 225, 48],
        'dark_blue' => [0, 0, 139],'dark_brown' => [101, 67, 33],'dark_byzantium' => [93, 57, 84],'dark_candy_apple_red' => [164, 0, 0],
        'dark_cerulean' => [8, 69, 126],'dark_chestnut' => [152, 105, 96],'dark_coral' => [205, 91, 69],'dark_cyan' => [0, 139, 139],
        'dark_goldenrod' => [184, 134, 11],'dark_green' => [1, 50, 32],'dark_jungle_green' => [26, 36, 33],'dark_khaki' => [189, 183, 107],
        'dark_lava' => [72, 60, 50],'dark_lavender' => [115, 79, 150],'dark_magenta' => [139, 0, 139],'dark_midnight_blue' => [0, 51, 102],
        'dark_olive_green' => [85, 107, 47],'dark_orange' => [255, 140, 0],'dark_pastel_blue' => [119, 158, 203],'dark_pastel_green' => [3, 192, 60],
        'dark_pastel_purple' => [150, 111, 214],'dark_pastel_red' => [194, 59, 34],'dark_pink' => [231, 84, 128],'dark_powder_blue' => [0, 51, 153],
        'dark_raspberry' => [135, 38, 87],'dark_salmon' => [233, 150, 122],'dark_scarlet' => [86, 3, 25],'dark_sienna' => [60, 20, 20],
        'dark_slate_gray' => [47, 79, 79],'dark_spring_green' => [23, 114, 69],'dark_tan' => [145, 129, 81],'dark_tangerine' => [255, 168, 18],
        'dark_terra_cotta' => [204, 78, 92],'dark_violet' => [148, 0, 211],'davys_grey' => [85, 85, 85],'denim' => [21, 96, 189],
        'desert' => [193, 154, 107],'desert_sand' => [237, 201, 175],'dim_gray' => [105, 105, 105],'dollar_bill' => [133, 187, 101],
        'duke_blue' => [0, 0, 156],'earth_yellow' => [225, 169, 95],'eggplant' => [97, 64, 81],'emerald' => [80, 200, 120],
        'fawn' => [229, 170, 112],'ferrari_red' => [255, 28, 0],'fire_engine_red' => [206, 22, 32],'firebrick' => [178, 34, 34],
        'flame' => [226, 88, 34],'flamingo_pink' => [252, 142, 172],'flavescent' => [247, 233, 142],'forest_green' => [1, 68, 33],
        'gamboge' => [228, 155, 15],'ghost_white' => [248, 248, 255],'glaucous' => [96, 130, 182],'golden_brown' => [153, 101, 21],
        'golden_yellow' => [255, 223, 0],'goldenrod' => [218, 165, 32],'gray' => [128, 128, 128],'green' => [0, 128, 0],
        'iceberg' => [113, 166, 210],'icterine' => [252, 247, 94],'inchworm' => [178, 236, 93],'india_green' => [19, 136, 8],
        'indian_red' => [255, 92, 92],'indian_yellow' => [227, 168, 87],'international_klein_blue' => [0, 47, 167],'ivory' => [255, 255, 240],
        'jade' => [0, 168, 107],'jasper' => [215, 59, 62],'khaki' => [195, 176, 145],'lavender' => [181, 126, 220],
        'lavender_blue' => [204, 204, 255],'lavender_blush' => [255, 240, 245],'lavender_gray' => [196, 195, 208],'lawn_green' => [124, 252, 0],
        'lemon' => [255, 247, 0],'lime' => [191, 255, 0],'magenta' => [255, 0, 255],'mahogany' => [192, 64, 0],
        'maroon' => [128, 0, 0],'midnight_blue' => [25, 25, 112],'mint' => [62, 180, 137],'mustard' => [255, 219, 88],
        'navy_blue' => [0, 0, 128],'ochre' => [204, 119, 34],'olive' => [128, 128, 0],'orange' => [255, 127, 0],
        'oxford_blue' => [0, 33, 71],'pastel_blue' => [174, 198, 207],'pastel_brown' => [131, 105, 83],'pastel_gray' => [207, 207, 196],
        'pastel_green' => [119, 221, 119],'pastel_magenta' => [244, 154, 194],'pastel_orange' => [255, 179, 71],'pastel_pink' => [255, 209, 220],
        'pastel_purple' => [179, 158, 181],'pastel_red' => [255, 105, 97],'pastel_violet' => [203, 153, 201],'pastel_yellow' => [253, 253, 150],
        'peach' => [255, 229, 180],'pear' => [209, 226, 49],'pearl' => [240, 234, 214],'peridot' => [230, 226, 0],
        'pine_green' => [1, 121, 111],'pink' => [255, 192, 203],'pistachio' => [147, 197, 114],'platinum' => [229, 228, 226],
        'plum' => [142, 69, 133],'portland_orange' => [255, 90, 54],'prune' => [112, 28, 28],'pumpkin' => [255, 117, 24],
        'purple_heart' => [105, 53, 156],'raspberry' => [227, 11, 93],'raw_umber' => [130, 102, 68],'red' => [255, 0, 0],
        'rifle_green' => [65, 72, 51],'rosewood' => [101, 0, 11],'royal_blue' => [0, 35, 102],'ruby' => [224, 17, 95],
        'rust' => [183, 65, 14],'safety_orange' => [255, 103, 0],'saffron' => [244, 196, 48],'salmon' => [255, 140, 105],
        'sand' => [194, 178, 128],'sand_dune' => [150, 113, 23],'sandstorm' => [236, 213, 64],'sapphire' => [8, 37, 103],
        'seal_brown' => [50, 20, 20],'seashell' => [255, 245, 238],'sepia' => [112, 66, 20],'shadow' => [138, 121, 93],
        'silver' => [192, 192, 192],'sinopia' => [203, 65, 11],'sky_blue' => [135, 206, 235],'sky_magenta' => [207, 113, 175],
        'snow' => [255, 250, 250],'spring_bud' => [167, 252, 0],'steel_blue' => [70, 130, 180],'straw' => [228, 217, 111],
        'sunset' => [250, 214, 165],'tangerine' => [242, 133, 0],'teal' => [0, 128, 128],'terra_cotta' => [226, 114, 91],
        'titanium_yellow' => [238, 230, 0],'tropical_rain_forest' => [0, 117, 94],'turquoise' => [48, 213, 200],'ultramarine' => [18, 10, 143],
        'united_nations_blue' => [91, 146, 229],'vanilla' => [243, 229, 171],'violet' => [143, 0, 255],'wheat' => [245, 222, 179],
        'white' => [255, 255, 255],'white_smoke' => [245, 245, 245],'xanadu' => [115, 134, 120],'yale_blue' => [15, 77, 146], 'yellow' => [255, 255, 0]
    ];

    protected function color(string $color)
    {
        if ($color == self::TRANSPARENT)
        {
            $_color = imagecolorallocatealpha($this->image, 0, 0, 0, 100);
        }
        else
        {

            if (preg_match('/\!(.*)|\%/', $color, $matches))
            {
                if ($matches[0] == self::RAND)
                {
                    $color = array_rand($this->color, 1);
                }
                else
                {
                    $not = explode(',', $matches[1]);
                    do
                    {
                        $color = array_rand($this->color, 1);
                    }
                    while (in_array($color, $not));
                }

            }

            #TODO: check if color in array
            $arguments = array_merge([$this->image], $this->color[$color]);
            $_color = imagecolorallocate(...$arguments);
        }

        return $_color;
    }
}