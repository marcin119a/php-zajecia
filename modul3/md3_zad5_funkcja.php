<?php

function wrap_html($string, $tag = 'i') {
       return "<$tag> $string </$tag>";
}
            
echo wrap_html('a', 'bla');
echo wrap_html('a');




function image($img){
    $tag = '<img src="'. $img['src'] .'"';
    $tag .= 'alt="'. ($img['alt']) ? $img['alt']: ''. '"/>';
    return $tag;
}

$image = image(
    array('src'=> 'krowa.png', 'alt' => 'Krowa robia muu')
);

print $image;