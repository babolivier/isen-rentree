<ul>
    <?php
        foreach($data as $student)
        {
            echo "<li><ul>";
            
            foreach($student as $field => $value)
                echo "<li>".$field." : ".$value."</li>";
            
            echo "</li></ul>";
        }
    ?>
</ul>