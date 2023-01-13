<!DOCTYPE html> 

<html lang="fr">
  
    <head>
        <meta charset="utf-8">
        <title>Manager Entité</title>
        <meta name="viewport" content="width=device-width"> 
        <link href="View/style.css" rel="stylesheet" type="text/css"> 
        <!-- Font -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Glegoo" rel="stylesheet">  
        <script>
            initListUser(){
                JQuery.ajax({
                    type:"POST",
                    url:"UserController.php",
                    dataType: 'json',
                    data:{functionname:'listUsers'}
                    success:function(key,data){
                            
                    }
                });
            }

        </script>
    </head>
    <body onload="initListUser()">
        <header>
            <h1>UsersList :</h1>
        </header>
        <hr/>
       
        <section id="main-section">

        <form action="index.php?ctrl=UserController&action=listUsers" method="GET">
            <tr>
            <td>  test  </td>
            </tr>
        <input type="submit" class="submit-btn" value="allUsers">
        <form>
        
       <form action="index.php?ctrl=UserController&action=goHome" method="POST">
            <p>
                <input type="submit" class="submit-btn" value="Return Home">
            </p> 
        </form>
        
        </section>
    </body>
</html>