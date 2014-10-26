
<div id="header" class="hcenter">
    <a href="/" class="white">
        <img src="/img/logo.png">
        <h2>Travelight</h2>
    </a>
</div>



<div class="oneproduct">

    <div class="productimg" style="background: url(<?=$product->urlpicture?>) no-repeat center center;background-size: cover;">

        <button class="btn btn-success">Contact sellman</button>
    </div>

    <div class="desc">

        <h3><?=$product->name?></h3>
        <p><?=$product->description?></p>

        <div id="map" style="width: 200px; height: 200px; clear: none; display: inline-block;"></div>


        <div class="price">$<?=$product->price?></div>

    </div>





</div>