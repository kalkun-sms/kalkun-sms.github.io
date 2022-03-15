#!/bin/bash

# Usage:
#   ./deploy <sourceforge_username>
#
#

if [ "a$1" == "a" ]; then
echo "Run: ./deploy <sourceforge_username>"
exit 1;
fi

SF_USERNAME="$1"

# scp -r htdocs/ $SF_USERNAME@web.sourceforge.net:/home/project-web/kalkun

rsync -avP --delete -e ssh htdocs/ $SF_USERNAME@web.sourceforge.net:/home/project-web/kalkun/htdocs/ --exclude demo-*
