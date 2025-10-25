<?php
include '../config.php';
include '../Model/commentaire.php';

class comp
{
    function showCommentaire()
    {
        $sql = "SELECT * FROM commentaire,publi WHERE commentaire.id_pub=publi.id_pub";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $courses = $query->fetchAll();
            return $courses;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    public function listCom()
    {
        $sql = "SELECT * FROM commentaire,publi WHERE commentaire.id_pub=publi.id_pub";
        $db = config::getConnexion();
        try {
            $list = $db->query($sql);
            return $list;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function addcom($com,$s)
    {
        $sql = "INSERT INTO commentaire 
        VALUES (NULL, :txt,:tp,:id,:d)";
        $db = config::getConnexion();   
        try {
           print_r(date('Y-m-d'));
            $query = $db->prepare($sql);
            $query->execute([
                'txt' => $com->getTextPub(),
                'tp' => $s,
                'id' => $com->getIdUser(),
                'd' => date('Y/m/d')
            ]);
            //$com = $this->getcom($com["id_com"]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
    function updatecom($com)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE commentaire SET 
                    text_com = :text_com, 
                    id_pub = :id_pub, 
                    id_user = :id_user, 
                    date_c = :date_c
                WHERE id_com= :id_com'
            );
            $query->execute([
               'id_com' => $com->getIdPub(),
                'text_com' => $com->getTextPub(),
                'id_pub' => $com->getTypePub(),
                'id_user' => $com->getIdUser(),
                'date_c' => $com->getDateTime()->format('Y/m/d')
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    function deletecom($id)
    {
        $sql = "DELETE FROM commentaire WHERE id_com = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
    function showPub($id)
    {
        $sql = "SELECT * from publi where id_pub = $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
            echo "</br>";
            $publication = $query->fetch(PDO::FETCH_OBJ);
            echo "Date :$publication->date";
            echo "</br>";
            echo "Text : '$publication->text' ";
            echo "</br>";
            return $publication;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    function get_com($id)
    {
        $sql = "SELECT * from commentaire where id_com = $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $com = $query->fetch();
            return $com;
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

            echo "User Name: $publication->ln" ;
            echo "&nbsp";
            
            return $publication->ln; 
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }


    function showusername1($id)
    {
        $sql = "SELECT * from client where id = $id ";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
            $publication = $query->fetch(PDO::FETCH_OBJ);

        
            
            return $publication->ln; 
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
}

