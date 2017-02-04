# lunanode-api-php

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Total Downloads][ico-downloads]][link-downloads]


This is a simple wrapper for Lunanode Hostings api.

## Install

Via Composer

``` bash
$ composer require sdavis1902/lunanode-api-php
```

## Usage

``` php
$api = new \sdavis1902\LunanodeApiPhp\Lunanode;
$result = $api->request('vm', 'list');

foreach( $result['vms'] as $vm ){
    $info = $api->request('vm', 'info', [
        'vm_id' => $vm['vm_id']
    ]); 
}
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email s.davis1902@gmail.com instead of using the issue tracker.

## Credits

- [Scott D][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/sdavis1902/lunanode-api-php.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/sdavis1902/lunanode-api-php/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/sdavis1902/lunanode-api-php.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/sdavis1902/lunanode-api-php.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/sdavis1902/lunanode-api-php.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/sdavis1902/lunanode-api-php
[link-travis]: https://travis-ci.org/sdavis1902/lunanode-api-php
[link-scrutinizer]: https://scrutinizer-ci.com/g/sdavis1902/lunanode-api-php/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/sdavis1902/lunanode-api-php
[link-downloads]: https://packagist.org/packages/sdavis1902/lunanode-api-php
[link-author]: https://github.com/sdavis1902
[link-contributors]: ../../contributors
