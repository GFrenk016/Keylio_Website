const slider = document.getElementById('priceRange');
const output = document.getElementById('priceValue');

slider.addEventListener('input', function () {
    output.textContent = this.value;
});