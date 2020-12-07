#!/bin/sh
if [ "$(uname -s)" = "Linux" ]; then
    xdg-open "http://localhost:8800"
else
    open "http://localhost:8800"
fi
php --server localhost:8800 -file "./src/index.php"
