Start-Process microsoft-edge:"http://localhost:8800/"
php --server localhost:8800 -file (Join-Path $PSScriptRoot "index.php")