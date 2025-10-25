<?php
include '../config.php';
include '../Model/Client.php';

class LivreurC
{
  
    public function listClients()
    {
        $sql = "SELECT * FROM client";
        $db = configg::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

  
    function addClient($Livreur)
    {
        $sql = "INSERT INTO client  
        VALUES (NULL, :fn,:ln, :ad)";
        $db = configg::getConnexion();
        try {
          
            $query = $db->prepare($sql);
            $query->execute([
                'fn' => $Livreur->getName_livreur(),
                'ln' => $Livreur->getEmail(),
                'ad' => $Livreur->getPass()
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

}
