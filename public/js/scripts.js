
$( document ).ready(function() {

    $("#makeId").on('change', function() {
        make_id = parseInt($("#makeId").val());
        console.log(make_id);
        $("#model").html("<option>model ...</option>");
        $.get( ('/models/' + make_id), function(data) {
            $.each(data, function(i, model) {
                $("#model").append("<option value="+ model['id'] + ">"+ model['model'] +"</option");
            });
        })
        .fail(function(error) {
            console.log( error );
        });
        return false;
    });

});
