# PHP Respect

A set of files with which to start writing your own vanilla-flavoured PHP web app.

## Instructions

1. Modify the database connection details in `/r/db.php`
2. Update the `_internalServerError()` function in that file to redirect to an error page
3. Review and update `/r.php` as required to make it do what you need, no more no less. This file should be included at the top of all the controller files

## Writing model, view and controller files

### Model

These files (in `/r/sql/`) contain just a bunch of functions to read and write from the database. One file per entity makes sense.

### View

These files (in `/r/html/`) match the name and path of controller files (in `/`), but with a `.tpl` extension. For example, the corresponding view of this controller file,

```
/rss/index.php
```
&hellip; is here:

```
/r/html/rss/index.tpl
```

Use as little PHP as possible, or integrate a template engine.

### Controller files

Files outside of `/r/`. Include `/r.php` at the top of each controller file. To pass data to a view and display that view,

```
\view\set('title', 'Not a framework!');
\view\set('list', $list);

\view\display();
```

### Redirect queue

The redirect queue concept is used to pass data from one controller to the next. It's common to use the `$_SESSION` array to pass data between controllers. The first controller puts data in the array, the second reads from the array. But this can clutter `$_SESSION` with too much or too old information.

The redirect queue uses `$_SESSION` but cleans up the array automatically: data is put in the array so that it can be read by the next controller, and afterwards it is removed by `/r.php`.

To pass some values to another controller and redirect,

```
\redirect\set('error', 1);
\redirect\set('username', $username);

\redirect\http('login-form.php');
```

In the next controller, read the values like this:

```
if (\redirect\get('error')) {
    $username = \redirect\get('username');
}
```

## Features

- Procedural MVC
- No magic
- Tiny learning curve
- Tiny file set
- Redirect queue
- Sanitized `$_GET` and `$_POST`

## History

- 2014-07-09, slimmed down version of a set of files I've used before; now completely procedural