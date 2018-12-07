<?php

namespace Redfard\EmailBlacklist;

class EmailBlacklist
{
    /**
     * @param String $email
     * @throws \Exception
     */
    public function add($email)
    {
        $this->checkCorrectEmail($email);

        EmailBlacklistEntity::updateOrCreate(['email' => $email]);
    }

    /**
     * @param String $email
     * @return bool
     * @throws \Exception
     */
    public function emailExist($email)
    {
        $this->checkCorrectEmail($email);

        return EmailBlacklistEntity::where(['email' => $email])->exists();
    }

    /**
     * @param String $email
     * @throws \Exception
     */
    public function remove($email)
    {
        $this->checkCorrectEmail($email);

        EmailBlacklistEntity::where(['email' => $email])->delete();
    }

    /**
     * @param String $email
     * @return bool
     */
    public function isCorrectEmail($email)
    {
        $validator = \Validator::make([$email], ['email']);

        if ($validator->fails()) {
            return false;
        }

        return true;
    }

    /**
     * @param String $email
     * @throws \Exception
     */
    protected function checkCorrectEmail($email)
    {
        if (!$this->isCorrectEmail($email)) {
            throw new \Exception('Email no correct');
        }
    }
}
