<?php

namespace Modules\Setting\Models;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Setting extends BaseModel implements HasMedia
{
    use InteractsWithMedia;

}
