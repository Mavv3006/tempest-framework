<?php

declare(strict_types=1);

namespace Tests\Tempest\Validation\Rules;

use PHPUnit\Framework\TestCase;
use Tempest\Validation\Rules\Email;

class EmailTest extends TestCase
{
    public function test_email()
    {
        $rule = new Email();

        $this->assertSame('Value should be a valid email address', $rule->message());
        $this->assertFalse($rule->isValid('this is not an email'));
        $this->assertTrue($rule->isValid('jim.halpert@dundermifflinpaper.biz'));
    }
}
