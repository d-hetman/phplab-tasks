<?php
/**
 * The $input variable contains text in snake case (i.e. hello_world or this_is_home_task)
 * Transform it into camel cased string and return (i.e. helloWorld or thisIsHomeTask)
 * @see http://xahlee.info/comp/camelCase_vs_snake_case.html
 *
 * @param  string  $input
 * @return string
 */
function snakeCaseToCamelCase(string $input)
{
    $input = str_replace('_', '', ucwords($input, '_'));
    $input = lcfirst($input);
    return $input;

}

/**
 * The $input variable contains multibyte text like 'ФЫВА олдж'
 * Mirror each word individually and return transformed text (i.e. 'АВЫФ ждло')
 * !!! do not change words order
 *
 * @param  string  $input
 * @return string
 */
function mirrorMultibyteString(string $input) {
    $encoding = mb_detect_encoding($input);
    $length   = mb_strlen($input, $encoding);
    $reversed = '';
    while ($length-- > 0) {
        $reversed .= mb_substr($input, $length, 1, $encoding);
    }
    $reversed = explode(" ", $reversed);
    $reversed = array_reverse($reversed);
    $reversed = implode(' ', $reversed);
    return $reversed;
}

/**
 * My friend wants a new band name for her band.
 * She likes bands that use the formula: 'The' + a noun with first letter capitalized.
 * However, when a noun STARTS and ENDS with the same letter,
 * she likes to repeat the noun twice and connect them together with the first and last letter,
 * combined into one word like so (WITHOUT a 'The' in front):
 * dolphin -> The Dolphin
 * alaska -> Alaskalaska
 * europe -> Europeurope
 * Implement this logic.
 *
 * @param  string  $noun
 * @return string
 */
function getBrandName(string $noun) {
    $firstValue = substr($noun, 0, 1);
    $lastValue = substr($noun, -1);
    if (($firstValue <=> $lastValue) == 0) {
        $arr = str_split($noun);
        $trimmed = array_pop($arr);
        $str = implode($arr);
        $band = ucfirst($str . $noun);
        return ($band);
    } else {
        return $noun = "The " . ucfirst($noun);
    }
}
