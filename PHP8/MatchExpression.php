<?php

declare(strict_types=1);


$day = 'Fri';

$dayType = match ($day) {
    'Sun', 'Mon', 'Tue', 'Wed', 'Thu' => 'Working Day',
    'Fri', 'Sat' => 'Weekend',
    default => 'Invalid day',
};

echo ($dayType);
