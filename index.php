
    <?php 
        $random_number_array = array();
        $random_number_array = range(10005, 93586);
        shuffle($random_number_array );
        $random_number_array = array_slice($random_number_array ,0,60);
        
        print_r($random_number_array);
        
        // Open a file in write mode ('w') 
        // $fp = fopen('token.csv', 'w'); 
        
        // // Loop through file pointer and a line 
        // foreach ($random_number_array as $fields) { 
        //     fputcsv($fp, $fields); 
        // } 
        
        // fclose($fp);
    ?>
