<?php
    $students = [ 
        [   
            'name' => 'Alice',
            'program' => 'BIT',
            'Age' => 21
        ],
        [
            'name' => 'Bob',
            'program' => 'BIs',
            'Age' => 20
        ],
        [
            'name' => 'Raju',
            'program' => 'BIP',
            'Age' => 22
        ] 
    ];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Information</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Program</th>
            <th>Age</th>
        </tr>
        <?php foreach ($students as $student): ?>
        <tr>
            <td><?php echo htmlspecialchars($student['name']); ?></td>
            <td><?php echo htmlspecialchars($student['program']); ?></td>
            <td><?php echo htmlspecialchars($student['Age']); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
