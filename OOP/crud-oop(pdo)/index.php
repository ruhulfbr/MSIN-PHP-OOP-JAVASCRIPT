<?php include "inc/header.php"; ?>

<?php 
    spl_autoload_register(function($class){
        include "classes/".$class.".php";
    });
?>
<?php 
    $user = new Student();
    if(isset($_POST['create'])){
        $name = $_POST['name'];
        $dept = $_POST['dept'];
        $age = $_POST['age'];

        $user->setName($name);
        $user->setDept($dept);
        $user->setAge($age);

        if($user->insert()){
            echo "<span class='insert'>Data Inserted Succesfully....</span>";
        }else{
            echo "Not Inserted";
        }

    }
    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $dept = $_POST['dept'];
        $age = $_POST['age'];

        $user->setName($name);
        $user->setDept($dept);
        $user->setAge($age);

        if($user->update($id)){
            echo "<span class='insert'>Data Update Succesfully....</span>";
        }else{
            echo "Not Updated";
        }

    }
 ?>

 <?php 
    if(isset($_GET['action']) && $_GET['action'] == "delete"){
        $id = (int)$_GET['id'];
         if($user->deleteById($id)){
            echo "<span class='insert'>Delete Successfull....</span>";
        }else{
            echo "Not Deleted";
        }
    }
 ?>

 <?php 
    if(isset($_GET['action']) && $_GET['action'] == "update"){
        $id = (int)$_GET['id'];
        $result = $user->readById($id);
 ?>
 <section class="mainleft">
 <form action="index.php" method="post">
 <table>
    <tr>
        <td>Name: </td>
        <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
        <td><input type="text" name="name" value="<?php echo $result['name']; ?>" required="1"/></td>    
    </tr>

    <tr>
       <td>Department: </td>
        <td><input type="text" name="dept" value="<?php echo $result['dept']; ?>" required="1"/></td>
    </tr>

    <tr>
      <td>Age: </td>
        <td><input type="text" name="age" value="<?php echo $result['age']; ?>" required="1"/></td>
    </tr>
    <tr>
      <td></td>
        <td>
        <input type="submit" name="update" value="Update"/>
        <input type="reset" value="Clear"/>
        </td>
    </tr>
  </table>
</form>
</section>

<?php }else{ ?>

<section class="mainleft">
<form action="index.php" method="post">
 <table>
    <tr>
        <td>Name: </td>
        <td><input type="text" name="name" placeholder="Your Name" required="1"/></td>    
    </tr>

    <tr>
       <td>Department: </td>
        <td><input type="text" name="dept" placeholder="Your Dept" required="1"/></td>
    </tr>

    <tr>
      <td>Age: </td>
        <td><input type="text" name="age" placeholder="Your Age" required="1"/></td>
    </tr>
    <tr>
      <td></td>
        <td>
        <input type="submit" name="create" value="Submit"/>
        <input type="reset" value="Clear"/>
        </td>
    </tr>
  </table>
</form>
</section>

<?php } ?>



<section class="mainright">
  <table class="tblone">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Department</th>
        <th>Age</th>
        <th>Action</th>
    </tr>
<?php $i = 0; foreach ($user->readAll() as $value) {  $i++; ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $value['name']; ?></td>
        <td><?php echo $value['dept']; ?></td>
        <td><?php echo $value['age']; ?></td>
        <td>
        <a href="index.php?action=update&id=<?php echo $value['id']; ?>">Edit</a> ||
        <a href="index.php?action=delete&id=<?php echo $value['id']; ?>">Delete</a>
        </td>
    </tr>
<?php } ?>

    
  </table>
</section>





<?php include "inc/footer.php"; ?>