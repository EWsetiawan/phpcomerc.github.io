<?php 
      include 'includes/head.php';
      include 'includes/navigation.php';
      include 'includes/headerfull.php';
      include 'includes/leftbar.php';
      
?>

       <!-- main content -->
       <div class="col-md-8">
        <div class="row">
          <h2 class="text-center">Feature Products</h2>
          <div class="col-md-3">
            <h4>Levis Jeans</h4>
            <img src="images/products/men4.png" alt="Levis Jeans" class = "img-thumb">
            <p class="list-price text-danger">List Price : <s>$54.99</s></p>
            <p class="price">Price : $19.99</p>
            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#detail-1">Details</button>
          </div>

          <div class="col-md-3">
            <h4>Sweater</h4>
            <img src="images/products/women7.png" alt="Sweater" class = "img-thumb">
            <p class="list-price text-danger">List Price : <s>$54.99</s></p>
            <p class="price">Price : $19.99</p>
            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#detail-1">Details</button>
          </div>

          <div class="col-md-3">
            <h4>Hollister Shirt</h4>
            <img src="images/products/men1.png" alt="Hollister Shirt" class = "img-thumb">
            <p class="list-price text-danger">List Price : <s>$25.99</s></p>
            <p class="price">Price : $19.99</p>
            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#detail-1">Details</button>
          </div>

          <div class="col-md-3">
            <h4>Fancy Shoes</h4>
            <img src="images/products/women6.png" alt="Fancy Shoes" class = "img-thumb">
            <p class="list-price text-danger">List Price : <s>$69.99</s></p>
            <p class="price">Price : $49.99</p>
            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#detail-1">Details</button>
          </div>

          <div class="col-md-3">
            <h4>Rok Panjang</h4>
            <img src="images/products/women3.png" alt="Rok Panjang" class = "img-thumb">
            <p class="list-price text-danger">List Price : <s>$24.99</s></p>
            <p class="price">Price : $18.99</p>
            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#detail-1">Details</button>
          </div>

          <div class="col-md-3">
            <h4>Girl Dress</h4>
            <img src="images/products/girls1.png" alt="Girl Dress" class = "img-thumb">
            <p class="list-price text-danger">List Price : <s>$34.99</s></p>
            <p class="price">Price : $19.99</p>
            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#detail-1">Details</button>
          </div>

          <div class="col-md-3">
            <h4>Hoddies</h4>
            <img src="images/products/boys1.png" alt="Hoddies" class = "img-thumb">
            <p class="list-price text-danger">List Price : <s>$54.99</s></p>
            <p class="price">Price : $19.99</p>
            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#detail-1">Details</button>
          </div>
             <div class="col-md-3">
            <h4>Women Bag</h4>
            <img src="images/products/women5.png" alt="Women Bag" class = "img-thumb">
            <p class="list-price text-danger">List Price : <s>$54.99</s></p>
            <p class="price">Price : $19.99</p>
            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#detail-1">Details</button>
          </div>
        </div>
       </div>



<?php 
    include 'includes/detailmodal.php';
    include 'includes/rightbar.php';
    include 'includes/footer.php';
?>