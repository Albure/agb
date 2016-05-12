@extends('unlacedlayout')

@section('content')

    <div class="set">
        <div class="img">
            <a target="_blank" href="/Unlaced/shop/stock1">
                <img src="https://images.bigcartel.com/bigcartel/product_images/173595211/max_h-1000+max_w-1000/39-IMG_6740.JPG" alt="" width="300" height="200">
            </a>
            <div class="desc">YAir Foamposite One PRM "Gone Fishing"</div>
        </div>
        <div class="img">
            <a href="https://images.bigcartel.com/bigcartel/product_images/173595211/max_h-1000+max_w-1000/39-IMG_6740.JPG" data-lity>
                <img src="https://images.bigcartel.com/bigcartel/product_images/173595211/max_h-1000+max_w-1000/39-IMG_6740.JPG" alt="" width="300" height="200">
            </a>
            <div class="desc">2012 Air Jordan 4 Retro "White Cement"</div>
        </div>
    </div>




    <form action="" method="POST">
        <script
                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                data-key="pk_test_k0NWfde1K5WF5fIbqh5C22Nf"
                data-amount="2000"
                data-name="Demo Site"
                data-description="2 widgets ($20.00)"
                data-image="/128x128.png"
                data-locale="auto">
        </script>
    </form>

    <a href="https://farm9.staticflickr.com/8642/16455005578_0fdfc6c3da_b.jpg" data-lity>Image</a>



@stop