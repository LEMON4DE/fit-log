<?php
$title = "WORKOUT LOG";
ob_start();
?>

<div id="log-form-container">
    <form id="log-form" method="POST">
        <div id="date-workout-container">
            <label for="date">Date</label>
            <input name="date" type="date" />
            <label for="parent-option">Workout</label>
            <select id="parent-option" name="parent-option">
                <option value="">Select</option>
                <option value="traditional-strength-training">Traditional Strength Training</option>
                <option value="cardio">Cardio</option>
            </select>
        </div>
        <div id="options">
            <label for="child-option1">Muscle group</label>
            <select id="child-option1" name="child-option1">
                <option>Select</option>
                <option value="chest">Chest & triceps</option>
                <option value="back">Back & biceps</option>
                <option value="legs">Legs</option>
                <option value="shoulders">Shoulders</option>
            </select>
            <label for="child-option2">Exercise</label>
            <select id="child-option2" name="child-option2">
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
        </div>
        <div id="sets-reps-container">
            <label>Sets</label>
            <input name="sets" type="number" placeholder="e.g. 4" />
    
            <label>Reps</label>
            <input name="reps" type="number" placeholder="e.g. 8" />
        </div>

        <!-- <label>Start</label>
        <input name="start" type="time" />

        <lable>Finish</lable>
        <input name="finish" type="time" /> -->
        <div class="button-container">
            <button>Add</button>        
        </div>
    </form>
    
    <div id="record-container"> <!-- Show rows when clicking add button -->
        <table id="record-table">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Wokrout</th>
                    <th>Muscle group</th>
                    <th>Exercise</th>
                    <th>Set(s)</th>
                    <th>Rep(s)</th>
                    <th>Duration</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2023. 4. 23</td>
                    <td>Traditional Strength Training</td>
                    <td>Shoulders</td>
                    <td>Dumbbell shoulder press</td>
                    <td>4</td>
                    <td>8</td>
                    <td>1 hour(s)</td>
                </tr>
                <tr>
                    <td>2023. 4. 23</td>
                    <td>Traditional Strength Training</td>
                    <td>Shoulders</td>
                    <td>Dumbbell shoulder press</td>
                    <td>4</td>
                    <td>8</td>
                    <td>1 hour(s)</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="button-container">
        <button type="submit">Save</button>
    </div>
    <!-- Show 'saved successfully' message to the user after clicking the button without refreshing -->
</div>

<?php
$html = ob_get_clean();
include_once "./view/template.php";
?>