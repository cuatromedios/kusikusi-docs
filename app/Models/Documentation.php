<?php

namespace App\Models;

use Kusikusi\Models\EntityModel;

class Documentation extends EntityModel
{
    protected $contentFields = [ "title", "description", "body" ];
    protected $propertiesFields = [];
    protected $cacheViewsAs = 'directory';

}
