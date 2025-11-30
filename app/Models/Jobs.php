<?php

namespace App\Models;

class Jobs
{
    private int $counter = 0;

    public array $allAsArrays {
        get {
            return array_map(function($job) {
                return $job->get;
            }, $this->all);
        }
    }

    public array $allAsJobs {
        get {
            return $this->all;
        }
    }

    private array $all = [];

    public function __construct()
    {
        $this->all[] = new Job(
            id: ++$this->counter,
            title: 'Junior Laravel Developer',
            description: 'Assist in developing and maintaining Laravel applications.',
            location: 'Remote',
            type: 'Full-time',
        );

        $this->all[] = new Job(
            id: ++$this->counter,
            title: 'Senior Laravel Developer',
            description: 'Lead the development team and architect Laravel solutions.',
            location: 'New York, NY',
            type: 'Full-time',
        );
    }
}
