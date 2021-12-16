
<?php 

class MaSuperbeClass {

    function spliterStringRomain($spliter, $utilisateur)
    {
        $arrayListeUser = explode($spliter , $utilisateur);
        return $arrayListeUser[1] ;

    }

}

$instance = new MaSuperbeClass() ; 
$username = $instance->spliterStringRomain("\\","aipds\\romain") ;
var_dump($username) ; 

?>
