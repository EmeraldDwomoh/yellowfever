<?php
//Function to get ip address
function get_client_ip() {
    $ipaddress = '';
    if(isset($_SERVER['HTTP_CLIENT_IP'])) {
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (isset($_SERVER['HTTP_X_FOWARDED_FOR'])) {
        $ipaddress = $_SERVER['HTTP_X_FOWARDED_FOR'];
    } elseif (isset($_SERVER['HTTP_X_FOWARDED'])) {
        $ipaddress = $_SERVER['HTTP_X_FOWARDED'];
    } elseif (isset($_SERVER['HTTP_FOWARDED_FOR'])) {
        $ipaddress = $_SERVER['HTTP_FOWARDED_FOR'];
    } elseif (isset($_SERVER['HTTP_FOWARDED'])) {
        $ipaddress = $_SERVER['HTTP_FOWARDED'];
    } elseif (isset($_SERVER['REMOTE_ADDR'])) {
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    } else {
        $ipaddress = 'UNKNOWN';
    }
    return $ipaddress;
}
?>

<h1 style="font-family: Roboto;">Your IP address is: <?php echo get_client_ip() ?></h1>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
</style>