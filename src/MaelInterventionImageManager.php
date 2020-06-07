<?php

namespace Mael\InterventionImageBundle;

use Intervention\Image\ImageManager;
use Symfony\Component\DependencyInjection\ContainerInterface;

class MaelInterventionImageManager extends ImageManager
{

    public function __construct(string $driver)
    {
        //$config = $container->getParameter('mael_intervention_image.driver');
        parent::__construct([$driver]);
    }
}