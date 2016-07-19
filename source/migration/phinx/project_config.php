<?php

$bootstrapFileName = realpath(trim(getenv('ESHOP_BOOTSTRAP_PATH')));

if (!(file_exists($bootstrapFileName) && !is_dir($bootstrapFileName))) {
    $items = [
        "Unable to find eShop bootstrap.php file.",
        "You can override the path by using ESHOP_BOOTSTRAP_PATH environment variable.",
        "\n"
    ];

    $message = implode(" ", $items);

    die($message);
}

require_once($bootstrapFileName);

$config = new \OxidEsales\Eshop\Core\ConfigFile(OX_BASE_PATH . "config.inc.php");

$migrationPath = __DIR__ . DIRECTORY_SEPARATOR . "project_data";

    return array(
        "paths" => array(
            "migrations" => $migrationPath,
        ),
        "environments" => array(
            "default_migration_table" => "phinxlog",
            "default_database" => "dev",
            "dev" => array(
                "adapter" => "mysql",
                "host" => $config->dbHost,
                "name" => $config->dbName,
                "user" => $config->dbUser,
                "pass" => $config->dbPwd,
                "port" => 3306,
            )
        )
    );
