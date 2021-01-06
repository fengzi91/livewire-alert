<h1 align="center"> livewire-alert </h1>

[![Build Status](https://travis-ci.com/fengzi91/livewire-alert.svg?branch=main)](https://travis-ci.com/fengzi91/livewire-alert)
![Packagist License](https://img.shields.io/packagist/l/zys/livewire-alert)
<p align="center"> livewire alert 组件.</p>


## Installing

```shell
$ composer require zys/livewire-alert -vvv
```
## Requirements
This package uses Livewire under the hood. Please make sure you include it in your dependencies before using this package.

- PHP 7.2 or higher
- Laravel 8
- Livewire
- tailwindcss

## Usage

Add livewire-alert component
```html
<body>
...
@livewire('livewire-alert')
</body>
```
Show message in livewire component

```php

public function showMessage()
{
    ...
    $this->alert('info', 'Message~', ['content' => 'Message Content', 'timeout' => 3000]);
}
```
Show Message in javascript

```javascript
window.livewire.emitTo('livewire-alert', 'livewireAlert', {
    type: 'info',
    message: 'Message',
    options: {
        content: 'Message content~',
        timeout: 3000,
    }
})
```



## Contributing

You can contribute in one of three ways:

1. File bug reports using the [issue tracker](https://github.com/zys/livewire-alert/issues).
2. Answer questions or fix bugs on the [issue tracker](https://github.com/zys/livewire-alert/issues).
3. Contribute new features or update the wiki.

_The code contribution process is not very formal. You just need to make sure that you follow the PSR-0, PSR-1, and PSR-2 coding guidelines. Any new code contributions must be accompanied by unit tests where applicable._

## License

MIT