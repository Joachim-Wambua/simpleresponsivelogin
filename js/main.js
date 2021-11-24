const inputs = document.querySelectorAll('.input');
// Applies focus css style to form inputs
function focusFunction(){
    let parent = this.parentNode.parentNode;
    parent.classList.add('focus');
}

// Removes focus css style from inputs
function blurFunction(){
    let parent = this.parentNode.parentNode;
    if (this.value == ""){
        parent.classList.add('focus');
    }
    
}

// Responsible for animating the input form based on state(active / inactive)
inputs.forEach(input => {
        input.addEventListener('focus', focusFunction);
        input.addEventListener('focus', blurFunction);
});