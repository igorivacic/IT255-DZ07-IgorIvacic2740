<?php
$type = $_POST['type'];
$ime = $_POST['ime'];
$prezime = $_POST['prezime'];
$brojTelefona = $_POST['brojTelefona'];
$email = $_POST['email'];
if($type == "json"){
    header("Content-type: application/json");
    $test_array = array (
        'type' => $type,
        'ime' => $ime,
        'prezime' => $prezime,
        'brojTelefona' => $brojTelefona,
        'email' => $email
    );
    echo json_encode($test_array);
}else {
    header("Content-type: text/xml");
    $test_array = array (
       'type' => $type,
        'ime' => $ime,
        'brojTelefona' => $brojTelefona,
        'email' => $email
    );
    $xml = new SimpleXMLElement('<root/>');
    array_walk_recursive($test_array, array ($xml, 'addChild'));
    print $xml->asXML();
}
?>