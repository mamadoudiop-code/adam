<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ URL::asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
<!-- Icons Css -->
<link href="{{ URL::asset('assets/css/icons.min.css')}}" id="icons-style" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/libs/magnific-popup/magnific-popup.min.css')}}" rel="stylesheet" type="text/css" />



</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col-xl-3 col-lg-4">
            <div class="card">
                <div class="card-header bg-transparent border-bottom">
                    <h5 class="mb-0">Achat</h5>
                </div>

               

              
                <div class="custom-accordion">
                    <div class="p-4 border-top">
                        <div>
                        <div class="cart-container">
                            <h2>Cart</h2>
                            <table>
                              <thead>
                                <tr>
                                <th><strong>Aliment</strong></th>
                                <th><strong>Prix</strong></th>
                              </tr>
                              </thead>
                              <tbody id="carttable">
                              </tbody>
                            </table>
                            <hr>
                            <table id="carttotals">
                              <tr>
                                <td><strong>Qte</strong></td>
                                <td><strong>Total</strong></td>
                              </tr>
                              <tr>
                                <td>x <span id="itemsquantity">0</span></td>
                               
                                <td>XOF<span id="total">0</span></td>
                              </tr></table>
                   
                              
                            <div class="cart-buttons">  
                              <button id="emptycart">Vider</button>
                             
                             
                                <div>
                                    <button id="checkout">
                                    <a style="color: #fff;" class="popup-form " href="#test-form" >Valider</a>
                                </button>
                                </div>
                              
                            </div>
                          </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                           
                            
                    
                            <div class="card mfp-hide mfp-popup-form mx-auto" id="test-form" style="width:40%;">
                                
                                <div class="card-body">
                                    <h4 class="mt-0 mb-4">Validation paiement</h4>   
                                    <form method="POST" action="{{Route('valid.paiement')}}">
                                        @csrf
                                        <textarea style="display: none;" name="libproduct" id="libproduct" > </textarea>
                                        <div class="row">
                                            <div class="col-lg-3">
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="total">Montant</label>
                                                    <input type="text"  class="form-control"  name="num1" id="num1" required />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3">
                                            </div>
                                          
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="total">Total</label>
                                                   
                                                    <input type="text" id="totalcheckout" name="total" class="form-control" readonly>
                                                </div>
                                            </div>
                                           
                                        </div>
                                        <div class="row" style="display: none;">
                                            <div class="col-lg-3">
                                            </div>
                                           
                                          
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="total">Addition</label>
                                                    <input type="number"  class="form-control"  name="sum" id="sum" readonly />
                                                </div>
                                            </div>
                                           
                                           
                                          
                                           
                                        </div>
                                       
                                        <div class="row">
                                            <div class="col-lg-3">
                                            </div>
                                           
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="total">Rendre</label>
                                                    <input type="number"  class="form-control"  name="rendre" id="subt"  readonly />
                                                </div>
                                            </div>
                                          
                                          
                                           
                                        </div>
                                        <div class="row" style="display: none;">
                                            <div class="col-lg-3">
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="quantite">Qte totale</label>
                                                    <input readonly type="text" class="form-control" name="quantite" id="totalitem" placeholder="Enter Email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="text-center">
                                                        <button type="submit" class="btn btn-primary">Valider</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                  
                                  
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>

                    <div class="p-4 border-top">
                       

                    </div>

                    <div class="p-4 border-top">
                      
                    </div>

                    <div class="p-4 border-top">
                      
                    </div>

                </div>

            </div>
        </div>

        <div class="col-xl-9 col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div>
                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                    <h5>Adam</h5>
                                    <ol class="breadcrumb p-0 bg-transparent mb-2">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Boulangerie</a></li>
                                        <li class="breadcrumb-item active">Aliments</li>
                                    </ol>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-inline float-md-end">
                                    <div class="search-box ml-2">
                                        <div class="position-relative">
                                            <input type="text" class="form-control bg-light border-light rounded"
                                                placeholder="Search...">
                                            <i class="mdi mdi-magnify search-icon"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <ul class="nav nav-pills nav-tabs-custom mt-3 mb-2 ecommerce-sortby-list" role="tablist">
                            <li class="nav-item  waves-effect waves-light">
                                <a style="background:#fff;" class="nav-link disabled fw-medium" href="#" tabindex="-1" aria-disabled="true">Aliments:</a>
                            </li>
                          
                            <li class="nav-item">
                                <a class="nav-link " href="#navpill">#</a>
                            </li>

                            
                            @foreach ($aliments as $lesaliments)
                            <li class="nav-item waves-effect waves-light">
                               
                                <a style="background: #fff;" class="nav-link " data-toggle="tab" href="#navpills-{{$lesaliments->id}}" role="tab">
                                    <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                    <span class="d-none d-sm-block">{{$lesaliments->designation}}</span> 
                                </a>
                            </li>
                            @endforeach
                 <!-- Tab panes -->
                
                     
                 
            <div class="tab-content p-3 text-muted">
                <div class="tab-pane active" id="navpills-{{$id_aliment[0]}}" role="tabpanel">
                    <div class="row">
                        @foreach ($saliments_belongs_to_pain as $painsal)
                            
                       
                        <div class="col-xl-4 col-sm-6">
                            <div class="product-box">
                                <div class="product-img pt-4 px-4">
                                    <div class="product-ribbon badge bg-warning">
                                        Trending
                                    </div>
                                    <div class="product-wishlist">
                                        <a href="#">
                                            <i class="mdi mdi-heart-outline"></i>
                                        </a>
                                    </div>
                                    <img src="{{asset('assets/images/small/img-5.jpg')}}" alt=""
                                        class="img-fluid mx-auto d-block">
                                </div>

                                <div class="text-center product-content p-4">

                                    <h5 class="productname"><a href="#" class="text-dark">{{$painsal->designation}}</a></h5>
                                    <p></p>
                                    <h5 class="price">XOF{{$painsal->prixTTC}}</h5>
                                    <button class="addtocart">Add To Cart</button>
                                  

                                   

                                    <ul class="list-inline mb-0 text-muted product-color">
                                        <li class="list-inline-item">
                                            Colors :
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="mdi mdi-circle text-dark"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="mdi mdi-circle text-light"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="mdi mdi-circle text-primary"></i>
                                        </li>
                                    </ul>

                                </div>
                                
                               
                            </div>
                       
                          
                        </div>
                        @endforeach
 
                    </div>
                </div>
                
                <div class="tab-pane" id="navpills-{{$id_aliment[1]}}" role="tabpanel">
                    <div class="row">
                        @foreach ($saliments_belongs_to_patiss as $patissal)
                            
                       
                        <div class="col-xl-4 col-sm-6">
                            <div class="product-box">
                                <div class="product-img pt-4 px-4">
                                    <div class="product-ribbon badge bg-warning">
                                        Trending
                                    </div>
                                    <div class="product-wishlist">
                                        <a href="#">
                                            <i class="mdi mdi-heart-outline"></i>
                                        </a>
                                    </div>
                                    <img src="{{asset('assets/images/small/img-5.jpg')}}" alt=""
                                        class="img-fluid mx-auto d-block">
                                </div>

                                <div class="text-center product-content p-4">

                                    <h5 class="productname"><a href="#" class="text-dark">{{$patissal->designation}}</a></h5>
                                    <p></p>
                                    <h5 class="price">XOF{{$patissal->prixTTC}}</h5>
                                    <button class="addtocart">Add To Cart</button>
                                  

                                   

                                    <ul class="list-inline mb-0 text-muted product-color">
                                        <li class="list-inline-item">
                                            Colors :
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="mdi mdi-circle text-dark"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="mdi mdi-circle text-light"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="mdi mdi-circle text-primary"></i>
                                        </li>
                                    </ul>

                                </div>
                                
                               
                            </div>
                       
                          
                        </div>
                        @endforeach
 
                    </div>
                </div>
                
           
                <div class="tab-pane" id="navpills-messages" role="tabpanel">
                    <p class="mb-0">
                        Etsy mixtape wayfarers, ethical wes anderson tofu before they
                        sold out mcsweeney's organic lomo retro fanny pack lo-fi
                        farm-to-table readymade. Messenger bag gentrify pitchfork
                        tattooed craft beer, iphone skateboard locavore carles etsy
                        salvia banksy hoodie helvetica. DIY synth PBR banksy irony.
                        Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh
                        mi whatever gluten-free.
                    </p>
                </div>
            </div>
        
         
           
           
                        </ul>
                      
                        
                    </div>
                </div>
            </div>
        </div>
                        <!-- end row -->

                        <style> 
                            @import url('https://fonts.googleapis.com/css?family=Quicksand:400,700');
                            *, ::before, ::after { box-sizing: border-box; }
                            
                           
                           
                            .productcont {
                              display: flex; 
                            }
                            .product {
                              padding:1em; 
                              border:1px solid #E0E4CC; 
                              margin-right:1em; 
                              border-radius:5px;
                            }
                            .cart-container {
                              border:1px solid #E0E4CC;
                              border-radius:5px;
                              margin-top:1em;
                              padding:1em;
                            }
                            button, input[type="submit"] { 
                                border:1px solid #FA6900; 
                                color:#fff; 
                                background: #F38630; 
                                padding:0.6em 1em;
                                font-size:1em; 
                                line-height:1; 
                                border-radius: 1.2em;
                                transition: color 0.2s ease-in-out, background 0.2s ease-in-out, border-color 0.2s ease-in-out;
                            }
                            button:hover, button:focus, button:active, input[type="submit"]:hover, input[type="submit"]:focus, input[type="submit"]:active {
                                background: #A7DBD8;
                                border-color:#69D2E7;
                                color:#000;
                                cursor: pointer;
                            }
                            table {
                              margin-bottom:1em;
                              border-collapse:collapse;
                            }
                            table td, table th {
                              text-align:left;
                              padding:0.25em 1em;
                              border-bottom:1px solid #E0E4CC;
                            }
                            #carttotals {
                              margin-right:0;
                              margin-left:auto;
                            }
                            .cart-buttons {
                              width:auto;
                              margin-right:0;
                              margin-left:auto;
                              display:flex;
                              justify-content:flex-end;
                              padding:1em 0;
                            }
                            #emptycart {
                              margin-right:1em;
                            }
                            table td:nth-last-child(1) {
                              text-align:right;
                            }
                            .message {
                              border-width: 1px 0px;
                              border-style:solid;
                              border-color:#A7DBD8;
                              color:#679996;
                              padding:0.5em 0;
                              margin:1em 0;
                            }
                            </style> 
                            <div class="container" style="display: none;"> 
                              <h1>Simple JavaScript Shopping Cart</h1>
                              <p>Simplified 'add to cart' functionality. Uses Javascript
                              and WebStorage API/Cookies to remember cart data converted to JSON format.</p>
                              <p>Click 'Empty Cart' button to remove session cookies from browser.</p>
                              <div id="alerts"></div>
                            <div class="productcont">
                                   <div class="product">
                                       <h3 class="productname">Product 1</h3>
                                       <p>Product description excerpt...</p>
                                       <p class="price">$5.05</p>
                                       <button class="addtocart">Add To Cart</button>
                                   </div>
                                   <div class="product">
                                       <h3 class="productname">Product 2</h3>
                                       <p>Product description excerpt...</p>
                                       <p class="price">$8.50</p>
                                       <button class="addtocart">Add To Cart</button>
                                   </div>
                                   <div class="product">
                                       <h3 class="productname">Product 3</h3>
                                       <p>Product description excerpt...</p>
                                       <p class="price">$10.50</p>
                                       <button class="addtocart">Add To Cart</button>
                                   </div>
                                   </div>
                                   <div class="cart-container">
                                     <h2>Cart</h2>
                                     <table>
                                       <thead>
                                         <tr>
                                         <th><strong>Product</strong></th>
                                         <th><strong>Price</strong></th>
                                       </tr>
                                       </thead>
                                       <tbody id="carttable">
                                       </tbody>
                                     </table>
                                     <hr>
                                     <table id="carttotals">
                                       <tr>
                                         <td><strong>Items</strong></td>
                                         <td><strong>Total</strong></td>
                                       </tr>
                                       <tr>
                                         <td>x <span id="itemsquantity">0</span></td>
                                        
                                         <td>$<span id="total">0</span></td>
                                       </tr></table>
                            
                                       
                                     <div class="cart-buttons">  
                                       <button id="emptycart">Empty Cart</button>
                                       <button id="checkout">Checkout</button>
                                     </div>
                                   </div>
                            </div>
                            <script>
                            /* get cart total from session on load */
                            updateCartTotal();
                            
                            /* button event listeners */
                            document.getElementById("emptycart").addEventListener("click", emptyCart);
                            var btns = document.getElementsByClassName('addtocart');
                           
                           
                            for (var i = 0; i < btns.length; i++) {
                                btns[i].addEventListener('click', function() {addToCart(this);});
                            }
                            
                            /* ADD TO CART functions */
                            
                            function addToCart(elem) {
                                //init
                                var sibs = [];
                                var getprice;
                                var getproductName;
                                var cart = [];
                                 var stringCart;
                                //cycles siblings for product info near the add button
                                while(elem = elem.previousSibling) {
                                    if (elem.nodeType === 3) continue; // text node
                                    if(elem.className == "price"){
                                        getprice = elem.innerText;
                                    }
                                    if (elem.className == "productname") {
                                        getproductName = elem.innerText;
                                    }
                                    sibs.push(elem);
                                }
                                //create product object
                                var product = {
                                    productname : getproductName,
                                    price : getprice
                                };
                                //convert product data to JSON for storage
                                var stringProduct = JSON.stringify(product);
                                /*send product data to session storage */
                                
                                if(!sessionStorage.getItem('cart')){
                                    //append product JSON object to cart array
                                    cart.push(stringProduct);
                                    //cart to JSON
                                    stringCart = JSON.stringify(cart);
                                    //create session storage cart item
                                    sessionStorage.setItem('cart', stringCart);
                                    addedToCart(getproductName);
                                    updateCartTotal();
                                }
                                else {
                                    //get existing cart data from storage and convert back into array
                                   cart = JSON.parse(sessionStorage.getItem('cart'));
                                    //append new product JSON object
                                    cart.push(stringProduct);
                                    //cart back to JSON
                                    stringCart = JSON.stringify(cart);
                                    //overwrite cart data in sessionstorage 
                                    sessionStorage.setItem('cart', stringCart);
                                    addedToCart(getproductName);
                                    updateCartTotal();
                                }
                            }
                            /* Calculate Cart Total */
                            function updateCartTotal(){
                                //init
                                var total = 0;
                                var price = 0;
                                
                                var items = 0;
                    
                                var productname = "";
                                var carttable = "";
                                var cartproduct ="";
                                if(sessionStorage.getItem('cart')) {
                                    //get cart data & parse to array
                                    var cart = JSON.parse(sessionStorage.getItem('cart'));
                                    //get no of items in cart 
                                    items = cart.length;
                                    //loop over cart array
                                    for (var i = 0; i < items; i++){
                                        //convert each JSON product in array back into object
                                        var x = JSON.parse(cart[i]);
                                        //get property value of price
                                        price = parseFloat(x.price.split('XOF')[1]);
                                        productname = x.productname;
                                        //add price to total
                                        carttable += "<tr><td>" + productname + "</td><td>XOF" + price.toFixed(2) + "</td></tr>";
                                        cartproduct +=  "" + productname + "\n";
                                        total += price;
                                        
                                       
                                    }
                                    
                                }
                                //update total on website HTML
                                document.getElementById("total").innerHTML = total.toFixed(2);
                                document.getElementById("totalcheckout").value = total.toFixed(2);
                                
                                document.getElementById("libproduct").value = cartproduct;
                                //insert saved products to cart table
                                document.getElementById("carttable").innerHTML = carttable;
                                //update items in cart on website HTML
                                document.getElementById("itemsquantity").innerHTML = items;
                                document.getElementById("totalitem").value = items;
                            }
                            //user feedback on successful add
                            function addedToCart(pname) {
                              var message = pname + " was added to the cart";
                              var alerts = document.getElementById("alerts");
                              alerts.innerHTML = message;
                              if(!alerts.classList.contains("message")){
                                 alerts.classList.add("message");
                              }
                            }
                            /* User Manually empty cart */
                            function emptyCart() {
                                //remove cart session storage object & refresh cart totals
                                if(sessionStorage.getItem('cart')){
                                    sessionStorage.removeItem('cart');
                                    updateCartTotal();
                                  //clear message and remove class style
                                  var alerts = document.getElementById("alerts");
                                  alerts.innerHTML = "";
                                  if(alerts.classList.contains("message")){
                                      alerts.classList.remove("message");
                                  }
                                }
                            }
                            </script>



</body>

<script src="{{ URL::asset('assets/libs/jquery/jquery.min.js')}}"></script>
<script >
    $(document).ready(function() {
        //this calculates values automatically 
        sum();
        $("#num1, #totalcheckout").on("keydown keyup", function() {
            sum();
        });
    });
    
    function sum() {
                var num1 = document.getElementById('num1').value;
                var num2 = document.getElementById('totalcheckout').value;
                var result = parseInt(num1) + parseInt(num2);
                var result1 = parseInt(num1) - parseInt(num2);
                if (!isNaN(result)) {
                    document.getElementById('sum').value = result;
                    document.getElementById('subt').value = result1;
                }
            }
            </script>
<script src="{{ URL::asset('assets/libs/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{ URL::asset('assets/libs/metismenu/metismenu.min.js')}}"></script>
<script src="{{ URL::asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{ URL::asset('assets/libs/node-waves/node-waves.min.js')}}"></script>
<script src="{{ URL::asset('assets/libs/waypoints/waypoints.min.js')}}"></script>
<script src="{{ URL::asset('assets/libs/jquery-counterup/jquery-counterup.min.js')}}"></script>

    <script src="{{ URL::asset('assets/libs/ion-rangeslider/ion-rangeslider.min.js')}}"></script>
   <script src="{{ URL::asset('assets/js/pages/product-filter-range.init.js')}}"></script>

     <!-- Magnific Popup-->
  <script src="{{ URL::asset('assets/libs/magnific-popup/magnific-popup.min.js')}}"></script>
  <!-- lightbox init js-->
  <script src="{{ URL::asset('assets/js/pages/lightbox.init.js')}}"></script>
<!-- App js -->
<script src="{{ URL::asset('assets/js/app.min.js')}}"></script>
</html>

