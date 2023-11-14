<?php
//! PHP Enums

enum DayOfWeeks {
    case Monday;
    case Tuesday;
    case Wednesday;
    case Thursday;
    case Friday;
    case Saturday;
    case Sunday;
}
function isWeekend(DayOfWeeks $day): bool {
    return match($day) {
        DayOfWeeks::Monday => "Happy Monday"
    };
}


echo isWeekend(DayOfWeeks::Monday);


?>