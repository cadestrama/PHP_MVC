<?php
declare(strict_types=1);


class File{

    protected static array $csv;

    private function __construct(Array $files=[])
    {
        SELF::$csv = $files;
    }

    public static function setPath(String $filepath): File{

        $files=[];

        foreach(scandir($filepath) as $file){   
            if(is_dir($file)){
                continue;
            }
            $files[] = $filepath . $file;
        }

        return new static($files);
    }


    protected static function getPath(): array{
        return SELF::$csv;
    }


}





// function getData(String $filePath){

//     if(!file_exists($filePath)){
//         trigger_error('File:'.$filePath.' is not found',E_USER_ERROR);
//     }

//     $files = fopen($filePath,'r');

//     $data=[];

//     fgetcsv($files);

//     while(($transaction = fgetcsv($files)) != false){
//         $data[] = $transaction;
//     }
//     return $data;
// }


// function getFile(String $filePath):array {

//     $data =[];

//    foreach(scandir($filePath) as $file){
//         if(is_dir($file)){
//             continue;
//         }

//         $data[] = $filePath . $file;
//    }


// return $data;
// }