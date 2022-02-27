<?php
	//pole uzivatelu a vlastnosti
    $users = array(
        array(
            "id" => 1,
            "username" => "admin",
            "passwordhash" => password_hash("admin1", PASSWORD_DEFAULT)
			//hashovaci metoda pro zabezpeceni hesla
        )
    );

	//vraci uzivatele na zaklade $username
	//volana z login.php
    function getUserByUsername($username, $users) {
        foreach($users as $user) {
            if($user['username'] == $username){
                return $user;
            }
        }
        return false;
    }

	//vraci uzivatele na zaklade $id
	//volano z welcome.php 
    function getUserById($id, $users) {
        foreach($users as $user) {
            if($user['id'] == $id){
                return $user;
            }
        }
        return false;
    }
?>