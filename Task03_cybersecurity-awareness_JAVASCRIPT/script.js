const websiteName = "SecureNet Hub";
const initialStatus = "Operational";


let userCount = 42;
let threatLevel = "Medium";


console.log("Website Name (const):", websiteName);
console.log("Initial User Count (let):", userCount);
console.log("Initial Threat Level (let):", threatLevel);



function displayVariables() {
    
    document.getElementById('threatLevelDisplay').textContent = threatLevel;
    document.getElementById('userCountDisplay').textContent = userCount;
    document.getElementById('systemStatusDisplay').textContent = initialStatus;
}


function updateThreatLevel() {
    
    threatLevel = "High Alert"; 
    
    
    displayVariables();

    
    console.log("Threat level updated to:", threatLevel);
}


try {
    websiteName = "New Name"; 
} catch (e) {
    console.error("Error attempting to reassign a const variable:", e.message);
}


window.onload = displayVariables;
