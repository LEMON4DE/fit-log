<?php
$title = 'WORKOUT HISTORY';
ob_start();
?>

<div class="history-container">
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
            </tr>
        </thead>
        <?php foreach($data as $data_row) {?>
            <tbody id="data-row">
                <tr>
                    <td><?= $data_row['date']; ?></td>
                    <td><?= $data_row['workout_type']; ?></td>
                    <td><?= $data_row['exercise']; ?></td>
                    <td><?= $data_row['muscle_group']; ?></td>
                    <td><?= $data_row['weight']; ?></td>
                    <td><?= $data_row['sets']; ?></td>
                    <td><?= $data_row['reps']; ?></td>
                </tr>
            </tbody>
        <?php }; ?>
    </table>
</div>

<?php
$html = ob_get_clean();
include_once "./view/template.php";
?>