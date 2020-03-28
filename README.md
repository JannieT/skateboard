[![Latest Stable Version](https://poser.pugx.org/scateboard/scateboard/v/stable)](https://packagist.org/packages/scateboard/scateboard) [![Total Downloads](https://poser.pugx.org/scateboard/scateboard/downloads)](https://packagist.org/packages/scateboard/scateboard) [![License](https://poser.pugx.org/scateboard/scateboard/license)](https://packagist.org/packages/scateboard/scateboard)

## About Scateboard

Skateboard is a minimalist PHP framework that is a good starting point for small web projects. Skateboard follows the MVC pattern and has sensible defaults that lets you start with your app-specific code immediately. The framework adds only two library files to your project which brings the following:

### Easy routing

```php
// index.php
$router->get('/', '\App\Controller@index');
$router->get('/item/{id}', '\App\Controller@item');
```

For also using middleware, route parameters, custom 404 responses and route prefixes, see the [router docs](https://github.com/bramus/router)

### Nimble controllers

```php
class Controller extends Scateboard\Wheels\WebController
{

    public function about()
    {
        $data = [
            'host' => $this->getHeaderLine('Host'),
            'count' => 15
        ];

        $this->view('about', $data);
    }

    public function ajax()
    {
        if (empty($this->input('name'))) $this->abort(422);

        $data = [
            'name' => "Your name is: {$this->input('name')}",
        ];

        $this->json($data);
    }

}
```

For the full API on parsing request inputs, safe template rendering, template layouts, json responses, aborts and redirects, see the [controller docs](https://github.com/OneSheep/wheels/blob/master/README.md)

## Installation

Use Composer to start you project

```
composer create-project --prefer-dist scateboard/scateboard gallery
```

## License

Scateboard is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
