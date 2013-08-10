ssp-press
==============

Press module in ZF2 to be included into the SunshinePHP main site.

Requirements
------------

* [Zend Framework 2](https://github.com/zendframework/zf2) (latest master)

Installation
------------

### Main Setup

#### By cloning project

1. Clone this project into your `./vendor/` directory.

#### With composer

1. Add this project in your composer.json:

    ```json
    "require": {
        "sunshinephp/ssp-press": "dev-master"
    }
    ```

2. Now tell composer to download SspPress by running the command:

    ```bash
    $ php composer.phar update
    ```

#### Post installation

1. Enabling it in your `application.config.php`file.

    ```php
    <?php
    return array(
        'modules' => array(
            // ...
            'SspPress',
        ),
        // ...
    );
    ```
2. Ensure to add the needed table to the database using the sql file in data.