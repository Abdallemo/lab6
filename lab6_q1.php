<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <title>Lab 6 Q1</title> 
</head> 
<body> 
    <?php  
        $name = "Muhammad Asyraf"; 
        $mtn = "BI220050";
        $course = "Web devlopment";
        $yrofstdy = 2024;
        $address = "jalan cempaka 1 , parit raja";
    ?> 
 
    <table> 
        <tr> 
            <td>Name</td> 
            <td><?php echo "$name"; ?></td>  
            
        </tr>
        <tr>
            <td>Matric No</td> 
            <td><?php echo "$mtn"; ?></td>  

        </tr> 
        <tr>
            <td>Course</td> 
            <td><?php echo "$course"; ?></td>  

        </tr> 
        <tr>
            <td>Year of study</td> 
            <td><?php echo "$yrofstdy"; ?></td>  

        </tr> 
        <tr>
            <td>Address</td> 
            <td><?php echo "$address"; ?></td>  

        </tr> 
    </table> 
     
</body> 
</html>