<?php


include ('db.php');


class UserMessage extends Connection { 

    public function setMessage($name, $email, $message) {
        if(!empty($name) && !empty($email) && !empty($message)) {
            $sql = "INSERT INTO message (name, email, message) VALUES (?, ?, ?);";
            $stmt = $this->dbConnect()->prepare($sql); 
            $stmt->execute([$name, $email, $message]);
            echo "Uspesno poslata poruka. <br><br>";
        } 
        else {
            die('Niste uneli sve podatke !');
        }
    }
}


?>