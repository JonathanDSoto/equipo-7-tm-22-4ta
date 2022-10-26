<?php

include_once "config.php";

if (isset($_POST['action'])) {
	
	if ( isset($_POST['global_token']) && $_POST['global_token'] == $_SESSION['global_token']) {

		switch ($_POST['action']) {
			case 'create':

                $name = strip_tags($_POST['name']);
                $email = strip_tags($_POST['email']);
                $password = strip_tags($_POST['password']);
                $phone_number = strip_tags($_POST['phone_number']);
                $is_suscribed = strip_tags($_POST['is_suscribed']);
                $level_id = strip_tags($_POST['level_id']);

                $clientcontroller = new ClientController();
                $clientcontroller -> create($name, $email, $password, $phone_number, $is_suscribed, $level_id);
			
				break;
			case 'delete':

                // $id = strip_tags($_POST['id']);
                // $clientcontroller = new ClientController();
                // $clientcontroller -> delete($id)
                $clientcontroller = new ClientController();
                echo json_encode($clientcontroller->delete($_POST['id']));

				break;
            case 'update':

                $name = strip_tags($_POST['name']);
                $email = strip_tags($_POST['email']);
                $password = strip_tags($_POST['password']);
                $phone_number = strip_tags($_POST['phone_number']);
                $is_suscribed = strip_tags($_POST['is_suscribed']);
                $level_id = strip_tags($_POST['level_id']);
                $id = strip_tags($_POST['id']);

                $clientcontroller = new ClientController();
                $clientcontroller -> update($name, $email, $password, $phone_number, $is_suscribed, $level_id, $id);
            
                break;
		}

	}
}

Class ClientController{

    public function create($name, $email, $password, $phone_number, $is_suscribed, $level_id){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://crud.jonathansoto.mx/api/clients',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array('name' => $name,
        'email' => $email,
        'password' => $password,
        'phone_number' => $phone_number,
        'is_suscribed' => $is_suscribed,
        'level_id' => $level_id),
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer '.$_SESSION['token']
        ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
		$response = json_decode($response);

        //Rutas pendientes
        // if(isset($response->code) && $response->code >0 ){
        //     header("Location:".BASE_PATH."products/?create=true")
        // }else {
        //     header("Location:".BASE_PATH."products/?create=false")
        // }

        if(isset($response->code) && $response->code >0 ){
            header("Location:".BASE_PATH."client/?success=true");
        }else {
            header("Location:".BASE_PATH."client/?error=true");
        }

    }

    public function update($name, $email, $password, $phone_number, $is_suscribed, $level_id, $id){

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/clients',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_POSTFIELDS => 'name=' .$name.
            '&email=' .$email.
            '&password=' .$password.
            '&phone_number=' .$phone_number.
            '&is_suscribed=' .$is_suscribed.
            '&level_id=' .$level_id.
            '&id=' .$id,
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer '.$_SESSION['token'],
                //Pendiente el codigo seguido de este comentario, idk
                'Content-Type: application/x-www-form-urlencoded'
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response);

        //Rutas pendientes
        // if(isset($response->code) && $response->code >0 ){
        //     header("Location:".BASE_PATH."products/?update=true")
        // }else {
        //     header("Location:".BASE_PATH."products/?update=false")
        // }

        if(isset($response->code) && $response->code >0 ){
            header("Location:".BASE_PATH."client/?success=true");
        }else {
            header("Location:".BASE_PATH."client/?error=true");
        }

    }

    public function delete($id){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://crud.jonathansoto.mx/api/clients/'.$id,
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

        //Rutas pendientes
        // if(isset($response->code) && $response->code >0 ){
        //     header("Location:".BASE_PATH."products/?delete=true")
        // }else {
        //     header("Location:".BASE_PATH."products/?delete=false")
        // }

        if ( isset($response->code) && $response->code > 0) {
			
			return true;
		}else{

			return false;
		}

    }

    public function getClients(){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://crud.jonathansoto.mx/api/clients',
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

    public function getClient($id){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://crud.jonathansoto.mx/api/clients/'.$id,
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

    
    
}

?>