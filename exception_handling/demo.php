<?php
    try{
        if(file_exists("abc.txt")){
            
        }else{
            throw new Exception('File Not Found !');
        }
    }catch(Exception $ex){
        echo "Error in File Open".$ex->getLine();
    }

?>
                                                          
                                                        
