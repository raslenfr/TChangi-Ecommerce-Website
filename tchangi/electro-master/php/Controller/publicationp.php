<?php
include '../config.php';
include '../Model/publication.php';

class Publicationp
{
    public function listPub()
    {
        $sql = "SELECT * FROM publi";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deletePub($id)
    {
        $sql = "DELETE FROM publi WHERE id_pub = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function addPub($publication)
    {
        

        $sql = "INSERT INTO publi  
        VALUES (NULL, :txt,:tp,:id,:d,  :deslikee,:likee)";
        $db = config::getConnexion();
        try {
           print_r(date('Y-m-d'));
            $query = $db->prepare($sql);
            $query->execute([
                'txt' => $publication->getTextPub(),
                'tp' => $publication->getTypePub(),
                'id' => $publication->getIdUser(),
                'd' => date('Y/m/d'),
                'deslikee'=> $publication->getdeslike(),
                'likee'=> $publication->getlike()
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function updatePub($publication)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE publi SET 
                    text = :text, 
                    type_txt = :type_txt, 
                    id_user = :id_user, 
                    date = :date,
                    likee= :likee,
                    deslikee= :deslikee
                WHERE id_pub= :id_pub'
            );
            $query->execute([
               'id_pub' => $publication->getIdPub(),
                'text' => $publication->getTextPub(),
                'type_txt' => $publication->getTypePub(),
                'id_user' => $publication->getIdUser(),
                'date' => $publication->getDateTime()->format('Y/m/d'),
                'deslikee'=> $publication->getdeslike(),
                'likee'=> $publication->getlike()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    function showPub($id)
    {
        $sql = "SELECT * from publi where id_pub = $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $publication = $query->fetch();
            return $publication;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    function showusername($id)
    {
        $sql = "SELECT * from client where id = $id ";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
            $publication = $query->fetch(PDO::FETCH_OBJ);

            return $publication->fn; 
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    function totalep()
    {
        $sql = "SELECT count(*) from publi ";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $total = $query->fetch(); 
            return $total;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    function Tripub(){
        {
            $sql = "SELECT * FROM publi  order by date ASC";
            $db = config::getConnexion();
            try {
                $list = $db->query($sql);
                return $list;
            } catch (Exception $e) {
                die('Error:' . $e->getMessage());
            }
        }
    }
    function Triersuj(){
        {
            $sql = "SELECT * FROM publi  order by type_txt ASC";
            $db = config::getConnexion();
            try {
                $list = $db->query($sql);
                return $list;
            } catch (Exception $e) {
                die('Error:' . $e->getMessage());
            }
        }
    }
    function TrierPop(){
        {
            $sql = "SELECT * FROM publi,commentaire where commentaire.id_pub=publi.id_pub";
            $db = config::getConnexion();
            try {
                $list = $db->query($sql);
                return $list;
            } catch (Exception $e) {
                die('Error:' . $e->getMessage());
            }
        }
    } 
    function likedes($id){
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE publi SET 
                    text = :text, 
                    type_txt = :type_txt, 
                    id_user = :id_user, 
                    date = :date,
                    likee= :likee,
                    deslikee= :deslikee
                WHERE id_pub= :id'
            );
            $publication=$this->getpub($id);
            $query->execute([
               'deslikee' => $publication->getdeslike(),
                'likee' => $publication->getlike()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    function getpub($id)
    {
        $sql = "SELECT * from publi where id_pub = $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $pub = $query->fetch();
            return $pub;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

}
