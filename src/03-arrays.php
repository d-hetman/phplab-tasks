<?php
/**
 * The $input variable contains an array of digits
 * Return an array which will contain the same digits but repetitive by its value
 * without changing the order.
 * Example: [1,3,2] => [1,3,3,3,2,2]
 *
 * @param  array  $input
 * @return array
 */
function repeatArrayValues(array $input)
{
    if (empty($input)) {
        return $input;
    }
    else
        foreach ($input as $val) {
            for ($i=0; $i<$val ; $i++) {
                $result[] = $val;
            }
        }
        return $result;
}
/**
 * The $input variable contains an array of digits
 * Return the lowest unique value or 0 if there is no unique values or array is empty.
 * Example: [1, 2, 3, 2, 1, 5, 6] => 3
 *
 * @param  array  $input
 * @return int
 */
function getUniqueValue(array $input)
{
    $input = array_count_values($input);
    if (in_array(1, $input)){
        $newArray = [];
        foreach ($input as $key => $value) {
            if ($value == 1){
                array_push($newArray, $key);
            }
        }
        return min ($newArray);
    }else
        return 0;

}


/**
 * The $input variable contains an array of arrays
 * Each sub array has keys: name (contains strings), tags (contains array of strings)
 * Return the list of names grouped by tags
 * !!! The 'names' in returned array must be sorted ascending.
 *
 * Example:
 * [
 *  ['name' => 'potato', 'tags' => ['vegetable', 'yellow']],
 *  ['name' => 'apple', 'tags' => ['fruit', 'green']],
 *  ['name' => 'orange', 'tags' => ['fruit', 'yellow']],
 * ]
 *
 * Should be transformed into:
 * [
 *  'fruit' => ['apple', 'orange'],
 *  'green' => ['apple'],
 *  'vegetable' => ['potato'],
 *  'yellow' => ['orange', 'potato'],
 * ]
 *
 * @param  array  $input
 * @return array
 */
function groupByTag(array $input)
{
    array_multisort($input);
    $newArr = [];
    foreach ($input as $item){
        $newArr = array_merge_recursive($newArr, array_combine ($item['tags'], array_fill(0, count($item['tags']), [$item['name']])));
    }
    ksort($newArr);
    return $newArr;
}