<?php
function fibonacci($n) {
    if ($n <= 1) {
        return $n;
    }
    return fibonacci($n - 1) + fibonacci($n - 2);
}

// Example usage
$n = 10;
for ($i = 0; $i < $n; $i++) {
    echo fibonacci($i) . ", ";
}
?>