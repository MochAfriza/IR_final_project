<?php
class Curl {
    public function postCURL($_url, $_param){
        // membuat pasangan name dan value dipisahkan tanda '&'
        $header = array(
            'Content-Type: application/json',
            'x-api-key: nJIbq6CBWsD7BrlwlZk2NVHFwveR3AY1yTaC1UAW'
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, $header); 
        //curl_setopt($ch, CURLOPT_POST, count($_param));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $_param);    
        $output=curl_exec($ch);
        curl_close($ch);
        return $output;
    }
}
?>