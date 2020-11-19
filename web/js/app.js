$(document).ready(function (){
    $('.filter-form select').on('change', function (){
        $(this).parents('form').submit();
    });
});