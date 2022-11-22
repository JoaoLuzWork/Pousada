<?php 
    include '../views/header.html';
    if(isset($_SESSION['admin_cond']))
    {
        header('location: home.php');
    }
?>
    
<center>
    <div class="container">
        <h1>Sing in:</h1>
        <form class="form_b" action="login.php" method="post">
            <div class="divCont">
                <input type="text" name="email" placeholder="e-mail" size="50">
            </div>
            <div class="divCont">
                <input type="password" name="password" placeholder="password" size="50">
                <?php 
                /* 
                email to admin test is: jojacola@gmail.com 
                password to admin test is: 1234
                */
                ?>
            </div>
            <button>Login</button>
        </form>
        <a class="login_link" href="form_register.php">Create acount new acount</a>
    </div>
</center>
   
<?php include './footer.twig'?>