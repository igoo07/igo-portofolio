<?php

// Arahkan semua folder sementara ke /tmp (satu-satunya folder yang bisa ditulis di Vercel)
putenv('VIEW_COMPILED_PATH=/tmp');
putenv('APP_CONFIG_CACHE=/tmp/config.php');
putenv('APP_ROUTES_CACHE=/tmp/routes.php');

require __DIR__ . '/../public/index.php';