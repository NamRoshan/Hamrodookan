 $(document).ready(function(){  
      $('#search').keyup(function(){  
        $(".hide-body").css('display','none');
           var query = $(this).val();  
           if(query != '')  
           {  
                $.ajax({  
                     url:"search.php",  
                     method:"POST",  
                     data:{query:query},  
                     success:function(data)  
                     {  
                          $('#productList').fadeIn();  
                          $('#productList').html(data);  
                     }  
                });  
           }  
      });  
    
             $('.txtCountry').typeahead({
            source: function (query, result) {
                $.ajax({
                    url: "server.php",
                    data: 'query=' + query,            
                    dataType: "json",
                    type: "POST",
                    success: function (data) {
                        result($.map(data, function (item) {
                            return item;
                        }));
                    }
                });
            }
        }); 
 }); 