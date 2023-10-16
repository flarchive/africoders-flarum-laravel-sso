<?php
namespace Africoders\SSO\Models;

use Carbon\Carbon;
use Flarum\Database\AbstractModel;
use Flarum\Group\Group;
use Illuminate\Database\Eloquent\Relations;

class SessionModel extends AbstractModel
{
    protected $table = 'sessions';
}