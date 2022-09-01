<?php 
namespace kartograf;

$dir = dirname($_SERVER['SCRIPT_FILENAME']) . '/';

if (!is_dir($dir . 'kartograf/plugins/')) {
    echo "Setting up Kartograf.";
    mkdir($dir . 'kartograf/plugins/', 0777, true);
    mkdir($dir . 'kartograf/files/', 0777, true);

    /*$file = file_put_contents($dir . "kartograf.php.zip", fopen("", 'r'), LOCK_EX);
    if($file === false)
        die("Couldn't write to file.");

    $zip = new ZipArchive;
    $res = $zip->open($dir . "kartograf.php.zip");
    if ($res === true) {
        $zip->extractTo($dir .'/');
        $zip->close();
        //
    } else {
        //
    }*/
} else {
   // _include($dir . 'kartograf/plugins/app/index.php');
}

//we want this outside to prevent the file from having access to the vars in here
function _include($_id) {
    return include($_id);
}
?>
