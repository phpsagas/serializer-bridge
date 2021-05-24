<?php

namespace PhpSagas\SerializerBridge;

use PhpSagas\Orchestrator\BuildEngine\SagaDataInterface;
use PhpSagas\Orchestrator\ExecutionEngine\SagaSerializerInterface;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * Serializes saga data to/from JSON using symfony serializer.
 */
class SagaSerializer implements SagaSerializerInterface
{
    /** @var SerializerInterface */
    private $serializer;

    public function __construct(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }

    /**
     * @param SagaDataInterface $sagaData
     *
     * @return string
     */
    public function serialize(SagaDataInterface $sagaData): string
    {
        return $this->serializer->serialize($sagaData, 'json');
    }

    /**
     * @param string $sagaData
     * @param string $type
     *
     * @return SagaDataInterface
     */
    public function deserialize(string $sagaData, string $type): SagaDataInterface
    {
        /** @var SagaDataInterface $data */
        $data = $this->serializer->deserialize($sagaData, $type, 'json');
        return $data;
    }
}
