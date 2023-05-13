<?php
$title = "WORKOUT LOG";
ob_start();
?>

<div id="log-form-container">
    <form id="log-form" method="POST">
        <div>
            <label for="date">
                Date: <input name="date" type="date" />
            </label>
        </div>

        <div>
            <label for="parent-option">
                Workout
                <select id="parent-option" name="parent-option">
                    <option value="">Select</option>
                    <option value="traditional-strength-training">Traditional Strength Training</option>
                    <option value="cardio">Cardio</option>
                </select>
            </label>
            <label for="child-option">
                Exercise
                <select id="child-option" name="child-option">
                    <option value="">Select</option>
                    <option value="bench-press">Bench press</option>
                    <option value="incline-bench-press">Incline bench press</option>
                    <option value="dips">Dips</option>
                    <option value="triceps-extension">Triceps extension</option>
                    <option value="dumbbell-shoulder-press">Dumbbell shoulder press</option>
                    <option value="dumbbell-lateral-raise">Dumbbell lateral raise</option>
                    <option value="lat-pulldown">Lat pulldown</option>
                    <option value="seated-cable-row">Seated cable row</option>
                    <option value="assist-pull-up">Assist pull up</option>
                    <option value="t-bar-row">T bar row</option>
                    <option value="deadlift">Deadlift</option>
                    <option value="barbell-squat">Barbell squat</option>
                    <option value="dumbbell-split-squat">Dumbbell split squat</option>
                    <option value="leg-extension">Leg extension</option>
                    <option value="lying-leg-curl">Lying leg curl</option>
                    <option value="hip-adduction">Hip adduction</option>
                    <option value="hip-abduction">Hip abduction</option>
                </select>
            </label>
        </div>

        <label>Sets</label>
        <input name="sets" type="number" placeholder="e.g. 4" />

        <label>Reps</label>
        <input name="reps" type="number" placeholder="e.g. 8" />

        <!-- <label>Start</label>
        <input name="start" type="time" />

        <lable>Finish</lable>
        <input name="finish" type="time" /> -->

        <button>Add</button>

        
    </form>
    
    <div> <!-- Show rows when clicking add button -->
        <table>
            <tr>
                <th>Date</th>
                <th>Wokrout</th>
                <th>Exercise</th>
                <th>Set(s)</th>
                <th>Rep(s)</th>
                <th>Duration</th>
            </tr>
            <tr>
                <td>2023. 4. 23</td>
                <td>Traditional Strength Training</td>
                <td>Bench press</td>
                <td>4</td>
                <td>8</td>
                <td>1 hour(s)</td>
            </tr>
        </table>
        <button type="submit">Save</button>
    </div>
    <!-- Show 'saved successfully' message to the user after clicking the button without refreshing -->
</div>

<?php
$html = ob_get_clean();
include_once "./view/template.php";
?>