<?php

function timeFum($time)
{
    echo $time . "\n";
}

timeFum(date("Y.m.d H:i:s"));
print_r(getdate(time()));
print_r(localtime());
date("m.y.d, H:i:s");