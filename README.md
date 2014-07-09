

## Redirect queue

The redirect queue concept is used to pass data from one controller to the next. It's common to use the `$_SESSION` array to pass data between controllers. The first controller puts data in the array, the second reads from the array. But this can clutter `$_SESSION` with too much or too old information.

The redirect queue uses `$_SESSION` but cleans up the array automatically: data is put in the array so that it can be read by the next controller, and afterwards it is removed by `r.php`.

An example of setting data and redirecting:

```
\redirect\set('error', 1);
\redirect\set('username', $username);

\redirect\http('login-form.php');
```

In `login-form.php`,

```
if (\redirect\get('error')) {
    $username = \redirect\get('username');
}
```