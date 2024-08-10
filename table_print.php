<pre>
    <?php
    //  With the numeric multidimensional array and for loop..
        $studentinfo = [
            ["120", "Sangam", "54", "BCA", "2079"],
            ["126", "Rajaram", "60", "BCA", "2079"],
            ["133", "Dhiraj", "67", "BCA", "2079"],
            ["119", "Gaurav", "53", "BCA", "2079"]
        ];
        print_r($studentinfo);

        echo "<table border='1'>";
        echo "<tr>
            <th> ID </th>
            <th> Name </th>
            <th> Roll </th>
            <th> Program </th>
            <th> Batch </th> </tr>";

        for ($i = 0; $i<count($studentinfo); $i++){
            echo "<tr>";
                for($j = 0; $j < count($studentinfo[$i]); $j++){
                    echo "<td>" . $studentinfo[$i][$j] . "</td>";
                }
            echo "</tr>";
        }
        echo "</table>";
    ?>
    <?php 
    /*  With the associative multidimensional array and foreach loop where the main array contains associative datas
        which have keys and values are numeric arrays */
        $newInfo = [
            "st1" => [120, "Sangam", 54, "BCA", 2079],
            "st2" => [126, "Rajaram", 60, "BCA", 2079],
            "st3" => [133, "Dhiraj", 67, "BCA", 2079],
            "st4" => [119, "Gaurav", 53, "BCA", 2079]
        ];
        print_r($newInfo);
        
        echo "<table border='1'>";
        echo "<tr> 
            <th> ID </th>
            <th> Name </th>
            <th> Roll </th>
            <th> Program </th>
            <th> Batch </th> </tr>";

        foreach($newInfo as $key => $val){
            echo "<tr>";
                for($i = 0; $i < count($val); $i++){
                    echo "<td>" . $val[$i] . "</td>";
                }
            echo "</tr>";
        }
        echo "</table>";
    ?>
    <?php 
    /*  With the associative multidimensional array and foreach loop where the main array is a numeric array and the value
        inside it are associative arrays */
        $newInfo = [
             ["id" => 120, "name"=> "Sangam", "roll" => 54, "program" => "BCA", "batch" => 2079],
             ["id" => 126, "name"=> "Rajaram", "roll" => 60, "program" => "BCA", "batch" => 2079],
             ["id" => 133, "name"=> "Dhiraj", "roll" => 67, "program" => "BCA", "batch" => 2079],
             ["id" => 119, "name"=> "Gaurav", "roll" => 53, "program" => "BCA", "batch" => 2079]
        ];
        print_r($newInfo);
        
        echo "<table border='1'>";
        echo "<tr> 
            <th> ID </th>
            <th> Name </th>
            <th> Roll </th>
            <th> Program </th>
            <th> Batch </th> </tr>";

        for($i = 0; $i < count($newInfo); $i++){
            echo "<tr>";
                foreach($newInfo[$i] as $m => $n){
                    echo "<td>" . $n . "</td>";
                }
            echo "</tr>";
        }
        echo "</table>";
    ?>
    <?php 
    /*  With the associative multidimensional array and foreach loop where each array inside the array is a value having a key 
        and also containing the key and value inside it  */
        $newInfo = [
            "st1" => ["id" => 120, "name"=> "Sangam", "roll" => 54, "program" => "BCA", "batch" => 2079],
            "st2" => ["id" => 126, "name"=> "Rajaram", "roll" => 60, "program" => "BCA", "batch" => 2079],
            "st3" => ["id" => 133, "name"=> "Dhiraj", "roll" => 67, "program" => "BCA", "batch" => 2079],
            "st4" => ["id" => 119, "name"=> "Gaurav", "roll" => 53, "program" => "BCA", "batch" => 2079]
        ];
        print_r($newInfo);
        
        echo "<table border='1'>";
        echo "<tr> 
            <th> ID </th>
            <th> Name </th>
            <th> Roll </th>
            <th> Program </th>
            <th> Batch </th> </tr>";

        foreach($newInfo as $key => $val){
            echo "<tr>";
                foreach($val as $i => $j){
                    echo "<td>" . $j . "</td>";
                }
            echo "</tr>";
        }
        echo "</table>";
    ?>
</pre>
