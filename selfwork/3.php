<?php

$pattern = '/^\d{4}([- ]?\d{4}){3}$/';
echo preg_match($pattern, '4111-1111-1111-1111');
echo preg_match($pattern, '1234 5678 9012 3456');