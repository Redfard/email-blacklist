<?php

namespace Redfard\EmailBlacklist;

use Illuminate\Database\Eloquent\Model;

class EmailBlacklistEntity extends Model
{
    protected $table = 'emails_blacklist';

    public $fillable = ['email'];
}
