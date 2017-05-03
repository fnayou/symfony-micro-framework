<?php

namespace Tests\Command;

use AppBundle\Command\DefaultCommand;
use Symfony\Component\Console\Tester\CommandTester;

/**
 * Class DefaultCommandTest.
 */
class DefaultCommandTest extends CommandTestCase
{
    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();
        $this->application->add(new DefaultCommand());
    }

    /**
     * test app:default:show.
     */
    public function testDefaultCommandShouldSuccess()
    {
        $command = $this->application->find('app:default:show');
        $commandTester = new CommandTester($command);
        $commandTester->execute([]);

        $this->assertSame(
            0,
            $commandTester->getStatusCode(),
            'command should success'
        );
        $this->assertRegExp(
            '/Hello Micro Framework from command/i',
            $commandTester->getDisplay(),
            'command should have exact text'
        );
    }
}
