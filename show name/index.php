<?php
if(isset($_POST['submit'])){
    
}else{
    echo"Ur Name Is Not Found !!";
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show name </title>
</head>
<style>
    *{
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }
    .container{
        height: 24rem;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .holder{
        display: flex;
        flex-direction: column;
    }

    .hero{
        position: relative;
        top: 30px;
        left: 35%;
    }

    .holder input[type="text"]{
        height: 30px;
        background: transparent;
        border: none;
        outline: none;
        font-size: 20px;
        border-bottom: 2px solid blue;
       
    }

    .holder input[type="submit"]{
        height: 32px;
        display: block;
        font-size: 20PX;
        color: greenyellow;
        background-color: red;
        border: 1px solid black;
        width: 250px;
        outline: none;
    }

    .footer{
        position: relative;
        left: 510px;
        top: 50px;
    }
</style>
<body>
     <h1 class="hero">
       <?php echo"THE NAME USER IS " . $_POST['name']. "❤️❤️" ?> 
     </h1>
     <div class="container">
        <div class="holder">
            <form action="index.php " method="POST">
                <div class="wrapper">
                    <input type="text" placeholder="Enter Username" name="name">
                    <br>
                    <br>
                 <div class="wrapper">
                    <input type="submit" value="submit" name="submit">
                 </div>
             </form>
        </div>
           
        </div>
     </div>
     <h4 class="footer">MADE WITH<span>❤️❤️</span>BY AKRAMCAZANEGRA</h4>
</body>
</html>