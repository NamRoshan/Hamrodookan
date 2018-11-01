function delete_message(id) {
    var conf = confirm("Are you sure, do you really want to delete this Records ?");
    if (conf == true) {
        $.post("delete_message.php", {
                id: id
            },
            function (data, status) {
            // PARSE json data
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#product_name").val(user.product_name);
    
            }
        );
    }
}
function GetUserDetails(id) {
       $("#hidden_user_id").val(id);
        $.post("", {
                id: id
            },
            function (data, status) {
                // reload Users by using readRecords();
                $("#product_name").val(user.product_name);
                readRecords();
            }
        );
    
}
