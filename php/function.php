<?php
    function db_query(string $query, array $data = array()){

        $string="mysql:hostname=localhost;db_name=Login_db";
        $con=new PDO($string,'root','');
        $stm=$con->prepare($query);
        $check=$stm->execute();
        if($check)
        {
            $res=$stm->fetchAll(PDO::FETCH_ASSOC);
            if(is_array($res) && !empty($res)){
                return $res;
            }
        }
    }
?>