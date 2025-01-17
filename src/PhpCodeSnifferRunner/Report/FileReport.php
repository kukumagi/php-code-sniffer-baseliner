<?php

declare(strict_types=1);

namespace ISAAC\CodeSnifferBaseliner\PhpCodeSnifferRunner\Report;

class FileReport
{
    /**
     * @var int
     */
    private $errorCount;
    /**
     * @var int
     */
    private $warningCount;
    /**
     * @var Message[]
     */
    private $messages;

    /**
     * @param Message[] $messages
     */
    public function __construct(int $errorCount, int $warningCount, array $messages)
    {
        $this->errorCount = $errorCount;
        $this->warningCount = $warningCount;
        $this->messages = $messages;
    }

    public function getErrorCount(): int
    {
        return $this->errorCount;
    }

    public function getWarningCount(): int
    {
        return $this->warningCount;
    }

    /**
     * @return Message[]
     */
    public function getMessages(): array
    {
        return $this->messages;
    }
}
