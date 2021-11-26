<?php
//пример  возвращения  функцией  количества  дней,  прошедших
//между двумя датами. Причем неважно, какая из дат наступила раньше.

function daysBetween($start_data, $end_data): float|int
{
    return abs(strtotime($start_data) - strtotime($end_data)) / (60*60*24);
}
$show_days = daysBetween("15.11.2021", "9.12.2021");
echo "Сессия длится $show_days дня";