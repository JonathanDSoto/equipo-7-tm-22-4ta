<?php

    include_once 'config.php';

    if (isset($_POST['action'])) {

        if ( isset($_POST['global_token']) && 
            $_POST['global_token'] == $_SESSION['global_token']) {
    
            switch ($_POST['action']) {
                case 'create':
                    
                    $description = strip_tags($_POST['description']);
                    $code = strip_tags($_POST['code']);
                    $weight_in_grams = strip_tags($_POST['weight_in_grams']);
                    $status = strip_tags($_POST['status']);
                    $cover = strip_tags($_POST['cover']);
                    $stock = strip_tags($_POST['stocks']);
                    $stock_min = strip_tags($_POST['stock_min']);
                    $stock_max = strip_tags($_POST['stock_max']);
                    $product_id = strip_tags($_POST['product_id']);
                    $amount = strip_tags($_POST['amount']);

                    $presentationController = new PresentationController();
                    $presentationController->create($description, $code, $weight_in_grams, $status, $cover, $stock, $stock_min, $stock_max, $product_id, $amount);
                    
                break; 
    
                case 'update':
                    
                    $description = strip_tags($_POST['description']);
                    $code = strip_tags($_POST['code']);
                    $weight_in_grams = strip_tags($_POST['weight_in_grams']);
                    $status = strip_tags($_POST['status']);
                    $cover = strip_tags($_POST['cover']);
                    $stock = strip_tags($_POST['stocks']);
                    $stock_min = strip_tags($_POST['stock_min']);
                    $stock_max = strip_tags($_POST['stock_max']);
                    $product_id = strip_tags($_POST['product_id']);
                    $id = strip_tags($_POST['id']);
                    $amount = strip_tags($_POST['amount']);

                    $presentationController = new PresentationController();
                    $presentationController->update($description, $code, $weight_in_grams, $status, $cover, $stock, $stock_min, $stock_max, $product_id, $id, $amount);
    
                break;
    
                case 'delete':

                    $presentationController = new PresentationController();
                    echo json_encode($presentationController->delete($_POST['id']));
    
                break; 
            }
    
        }
    }


    Class PresentationController{

        public function getPresentations($id){
            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/presentations/product/'.$id,
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

        public function getSpecificPresentation($id){
            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/presentations/'.$id,
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

        public function create($description, $code, $weight_in_grams, $status, $cover, $stock, $stock_min, $stock_max, $product_id, $amount){
            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/presentations',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array('description' => $description,
            'code' => $code,
            'weight_in_grams' => $weight_in_grams,
            'status' => $status,
            'cover'=> new CURLFILE($cover),
            'stock' => $stock,
            'stock_min' => $stock_min,
            'stock_max' => $stock_max,
            'product_id' => $product_id,
            'amount' => $amount),
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer '.$_SESSION['token']
            ),
            ));

            $response = curl_exec($curl);
            curl_close($curl);
            $response = json_decode($response);

            if(isset($response->code) && $response->code >0 ){
                header("Location:".BASE_PATH."presentation/?success=true");
            }else {
                header("Location:".BASE_PATH."presentation/?error=true");
            }

        }

        public function update($description, $code, $weight_in_grams, $status, $cover, $stock, $stock_min, $stock_max, $product_id, $id, $amount){
            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/presentations',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_POSTFIELDS => 'description=' .$description.
            '&code=' .$code.
            '&weight_in_grams=' .$weight_in_grams.
            '&status=' .$status.
            '&stock=' .$stock.
            '&stock_min=' .$stock_min.
            '&stock_max=' .$stock_max.
            '&product_id=' .$product_id.
            '&id=' .$id.
            '&amount=' .$amount,
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer '.$_SESSION['token'],
                'Content-Type: application/x-www-form-urlencoded'
            ),
            ));

            $response = curl_exec($curl);
            curl_close($curl);
            $response = json_decode($response);

            //Rutas pendientes
            if(isset($response->code) && $response->code >0 ){
                header("Location:".BASE_PATH."presentation/?success=true");
            }else {
                header("Location:".BASE_PATH."presentation/?error=true");
            }

        }

        public function updatePrice(){
            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/presentations/set_new_price',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_POSTFIELDS => 'id=' .$id.
            '&amount=' .$amount,
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer '.$_SESSION['token'],
                'Content-Type: application/x-www-form-urlencoded'
            ),
            ));

            $response = curl_exec($curl);
            curl_close($curl);
            $response = json_decode($response);

            //Rutas pendientes
            if(isset($response->code) && $response->code >0 ){
                header("Location:".BASE_PATH."presentation/?success=true");
            }else {
                header("Location:".BASE_PATH."presentation/?error=true");
            }

        }

        public function delete($id){

            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/presentations/'.$id,
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

        }
    }
?>