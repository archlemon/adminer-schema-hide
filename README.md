# Adminer Schema Hide
Allows you to specify a list of schemas to hide, in PostgreSQL. This is not a security plugin.

## Usage

Set up adminer to [work with plugins](https://www.adminer.org/en/plugins/#use), and then add the following:

```php
<?php
function adminer_object() {
  // ...
  $plugins = array(
    // ...
    new AdminerSchemaHide([
      // the schemas to hide
      'information_schema',
      'pg_catalog',
      'pg_temp_1',
      'pg_toast',
      'pg_toast_temp_1',
    ]),
    // ...
  );
  // ...

  return new AdminerPlugin($plugins);
}

// ...
```
