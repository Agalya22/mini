$(document).ready(function () {


    
  $("#order_btn").click(function () {



   var name =  $("#name").val().trim();
   var email =  $("#email ").val().trim();
   var order_date =  $("#order_date").val().trim();
   var address =  $("#address").val().trim();
   var city =  $("#city").val().trim();
   var zip =  $("#zip").val().trim();
   var occasion =  $("#occasion").val().trim();
   var state =  $("#state").val().trim();

  //  console.log(name);
  //  console.log(email);
  //  console.log(order_date);
  //  console.log(address);
  //  console.log(city);
  //  console.log(zip);
  //  console.log(occasion);
  //  console.log(state);
   


    
    $.ajax({
      type: "POST",
      url: "order.php",
      data: {

        name:name,
        email:email,
        order_date:order_date,
        address:address,
        city:city,
        zip:zip,
        occasion:occasion,
        state:state
      },
      success: function (data) {
        if (data === "1") {
          alert("done");
        
        } else {
          console.log(data);
          
        }
      },
    });
  });
});