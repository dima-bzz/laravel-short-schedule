<?php

namespace Spatie\ShortSchedule\Events;

use Symfony\Component\Process\Process;

class ShortScheduledTaskFinished
{
    public string $command;

    public Process $process;

    public function __construct(string $command, Process $process)
    {
        $this->command = $command;

        $this->process = $process;
    }
}
