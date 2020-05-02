<p align="center"><img src="https://res.cloudinary.com/kiekies/image/upload/v1588426232/ztgvwfaqb8chrrytzlss.svg" width="400"></p>

<p align="center">
<a href="https://packagist.org/packages/skateboard/skateboard"><img src="https://poser.pugx.org/skateboard/skateboard/v/stable" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/skateboard/skateboard"><img src="https://poser.pugx.org/skateboard/skateboard/downloads" alt="Total Downloads"></a>
<a href="https://poser.pugx.org/skateboard/skateboard/license"><img src="https://poser.pugx.org/skateboard/skateboard/license" alt="License"></a>
</p>

## About Skateboard

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
class Controller extends Skateboard\Wheels\WebController
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

### Environment variables

Sensitive values that you store in your .env file can be accessed anywhere:

```php
$title = getenv("APP_NAME");
```

## Installation

Use Composer to start you project

```
composer create-project --prefer-dist skateboard/skateboard gallery
```

If you want to use an environment file, copy the example:

```bash
cp .env.example .env
```

## License

Skateboard is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
