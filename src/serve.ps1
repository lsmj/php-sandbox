Start-Process microsoft-edge:"http://localhost:8000/"
php --server localhost:8000 -file (Join-Path $PSScriptRoot "index.php")