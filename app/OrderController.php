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
                //Faltan mas 

                $orderController = new OrderController();
                $orderController -> create($folio, $total, $is_paid, $client_id, $address_id, $order_status_id, $payment_type_id);

				break;
			case 'update':

                $id = strip_tags($_POST['id']);
                $order_status_id = strip_tags($_POST['order_status_id']);
            
                $orderController = new OrderController();
                $orderController -> update($id, $order_status_id);

				break;
            case 'delete'

                $id = strip_tags($_POST['id']);
            
                $orderController = new OrderController();
                $orderController -> delete($id);


                break;
		}

	}
}

Class OrderController(){

    public function create($folio, $total, $is_paid, $client_id, $address_id, $order_status_id, $payment_type_id){
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
        //Que peo aqui
        'presentations[0][id]' => '1',
        'presentations[0][quantity]' => '2',
        'presentations[1][id]' => '2',
        'presentations[1][quantity]' => '2'),
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer '.$_SESSION['token']
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;

        //Rutas pendientes
        if(isset($response->code) && $response->code >0 ){
            header("Location:".BASE_PATH."products/?create=true")
        }else {
            header("Location:".BASE_PATH."products/?create=false")
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
            header("Location:".BASE_PATH."products/?update=true")
        }else {
            header("Location:".BASE_PATH."products/?update=false")
        }

    }

    public function delete($id){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://crud.jonathansoto.mx/api/orders/1',
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

        //Rutas pendientes
        if(isset($response->code) && $response->code >0 ){
            header("Location:".BASE_PATH."products/?delete=true")
        }else {
            header("Location:".BASE_PATH."products/?delete=false")
        }

    }
}


?>