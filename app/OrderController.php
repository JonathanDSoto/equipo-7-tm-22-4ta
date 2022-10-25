<?

include_once "config.php";

if (isset($_POST['action'])) {
	
	if ( isset($_POST['global_token']) && $_POST['global_token'] == $_SESSION['global_token']) {

		switch ($_POST['action']) {
			case 'create':

                $folio = strip_tags($_POST['folio']);
                $total = strip_tags($_POST['total']);
                $is_paid = strip_tags($_POST['is_paid']);
                $client_id = strip_tags($_POST['client_id']);
                $address_id = strip_tags($_POST['address_id']);
                $order_status_id = strip_tags($_POST['order_status_id']);
                $payment_type_id = strip_tags($_POST['payment_type_id']);
                $coupon_id = strip_tags($_POST['coupon_id']);

                $orderController = new OrderController();
                $orderController -> create($folio, $total, $is_paid, $client_id, $address_id, $order_status_id, $payment_type_id, $coupon_id);

				break;
			case 'update':

                $id = strip_tags($_POST['id']);
                $order_status_id = strip_tags($_POST['order_status_id']);
            
                $orderController = new OrderController();
                $orderController -> update($id, $order_status_id);

				break;
            case 'delete':

                $orderController = new OrderController();
                echo json_encode($orderController->delete($_POST['id']));

                break;
		}

	}
}

Class OrderController(){

    public function create($folio, $total, $is_paid, $client_id, $address_id, $order_status_id, $payment_type_id, $coupon_id){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://crud.jonathansoto.mx/api/orders',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array('folio' => $folio,
        'total' => $total,
        'is_paid' => $is_paid,
        'client_id' => $client_id,
        'address_id' => $address_id,
        'order_status_id' => $order_status_id,
        'payment_type_id' => $payment_type_id,
        'coupon_id' => $coupon_id,
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer '.$_SESSION['token']
        ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        echo $response;

        //Rutas pendientes
        if(isset($response->code) && $response->code >0 ){
            header("Location:".BASE_PATH."products/?success=true");
        }else {
            header("Location:".BASE_PATH."products/?error=true");
        }

    }

    public function update($id, $order_status_id){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://crud.jonathansoto.mx/api/orders',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'PUT',
        CURLOPT_POSTFIELDS => 'id=' .$id. 
        '&order_status_id=' .$order_status_id ,
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer '.$_SESSION['token']
            //Pendiente linea siguienete
            'Content-Type: application/x-www-form-urlencoded'
        ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        echo $response;

        //Rutas pendientes
        if(isset($response->code) && $response->code >0 ){
            header("Location:".BASE_PATH."products/?success=true");
        }else {
            header("Location:".BASE_PATH."products/?error=true");
        }

    }

    public function delete($id){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://crud.jonathansoto.mx/api/orders/'.$id,
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
        echo $response;

        if ( isset($response->code) && $response->code > 0) {
			
			return true;
		}else{

			return false;
		}

        // //Rutas pendientes
        // if(isset($response->code) && $response->code >0 ){
        //     header("Location:".BASE_PATH."products/?delete=true")
        // }else {
        //     header("Location:".BASE_PATH."products/?delete=false")
        // }

    }

    public function getOrders(){

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://crud.jonathansoto.mx/api/orders',
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
        echo $response;
        
        if ( isset($response->code) && $response->code > 0) {
			
			return $response->data;
		}else{

			return array();
		}
    }

    public function getOrder($id){

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://crud.jonathansoto.mx/api/orders/details/'.$id,
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
        echo $response;
        
        if ( isset($response->code) && $response->code > 0) {
			
			return $response->data;
		}else{

			return array();
		}
    }

    //Pendiente URL
    public function getOrderByDate($start_date, $end_date){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://crud.jonathansoto.mx/api/orders/'. $start_date . $end_date,
        // CURLOPT_URL => 'https://crud.jonathansoto.mx/api/orders/2022-10-04/2022-10-25',
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
        echo $response;

        if ( isset($response->code) && $response->code > 0) {
			
			return $response->data;
		}else{

			return array();
		}
    }
    
}

?>