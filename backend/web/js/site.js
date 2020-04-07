// document.addEventListener("DOMContentLoaded", function (event) {
//     let submitBtn = document.getElementsByClassName("btn-submit");
//     for (let i = 0, len = submitBtn.length; i < len; i++) {
//         submitBtn[i].addEventListener('click', clickFunction);
//     }
// });

$(document).ready(function () {
    $(document).on('click', '.btn-submit', clickFunction);
    $(document).on('pjax:start',function () {
        console.log('start');
    });
    $(document).on('pjax:end',function () {
        console.log('end');
    })
});

function clickFunction(e) {
    console.log(e);
    let target = e.target;
    target.innerHTML = "<i class='fa fa-spinner fa-spin'></i>";
    target.disabled = true;

}