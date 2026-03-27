<?php
class Logger{


    public function generateLoginForm(string $action): void{
       
    echo "<form action='$action' method='post'>
        <h3 class='text-dark ms-3 pb-5 text-center' style='font-family: \"Unica One\", cursive;'>
            PLEASE LOGIN
        </h3>
        <input type='text' class='form-control' id='username' placeholder='USERNAME' name='username'>
        <input type='password' class='form-control' id='password' placeholder='PASSWORD' name='password'>
        <button type='submit' class='btn btn-secondary' style='margin-top: 10px; width: 100%;'>LOGIN</button>
    </form>";
}

    public function log(string $username, string $password) : array{
        $user = [
            "granted" => false,
            "nick" => null,
            "error" => null
        ];
        if (strlen($username) === 0) {
            $user["error"] = "Username is empty";
            return $user;
        }if (strlen($password) === 0) {
            $user["error"] = "Password is empty";
            return $user;
        }
        if ($username === "gandalf" && $password === "youshallnotpass") {
             $user["gandalf"] = true;
            $user["nick"] = "Gandalf";
            $user["error"] = null;
            return $user;
        }
        $user["error"] = "Authentification failed";
        return $user;
    }
}