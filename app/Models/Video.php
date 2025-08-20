<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model {
    public const STATUS_DRAFT    = 'draft';
    public const STATUS_REVIEW   = 'review';
    public const STATUS_SCHEDULE = 'scheduled';
    public const STATUS_PUB      = 'published';
    public const STATUS_ARCH     = 'archived';
}
