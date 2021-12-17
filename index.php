


<?php 
session_start() ; 

if ( !empty($_SESSION['Authorization']) && $_SESSION['Authorization'] ) { 

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



<br/>
<br/>



<div class="container">
Bienvenue :  <?php echo $_SESSION['Username']  ; ?> 
<form action="/" method="get">
<input type="text" value="" name="chaine" />
<input type="submit" value="Send" class="btn btn-success" />
</form>



<?php 

if( !empty($_GET['chaine']) ) {
    $stringForMD5Hash = $_GET['chaine'] ; 
    $md5 = md5($stringForMD5Hash) ; 
    $sha1 = sha1($stringForMD5Hash) ; 
    echo "<p class='text-success' style='font-size:30px;'>La Valeur MD5 est : $md5 </p>" ; 
    echo "<p class='text-success' style='font-size:30px;'>La Valeur SHA1 est : $sha1 </p>" ; 
}else {
    echo "<p class='text-danger'>Veuillez ajouter une valeur dans le formulaire </p>" ; 
}

?>

<?php 
 }else {
     echo "Vous n est pas autoriser !" ; 
 }
?>