# Wordpress Boilerplate
WordPress-Theme dreiqbik

## Theme-Structure: Output

### Pages

Pages are placed in the root of the theme folder. In these files, the other template files get included. **DO NOT place any code in these files - includes only!**
Pages have the prefix `page-`.

* `page-home.php` (Startseite)
* `page-contact.php` (Kontakt)
* `page-imprint.php` (Impressum)
* `page.php` (WP Standard)
* `page-modules.php` (JUST FOR DEVELOPMENT: summery-page for all modules)

### Templates (Pages)

Templates (Pages) are basic templates for things like blogposts. In these files, the other template files get included. **DO NOT place any code in these files - includes only!**
Templates (Pages) have the prefix `template-`.

* `template-example.php` (EXAMPLE)

### Taxonomies (Categories)

Taxonomies (Categories) are basic templates for things like custom-post-type categories. In these files, the other template files get included. **DO NOT place any code in these files - includes only!**
Taxonomies (Categories) have the prefix `taxonomy-`.

* `taxonomy-example.php` (EXAMPLE)

### Templates (Sections)

Templates (Sections) are the templates for the actual code of headers, footers, overlays and sections. Sections are separated parts/sections of a page and include modules (the smallest unit). **DO place code in these files ONLY**

#### `template-header` (Headers)
Templates (Headers) have the prefix `h_`.
* `h_main.php` (Default Header)

#### `template-navigation` (Menues, e.g. Main Menu)
Templates (Menues) have the prefix `n_`.
* `n_example.php` (EXAMPLE)

#### `template-sections` (Sections)
Templates (Sections) have the prefix `s_`.
* `s_example.php` (EXAMPLE)

#### `template-modules` (Modules)
Templates (Modules) have the prefix `m_`.
* `m_example.php` (EXAMPLE)

#### `template-footer` (Footers)
Templates (Footers) have the prefix `f_`.
* `f_main.php` (Default Footer)

#### `template-overlays` (Overlays, e.g. Cookie-Banner)
Templates (Overlays) have the prefix `o_`.
* `o_example.php` (EXAMPLE)

## Theme-Structure: Setup

### Gulp

### Images

### Sass

### JavaScript/jQuery

### Functions
