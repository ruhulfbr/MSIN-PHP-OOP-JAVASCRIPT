<?php include "../inc/header.php"; ?>


<section class="mainright">
  <table class="tblone">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Department</th>
        <th>Age</th>
    </tr>
<?php $i = 0; foreach ($result as $value) {  $i++; ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $value['name']; ?></td>
        <td><?php echo $value['dept']; ?></td>
        <td><?php echo $value['age']; ?></td>
    </tr>
<?php } ?>

    
  </table>
</section>





<?php include "../inc/footer.php"; ?> 