<?php
ob_start();
?>

<div id="record-container">
    <table>
        <thead>
            <tr>
                <th>Date</th>
                <th>Wokrout</th>
                <th>Muscle group</th>
                <th>Exercise</th>
                <th>Weight (kg/lb)</th>
                <th>Set</th>
                <th>Reps</th>
                <th>Start time</th>
                <th>End time</th>
            </tr>
        </thead>
        <tbody id="data-row">
            <?php foreach($data as $data_row) {?>
            <tr>
                <td><?= $data_row['date']; ?></td>
                <td><?= $data_row['workout_type']; ?></td>
                <td><?= $data_row['exercise']; ?></td>
                <td><?= $data_row['muscle_group']; ?></td>
                <td><?= $data_row['weight']; ?></td>
                <td><?= $data_row['sets']; ?></td>
                <td><?= $data_row['reps']; ?></td>
                <td><?= $data_row['start_time']; ?></td>
                <td><?= $data_row['end_time']; ?></td>
            </tr>
            <?php }; ?>
        </tbody>
    </table>
</div>

<?php
$html = ob_get_clean();
include_once "./view/template.php";
?>