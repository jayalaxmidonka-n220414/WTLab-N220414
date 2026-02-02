function updateThreatLevel() {
    const display = document.getElementById('threatLevelDisplay');
    const status = document.getElementById('systemStatusDisplay');
    
    if (display.innerText === "LOW") {
        display.innerText = "HIGH";
        display.style.color = "#ff4d4d";
        status.innerText = "THREAT DETECTED";
        status.style.color = "#ff4d4d";
        alert("🚨 WARNING: Unusual network activity detected!");
    } else {
        display.innerText = "LOW";
        display.style.color = "#00ff00";
        status.innerText = "ENABLED";
        status.style.color = "white";
        alert("✅ Security scan complete. System is Secure.");
    }
}
