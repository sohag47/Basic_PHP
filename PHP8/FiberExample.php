<?php

$fiber = new Fiber(function (string $name) {
    echo "Fiber {$name}: Starting up" . PHP_EOL;

    $data_from_main = Fiber::suspend('Waiting for data...');
    echo "Fiber {$name}: Resumed! Received data: '{$data_from_main}'" . PHP_EOL;

    return 'Fiber finished its calculation.';
});


// 2. Main Program Execution (The 'Scheduler')
echo "Main: Starting program" . PHP_EOL;

// first task
$result_of_suspend = $fiber->start('Task A');
echo "Main: Received yield value: '{$result_of_suspend}'" . PHP_EOL;


echo "Main: Processing other requests now..." . PHP_EOL;
$final_result = $fiber->resume('Database Result 123');

echo "Main: Fiber finished completely. Final result: '{$final_result}'" . PHP_EOL;
