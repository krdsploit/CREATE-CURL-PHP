<?php


    $curl = curl_init()
    curl_setopt($curl, CURLPOT_URL=,"http://");
    curl_setopt($curl, CURLPORT, 1);
    curl_setopt($curl, CURLPORT_POSTFIELDS, "Hi=World&Foo=Bar&Baz=Wombat");

    curl_exec($curl);
    curl_close($curl)



?>