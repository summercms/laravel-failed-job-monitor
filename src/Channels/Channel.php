<?php

namespace Spatie\FailedJobsMonitor\Channels;

interface Channel
{
    public function send(string $failedJobClassName,  string $failedJobData);
}
