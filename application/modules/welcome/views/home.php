
<style type="text/css">

  .limiter {
    width: 100%;
    margin: 0 auto;
  }

  .container-login100 {
    width: 100%;  
    min-height: 100vh;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    padding: 15px;

    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    position: relative;
    z-index: 1;  
  }

  .container-login100::before {
    content: "";
    display: block;
    position: absolute;
    z-index: -1;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background-color: rgba(255,255,255,0.6);
  }

  h5 {
    font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, "AppleGothic", sans-serif;
    font-size: 68px;
    /* padding: 20px 50px; */
    text-align: center;
    text-transform: uppercase;
    text-rendering: optimizeLegibility;
  }
  h5.retroshadow {
    color: #2c2c2c;
    /* background-color: #d5d5d5; */
    letter-spacing: 0.05em;
    text-shadow: 4px 4px 0px #d5d5d5, 7px 7px 0px rgba(0, 0, 0, 0.2);
  }
</style>

<div class="limiter">
  <div class="container-login100" style="background-image: url('<?php echo base_url(); ?>images/bg3.jpg');">
    <div class="wrap-login100">
      <h5 class='retroshadow'>Sistem Informasi</h5>
    </div>
  </div>
</div>

<!-- <div id="coverhome"> -->
