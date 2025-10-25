<?php
include '../connexion.php';
include '../Model/livr.php';

class livrC
{
    public function listlivr()
    {
        $sql = "SELECT * FROM livraison order by dob ASC";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste->fetchAll();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deletelivr($id)
    {
        $sql = "DELETE FROM livraison WHERE id_livraison= :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function addlivr($livr)
    {
        $sql = "INSERT INTO livraison   VALUES (NULL, :idC,:idL, :ad,:d,:idCM)";
        $db = config::getConnexion();
        try {
            print_r($livr->getDob()->format('Y-m-d'));
            $query = $db->prepare($sql);
            $query->execute([
             
                'idC' => $livr->getIdClient(),
                'idL' => $livr->getIdLivreur(),
                'ad' => $livr->getadresse(),
                'd' =>$livr->getDob()->format('Y/m/d'),
                'idCM' => $livr->getIdCommande(),
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function updatelivr($livr, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE livraison SET 
                    id_client = :id_client, 
                    id_livreur = :id_livreur, 
                    adresse = :adresse, 
                    dob = :dob,
                    id_commande= :id_commande
                WHERE id_livraison= :id_livraison'
            );
            $query->execute([
                'id_livraison' => $id,
                'id_client' => $livr->getIdClient(),
                'id_livreur' => $livr->getIdLivreur(),
                'adresse' => $livr->getadresse(),
                'dob' => $livr->getDob()->format('Y/m/d'),
                'id_commande' => $livr->getIdCommande()

            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function showlivr($id)
    {
        $sql = "SELECT * from livraison where id_livraison = $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $livr = $query->fetchAll();
            return $livr;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    
}
