<?php

declare(strict_types=1);

namespace App\User\Application\Query\Auth\GetAuthUserByEmail;

use App\Shared\Application\Query\QueryInterface;
use App\User\Domain\ValueObject\Email;
use Assert\AssertionFailedException;

final class GetAuthUserByEmailQuery implements QueryInterface
{
    /** @psalm-readonly */
    public Email $email;

    /**
     * @throws AssertionFailedException
     */
    public function __construct(string $email)
    {
        $this->email = Email::fromString($email);
    }
}
