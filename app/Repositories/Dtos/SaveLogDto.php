<?php
namespace App\Repositories\Dtos;

use Carbon\Carbon;

class SaveLogDto
{

    private string $email;
    private string $url;
    private string $method;
    private int $systemId;
    private Carbon $date;
    private ?string $data;

    public function __construct(string $email, string $url, string $method, int $systemId, Carbon $date)
    {
        $this->email = $email;
        $this->url = $url;
        $this->method = $method;
        $this->systemId = $systemId;
        $this->date = $date;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    public function setMethod(string $method): void
    {
        $this->method = $method;
    }

    public function getSystemId(): int
    {
        return $this->systemId;
    }

    public function setSystemId(int $systemId): void
    {
        $this->systemId = $systemId;
    }

    public function getDate(): Carbon
    {
        return $this->date;
    }

    public function setDate(Carbon $date): void
    {
        $this->date = $date;
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
