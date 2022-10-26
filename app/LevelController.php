<?php

    include_once 'config.php';

    if (isset($_POST['action'])) {
	
        if ( isset($_POST['global_token']) && $_POST['global_token'] == $_SESSION['global_token']) {
    
            switch ($_POST['action']) {
                case 'create':
    
                    $name = strip_tags($_POST['name']);
                    $percentage_discount = strip_tags($_POST['percentage_discount']);

                    $levelcontroller = new Levelcontroller();
                    $levelcontroller -> create($name, $percentage_discount);

                    break;
                case 'update':
    
                    $id = strip_tags($_POST['id']);
                    $name = strip_tags($_POST['name']);
                    $percentage_discount = strip_tags($_POST['percentage_discount']);
                
                    $levelcontroller = new Levelcontroller();
                    $levelcontroller -> update($id, $name, $percentage_discount);
    
                    break;
                case 'delete':
    
                    $levelcontroller = new LevelController();
                    echo json_encode($levelController->delete($_POST['id']));
    
                    break;
            }
    
        }
    }

    Class LevelController{
        
        public function create($name, $percentage_discount){
            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/levels',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array('name' => $name,
            'percentage_discount' => $percentage_discount),
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer '.$_SESSION['token']
            ),
            ));

            $response = curl_exec($curl);
            curl_close($curl);
            $response = json_decode($response);

            //Rutas pendientes
            if(isset($response->code) && $response->code >0 ){
                header("Location:".BASE_PATH."level/?success=true");
            }else {
                header("Location:".BASE_PATH."level/?error=true");
            }

        }

        public function update($id, $name, $percentage_discount){
            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/levels',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_POSTFIELDS => 'id=' .$id.
            '&name=' .$name.
            '&percentage_discount=' .$percentage_discount ,
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer '.$_SESSION['token'],
                //Pendiente linea siguienete
                'Content-Type: application/x-www-form-urlencoded'
            ),
            ));

            $response = curl_exec($curl);
            curl_close($curl);
            $response = json_decode($response);

            //Rutas pendientes
            if(isset($response->code) && $response->code >0 ){
                header("Location:".BASE_PATH."level/?success=true");
            }else {
                header("Location:".BASE_PATH."level/?error=true");
            }

        }

        public function delete($id){
            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/levels/'.$id,
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

            if ( isset($response->code) && $response->code > 0) {
			
                return true;
            }else{
    
                return false;
            }

        }

        public function getLevel($id){
            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/levels/'.$id,
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

        public function getLevels(){
            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/levels/',
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