$(document).ready(function () {
    $(document).on('click', '.btn-submit', clickFunction);
    $(document).on('pjax:start', beginLoading);
    $(document).on('pjax:end', endLoading);
});

function clickFunction(e) {
    console.log(e);
    let target = e.target;
    target.innerHTML = "<i class='fa fa-spinner fa-spin'></i>";
    target.disabled = true;
}

function beginLoading(e) {
    console.log('begin');
    let gridLoading = $("#grid-loading");
    gridLoading.css("display", "flex");
}

function endLoading(e) {
    console.log('end');
    let gridLoading = $("#grid-loading");
    gridLoading.css("display", "none");
}