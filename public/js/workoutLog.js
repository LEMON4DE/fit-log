let optionsContainer = document.getElementById('options-container');
let setsAndRepsContainer = document.getElementById('sets-reps-container');
let durationContainer = document.getElementById('duration-container');

optionsContainer.style.display = "none";
setsAndRepsContainer.style.display = "none";
durationContainer.style.display = "none";

let parentOption = document.getElementById('parent-option');
let muscleGroupOptions = document.getElementById('muscle-group-options');
let exerciseOptions = document.getElementById('exercise-options');

let filterOptions = (muscleGroup) => {
    if (muscleGroupOptions.value == muscleGroup) {
        exerciseOptions.disabled = false;

        for (let i = 0; i < exerciseOptions.options.length; i++) {
            if(exerciseOptions.options[i].value.includes(muscleGroup) || exerciseOptions.options[i].value.includes("default")) {
                exerciseOptions.options[i].style.display = "block";
            } else {
                exerciseOptions.options[i].style.display = "none";
            }
        }
    }
}

let toggleOptions = () => {

    exerciseOptions.disabled = true;

    if(parentOption.value == "default") {
        durationContainer.style.display = "none";
        optionsContainer.style.display = "none";
        setsAndRepsContainer.style.display = "none";
    }else if (parentOption.value == "cardio") {
        durationContainer.style.display = "block";
        optionsContainer.style.display = "none";
        setsAndRepsContainer.style.display = "none";
    } else if (parentOption.value == "traditional-strength-training") {
        durationContainer.style.display = "none";
        optionsContainer.style.display = "block";
        setsAndRepsContainer.style.display = "block";

        filterOptions("chest");
        filterOptions("back");
        filterOptions("legs");
        filterOptions("arms");
        filterOptions("shoulders");
        filterOptions("back");
    }
}

let addLog = () => {
    let addButton = document.getElementById('add-button');

    addButton.addEventListener('click', () => {
        
    })
}