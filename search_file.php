<?php

function search_file($file, $dir) {
    $list = [];
    $list[] = $dir;
    while($list !== []) {
        $nextList = [];
        foreach ($list as $directory) {
            $contenu = scandir($directory);
            foreach ($contenu as $key=>$value) {
                $path = realpath($directory.'\\'.$value);

                if(!is_dir($path)) {
                    if($file===$value) {
                        echo $directory.'\\'.$value;
                        exit;
                    }
                } elseif($value!=='.' and $value!=='..') {
                    $nextList[] = $path;
                }
            }
        }

        $list = $nextList;
    }
    echo "fichier introuvé";
}
search_file('yyy.txt', 'C:\\Users');
