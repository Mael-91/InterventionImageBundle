<?php

namespace Mael\InterventionImageBundle;

use Intervention\Image\ImageManager;

class MaelInterventionImageManager extends ImageManager
{

    public function __construct(string $driver)
    {
        parent::__construct([$driver]);
    }
}