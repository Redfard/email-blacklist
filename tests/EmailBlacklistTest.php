<?php

use Orchestra\Testbench\TestCase as OrchestraTestCase;

class EmailBlacklistTest extends OrchestraTestCase
{
    /**
     * @dataProvider providerTestIsCorrectEmailReturnFalse
     */
    public function testIsCorrectEmailReturnFalse($email)
    {
        $blackList = new Redfard\EmailBlacklist\EmailBlacklist();
        $res = $blackList->isCorrectEmail($email);

        $this->assertFalse($res);
    }

    public function providerTestIsCorrectEmailReturnFalse()
    {
        return [
            ['test'],
            ['test@'],
            ['test@test'],
            ['test@test.']
        ];
    }

    public function testIsCorrectEmailReturnTrue()
    {
        $blackList = new Redfard\EmailBlacklist\EmailBlacklist();
        $res = $blackList->isCorrectEmail('test@test.com');

        $this->assertTrue($res);
    }
}