<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $jsonfile = file_get_contents("movies.json");
    ?>
    <div>
    <script>
        // load json file
        var jsonEx = <?php echo $jsonfile ?>;
        // create set of year
        var ref_year = new Set();
        for (i=0; i<jsonEx.length;i++){
            ref_yaer
        }
    </script>
</body>
</html>