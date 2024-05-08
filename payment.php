
<!DOCTYPE html>
<html lang="en">

  <head>
    
    <link rel="stylesheet" href="style.css">
    <title>payments</title>
    <style>
        .hh{
                color: white;
                font-weight: bolder;
                font-size: 20px;
                font-family: Georgia;
                position: absolute;
                bottom: 720px;
                left:550px;
                text-shadow: 1px 1px 1px black;
                cursor: pointer;

            }

            .hh1{
                color: white;
                font-weight: bolder;
                font-size: 20px;
                font-family: Georgia;
                position: absolute;
                bottom: 720px;
                left:900px;
                text-shadow: 1px 1px 1px black;
                cursor: pointer;

            }

            .hh2{
                color: white;
                font-weight: bolder;
                font-size: 20px;
                font-family: Georgia;
                position: absolute;
                bottom: 720px;
                left:1200px;
                text-shadow: 1px 1px 1px black;
                cursor: pointer;

            }

            
            .hh3{
                color: white;
                font-weight: bolder;
                font-size: 20px;
                font-family: Georgia;
                position: absolute;
                bottom: 720px;
                left:1500px;
                text-shadow: 1px 1px 1px black;
                cursor: pointer;

            }
         body{
                background-image: url("img/payment6.jpg");
                background-repeat: no-repeat;
                background-size:cover;
           
            }
            .img-size{
                width: 50em;
                height: 40em;
                position: relative;
                left: 850px;
                bottom: -50px;
             
            }
            .payment{
                font-weight: bolder;
                font-family: Georgia;
                font-size: 3em;
                color: white;
                position: absolute;
                left:200px;
            }
            .btn{
                padding: 10px;
                background-color: green;
                font-weight: bolder;
                font-size: 1.0em;
                font-family: Georgia, 'Times New Roman', Times, serif;
                cursor: pointer;
                color: white;
                border-radius: 5px;
                position: relative;
                left:1100px;
                bottom: -10px;

            }
    </style>      
  </head>
  <body>
            <p class="hh">Home </p></a>
            <p class="hh1"> About</p></a>
            <p class="hh2"> Service</p>
            <p class="hh3">FAQ</p>

       
  
         
        <img src="img/payment4.jpeg" class="img-size">
    
    

    <form>
        <script src="https://js.paystack.co/v1/inline.js"></script>
        <button type="button" class="btn" onclick="payWithPaystack()"> Make Payment Now </button> 

    

    <!-- place below the html form -->
        <script>
        function payWithPaystack(){
            var handler = PaystackPop.setup({
            key: 'pk_live_b68116dfd2e2d1408533a6e481e4f2218b8d26a0',
            //pk_live_b68116dfd2e2d1408533a6e481e4f2218b8d26a0
            email: 'customer@email.com',
            amount: 10000,
            ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
            metadata: {
                custom_fields: [
                    {
                        display_name: "LearnersAnchor",
                        variable_name: "Mr Solomon",
                        value: "+2347066233903"
                    }
                ]
            },
            callback: function(response){
                alert('success. transaction ref is ' + response.reference);
            },
            onClose: function(){
                alert('window closed');
            }
            });
            handler.openIframe();
        }
        </script>
    </form>
  
    
</body>
</html>