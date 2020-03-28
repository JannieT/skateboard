## About Scateboard

Skateboard is a minimalist PHP framework that is a good starting point for small web projects. Skateboard follows the MVC pattern and has sensible defaults that lets you start with your app-specific code immediately. The framework adds only two library files to your project which brings the following:

## Features

-   Elegant and powerful routing
-   Request input parsing
-   Safe template rendering with layout
-   json responses
-   Aborts and redirects

## Usage

```php

class Controller extends Scateboard\Wheels\WebController
{

    public function about()
    {
        $data = [
            'headers' => $this->allRequestHeaders(),
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

## License

Scateboard is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
