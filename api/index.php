<?php

// Paksa folder cache ke /tmp agar tidak Read-only Error
putenv('VIEW_COMPILED_PATH=/tmp');
putenv('APP_CONFIG_CACHE=/tmp/config.php');
putenv('APP_ROUTES_CACHE=/tmp/routes.php');

require __DIR__ . '/../public/index.php';