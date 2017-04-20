<?php
        // create curl resource
        $ch = curl_init();

        // set url
        curl_setopt($ch, CURLOPT_URL, "http://www.mardyoe.com/waktusolat/api/date.php?zone=ktn01&start=2017-01-01&end=2017-01-02&format=12-hour");

        //return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // $output contains the output string
        $output = curl_exec($ch);

        // close curl resource to free up system resources
        curl_close($ch);     

        $result = json_decode($output, true);

        echo 'Zone: '.$result['zone'].'<br>';
        echo 'District: '.$result['district'].'<br>';

        $size = count($result['prayer_times']);

        // get data for prayer times
        for ($a=0; $a<$size; $a++) {
        	$p = $result['prayer_times'][$a];
        	echo '<br>Date: '.$p['date'].'<br>';
        	echo '&nbsp;&nbsp;Imsak: '.$p['imsak'].'<br>';
        	echo '&nbsp;&nbsp;Subuh: '.$p['subuh'].'<br>';
        	echo '&nbsp;&nbsp;Syuruk: '.$p['syuruk'].'<br>';
        }
?>
