<?php

namespace Amethyst\Events\FileGenerator;

use Amethyst\Models\FileGenerator;
use Exception;
use Illuminate\Queue\SerializesModels;
use Railken\Lem\Contracts\AgentContract;

class FileFailed
{
    use SerializesModels;

    public $generator;
    public $error;
    public $agent;

    /**
     * Create a new event instance.
     *
     * @param \Amethyst\Models\FileGenerator       $generator
     * @param \Exception                           $exception
     * @param \Railken\Lem\Contracts\AgentContract $agent
     */
    public function __construct(FileGenerator $generator, Exception $exception, AgentContract $agent = null)
    {
        $this->generator = $generator;
        $this->error = (object) [
            'class'   => get_class($exception),
            'message' => $exception->getMessage(),
        ];

        $this->agent = $agent;
    }
}
