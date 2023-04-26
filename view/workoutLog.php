<?php
$title = "EXERCISE LOG";

?>

<div id="exercise-log">
    <form method="POST" >
        <label for="date">Date</label>
        <input name="date" type="date" />

        <label for="parent-option">Workout</label>
        <select id="parent-option" name="parent-option">
            <option value="">Select</option>
            <option value="parent-option1">Traditional Strength Training</option>
            <option value="parent-option2">Cardio</option>
        </select>

        <label for="exercise">Exercise</label>
        <input name="exercise" type="text" placeholder="e.g. Bench press" />

        <label>Sets</label>
        <input name="sets" type="number" placeholder="e.g. 4" />

        <label>Reps</label>
        <input name="reps" type="number" placeholder="e.g. 8" />

        <label>Start</label>
        <input name="start" type="time" />

        <lable>Finish</lable>
        <input name="finish" type="time" />

        <button>Add</button>

        <div> <!-- Show rows when clicking add button -->
            <table style="border: 1px solid black; width: 800px;">
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
        </div>

        <button type="submit">Save</button>
        <!-- Show 'saved successfully' message to the user after clicking the button without refreshing -->
    </form>

    <!-- Link to workout history page-->
    <a href="">Check out workout history</a>

</div>