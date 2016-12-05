<?php
    class tableGenerate {
        //columnTitles indicates Column headers, data indicates data to populate table
        public function createTable($columnTitles, $data){
            $t = '<table border="3">';
            $t .= '<tr>';
            foreach( $columnTitles as $columnTitle){
                $t .= '<th>' . $columnTitle . '</th>';
            }
            $t .= '</tr>';
            foreach ($data as $info){
                $t .= '<tr>';
                foreach($info as $key){
                    $t .= '<td>' . $key .'</td>';
                }
                $t .= '</tr>';
            }
            $t .= '</table>';
            return $t;
        }
    }
   
?>
