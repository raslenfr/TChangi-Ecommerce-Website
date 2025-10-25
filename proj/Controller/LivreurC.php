<?php
include '../config3.php';
include '../Model/Livreur.php';

class LivreurC
{
    public function listClients()
    {
        $sql = "SELECT * FROM livreur";
        $db = configg::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deleteClient($id)
    {
        $sql = "DELETE FROM livreur WHERE id= :id";
        $db = configg::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function addClient($Livreur)
    {
        $sql = "INSERT INTO livreur  
        VALUES (NULL, :fn,:em, :ps)";
        $db = configg::getConnexion();
        try {
          
            $query = $db->prepare($sql);
            $query->execute([
                'fn' => $Livreur->getName_livreur(),
                'em' => $Livreur->getEmail(),
                'ps' => $Livreur->getPass()
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function updateClient($livreur, $id)
    {
        try {
            $db = configg::getConnexion();
            $query = $db->prepare(
                'UPDATE livreur SET 
                    fn = :firstName, 
                    em = :lastName, 
                    ps = :address
                    
                WHERE id= :id'
            );
            $query->execute([
                'id' => $id,
                'firstName' => $livreur->getName_livreur(),
                'lastName' => $livreur->getEmail(),
                'address' => $livreur->getPass()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function showClient($id)
    {
        $sql = "SELECT * from livreur where id = $id";
        $db = configg::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $livreur = $query->fetch();
            return $livreur;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
}
