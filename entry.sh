#!/bin/bash
set -e

cat <<EOF > /var/www/html/config/config.yaml
# cockpit session name
app.name: Cisco GSX FY19 CMS

# use mongodb as main data storage
database:
  server: ${COCKPIT_DATABASE_SERVER}
  options:
    db: ${COCKPIT_DATABASE_NAME}
EOF

exec "$@"
