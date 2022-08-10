<?php
declare(strict_types=1);



class Data extends File{

    private  static function setData(String $filepath):array{
            if(!file_exists($filepath)){
                trigger_error('File: '.$filepath.'is not found', E_USER_ERROR);
            }

            $file = fopen($filepath,'r');
            $transactions=[];

            fgetcsv($file);

            while(($data = fgetcsv($file))!=false){
                $transactions[] = $data;
            }

        return $transactions;
    }

    private  static function getData(): array{
        $filepath = File::getPath();

        $data=[];
        foreach($filepath as $rowOfData){
            $data = array_merge($data,SELF::setData($rowOfData));
        }

        return $data;
    }

    public static function showData(String $viewpath){
        return View::setView($viewpath,'index.php')->render(SELF::getData());
    }
}