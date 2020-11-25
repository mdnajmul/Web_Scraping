<?php

    include('simple_html_dom.php');

    $html = file_get_html('https://en.wikipedia.org/wiki/PHP');

    //retrive page title
    $title=$html->find('title',0)->plaintext;
    echo $title;


    echo '<br/><br/>';

    //here we retrive specific class data from table
    $data=$html->find('table.infobox',0)->plaintext;
    echo $data;

?>