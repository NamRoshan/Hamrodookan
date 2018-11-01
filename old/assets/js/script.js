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
function readRecords() {
    $.get("include_sidebarbackend.php", {}, function (data, status) {
        $(".viewss").html(data);
    });
}
function GetUserDetails(id) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_user_id").val(id);
    $.post("readUserDetails.php", {
            id: id
        },
        function (data, status) {
            // PARSE json data
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#product_id").val(user.product_id);
            $("#product_name").val(user.product_name);
            $("#model_number").val(user.modelnumber);
            $("#price").val(user.price);
            $("#quantity").val(user.quantity);
            $("#key1").val(user.keyfeature1);
            $("#key2").val(user.keyfeature2);
            $("#key3").val(user.keyfeature3);
            $("#key4").val(user.keyfeature4);
            $("#key5").val(user.keyfeature5);
            $("#key6").val(user.keyfeature6);
            
        }
    );
    // Open modal popup

}

function UpdateUserDetails() {
    // get values
    var product_id = $("#product_id").val();
    var product_name = $("#product_name").val();
    var model_number = $("#model_number").val();
    var price = $("#price").val();
    var quantity = $("#quantity").val();
    var key1 = $("#key1").val();
    var key2 = $("#key2").val();
    var key3 = $("#key3").val();
    var key4 = $("#key4").val();
    var key5 = $("#key5").val();
    var key6 = $("#key6").val();
     var key6 = $("#key6").val();
    var file=$("#file").val();

    // get hidden field value
    var id = $("#hidden_user_id").val();

    // Update the details by requesting to the server using ajax
    $.post("updateUserDetails.php", {
            id: id,
            product_id: product_id,
            product_name: product_name,
            model_number: model_number,
            price: price,
            quantity: quantity,
            key1: key1,
            key2: key2,
            key3: key3,
            key4: key4,
            key5: key5,
            key6: key6,
            file:file,          
        },
        function (data, status) {
            // hide modal popup
            $("#update_user_modal").modal("hide");
            // reload Users by using readRecords();
            readRecords();
        }
    );
}

$(document).ready(function () {
    // READ recods on page load
    readRecords(); // calling function
});