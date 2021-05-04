<?php
/*
Plugin Name: self-diagnosis
Plugin URI: https://jy-law.kr/consult/self-diagnosis
Description: A plugin to self-diagnosis
Author: LJU YSH
Version: 0.1
*/
add_action('init','self_diagnosis');
function self_diagnosis(){

}

add_shortcode('self-diagnosis','shortcode_self_diagnosis');
function shortcode_self_diagnosis($attr){
    global $wpdb;
    
    //get Database
    $offender_question_list = $wpdb->get_results(
        "
        SELECT *
        FROM wp_self_diagnosis_question 
        WHERE type='offender'
        "
    );

    $victim_question_list = $wpdb->get_results(
        "
        SELECT *
        FROM wp_self_diagnosis_question 
        WHERE type='victim'
        "
    );
    
    $offender_answer_list = $wpdb->get_results(
        "
        SELECT *
        FROM wp_self_diagnosis_answer
        WHERE type='offender'
        "
    );
    
    $victim_answer_list = $wpdb->get_results(
        "
        SELECT *
        FROM wp_self_diagnosis_answer
        WHERE type='victim'
        "
    );

    $result_list = $wpdb->get_results(
        "
        SELECT *
        FROM wp_self_diagnosis_result
        "
    );
    include "customer/do_self_diagnosis.php";
}



//check phone ajax function
add_action( 'wp_ajax_self_diagnosis', 'check_phone_ajax_callback_function' );    // If called from admin panel
add_action( 'wp_ajax_nopriv_self_diagnosis', 'check_phone_ajax_callback_function' );    // If called from front end
function check_phone_ajax_callback_function() {
        $sID = "ncp:sms:kr:264197143966:jy-law-self-diagnosis"; // 서비스 ID
        $smsURL = "https://sens.apigw.ntruss.com/sms/v2/services/".$sID."/messages";
        $smsUri = "/sms/v2/services/".$sID."/messages";
        $sKey = "67baaa38382a47debdc95a7ed885ebcd";
    
        $accKeyId = "lGCNDth15l6oHZpgsJNR";
        $accSecKey = "pn2ni3zgZD4iVuCIjG2hID9F593R3SZEtJwczHcE";
    
        $sTime = floor(microtime(true) * 1000);
        $rand_num = $_GET["cert"];
        $phone = strval($_GET["phonenum"]);
        $content = "[JY법률사무소] 본인확인 인증번호 [$rand_num]를 입력해주세요";
        // The data to send to the API
        $postData = array(
            'type' => 'SMS',
            'countryCode' => '82',
            'from' => '025824833', // 발신번호 (등록되어있어야함)
            'contentType' => 'COMM',
            'content' => $content,
            'messages' => array(array('content' => $content, 'to' => $phone))
        );
    
        $postFields = json_encode($postData) ;
    
        $hashString = "POST {$smsUri}\n{$sTime}\n{$accKeyId}";
        $dHash = base64_encode( hash_hmac('sha256', $hashString, $accSecKey, true) );
    
        $header = array(
                // "accept: application/json",
                'Content-Type: application/json; charset=utf-8',
                'x-ncp-apigw-timestamp: '.$sTime,
                "x-ncp-iam-access-key: ".$accKeyId,
                "x-ncp-apigw-signature-v2: ".$dHash
            );
    
        // Setup cURL
        $ch = curl_init($smsURL);
        curl_setopt_array($ch, array(
            CURLOPT_POST => TRUE,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_HTTPHEADER => $header,
            CURLOPT_POSTFIELDS => $postFields
        ));
    
        $response = curl_exec($ch);
}


//check phone ajax function
add_action( 'wp_ajax_submit_admin', 'submit_admin_ajax_callback_function' );    // If called from admin panel
add_action( 'wp_ajax_nopriv_submit_admin', 'submit_admin_ajax_callback_function' );    // If called from front end
function submit_admin_ajax_callback_function() {
        $sID = "ncp:sms:kr:264197143966:jy-law-self-diagnosis"; // 서비스 ID
        $smsURL = "https://sens.apigw.ntruss.com/sms/v2/services/".$sID."/messages";
        $smsUri = "/sms/v2/services/".$sID."/messages";
        $sKey = "67baaa38382a47debdc95a7ed885ebcd";

        $accKeyId = "lGCNDth15l6oHZpgsJNR";
        $accSecKey = "pn2ni3zgZD4iVuCIjG2hID9F593R3SZEtJwczHcE";

        $sTime = floor(microtime(true) * 1000);
        $phone = strval($_GET["phonenum"]);
        $person_name = strval($_GET["personname"]);
        $result_name = strval($_GET["resultname"]);
        $result_type = strval($_GET["resulttype"]);
        $result_cate = strval($_GET["resultcate"]);

        $content = "새로운 자가진단이 들어왔습니다: [$person_name] [$phone] [$result_type] [$result_cate] [$result_name] -JY법률사무소 형사소송센터";
        // The data to send to the API
        $postData = array(
            'type' => 'LMS',
            'countryCode' => '82',
            'from' => '025824833', // 발신번호 (등록되어있어야함)
            'contentType' => 'COMM',
            'content' => $content,
            'messages' => array(array('content' => $content, 'to' => '01047014833'))
        );
    
        $postFields = json_encode($postData) ;
    
        $hashString = "POST {$smsUri}\n{$sTime}\n{$accKeyId}";
        $dHash = base64_encode( hash_hmac('sha256', $hashString, $accSecKey, true) );
    
        $header = array(
                // "accept: application/json",
                'Content-Type: application/json; charset=utf-8',
                'x-ncp-apigw-timestamp: '.$sTime,
                "x-ncp-iam-access-key: ".$accKeyId,
                "x-ncp-apigw-signature-v2: ".$dHash
            );
    
        // Setup cURL
        $ch = curl_init($smsURL);
        curl_setopt_array($ch, array(
            CURLOPT_POST => TRUE,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_HTTPHEADER => $header,
            CURLOPT_POSTFIELDS => $postFields
        ));
    
        $response = curl_exec($ch);

        //send user sms
        $content = "[$person_name]님의 자가진단이 접수되어 담당자가 연락드립니다. 감사합니다 -JY법률사무소";
        // The data to send to the API
        $postData = array(
            'type' => 'SMS',
            'countryCode' => '82',
            'from' => '025824833', // 발신번호 (등록되어있어야함)
            'contentType' => 'COMM',
            'content' => $content,
            'messages' => array(array('content' => $content, 'to' => $phone))
        );
    
        $postFields = json_encode($postData) ;
    
        $hashString = "POST {$smsUri}\n{$sTime}\n{$accKeyId}";
        $dHash = base64_encode( hash_hmac('sha256', $hashString, $accSecKey, true) );
    
        $header = array(
                // "accept: application/json",
                'Content-Type: application/json; charset=utf-8',
                'x-ncp-apigw-timestamp: '.$sTime,
                "x-ncp-iam-access-key: ".$accKeyId,
                "x-ncp-apigw-signature-v2: ".$dHash
            );
    
        // Setup cURL
        $ch = curl_init($smsURL);
        curl_setopt_array($ch, array(
            CURLOPT_POST => TRUE,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_HTTPHEADER => $header,
            CURLOPT_POSTFIELDS => $postFields
        ));
    
        $response = curl_exec($ch);
}


//put data to db ajax function
add_action( 'wp_ajax_store_result', 'store_result_ajax_callback_function' );    // If called from admin panel
add_action( 'wp_ajax_nopriv_store_result', 'store_result_ajax_callback_function' );    // If called from front end
function store_result_ajax_callback_function() {
    global $wpdb;
    $answerToString = implode(",",  $_GET["answerData"]);
    $wpdb->insert("wp_self_diagnosis", array(
        'phoneNum' => $_GET["phonenumData"],
        'name' => $_GET["nameData"],
        'type'=> $_GET["typeData"],
        'category'=> $_GET["categoryData"],
        'answerData' => $answerToString,
        'result' => $_GET["resultData"]
    ));
}

//admin_menu
add_action('admin_menu','self_diagnosis_admin_list');
function self_diagnosis_admin_list(){
    global $_wp_last_object_menu;
    add_menu_page(__('자가진단','self-diagnosis'),'자가진단리스트', 'manage_options', 'self_diagnosis_index',
    'self_diagnosis_index','dashicons-format-aside', $_wp_last_object_menu);
}
function self_diagnosis_index(){
    global $wpdb;

    $admin_list = $wpdb->get_results(
        "
        SELECT *
        FROM wp_self_diagnosis 
        "
    );
    $question_list = $wpdb->get_results(
        "
        SELECT *
        FROM wp_self_diagnosis_question 
        "
    );

    include "admin/view_self_diagnosis_list.php";
}


//activate plugin
register_activation_hook(__FILE__, 'self_diagnosis_activation');
function self_diagnosis_activation(){
    global $wpdb;
    $charset_collate = $wpdb->get_charset_collate();
    
    //$wpdb->query("CREATE TABLE IF NOT EXISTS ")
}

//pagination function
function pagination($pages = '', $range = 4)
{
     $showitems = ($range * 2)+1;

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }

     if(1 != $pages)
     {
         echo '<div class="pagination"><span>Page '.$paged.' of '.$pages.'</span>';
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo '<a href="'.get_pagenum_link(1).'">&laquo; First</a>';
         if($paged > 1 && $showitems < $pages) echo '<a href="'.get_pagenum_link($paged - 1).'">&lsaquo; Previous</a>';

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? '<span class="current">'.$i.'</span>':'<a href="'.get_pagenum_link($i).'" class="inactive">'.$i.'</a>';
             }
         }

         if ($paged < $pages && $showitems < $pages) echo '<a href="'.get_pagenum_link($paged + 1).'">Next &rsaquo;</a>';
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo '<a href="'.get_pagenum_link($pages).'">Last &raquo;</a>';
         echo '</div>'.PHP_EOL;
     }
}
?>