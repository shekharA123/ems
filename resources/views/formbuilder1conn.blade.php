<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel & sql   formbuilder1 connection</title>
</head>
<body>
    <div>
        <?php
             if(formbuilder1::connection()->getPdo()){
                echo"Succusfully connected to formbuilder1 and formbuilder1 Name is" .formbuilder1::connection()->getdatabases
             }
             ?>
             </div>
</body>
</html>