<?php

$connect = new PDO("mysql:host=localhost;dbname=dropdown_searchbox", "root", "");

$query = "
    SELECT country_name FROM apps_countries 
    ORDER BY country_name ASC
";

$result = $connect->query($query);

?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://unpkg.com/@jarstone/dselect/dist/css/dselect.css">
        <script src="https://unpkg.com/@jarstone/dselect/dist/js/dselect.js"></script>

        <title>Bootstrap 5 Select Dropdown with Search Box using JavaScript with PHP</title>
    </head>
    <body>

        <div class="container">
            <h1 class="mt-2 mb-3 text-center text-primary">Bootstrap 5 Select Dropdown with Search Box using JavaScript with PHP</h1>
            <div class="row">
                <div class="col-md-3">&nbsp;</div>
                <div class="col-md-6">
                    <select name="select_box" class="form-select" id="select_box">
                        <option value="">Select Country</option>
                        <?php 
                        foreach($result as $row)
                        {
                            echo '<option value="'.$row["country_name"].'">'.$row["country_name"].'</option>';
                        }
                        ?>  
                    </select>
                </div>
                <div class="col-md-3">&nbsp;</div>
            </div>      
            <br />
            <br />
        </div>
        <script>

    var select_box_element = document.querySelector('#select_box');

    dselect(select_box_element, {
        search: true
    });

</script>



    </body>
</html>





