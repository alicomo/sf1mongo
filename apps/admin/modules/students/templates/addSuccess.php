Students:
<table>
    <tr>
         <th>Name<th> <th>Address<th>
    </tr>
<?php foreach( $students as $student): ?>
    <tr>
        <td><?php echo esc_entities($student);?></td>
        <td><?php echo esc_entities($student->getAddress());?></td>
    </tr>
<?php endforeach; ?>
</table>