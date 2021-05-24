<?php

namespace PhpSagas\SymfonySerializerBridge;

use PhpSagas\Orchestrator\Command\CommandDataInterface;
use PhpSagas\Orchestrator\ExecutionEngine\MessagePayloadSerializerInterface;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * Serializes command data to JSON using symfony serializer.
 */
class MessagePayloadJsonSerializer implements MessagePayloadSerializerInterface
{
    /** @var SerializerInterface */
    private $serializer;

    public function __construct(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }

    /**
     * @param CommandDataInterface $commandData
     *
     * @return string
     */
    public function serialize(CommandDataInterface $commandData): string
    {
        return $this->serializer->serialize($commandData, 'json');
    }
}
