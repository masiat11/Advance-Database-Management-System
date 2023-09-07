<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Table.css">
    <title>Table View</title>
</head>
<body>
<?php

include '../Model/TableModel.php';
?>
<div class="title">
    <h1>Table View From Oracle</h1>
</div>
<div class="heading-table">
    <h1>01. Baby:</h1>
</div>
<table border="2">
    <tr>
    <th>NAME</th>
    <th>BABY_ID</th>
    <th>AGE</th>
    <th>GENDER</th>
    <th>ADDRESS</th>
    
    </tr>
    <?php
    $res = BabyShow(); //res = sql//model call
    while ($row = oci_fetch_array($res, OCI_RETURN_NULLS+OCI_ASSOC)) {
        
        echo '<tr>';
        foreach ($row as $item) 
        {
            echo '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
        }
        echo '</tr>';
        }
    ?>
</table>

<div class="heading-table">
    <h1>02. Babysitter:</h1>
</div>
<table border="2">
    <tr>
    <th>BABYSITTER_ID</th>
    <th>NAME</th>
    <th>AGE</th>
    <th>GENDER</th>
    <th>EMAIL</th>
    <th>ADDRESS</th>
    <th>PHONE_NO</th>
    <th>EXPERIENCE</th>
    
    </tr>
    <?php
    $res = Babysitter(); //res = sql//model call
    while ($row = oci_fetch_array($res, OCI_RETURN_NULLS+OCI_ASSOC)) {
        
        echo '<tr>';
        foreach ($row as $item) 
        {
            echo '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
        }
        echo '</tr>';
        }
    ?>
</table>
<div class="heading-table">
    <h1>03. Parent_info:</h1>
</div>
<table border="2">
    <tr>
    <th>PARENT_ID</th>
    <th>FATHER_NAME</th>
    <th>MOTHER_NAME</th>
    <th>NUMBER_OF_BABY</th>
    <th>BABY_NAME</th>
 
    </tr>
    <?php
    $res = Parent_info(); //res = sql//model call
    while ($row = oci_fetch_array($res, OCI_RETURN_NULLS+OCI_ASSOC)) {
        
        echo '<tr>';
        foreach ($row as $item) 
        {
            echo '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
        }
        echo '</tr>';
        }
    ?>
</table>
<div class="heading-table">
    <h1>04. Parent_contact:</h1>
</div>
<table border="2">
    <tr>
    <th>PARENT_ID</th>
    <th>PHONE_NO</th>
    <th>ADDRESS</th>
    
 
    </tr>
    <?php
    $res = Parent_contact(); //res = sql//model call
    while ($row = oci_fetch_array($res, OCI_RETURN_NULLS+OCI_ASSOC)) {
        
        echo '<tr>';
        foreach ($row as $item) 
        {
            echo '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
        }
        echo '</tr>';
        }
    ?>
</table>


</body>
</html>