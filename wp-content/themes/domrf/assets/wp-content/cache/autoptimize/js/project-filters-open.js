
document.addEventListener('DOMContentLoaded', function() {
    const filtersWrapper = document.querySelector('.catalog-filter-wrapper');
    const btnFilterControl = document.querySelector('.btn-filter-control');


    btnFilterControl.addEventListener('click' , function(){
        filtersWrapper.classList.toggle('expanded');
        btnFilterControl.classList.toggle('rotate180');
    });
});
