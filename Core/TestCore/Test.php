<?php

namespace Core\TestCore;

class Test
{
    /**
     * static function expect
     *
     * @param mixed $expect
     * @param mixed $currentValue
     * @param string $testDescription
     * @return void
     */
    public static function expect(
        mixed $expect,
        mixed $currentValue,
        string $testDescription = ''
    ): void {
        $line = str_repeat('-', 40);
        echo PHP_EOL . $line . PHP_EOL;

        if ($testDescription) {
            echo "Testing: {$testDescription}" . PHP_EOL . PHP_EOL . 'Result: ';
        }

        echo sprintf('%s %s', ...[
            ($expect === $currentValue) ? 'passed ✅' : 'failed ⛔',
            PHP_EOL,
        ]);

        echo PHP_EOL;

        return;
    }
}
