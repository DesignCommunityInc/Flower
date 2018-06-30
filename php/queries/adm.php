<?php
class administrator
{
    public $login = "root";
    public $password = "password";

    public function __construct($login, $password){
        $this->$login = $login;
        $this->$password = $password;
    }
    public function getAttribute($parametr){
        switch($parametr){
            case 'login': return $this->$login; break;
            case 'password': return $this->$password; break;
        }
    }
    function auth()
    {
    }
}

$adm = array(2);

$adm[0] = new administrator("root", "password");
//$adm[1] = new administrator("ilya", "cherry123");

$success = false;

$data = $_GET;

foreach($adm as $person)
    if ($data['login'] == $person->login)
        if($data['password'] == $person->password)
        {
            $success = true;
            header('Content-Type: application/json');
            echo json_encode('success');
            exit();
        }

if($success == false){
    header('Content-Type: application/json');
    echo json_encode("Any notes are incorrect, please check your login and password");
    exit();
}

?>