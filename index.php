<?php
$series = ["The Umbrella Academy" => [2019, "Steve Backman" ],
    "Money heist" => [2017, "Alex Pina" ],
    "Deadly Class" => [2018, "Denis Gansel"],
    "Stranger Things" => [2016, "Matt Duffer"]
];

function cmp($a, $b)
{ // callback-функция, определяющая способ сортировки (по годам)
    if ($a[0] < $b[0]) {
        return -1;
    } elseif ($a[0] == $b[0]) {
        return 0;
    } else {
        return 1;
    }
}
function srt($a, $b)
{
    if ($a[1] < $b[1]) {
        return -1;
    } elseif ($a[1] == $b[1]) {
        return 0;
    } else {
        return 1;
    } 
}
uasort($series,"cmp"); // строки сортируются в алфавитном // порядке, ключи теряются
print_r($series);

ksort($series); //  сортируются по названию
print_r($series);

uasort($series, "srt");
print_r($series);
