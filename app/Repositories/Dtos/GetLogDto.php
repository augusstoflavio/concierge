<?php

namespace App\Repositories\Dtos;

use Carbon\Carbon;

class GetLogDto
{

    private int $systemId;
    private ?string $email;
    private ?string $url;
    private ?string $method;
    private ?Carbon $de = null;
    private ?Carbon $ate = null;
    private ?string $data;

    /**
     * @param int $systemId
     */
    public function __construct(int $systemId)
    {
        $this->systemId = $systemId;
    }

    public function getSystemId(): int
    {
        return $this->systemId;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): void
    {
        $this->url = $url;
    }

    public function getMethod(): ?string
    {
        return $this->method;
    }

    public function setMethod(?string $method): void
    {
        $this->method = $method;
    }

    public function getFrom(): ?Carbon
    {
        return $this->de;
    }

    public function setFrom(?Carbon $de): void
    {
        $this->de = $de;
    }

    public function getTo(): ?Carbon
    {
        return $this->ate;
    }

    public function setTo(?Carbon $ate): void
    {
        $this->ate = $ate;
    }

    public function getData(): ?string
    {
        return $this->data;
    }

    public function setData(?string $data): void
    {
        $this->data = $data;
    }
}
