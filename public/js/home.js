// String variables
let messageString1 = "WELCOME TO";
let messageString2 = "FIT LOG";

// Split string variables into each letter and return an array
let array1 = messageString1.split('');
let array2 = messageString2.split('');

// Get message containers
let messageContainer1 = document.getElementById('message_1');
let messageContainer2 = document.getElementById('message_2');

// Show each letter once the DOM content is loaded
document.addEventListener('DOMContentLoaded', () => {
    // Append span tag to the message container 1
    array1.forEach((element) => {
        messageContainer1.innerHTML += `<span>${element}</span>`;
    });

    array2.forEach((element) => {
        messageContainer2.innerHTML += `<span>${element}</span>`;
    });

    // Retrieve a node list of span tags
    let spanNodeList1 = document.querySelectorAll("#message_1 span");
    let spanNodeList2 = document.querySelectorAll("#message_2 span");

    // Function to check if all the span tags contain the class of 'loaded'
    let checkClassLoaded = () => {
        for(let i = 0; i < spanNodeList1.length; i++) {
            if(!spanNodeList1[i].classList.contains('loaded')) {
                return false;
            }
        }
        return true;
    }
    
    // Check if the transition of the last letter ends, and proceed to add the class of 'loaded' to the second span node list.
    for(let i = 0; i < spanNodeList1.length; i++) {
        
        spanNodeList1.forEach((span) => {    
            // Detect the last transition
            span.addEventListener('transitionend', () => {
                // If the function returns true, proceed to add the class of 'loaded'
                if(checkClassLoaded()) {
                    for(let j = 0; j < spanNodeList2.length; j++) {
                        setTimeout(() => {
                            spanNodeList2[j].classList.add('loaded');
                        }, 200 * j);
                    }
                }
            });
        });

        setTimeout(() => {
            spanNodeList1[i].classList.add('loaded');
        }, 200 * i);
    }

});