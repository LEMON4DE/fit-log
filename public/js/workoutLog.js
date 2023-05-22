// HTML DOM references for each option container
let optionsContainer = document.getElementById('options-container');
let setsAndRepsContainer = document.getElementById('sets-reps-container');
let durationContainer = document.getElementById('duration-container');

// Default display for option containers : None
optionsContainer.style.display = "none";
setsAndRepsContainer.style.display = "none";
durationContainer.style.display = "none";

// HTML DOM references for each option
let workoutOptions = document.getElementById('workout-options');
let muscleGroupOptions = document.getElementById('muscle-group-options');
let exerciseOptions = document.getElementById('exercise-options');

// Function to filter options depending on muscle group selected
let filterOptions = (muscleGroup) => {
    if(muscleGroupOptions.value == "default") {
        exerciseOptions.disabled = true;
    }else if(muscleGroupOptions.value == muscleGroup) {
        exerciseOptions.disabled = false;

        for (let i = 0; i < exerciseOptions.options.length; i++) {
            if(exerciseOptions.options[i].value.includes(muscleGroup) || exerciseOptions.options[i].value.includes("default")) {
                exerciseOptions.options[i].style.display = "block";
            } else {
                exerciseOptions.options[i].style.display = "none";
            }
        }
    };
};

// Function to change options depending on exercise selected : Traditional strength training VS Cardio
let toggleOptions = () => {
    if(workoutOptions.value == "default") {
        durationContainer.style.display = "none";
        optionsContainer.style.display = "none";
        setsAndRepsContainer.style.display = "none";
    }else if (workoutOptions.value == "cardio") {
        durationContainer.style.display = "block";
        optionsContainer.style.display = "none";
        setsAndRepsContainer.style.display = "none";
    }else if (workoutOptions.value == "traditional-strength-training") {
        durationContainer.style.display = "none";
        optionsContainer.style.display = "block";
        setsAndRepsContainer.style.display = "block";

        filterOptions(muscleGroupOptions.value);
    };
};

// Trigger event listner on 'change'
workoutOptions.addEventListener('change', toggleOptions);
muscleGroupOptions.addEventListener('change', toggleOptions);
exerciseOptions.addEventListener('change', toggleOptions);

// Add a new row to the data table
let addButton = document.getElementById('add-button');

addButton.addEventListener('click', (e) => {
    e.preventDefault();
    
    let dateSelected = document.getElementById('date').value;
    let workoutSelected = workoutOptions.options[workoutOptions.selectedIndex].innerHTML;
    let muscleGroupSelected = muscleGroupOptions.options[muscleGroupOptions.selectedIndex].innerHTML;
    let exerciseSelected = exerciseOptions.options[exerciseOptions.selectedIndex].innerHTML;
    let setsInput = document.getElementById('sets').value;
    let repsInput = document.getElementById('reps').value;
    let startTime = document.getElementById('start-time').value;
    let endTime = document.getElementById('end-time').value;

    let dataRow = document.getElementById('data-row');
    let newRow = document.createElement('tr');

    if(workoutOptions.value == "cardio") {
        newRow.innerHTML = `<td>${dateSelected}</td>
                            <td>${workoutSelected}</td>
                            <td>N/A</td>
                            <td>N/A</td>
                            <td>N/A</td>
                            <td>N/A</td>
                            <td>${endTime - startTime}</td>`;
    
        dataRow.appendChild(newRow);
    } else if(workoutOptions.value == "traditional-strength-training") {
        newRow.innerHTML = `<td>${dateSelected}</td>
                            <td>${workoutSelected}</td>
                            <td>${muscleGroupSelected}</td>
                            <td>${exerciseSelected}</td>
                            <td>${setsInput}</td>
                            <td>${repsInput}</td>
                            <td>N/A</td>`;     
                            
        dataRow.appendChild(newRow);
    };
});

// Send an AJAX request to the server to save the data in the workout log database
    // let formData = new FormData();

    // formData.append('date', dateSelected);
    // formData.append('workout', workoutSelected);
    // formData.append('muscle-group', muscleGroupSelected);
    // formData.append('exercise', exerciseSelected);
    // formData.append('sets', setsInput);
    // formData.append('reps', repsInput);
    // formData.append('start-time', startTime);
    // formData.append('end-time', endTime);

    // let xhr = new XMLHttpRequest();
    
    // xhr.open('POST', 'index.php?action=workoutLog');
    // xhr.send(formData);
    
    // xhr.addEventListener('readystatechange', () => {

    //     if(xhr.readyState == XMLHttpRequest.DONE) {
    //         if(xhr.status == 200) {
    //             console.log("Request sent successfully!");

    //             let response = xhr.response;
                
    //         };
    //     };
    // });