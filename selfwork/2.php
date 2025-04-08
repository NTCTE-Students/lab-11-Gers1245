<?php

$html = '<div class="test"><img src="image.jpg"></div>';
preg_match_all('/<(\w+)(\s+[^>]*)?>/', $html, $tags);
print_r($tags[1]);