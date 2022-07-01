<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css"> 
</head>
<body>

<section id="une">
           <img src="logo.png" id="logo"></img> 
      
           <section id="barre-haute">           
               <h5> Renevenir à la page d'Acceuil ? </h5>
                <a href="" >Acceuil</a>
               
           </section>
</section>
<form id="form1" name="f" method="post" action="#">
        
        <div align="center" >
            <h1 id="compteexistant"><strong>compte existant ?</strong></h1>
            <p  align="center" valign="middle"id="phrase">Veuillez remplir les champs pour se connecter</p>
            <p>&nbsp;</p>
            <table cellpadding="10" cellspacing="10" align="center" width="502" border="0">
                <tr align="center" valign="middle" >
                    
                    <td width="320"><label>
                        <input name="user" type="text" id="np"  placeholder="user" />
                    </label></td>
                </tr>
                <tr align="center" valign="middle" >
                   
                    <td><label>
                        <input name="pass" type="password" id="m"  placeholder="password"/>
                    </label></td>
                </tr>
             
           
                <tr align="center" valign="middle">
                    <th colspan="2"><input onclick="return verif();" type="submit"  value="login" id="bt-start"/>
                    </th>
                    <!-- ici en haut dans la balise input on doit écrire onclick="return verif();" pour appeler 
                    la fonction verif du JS -->
                </tr>
            </table>
            <p>&nbsp;</p>
        </div>

    </form>

    <?php 
    mysql_connect("localhost", "root","");
    mysql_select_db("reseaupostal");

     //$req="select * from users;";
    //$res=mysql_query($req);
    if (isset($_POST['user'])){  //if this text box is empty so :
        $uname=$_POST['user'];
        $password=$_POST['pass']; 
        $sql="select * from loginform where user='".$uname."' AND pass='".$password."'limit 1";
        $result=mysql_query($sql);
        if (mysql_num_rows($result)==1){
            echo"you have successfully logged in ";
            header("location: sys.php");
            exit();
        }
        else{
            echo"you have intered incorrect password ";
            exit();
        }

    } 

    

    ?>
</body>
</html>
















