<?php

/**
 * Base class for data processing.
 *
 * @package raven
 */
abstract class PrintFriendly_Raven_Processor
{
    /**
     * This constant defines the mask string used to strip sensitive information.
     */
    const STRING_MASK = '********';

    /**
     * @var PrintFriendly_Raven_Client The Raven client
     */
    protected $client;

    /**
     * Class constructor.
     *
     * @param PrintFriendly_Raven_Client $client The Raven client
     */
    public function __construct(PrintFriendly_Raven_Client $client)
    {
        $this->client = $client;
    }

    /**
     * Override the default processor options
     *
     * @param array $options Associative array of processor options
     */
    public function setProcessorOptions(array $options)
    {
    }

    /**
     * Process and sanitize data, modifying the existing value if necessary.
     *
     * @param array $data Array of log data
     */
    abstract public function process(&$data);
}
