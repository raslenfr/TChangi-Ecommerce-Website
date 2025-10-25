<?php
include '../connexion.php';
include '../Model/facture.php';

class factureC
{
    public function listfacture()
    {
        $sql = "SELECT * FROM facture order by co_livreur ";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste->fetchAll();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deletefacture($id)
    {
        $sql = "DELETE FROM facture WHERE id_facture= :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function addfacture($facture)
    {
        $sql = "INSERT INTO facture (id_facture, id_livraison, co_client, co_livreur)  VALUES (NULL, :il,:cc, :cl)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                
                'il' => $facture->getIdLivraison(),
                'cc' => $facture->getCoClient(),
                'cl' => $facture->getCoLivreur()
            ]); 
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function updatefacture($facture, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE facture SET 
                    id_livraison = :id_livraison, 
                    co_client= :co_client, 
                    co_livreur = :co_livreur
                WHERE id_facture= :id_facture'
            );
            $query->execute([
                'id_facture' => $id,
                'id_livraison' => $facture->getIdLivraison(),
                'co_client' => $facture->getCoClient(),
                'co_livreur' => $facture->getCoLivreur(),
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function showfacture($id)
    {
        $sql = "SELECT * from facture where id_facture = $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $facture = $query->fetchAll();
            return $facture;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
}
