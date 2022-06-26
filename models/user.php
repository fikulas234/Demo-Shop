<?php


include ('db.php');


class Users extends Connection { //nas korisnik, korisnik koga pravimo, registrujemp, extend db da bi moglo da se povezuje sa bazom

    public function setUsers($name, $email, $password) {
        if(!empty($name) && !empty($email) && !empty($password)) {
            $sql1 = "SELECT * FROM users WHERE email=?";
            /* $st->bindParam(1, $lname);
            $st->bindParam(2, $fname);
            $st->bindParam(3, $email); */
            $st = $this->dbConnect()->prepare($sql1);
            $st->execute([$email]);
        } 
        else {
            die('Niste uneli sve podatke !');
        }

        if($st->rowCount() == 0) {
            $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?);";
            $stmt = $this->dbConnect()->prepare($sql); ///prepare kada su neki parametri ? pripremi to pa onda izvrsava
            $stmt->execute([$name, $email, $password]);//execute kad imamo prepare
            echo "Uspesna registracija. <br><br>";
        }
        else {
            $_SESSION['registered'] = true;
            echo "Korisnik sa navedenim email-om vec postoji !<br><br>"; 
        } 
    }

    public function Login ($email, $password) {
        if(!empty($email) && !empty($password)) {
            $sql1 = "SELECT * FROM users WHERE email=? and password=?";
            $st = $this->dbConnect()->prepare($sql1);
            $st->execute([$email, $password]);
        }
        else {
            die('Niste uneli sve podatke !');
        }

        if ($st->rowCount() == 1) {
            echo "You are logged in successfully";
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $email;
        } else {
            echo "You need to register an account";
        }
    }

}


?>