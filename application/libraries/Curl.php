<?php
class Curl {
    public function postCURL($_url, $_param){
        $postData = '';
        // membuat pasangan name dan value dipisahkan tanda '&'
        foreach($_param as $k => $v) { 
            $postData .= $k . '='.$v.'&'; 
        }
        $header = array(
            'Content-Type: application/json',
            'x-api-key: nJIbq6CBWsD7BrlwlZk2NVHFwveR3AY1yTaC1UAW'
        );
        rtrim($postData, '&');
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, $header); 
        curl_setopt($ch, CURLOPT_POST, count($_param));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);    
        $output=curl_exec($ch);
        curl_close($ch);
        return $output;
    }
}
?>