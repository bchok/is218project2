<?php

	class importCSV{
		public function importCSVfile($csvfile){
			try{
				$file = fopen($csvfile, "r" );
					while(!feof($file)){
						print_r(fgetcsv($file));
					}
				fclose($file);
			}catch(Exception $e){
				echo $e->getMessage();
			}
		}
	}

?>