function searchJobs() {
    
    const jobRole = document.getElementById('job-role').value;
    const location = document.getElementById('location').value;

    if(jobRole === "" || location === "") {
        alert("Please enter both Job Role and Location!");
    } else {
        alert(`Searching for ${jobRole} jobs in ${location}...`);
        
    }
}


function toggleLogin() {
    const overlay = document.getElementById('loginOverlay');
    
    
    if (overlay.style.display === 'flex') {
        overlay.style.display = 'none'; 
    } else {
        overlay.style.display = 'flex'; 
    }
}