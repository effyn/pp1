<?php
function printArr($arr)
{
    foreach ($arr as $item)
    {
        echo "<p>$item</p>";
    }
}

function largest($arr)
{
    if (empty($arr))
    {
        return null;
    }

    $max = $arr[0];
    foreach (array_slice($arr,1) as $item)
    {
        if ($item > $max)
        {
            $max = $item;
        }
    }
    return $max;
}

function average($arr)
{
    $sum = 0;
    foreach ($arr as $item)
    {
        $sum += $item;
    }

    return $sum / sizeof($arr);
}

function removeDups($arr)
{
    $newArr = array();

    foreach ($arr as $item)
    {
        if (!in_array($item, $newArr))
        {
            $newArr[] = $item;
        }
    }

    return $newArr;
}

function distribution($arr)
{
    $newArr = array();

    foreach ($arr as $item)
    {
        if (isset($newArr[$item]))
        {
            $newArr[$item] += 1;
        }

        else
        {
            $newArr[$item] = 1;
        }
    }

    ksort($newArr);
    return $newArr;
}