<<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contacts Manager</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
            <h2 align ="center">CONTACT MANAGER</h2>
            <hr>
            <?php 
            include('contact.php');

            Contact::sayHello();
            $fruits = Contact::getFruits();
            echo '<br>';
            echo json_encode($fruits);
             ?>
            <ul>
           
             <?php foreach($fruits as $fruit){
             ?>
             <li><?= $fruit['name'] ?> (<?=$fruit['created'] ?>)</li>
             <?php  } ?>
              <br>
              <table cellpadding = 2 border = 1 >
              <thead>
                <th>ID</th>
                <th>name</th>
                <th>created</th>
              </thead>
              <?php 
                 foreach($fruits as $fruit){
                     ?>

                     <tr>
                        <td><?= $fruit['id'] ?></td>
                        <td><?= $fruit['name'] ?></td>
                        <td><?= $fruit['created'] ?></td>
                        </tr>
                 <?php } ?>
            </table>
             </ul>
         <form id="contacts" action="processForm.php" method="post" align="center">

            <label> Name</label>
            <input type = "text" name = "name" value="">
            <br>
            <br>
            <label> Email </label>
            <input type = "name" name = "email" value="">
            <br>
            <br>
            <label> phone </label>
            <input type = "text" name = "phone" value="">
            <br>
            <br>
            <label>Gender</label>
            <select name="gender">
            <option value="Male">Male</option>
            <option value="female">Female</option>
            </select>
            <br>
            <br>
            <button type = "submit"> submit </button>

        </form>
            

 
    
    
    </body>
</html>



