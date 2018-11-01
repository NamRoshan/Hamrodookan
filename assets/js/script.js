// #############################################samsung section#################################################
// this is for samsung delete
function delete_message(ids) {
    var conf = confirm("Are you sure, do you really want to delete this Records ?");
    if (conf == true) {
        $.post("delete_message.php", {
                ids: ids
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
// This is important for display data when update for this 

// This can display the data which can you update
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
            $("#hidden_user_image").val(user.image); //when image is not add that time value is null so use by this past value in data is added           
        }
    );
    // Open modal popup

}
// ###################################################################OPPO section################################################
function delete_oppo(id_oppo) {
    var conf = confirm("Are you sure, do you really want to delete this Records ?");
    if (conf == true) {
        $.post("delete_message.php", {
                id_oppo: id_oppo
            },
            function (data, status) {
            // PARSE json data
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
           
    
            }
        );
    }
}
function GetUserDetails_oppo(id_oppo) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_user_id").val(id_oppo);
    $.post("readUserDetails.php", {
            id_oppo: id_oppo
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
            $("#hidden_user_image").val(user.image); //when image is not add that time value is null so use by this past value in data is added           
        }
    );
    // Open modal popup

}
// ################################################################### HP section################################################
function delete_hp(id_hp) {
    var conf = confirm("Are you sure, do you really want to delete this Records ?");
    if (conf == true) {
        $.post("delete_message.php", {
                id_hp: id_hp
            },
            function (data, status) {
            // PARSE json data
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
           
    
            }
        );
    }
}
function GetUserDetails_hp(id_hp) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_user_id").val(id_hp);
    $.post("readUserDetails.php", {
            id_hp: id_hp
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
            $("#hidden_user_image").val(user.image); //when image is not add that time value is null so use by this past value in data is added           
        }
    );
    // Open modal popup

}
// ################################################################### Apple section################################################
function delete_apple(id_apple) {
    var conf = confirm("Are you sure, do you really want to delete this Records ?");
    if (conf == true) {
        $.post("delete_message.php", {
                id_apple: id_apple
            },
            function (data, status) {
            // PARSE json data
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
           
    
            }
        );
    }
}
function GetUserDetails_apple(id_apple) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_user_id").val(id_apple);
    $.post("readUserDetails.php", {
            id_apple: id_apple
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
            $("#hidden_user_image").val(user.image); //when image is not add that time value is null so use by this past value in data is added           
        }
    );
    // Open modal popup

}  
