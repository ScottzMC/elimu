<!-- Modernizer & jQuery JS -->
<script src="<?php echo base_url('assets/js/vendor/modernizr-3.11.2.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/vendor/jquery-3.5.1.min.js'); ?>"></script>

<!-- Bootstrap JS -->
<script src="<?php echo base_url('assets/js/plugins/popper.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/plugins/bootstrap.min.js'); ?>"></script>

<!-- Plugins JS -->
<script src="<?php echo base_url('assets/js/plugins/swiper-bundle.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/plugins/jquery.magnific-popup.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/plugins/video-playlist.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/plugins/jquery.nice-select.min.js'); ?>"></script>

<!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
<!-- <script src="assets/js/plugins.min.js"></script> -->


<!-- Main JS -->
<script src="<?php echo base_url('assets/js/main.js'); ?>"></script>

<script>

$(document).ready(function() {

    var delay = 3000; // milliseconds
    var cookie_expire = 0; // days

    var cookie = localStorage.getItem("list-builder");
    if(cookie == undefined || cookie == null) {
        cookie = 0;
    }

    if(((new Date()).getTime() - cookie) / (1000 * 60 * 60 * 24) > cookie_expire) {
        $("#list-builder").delay(delay).fadeIn("fast", () => {
            $("#popup-box").fadeIn("fast", () => {});
        });

        $("button[name=subscribe]").click(() => {
            $.ajax({
                type: "POST",
                url: $("#popup-form").attr("action"),
                data: $("#popup-form").serialize(),
                success: (data) => {
                    $("#popup-box-content").html("<p style='text-align: center'>Thank you for subscribing to The Polyglot Developer newsletter!</p>");
                }
            });
        });

        $("#popup-close").click(() => {
            $("#list-builder, #popup-box").hide();
            localStorage.setItem("list-builder", (new Date()).getTime());
        });
    }

});

</script>

<script>

 const menuToggle = document.querySelector('.toggle');
  const showcase = document.querySelector('.showcase');

  menuToggle.addEventListener('click', () => {
    menuToggle.classList.toggle('active');
    showcase.classList.toggle('active');
  })

</script>