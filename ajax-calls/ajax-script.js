$(document).on('submit','#addItem',function(e){
    e.preventDefault();
    var values = $(this).serialize();
    $.ajax({
    method:"POST",
    data:values,
    url: "sqlFiles/insertData.php",
    data:$(this).serialize(),
    success: function(data){
        alert("Data added!");
        $("#itemnameID").val('');
    $("#itemunitID").val('').trigger( "change" );
    $("#itemqtyID").val('');
    $("#itemdescID").val('');
}});
});

$(document).on('submit','#addProduct',function(e){
    e.preventDefault();
    var qtyList=JSON.parse(window.sessionStorage.getItem('qtyList'));
    var itemList=JSON.parse(window.sessionStorage.getItem('itemList'));
    var prodname= $('#prodName').val();
    $.ajax({ 
        method:"POST",
    data:{qtyList:qtyList,itemlist:itemList,prodname:prodname},
    url: "sqlFiles/insertProduct.php",
    success: function(data){
        alert("Product added successfully!");
        $('#prodName').val('');
        $('#extraItems').html('');
        window.sessionStorage.clear();

}
});
});

function deleteStuffs(i){
    var toConfirm = confirm("Are you sure you want to proceed?")
    if(toConfirm){
        $.ajax({
            type: "POST",
            url: 'sqlFiles/retreive.php',
            data:{prodID:i},
            success:function(html) {
              alert("Product deleted successfully!");
              location.reload();
            }
    
       });
    }
    
}