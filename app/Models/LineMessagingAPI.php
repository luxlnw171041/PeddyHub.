<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use App\Models\Pet;

use Illuminate\Support\Facades\DB;
use App\Models\Mylog;


class LineMessagingAPI extends Model
{
	public function replyToUser($data, $event, $message_type)
    {  
    	switch ($message_type) {
    		case 'other':
    			// code...
    			break;
    		case 'pet_insurance':
    			// code...
    			break;
    		case 'contact':
    			// code...
    			break;
    		case "language": 
    		
                $provider_id = $event["source"]['userId'];
        		$user = User::where('provider_id', $provider_id)->get();

                foreach ($user as $item) {
                    $user_id = $item->id ;
                }
                $template_path = storage_path('../public/json/flex-language.json');   
                $string_json = file_get_contents($template_path);
                $string_json = str_replace("user_id",$user_id,$string_json);

                $messages = [ json_decode($string_json, true) ]; 
                break;
    	}
    }

	public function send_lost_pet($data)
	{
        $data_users = User::where('id', $data['user_id'])->get();
        $data_pets = Pet::where('id', $data['pet_id'])->get();

        $date_now = date("d/m/Y");

        if (!empty($data['select_province'])) {
        	$changwat_th = $data['select_province'];
        	$amphoe_th = $data['select_amphoe'];
        	$tambon_th = $data['select_tambon'];
        }else{
        	$changwat_th = $data['input_province'];
        	$amphoe_th = $data['input_amphoe'];
        	$tambon_th = $data['input_tambon'];
        }

        $photo = $data['photo'];
        $detail = $data['detail'];
        $phone = $data['phone'];

        switch ($data['pet_category_id']) {
        	case '1':
        		$pet_category_id = 'สุนัข';
        		$img_icon = 'shiba.png';
        		break;
        	case '2':
        		$pet_category_id = 'แมว';
        		$img_icon = 'cat.png';
        		break;
        	case '3':
        		$pet_category_id = 'นก';
        		$img_icon = 'bird.png';
        		break;
        	case '4':
        		$pet_category_id = 'ปลา';
        		$img_icon = 'fish.png';
        		break;
        	case '5':
        		$pet_category_id = 'สัตว์เล็ก';
        		$img_icon = 'otter.png';
        		break;
        	case '6':
        		$pet_category_id = 'Exotic';
        		$img_icon = 'spider.png';
        		break;
        }

        $send_to_users = Profile::where('id', '!=' , $data['user_id'])
        	->where('changwat_th' ,$changwat_th)
        	->where('amphoe_th' ,$amphoe_th)
        	->where('tambon_th' ,$tambon_th)
        	->where('type' ,'line')
        	->get();

        foreach ($send_to_users as $item) {

        	$template_path = storage_path('../public/json/flex_lost_pet.json');   

	        $string_json = file_get_contents($template_path);
	        $string_json = str_replace("pet_cat",$pet_category_id,$string_json);
	        $string_json = str_replace("IMGPET",$photo,$string_json);
	        $string_json = str_replace("4544.png",$img_icon,$string_json);
	        $string_json = str_replace("22/2/2022",$date_now,$string_json);
	        $string_json = str_replace("รายละเอียด",$detail,$string_json);
	        $string_json = str_replace("0999999999",$phone,$string_json);

	        foreach ($data_pets as $data_pet) {
	        	$string_json = str_replace("pet_name",$data_pet->name,$string_json);
	        }

	        $messages = [ json_decode($string_json, true) ];


	        $body = [
	            "to" => $item->user->provider_id,
	            "messages" => $messages,
	        ];

	        $opts = [
	            'http' =>[
	                'method'  => 'POST',
	                'header'  => "Content-Type: application/json \r\n".
	                            'Authorization: Bearer '.env('CHANNEL_ACCESS_TOKEN'),
	                'content' => json_encode($body, JSON_UNESCAPED_UNICODE),
	                //'timeout' => 60
	            ]
	        ];
	                            
	        $context  = stream_context_create($opts);
	        $url = "https://api.line.me/v2/bot/message/push";
	        $result = file_get_contents($url, false, $context);

	        //SAVE LOG
	        $data_save_log = [
	            "title" => "ส่งข้อความแจ้งสัตว์เลี้ยงหาย",
	            "content" => $item->user->username . " - " . $item->user->provider_id,
	        ];
        	MyLog::create($data_save_log);

        }
		
	}
}