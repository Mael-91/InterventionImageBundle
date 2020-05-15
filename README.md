# InterventionImageBundle

Simple integration for use [intervention/image](https://github.com/Intervention/image) in Symfony project

## Requirements

- PHP 7.1
- Symfony >= 4.4
- [FileInfo Extension](https://www.php.net/manual/fr/book.fileinfo.php)
- GD Library (>= 2.0) **or** Imagick PHP Extension (>= 6.5.7)

## Installation

Run this command in your terminal :

```shell script
composer require mael/intervention-image-bundle
```

Answer **yes** for `mael/intervention-image-bundle`

## Configuration

You can chose the driver for image manipulation in `config/packages/mael_intervention_image.yaml`

```yaml
mael_intervention_image:
    driver: gd ## GD or imagick; Default is GD
```

## Usage

```php
use \Mael\InterventionImageBundle\MaelInterventionImageManager;

class Foo {
    public function makeImage(MaelInterventionImageManager $imageManager)
    {
        $newImage = $imageManager->make('public/uploads/bar.jpg')->resize(1200, 500);
    }
}
```

> ***attention, your directory must have permission to write a file***

Refer to the [intervention/image](http://image.intervention.io/) documentation to know the different options available to manipulate the images.

## License

This bundle is under [MIT license](https://github.com/Mael-91/InterventionImageBundle/blob/master/LICENSE)