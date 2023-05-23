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
        </tbody>
    </table>
</div>

<?php
$html = ob_get_clean();
include_once "./view/template.php";
?>