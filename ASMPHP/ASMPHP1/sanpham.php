<style>
    *{
        margin : 0;
        padding : 0;

    }
    .k {
    width: 100%;
    background: white;
    }

    .m img {
        width: 250px;
        height: 138px;
        transition: all 0.5s;
    }
    .m {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        margin: 10px;
        height: 350px;
        border: 1px solid black;
        background-color: white;
        transition: all 0.5s;
    }

    .m:hover {
        padding: 200px;
        transition: all 0.5s;
    }
    .m:hover img{
        transform: scale(1.2);
        transition: all 0.5s;
    }

    .n {
        margin: 10px;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .q {
        margin: 10px;
        color: #1574D4;
        font-weight: bolder;
        font-size: xx-large;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .r {
        margin: 10px;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        padding: 10px;
        border-radius: 100px;
        font-weight: bold;
        background-color: #1574D4;
        color: white;
        transition: all 0.2s;
    }

    .r:hover {
        background-color: white;
        color: #1574D4;
        transition: all 0.2s;
        padding: 20px;
    }
    .l {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .s {
        background-color: black;
        position: absolute;
        width: 100%;
        height: 260px;
        top: 680px;
    }

    .z {
        position: absolute;
        color: white;
        top: 50px;
        left: 310px;
        font-size: 18pt;
        font-weight: bold;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .y {
        position: absolute;
        color: white;
        top: 120px;
        left: 280px;
        font-size: 18pt;
        font-weight: 300;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .x {
        position: absolute;
        color: white;
        top: 155px;
        left: 220px;
        font-size: 18pt;
        font-weight: 300;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .p {
        position: absolute;
        color: white;
        top: 120px;
        left: 1000px;
        font-size: 18pt;
        font-weight: bold;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
    h2{
        text-align: center;
        padding: 30px;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-size: xx-large;
    }
    .m a{
        text-decoration: none;
        transition: all 0.2s;
    }
    .m a:hover{
        transition: all 0.2s;
        color: red;
        font-size: 20pt;
    }
</style>
<section>
    <h2>Tất cả sản phẩm</h2>
    <div class="k">
            <div class="l">
                <div class="m">
                    <img src="./img/product-10.jpg">
                    <div class="n"><a href="index.php?act=ctsp">Gamepad</a></div>
                    <div class="q">1,380,000 đ</div>
                    <button class="r">Add To Cart</button>
                </div>
                <div class="m">
                    <img src="./img/product-09.jpg">
                    <div class="n"><a href="">VR Controller</a></div>
                    <div class="q">920,000 đ</div>
                    <button class="r">Add To Cart</button>
                </div>
                <div class="m">
                    <img src="./img/product-08.jpg">
                    <div class="n"><a href=""> Gear VR with Controller</a></div>
                    <div class="q">2,995,000 đ</div>
                    <button class="r">Add To Cart</button>
                </div>
            </div>
        </div>
</section>