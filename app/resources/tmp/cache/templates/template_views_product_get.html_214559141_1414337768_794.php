
<div id="header" class="hcenter">
    <a href="/" class="white">
        <img src="/img/logo.png">
        <h2>Travelight</h2>
    </a>
</div>



<div class="oneproduct">

    <div class="productimg" style="background: url(<?php echo $h($product->urlpicture); ?>) no-repeat center center;background-size: cover;">


    </div>

    <div class="desc">

        <h3><?php echo $h($product->name); ?></h3>
        <p><?php echo $h($product->description); ?></p>

        <div id="map" style="width: 200px; height: 200px; clear: none; display: inline-block;margin-bottom: 50px;"></div>

        <div class="clearfix"></div>
        <div class="spacer50"></div>
        <div class="price">$<?php echo $h($product->price); ?></div>

        <button class="btn btn-success contact">Contact seller</button>

    </div>


</div>
<div class="spacer100"></div>