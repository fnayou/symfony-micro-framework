<?php

namespace Tests\Command;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\Console\Application;

/**
 * Class CommandTestCase.
 */
class CommandTestCase extends KernelTestCase
{
    /**
     * @var \Symfony\Bundle\FrameworkBundle\Console\Application
     */
    protected $application;

    /**
     * {@inherit}.
     */
    protected function setUp()
    {
        static::$kernel = self::createKernel([
            'environment' => 'test',
            'debug' => true,
        ]);

        static::$kernel->boot();

        $this->application = new Application(static::$kernel);
    }

    /**
     * @param mixed $thing
     */
    protected function dumpThat($thing)
    {
        fwrite(STDERR, dump($thing));
    }
}
