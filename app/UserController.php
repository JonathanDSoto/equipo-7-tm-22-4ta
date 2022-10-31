<?php

include_once "config.php";

if (isset($_POST['action'])) {
	
	if ( isset($_POST['global_token']) && $_POST['global_token'] == $_SESSION['global_token']) {

		switch ($_POST['action']) {
			case 'update':

                $name = strip_tags($_POST['name']);
                $lastname = strip_tags($_POST['lastname']);
                $email = strip_tags($_POST['email']);
                $phone_number = strip_tags($_POST['phone_number']);
                $created_by = strip_tags($_POST['created_by']);
                $role = strip_tags($_POST['role']);
                $password = strip_tags($_POST['password']);
                $id = strip_tags($_POST['id']);

                $userController = new UserController();
				$userController->update($name, $lastname, $email, $phone_number, $created_by, $role, $password, $id);
			
				break;
			case 'delete':

                // $id = strip_tags($_POST['id']);
                // $userController = new UserController();
                // $userController->delete($id);

                $userController = new UserController();
                echo json_encode($userController->delete($_POST['id']));

				break;
            case 'create':

                $name = strip_tags($_POST['name']);
                $lastname = strip_tags($_POST['lastname']);
                $email = strip_tags($_POST['email']);
                $phone_number = strip_tags($_POST['phone_number']);
                $created_by = strip_tags($_POST['created_by']);
                $role = strip_tags($_POST['role']);
                $password = strip_tags($_POST['password']);
                $profile_photo_file = ($_FILES['profile_photo_file']);

                $userController = new UserController();
                $userController -> create($name, $lastname, $email, $phone_number, $created_by, $role, $password, $profile_photo_file);
            
                break;
		}

	}
}

Class UserController{

    public function getUsers(){

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://crud.jonathansoto.mx/api/users',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer '.$_SESSION['token']
        ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
		$response = json_decode($response);
        
        if ( isset($response->code) && $response->code > 0) {
			
			return $response->data;
		}else{

			return array();
		}
    }

    public function getUser($id){

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://crud.jonathansoto.mx/api/users/'.$id,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer '.$_SESSION['token']
        ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
		$response = json_decode($response);
        
        if ( isset($response->code) && $response->code > 0) {
			
			return $response->data;
		}else{

			return array();
		}
    }

    public function update($name, $lastname, $email, $phone_number, $created_by, $role, $password, $id){
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/users',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_POSTFIELDS => 'name=' .$name.
            '&lastname=' .$lastname.
            '&email=' .$email.
            '&phone_number=' .$phone_number.
            '&created_by=' .$created_by.
            '&role=' .$role.
            '&password=' .$password.
            '&id=' .$id,
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer '.$_SESSION['token'],
                //Pendiente linea siguiente
                'Content-Type: application/x-www-form-urlencoded'
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
		$response = json_decode($response);

        if(isset($response->code) && $response->code >0 ){
            header("Location:".BASE_PATH."user/?success=true");
        }else {
            header("Location:".BASE_PATH."user/?error=true");
        }

        //Rutas pendientes
        // if(isset($response->code) && $response->code >0 ){
        //     header("Location:".BASE_PATH."products/?update=true")
        // }else {
        //     header("Location:".BASE_PATH."products/?update=false")
        // }
    }

    public function delete($id){
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/users/'.$id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'DELETE',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer '.$_SESSION['token']
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
		$response = json_decode($response);

        if(isset($response->code) && $response->code >0 ){
            return true;
        }else {
            return false;
        }

        //Rutas pendientes
        // if(isset($response->code) && $response->code >0 ){
        //     header("Location:".BASE_PATH."products/?delete=true")
        // }else {
        //     header("Location:".BASE_PATH."products/?delete=false")
        // }
    }

    public function create($name, $lastname, $email, $phone_number, $created_by, $role, $password, $profile_photo_file){
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/users',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array('name' => $name,
            'lastname' => $lastname,
            'email' => $email,
            'phone_number' => $phone_number,
            'created_by' => $created_by,
            'role' => $role,
            'password' => $password,
            'profile_photo_file'=> new CURLFILE($profile_photo_file)),
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer '.$_SESSION['token']
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
		$response = json_decode($response);

        if(isset($response->code) && $response->code >0 ){
            header("Location:".BASE_PATH."user/?success=true");
        }else {
            header("Location:".BASE_PATH."user/?error=true");
        }

        //Rutas pendientes
        // if(isset($response->code) && $response->code >0 ){
        //     header("Location:".BASE_PATH."products/?create=true")
        // }else {
        //     header("Location:".BASE_PATH."products/?create=false")
        // }

    }

    public function updateImage($id, $profile_photo_file){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://crud.jonathansoto.mx/api/users/avatar',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array('id' => $id,
        'profile_photo_file'=> new CURLFILE($profile_photo_file)),
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer '.$_SESSION['token']
        ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
		$response = json_decode($response);

        if(isset($response->code) && $response->code >0 ){
            header("Location:".BASE_PATH."user/?success=true");
        }else {
            header("Location:".BASE_PATH."user/?error=true");
        }
    }


}


?>