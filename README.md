Breadcrumbr
===========

Breadcrumbr, breadcrumb logic helpers.

## Usage

In it's very basic form.
```php
$breadcrumb = new \Breadcrumbr\Breadcrumb();
$breadcrumb->addCrumb(new \Breadcrumbr\Crumb\Crumb());

foreach ($breadcrumb as $crumb) {
    // Render the crumb
}
```

Adding resolvers.
```php
$breadcrumb->addResolver(new EnvResolver());

// render
```

Adding more context to the resolvers.
```php
$context = new \Breadcrumbr\Context\Context();
$context->addContext('menu', $menuInfo);

$breadcrumb->setContext($context);
$breadcrumb->addResolver(new MenuResolver());

// render
```

## Contributing

> All code contributions - including those of people having commit access - must
> go through a pull request and approved by a core developer before being
> merged. This is to ensure proper review of all the code.
>
> Fork the project, create a feature branch, and send us a pull request.
>
> To ensure a consistent code base, you should make sure the code follows
> the [Coding Standards](http://symfony.com/doc/2.0/contributing/code/standards.html)
> which we borrowed from Symfony.
> Make sure to check out [php-cs-fixer](https://github.com/fabpot/PHP-CS-Fixer) as this will help you a lot.

If you would like to help take a look at the [list of issues](http://github.com/NoUseFreak/Breadcrumbr/issues).

## Requirements

PHP 5.3.2 or above

## Author and contributors

Dries De Peuter - <dries@nousefreak.be> - <http://nousefreak.be>

See also the list of [contributors](https://github.com/NoUseFreak/Breadcrumbr/contributors) who participated in this project.

## License

This project is licensed under the MIT license.
