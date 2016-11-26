<?php
namespace Kerox\Messenger\Callback;

class RawEvent extends AbstractCallbackEvent
{

    /**
     * @var array
     */
    protected $raw;

    /**
     * RawEvent constructor.
     *
     * @param string $senderId
     * @param string $recipientId
     * @param int $timestamp
     * @param array $raw
     */
    public function __construct(string $senderId, string $recipientId, int $timestamp, array $raw)
    {
        parent::__construct($senderId, $recipientId, $timestamp);

        $this->raw = $raw;
    }

    /**
     * @return array
     */
    public function getRaw(): array
    {
        return $this->raw;
    }
}