<?php
  
include_once "config.php";

if (isset($_POST['action'])) {
	
	if ( isset($_POST['global_token']) && $_POST['global_token'] == $_SESSION['global_token']) {

		switch ($_POST['action']) {
			case 'create':

                $name = strip_tags($_POST['name']);
                $code = strip_tags($_POST['code']);
                $percentage_discount = strip_tags($_POST['percentage_discount']);
                $min_amount_required = strip_tags($_POST['min_amount_required']);
                $min_product_required = strip_tags($_POST['min_product_required']);
                $start_date = strip_tags($_POST['start_date']);
                $end_date = strip_tags($_POST['end_date']);
                $max_uses = strip_tags($_POST['max_uses']);
                $count_uses = strip_tags($_POST['count_uses']);
                $valid_only_first_purchase = strip_tags($_POST['valid_only_first_purchase']);
                $status = strip_tags($_POST['status']);

                $couponController = new CouponController();
                $couponController -> create($name, $code, $percentage_discount, $min_amount_required, $min_product_required, $start_date, $end_date, $max_uses, $count_uses, $valid_only_first_purchase, $status);
			
				break;
			case 'update':

                $name = strip_tags($_POST['name']);
                $code = strip_tags($_POST['code']);
                $percentage_discount = strip_tags($_POST['percentage_discount']);
                $min_amount_required = strip_tags($_POST['min_amount_required']);
                $min_product_required = strip_tags($_POST['min_product_required']);
                $end_date = strip_tags($_POST['end_date']);
                $max_uses = strip_tags($_POST['max_uses']);
                $max_uses = strip_tags($_POST['max_uses']);
                $count_uses = strip_tags($_POST['count_uses']);
                $valid_only_first_purchase = strip_tags($_POST['valid_only_first_purchase']);
                $status = strip_tags($_POST['status']);
                $id = strip_tags($_POST['id']);

                $couponController = new CouponController();
                $couponController -> update($name, $code, $percentage_discount, $min_amount_required, $min_product_required, $start_date, $end_date, $max_uses, $count_uses, $valid_only_first_purchase, $status, $id);
			

				break;
            case 'delete':

                $couponController  = new CouponController();
                echo json_encode($couponController->delete($_POST['id']));

                // $id = strip_tags($_POST['id']);
                // $couponController = new CouponController();
                // $couponController -> delete($id);
            
                break;
		}

	}
}

Class CouponController{

    public function create($name, $code, $percentage_discount, $min_amount_required, $min_product_required, $start_date, $end_date, $max_uses, $count_uses, $valid_only_first_purchase, $status){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://crud.jonathansoto.mx/api/coupons',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array('name' => $name,
        'code' => $code,
        'percentage_discount' => $percentage_discount,
        'min_amount_required' => $min_amount_required,
        'min_product_required' => $min_product_required,
        'start_date' => $start_date,
        'end_date' => $end_date,
        'max_uses' => $max_uses,
        'count_uses' => $count_uses,
        'valid_only_first_purchase' => $valid_only_first_purchase,
        'status' => $status),
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
            header("Location:".BASE_PATH."coupon/?success=true");
        }else {
            header("Location:".BASE_PATH."coupon/?error=true");
        }

    }

    public function update($name, $code, $percentage_discount, $min_amount_required, $min_product_required, $start_date, $end_date, $max_uses, $count_uses, $valid_only_first_purchase, $status, $id){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://crud.jonathansoto.mx/api/coupons',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'PUT',
        CURLOPT_POSTFIELDS => 'name=' .$name.
        '&code=' .$code.
        '&percentage_discount=' .$percentage_discount.
        '&min_amount_required=' .$min_amount_required.
        '&min_product_required=' .$min_product_required.
        '&start_date=' .$start_date.
        '&end_date=' .$end_date.
        '&max_uses=' .$max_uses.
        '&count_uses=' .$count_uses.
        '&valid_only_first_purchase=' .$valid_only_first_purchase.
        '&status=' .$status.
        '&id=' .$id ,
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer '.$_SESSION['token'],
            //Pendiente, no se que sea xd
            'Content-Type: application/x-www-form-urlencoded'
        ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
		$response = json_decode($response);

        //Rutas pendientes
        if(isset($response->code) && $response->code >0 ){
            header("Location:".BASE_PATH."coupon/?success=true");
        }else {
            header("Location:".BASE_PATH."coupon/?error=true");
        }

    }

    public function delete($id){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://crud.jonathansoto.mx/api/coupons/'.$id,
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

        //Rutas pendientes
        // if(isset($response->code) && $response->code >0 ){
        //     header("Location:".BASE_PATH."products/?delete=true")
        // }else {
        //     header("Location:".BASE_PATH."products/?delete=false")
        // }

    }

    public function getCoupons(){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://crud.jonathansoto.mx/api/coupons',
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

    public function getCoupon($id){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://crud.jonathansoto.mx/api/coupons/'.$id,
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
