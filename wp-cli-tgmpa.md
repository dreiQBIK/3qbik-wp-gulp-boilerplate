# WP-CLI und TGMPA für WordPress
## Setup WP-CLI in Windows

- https://indigotree.co.uk/automated-wordpress-installation-cmd/
- Folge dem Tutorial bis GETTING SET!

## Integration von TGMPA

- Download der letzten Version: http://tgmpluginactivation.com/download/
- Entpacken und umbennenen der zip-File im Theme-Ordner z.B.: <path>/themes/dreiqbik/inc/**tgmpa**.
- Kopieren der **example.php** in z.B: <path>/themes/dreiqbik/inc/
- Umbenennen der example.php in z.B.: **tgmpa-settings.php**
- Neue **tgmpa-settings.php** anpassen und folgenden Code an den entsprechenden Pfad ersetzen (Verknüpfung mit der TGMPA-Klasse) z.B.:
    ```
        require_once dirname( __FILE__ ) . '\tgmpa\class-tgm-plugin-activation.php';
    ```
- Anpassen der **tgmpa-settings.php** an gewünschte Plugins, siehe Beispiele in der Datei.
- Einfügen der **tgmpa-settings.php** in die **functions.php** z.B.:
    ```
        require get_template_directory() . '/inc/tgmpa-settings.php';
    ```

## Integration des WP-CLI-Plugins für TGMPA

- Download zip-File: https://github.com/itspriddle/wp-cli-tgmpa-plugin
- Entpacke die zip-File im Root-Folder der WordPress installation und bennene Sie, z.B.: **wp-cli-tgmpa**
- Erstelle eine Datei im Root-Folder: **wp-cli.yml**
- Füge folgenden Code in die Datei wp-cli.yml ein, um dein Worpdress-Projekt mit dem Plugin zu verknüpfen:
    ```
    require:
        - wp-cli-tgmpa/command.php
    ```
- Verwalten der eingerichteten Plugins im Wordpress-Root-Folder über den neuen Consolen-Befehl:
    ```
    C:\MAMP\htdocs\b-wp-gulp>wp tgmpa-plugin
    usage: wp tgmpa-plugin activate [<slug>...] [--all]
    or: wp tgmpa-plugin deactivate [<slug>...] [--all]
    or: wp tgmpa-plugin delete <slug>...
    or: wp tgmpa-plugin get <slug> [--field=<field>] [--fields=<fields>] [--format=<format>]
    or: wp tgmpa-plugin info [<section>]
    or: wp tgmpa-plugin install [<slug>...] [--all] [--all-required] [--all-recommended] [--force] [--activate]
    or: wp tgmpa-plugin is-installed <slug>
    or: wp tgmpa-plugin list [--<field>=<value>] [--field=<field>] [--fields=<fields>] [--format=<format>]
    or: wp tgmpa-plugin path <slug> [--dir]
    or: wp tgmpa-plugin toggle <slug>...
    or: wp tgmpa-plugin uninstall [<slug>...] [--all] [--deactivate] [--skip-delete]

    See 'wp help tgmpa-plugin <command>' for more information on a specific command.
    ```

## Nützliche und weiterführende Links zum Thema

- http://wp-cli.org/de/
- https://make.wordpress.org/cli/handbook/quick-start/
- https://developer.wordpress.org/cli/commands/
- http://tgmpluginactivation.com/
- https://github.com/itspriddle/wp-cli-tgmpa-plugin
- https://indigotree.co.uk/automated-wordpress-installation-cmd/
