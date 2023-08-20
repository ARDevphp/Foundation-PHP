<?php
$name = "Vlijon";
function f()
{
    echo "salom" . "\n";
    function l()
    {
        echo "Alijon va " . "\t";
        function m()
        {
            global $name;
            echo $name;
            $name = "Sher";
        }

        m();
    }

    l();
}

f();
echo $name;