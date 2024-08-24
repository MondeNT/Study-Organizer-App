document.addEventListener("DOMContentLoaded", function () {
    let slideIndex = 0;
    showSlides();

    function showSlides() {
        const slides = document.querySelectorAll(".mySlides");
        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1;
        }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 5000); 
    }
});


        
        const moduleSelector = document.getElementById("module-selector");
        const studyDate = document.getElementById("study-date");
        const hoursStudied = document.getElementById("hours-studied");
        const addHoursButton = document.getElementById("add-hours");
        const studyHoursForm = document.getElementById("study-hours-form");

        studyHoursForm.addEventListener("submit", function (event) {
            event.preventDefault();

            
            const selectedModule = moduleSelector.value;
            const date = studyDate.value;
            const hours = parseFloat(hoursStudied.value);

            
            studyDate.value = "";
            hoursStudied.value = "";

           
        });

        
        function updateModuleDropdown() {

        }
    