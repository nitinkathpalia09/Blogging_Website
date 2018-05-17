$(document).ready(function() {
$('.myButton').on('click', function (event) {
     $(this).next('.myDiv').toggle('swing');
});

});
