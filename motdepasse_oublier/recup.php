<?php
	session_start();
require_once('config.php');



$objetPdo=new PDO('mysql:host=localhost;dbname=crud','root','');
if (isset($_POST['Submit'],$_POST['recup_mail'])) {
if (!empty($_POST['recup_mail'])) {
    $recup_mail=htmlspecialchars($_POST['recup_mail']);
    if (filter_var($recup_mail,FILTER_VALIDATE_EMAIL)) {
        $mailexist= $objetPdo->prepare('SELECT id,ad FROM client WHERE fn= ?');
        $mailexist->execute(array($recup_mail));
        $mailexist_count=$mailexist->rowCount();
        if ($mailexist_count==1){
           $pseudo= $mailexist->fetch();
           $pseudo= $pseudo['ad'];
       

            $_SESSION['recup_mail']=$recup_mail ;
            $recup_code= "";
            for ($i=0; $i < 8; $i++) {
                $recup_code .= mt_rand(0,9);
            }
            var_dump($recup_code);
              $_SESSION['recup_code']= $recup_code;
                 
               $mail_recup_exist= $objetPdo->prepare('SELECT id FROM recuperation WHERE mail= ? ');
               $mail_recup_exist->execute(array($recup_mail));
               $mail_recup_exist=$mail_recup_exist->rowCount();

               if ($mail_recup_exist== 1){
                   $recup_insert= $objetPdo->prepare('UPDATE recuperation SET code= ? WHERE mail= ? ');
                   $recup_insert->execute(array($recup_code,$recup_mail));
                   $recup_insert2= $objetPdo->prepare('UPDATE client SET ad= ? WHERE fn= ? ');
                   $recup_insert2->execute(array($recup_code,$recup_mail));
               }
               else {
                $recup_insert= $objetPdo->prepare('INSERT INTO recuperation(mail,code) VALUES (?,?) ');
                $recup_insert->execute(array($recup_mail,$recup_code));
               }
                    
        }
        else 
        $error="Cette adresse mail n'est pas enregistrés";
    }
    else {
        $error="Adresse Mail invalide";
    }
}
else {
    $error="Veuillez entrer votre adresse mail" ;

}

}

require_once('logi.php')



?>