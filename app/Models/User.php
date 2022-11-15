<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    CONST ROLE_PROJECT_OWNER = 'projectOwner';
    CONST ROLE_OWNER = 'owner';
    CONST ROLE_HOLDER = 'holder';
    CONST ROLE_VIEWER = 'viewer';
}
