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
    for ($i = 1; $i < sizeof($arr); $i++)
    {
        $item = $arr[$i];
        if ($item > $max)
        {
            $max = $item;
        }
    }
    return $max;
}