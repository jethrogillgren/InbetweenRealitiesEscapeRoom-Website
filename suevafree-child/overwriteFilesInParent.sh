#!/bin/bash
set -x

/bin/cp -rf core/templates/header/header-layout-1.php ../../suevafree/core/templates/header/header-layout-1.php
/bin/cp -rf core/templates/header/logo-layout.php ../../suevafree/core/templates/header/logo-layout.php
/bin/cp -rf core/main.php ../../suevafree/core/main.php

chown -R nginx:nginx /usr/share/nginx/html
