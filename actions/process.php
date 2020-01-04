<!DOCTYPE html>
<html>
<head>
    <title>requests</title>
</head>
<body>
    <h1>welcome</h1>
    <?php 
       $firstname = $_GET['firstname'];
       $lastname = $_GET['lastname'];

    if (isset($firstname)){ ?>

    <p>
        <strong>firstname-</strong><?php echo $firstname ; ?>
        <br/>
        <strong>lastname-</strong><?php echo $lastname ; ?>

    </p>   
    <?php 
        }

     ?>

</body>
</html>