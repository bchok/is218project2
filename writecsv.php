<?php
	
	class writeCSV{
			public function writeCSVfile($csvfile, $list){
				try{
					$file = fopen("$csvfile", "w");
						foreach ($list as $line){
							fputcsv($file, explode(',',$line));
						}
					fclose($file); 
				}catch (Exception $e){
					echo $e->getMessage();
				}
			}
	}
?>