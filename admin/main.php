<?php include 'config.php';
session_start();

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");

if (!isset($_SESSION["admin"])) {
    header('Location: index.html');
    exit();
}


$query = "SELECT * from `order`";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>

<body style="background-color:black;">


    <div class="contaier-fluid d-flex justify-content-center mt-5 p-5">

        <div class="card" style="width: 100%;">
            <div class="card-body">
                <h5 class="card-title">Order</h5>
                <table class="table table-dark table-striped">
                    <tr>

                        <th>Name</th>
                        <th>Email</th>
                        <th>occasion</th>
                        <th>Address</th>
                        <th>Date & time</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Zip</th>
                       
                    </tr>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr>

                            <td><?php echo  $row["name"]; ?></td>
                            <td><?php echo  $row["email"]; ?></td>
                            <td><?php echo  $row["occasion"]; ?></td>
                            <td><?php echo  $row["address"]; ?></td>
                            <td><?php echo  $row["order_date"]; ?></td>
                            <td><?php echo  $row["city"]; ?></td>
                            <td><?php echo  $row["state"]; ?></td>
                            <td><?php echo  $row["zip"]; ?></td>

                            
                        </tr>
                    <?php } ?>

                </table>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>