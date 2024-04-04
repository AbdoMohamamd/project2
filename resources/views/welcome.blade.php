<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel my sql config</title>
</head>
<body>
    <div>
        <?php

use Illuminate\Support\Facades\DB;

        if(DB::connection()->getPdo()){
            echo "successfull connection to database ".DB::connection()->getDatabaseName();
        }
        ?>
    </div>
</body>
</html>