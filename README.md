# Environment

Environment helper functions for WordPress themes.

## Installation

You can install the package via Composer:

```bash
composer require mindkomm/theme-lib-environment
```

## Functions

| Name | Summary | Type | Returns/Description |
| --- | --- | --- | --- |
| [is_dev](#is_dev) | Checks if we are in a development environment. | `bool` |  |
| [is_live](#is_live) | Checks if we are in a live environment. | `bool` |  |
| [is_stage](#is_stage) | Checks if we are in a stating environment. | `bool` |  |
| [is_visitor](#is_visitor) | Checks whether user is a normal site visitor. | `bool` |  |

### is\_live

<p class="summary">Checks if we are in a live environment.</p>

When no environment constant is set, the environment is considered a live environment.

**Returns:** `bool` 

---

### is\_visitor

<p class="summary">Checks whether user is a normal site visitor.</p>

This is mostly used to include scripts related to analytics and data tracking. For that, we normally do not want
to have admin calls and frontend calls made by logged-in users.

Use this in combination with other environment functions, e.g. is_live().

**Returns:** `bool` 

---

### is\_stage

<p class="summary">Checks if we are in a stating environment.</p>

**Returns:** `bool` 

---

### is\_dev

<p class="summary">Checks if we are in a development environment.</p>

**Returns:** `bool` 

---

## Support

This is a library that we use at MIND to develop WordPress themes. You’re free to use it, but currently, we don’t provide any support. 
