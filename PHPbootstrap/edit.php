<?php 
    require_once 'connect.php';
    require_once 'header.php';
?>
<div class="container">
    <?php
        if(isset($_POST['update']))
        {
            if(empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['address']) || empty($_POST['contact']))
            {
                echo "Please fillout all required fields";
            }else{
                $firstname = $_POST['firstname'];
                $lastname  = $_POST['lastname'];
                $address   = $_POST['address'];
                $contact   = $_POST['contact'];

                $sql = "UPDATE users SET firstname = '{$firstname}', lastname = '{$lastname}', address = '{$address}', contact = '{$contact}' 
                        WHERE user_id =".$_POST['user_id'];
                if( $con -> query($sql) === true)
                {
                    echo "<div class='alert alert-success'>Successfully updated user</div>";
                }else{
                    echo "<div>Error: There was an error while updating user info</div>";
                }
            }
        }
        $id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
        $sql = "SELECT * FROM users WHERE user_id = {$id}";
        $result = $con -> query($sql);

        if($result -> num_rows < 1)
        {
            header('Location: index.php');
            exit;
        }
        $row = $result -> fetch_assoc();
    ?>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="box">
                <h3><i class="glyphicon glyphicon-plus"></i>&nbsp;MODIFY USER</h3>
                <form action="" method="POST">  <!--Formulario-->
                    <input type="hidden" value="<?php echo $row['user_id']?>" name="firstname"><br>

                    <label for="lastname">Lastname</label>
                    <input type="text" id="lastname" name="lastname" value="<?php echo $row['firstname']?>" class="form-control"><br>

                    <label for="Address">Address</label>
                    <textarea rows="4" name="address" value="<?php echo $row['address']?>" class="form-control"></textarea><br>

                    <label for="contact">Contact</label>
                    <input type="text" id="contact" name="contact" value="<?php echo $row['contact']?>" class="form-control"><br>

                    <input type="submit" name="update" class="btn btn-success" value="Update">
                </form>
            </div>  <!--fechamento box-->
        </div>  <!-- fechamento col-md-6 col-md-offset-3-->
    </div>  <!--fechamento row-->
</div>  <!--fechamento container-->