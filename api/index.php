<?php

// 1. Paksa semua folder cache ke /tmp agar tidak error Read-Only
putenv('VIEW_COMPILED_PATH=/tmp');
putenv('APP_CONFIG_CACHE=/tmp/config.php');
putenv('APP_ROUTES_CACHE=/tmp/routes.php');
putenv('APP_SERVICES_CACHE=/tmp/services.php');
putenv('APP_PACKAGES_CACHE=/tmp/packages.php');

// 2. Jalankan index asli
require __DIR__ . '/../public/index.php';