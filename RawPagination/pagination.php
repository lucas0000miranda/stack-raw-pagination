<?php

/**
 *  All rights for Lucas Miranda - Software Tree LTDA
 */

include('index.php');

$itemsPerPage = (int) 7;
$currentPage = intval($_GET['page']);

// row with LIMIT
$row = $connection->getRow("select * from bdr LIMIT $currentPage,$itemsPerPage");
$totalOfRow = $connection->getRow("select count(id) from bdr");
$totalOfRegisted = (int) $totalOfRow[0][0];

//quantity of pages
$quoteOfPages = (int) ceil($totalOfRegisted/$itemsPerPage);

//Directions buttons
$previous = 0;
$next = 0;

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">

    <title>Stack Raw Pagination</title>
</head>
<body>
<br>
<br>
<br>
<table class="table table-hover table-striped table-bordered">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">E-mail</th>
        <th scope="col">Phone</th>
        <th scope="col">Picture</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($row as $item) : ?>
        <tr>
            <th scope="row"><?php echo $item['id'] ?></th>
            <td><?php echo $item['name'] ?></td>
            <td><?php echo $item['email'] ?></td>
            <td><?php echo $item['phone'] ?></td>
            <td><?php echo $item['picture'] ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<nav aria-label="Page navigation example">
    <ul class="pagination">
        <?php if ($currentPage>0) : ?>
        <li class="page-item"><a class="page-link" href="pagination.php?page=<?php echo $currentPage-1 ?>">Previous</a></li>
        <?php else :?>
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
        <?php endif?>
        <?php for($i=0; $i<=$quoteOfPages; $i++) : ?>
           <li class="page-item">
               <a class="page-link" href="pagination.php?page=<?php echo $i?>"><?php echo $i+1?></a></li>
        <?php endfor?>
        <?php if($currentPage<=3) :?>
        <li class="page-item"><a class="page-link" href="pagination.php?page=<?php echo $currentPage+1; ?>">Next</a></li>
        <?php else :?>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        <?php endif?>
    </ul>
</nav>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>




