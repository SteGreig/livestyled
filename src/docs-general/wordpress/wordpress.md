# WordPress

> WordPress Guidlines

- We use [WordPress Coding standards](https://codex.wordpress.org/WordPress_Coding_Standards)
- We have our own [Page Builder](./wordpress/page-builder.md) built in Advanced Custom Fileds Pro, it has a number of pre-built modules.

## Don't brace yourself

We tend not to use braces, therefore please use

![#ff0000](https://placehold.it/15/ff0000/000000?text=+) Instead of:
```php
if( this === that ){
	...
} else if( this === something ) {
	...
} else {
	...
}
```

```php
foreach {
	...
}
```

![#00ff00](https://placehold.it/15/00ff00/000000?text=+) Please use:
```php
if( this === that ):
	...
elseif( this === something ):
	...
else:
	...
endif;
```

```php
foreach:
	...
endforeach;
```

## Don't repeat yourself

Make use of WordPress templates to reduce the amount of code repeated.

