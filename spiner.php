<link rel="stylesheet" href="./bootstrap.css">
<div class="preloder overflow-hidden" id="preloder">

    <div class="col-12 vh-100  d-flex justify-content-center align-items-center">
        <div class="col-8 col-lg-4 h-75 loder">

        </div>

    </div>

    <!-- <img src="./image_processing20200705-25128-1a0u0wj.gif" alt=""> -->


</div>

<style>
    .preloder {
        position: fixed;
        /* background: radial-gradient(#ffffff, #ebebeb); */
        background-color: white;
        height: 100vh;
        width: 100%;
        z-index: 99999999;
        padding: 0;
        top: 0;
        left: 0;
        right: 0;
        /* opacity: 0.9; */
    }

    .loder {
        background-image: url("icon/loader.gif");
        background-repeat: no-repeat;
        background-position: center;
        background-size: contain;
        /* background: transparent; */
    }
</style>

<script>
    var loder = document.getElementById("preloder");

    window.addEventListener("load", function() {
        loder.style.display = "none";
        loder.fadeOut("slow")
    });
</script>