# Wordpress Boilerplate
WordPress-Theme dreiqbik

## Theme-Structure

### Pages

Pages are placed in the root of the theme folder. In these files, the other template files get included. **DO NOT place any code in these files - includes only!**
Pages have the prefix `page-`.

* `page-home` (Startseite)
* `page-contact` (Kontakt)
* `page-imprint` (Impressum)
* `page` (WP Standard)

### Templates (Pages)

Templates (Pages) are basic templates for things like blogposts. In these files, the other template files get included. **DO NOT place any code in these files - includes only!**
Templates (Pages) have the prefix `t_`.

#### `templates`

* `t_custom` (EXAMPLE)

### Templates (Sections)

Templates (Sections) are the templates for the actual code of headers, footers, overlays and sections. Sections are separated parts/sections of a page and include modules (the smallest unit). **DO place code in these files ONLY**

#### `template-header` (Headers)
Templates (Headers) have the prefix `h_`.

#### `template-footer` (Footers)
Templates (Footers) have the prefix `f_`.

#### `template-sections` (Sections)
Templates (Sections) have the prefix `s_`.

#### `template-overlays` (Overlays, e.g. Cookie-Banner)
Templates (Overlays) have the prefix `o_`.

#### `template-navigation` (Menues, e.g. Main Menu)
Templates (Menues) have the prefix `n_`.

The following templates are for testing purposes only:

#### `template-parts` (WordPress basic template parts)
Templates (template parts) have the prefix `content-`.
