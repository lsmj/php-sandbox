#!/bin/sh
if [ "$(uname -s)" = "Linux" ]; then
    xdg-open "http://localhost:8000"
else
    open "http://localhost:8000"
fi
php --server localhost:8000 -file "./src/index.php"
