$(document).ready(function(){
    $('#nameChange').on('submit', function (e) {

        $.ajax({
            type: 'POST', 
            url: 'php/prescription.php',
            data: $(this).serialize(),
            success: function(data) {
               $('.result').empty().append(data);
               setTimeout(function(){location.href="addprescription.php"} , 1500); 
            }
        });

        e.preventDefault();

    });


});