<?php
class opGet{
    

    public static function get_url( $url )
    {
        $options = array(
            CURLOPT_USERAGENT => 'thisApp',
            CURLOPT_RETURNTRANSFER => true,     //retorna a pagina
            CURLOPT_HEADER         => false,    //ignora o topo
            // CURLOPT_FOLLOWLOCATION => true,     // follow redirects
            CURLOPT_AUTOREFERER    => true,     // set referer on redirect
            CURLOPT_SSL_VERIFYPEER => false,     // Disabled SSL Cert checks
            CURLOPT_HTTPHEADER     => array('Accept: application/json', 'Content-Type: application/json')
            // CURLOPT_HTTPHEADER, array('Accept: application/json', 'Content-Type: application/json')
        );
    
        $ch = curl_init( $url );
        curl_setopt_array( $ch, $options );
        $content = curl_exec( $ch );
        curl_close( $ch );
    
        return $content;
    }

}

?>