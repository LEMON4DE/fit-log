<?php
$title = "WORKOUT LOG";
ob_start();
?>

<div id="log-form-container">
    <div id="log-form">
        <div id="date-workout-container">
            <label for="date">Date</label>
            <input id="date" name="date" type="date" />
            <label for="workout-options">Workout</label>
            <select id="workout-options" name="workouts">
                <option value="default">Select</option>
                <option value="traditional-strength-training">Traditional Strength Training</option>
                <option value="cardio">Cardio</option>
            </select>
        </div>
        <div id="options-container">
            <label for="muscle-group-options">Muscle group</label>
            <select id="muscle-group-options" name="muscle-groups">
                <option value="default">Select</option>
                <option value="chest">Chest</option>
                <option value="back">Back</option>
                <option value="legs">Legs</option>
                <option value="arms">Arms</option>
                <option value="shoulders">Shoulders</option>
            </select>
            <label for="exercise-options">Exercise</label>
            <select id="exercise-options" name="exercise">
                <option value="default">Select</option>
                <option value="chest-option1">Bench press</option>
                <option value="chest-option2">Incline bench press</option>
                <option value="chest-option3">Dips</option>
                <option value="chest-option4">Chest press machine</option>
                <option value="chest-option5">Incline chest press machine</option>
                <option value="back-option1">Lat pulldown</option>
                <option value="back-option2">Seated cable row</option>
                <option value="back-option3">Assist pull up</option>
                <option value="back-option4">T bar row</option>
                <option value="back-option5">Deadlift</option>
                <option value="legs-option1">Barbell squat</option>
                <option value="legs-option2">Dumbbell split squat</option>
                <option value="legs-option3">Leg extension</option>
                <option value="legs-option4">Lying leg curl</option>
                <option value="legs-option5">Hip adduction</option>
                <option value="legs-option6">Hip abduction</option>
                <option value="arms-option1">Triceps extension</option>
                <option value="arms-option2">Ez bar curl</option>
                <option value="shoulders-option1">Dumbbell shoulder press</option>
                <option value="shoulders-option2">Dumbbell lateral raise</option>
            </select>
        </div>
        <div id="weight-container">
            <label>Weight</label>
            <input id="weight" name="weight" type="number" />
        </div>
        <div id="sets-reps-container">
            <label>Sets</label>
            <input id="sets" name="sets" type="number" placeholder="e.g. 4" />
    
            <label>Reps</label>
            <input id="reps" name="reps" type="number" placeholder="e.g. 8" />
        </div>
        <div class="button-container">
            <button id="add-button">Add</button>        
        </div>
    </div>
    
    <div id="record-container">
        <form method="POST" action=""> <!-- send the data to workout history page and show history there -->
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
                <tbody id="data-row">
                </tbody>
            </table>
            <div class="button-container">
                <button id="save-button">Save</button>
            </div>
        </form>
    </div>
    <!-- Show 'saved successfully' message to the user after clicking the button without refreshing -->
</div>

<?php
$html = ob_get_clean();
include_once "./view/template.php";
?>