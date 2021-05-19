    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-white">
                    <h2>Qonita Travel</h2>
                    <p>Qonita Travel befokus memberikan pelayanan prima untuk perjalanan dan pengalaman haji, umroh, dan wisata muslim terbaik.</p>
                    <div class="sosial">
                        <a href="https://www.facebook.com/QonitaTravel" target="_blank" class="facebook"><i class="fab fa-facebook fa-2x mr-2 mt-2"></i></a>
                        <!-- <i href="https://instagram.com/qonitaTravel" target="_blank" class="instagram"><i class="fab fa-instagram fa-2x mr-2 mt-2 "></i></a> -->
                        <a href="https://twitter.com/qonitaTravel" target="_blank" class="twitter"><i class="fab fa-twitter fa-2x mr-2 mt-2"></i></a>
                    </div>
                </div>
                <div class="col-md-4 text-white">
                    <h2>Information</h2>
                    <ul class="informasi">
                        <li><a href="<?= base_url('User/legalitas'); ?>">Legalitas</a></li>
                        <li><a href="<?= base_url('User/syaratdanketentuan'); ?>">Syarat & Ketentuan</a></li>
                        <li><a href="<?= base_url('User/ketentuanpembayaran'); ?>">Ketentuan Pembayaran</a></li>
                        <li><a href="<?= base_url('User/kantorcabang'); ?>">Cabang/Kantor Perwakilan Kami</a></li>
                    </ul>
                </div>
                <div class="col-md-4 text-white">
                    <h2>Contact Us</h2>
                    <address>
                        Jl. Cibubur Village Apartmen KA GF-11 Jl. Radar AURI No. 1 Cibubur Jakarta Timur. <br>
                        <abbr title="Phone">Phone : </abbr>
                        021-877-526-77 | 021-8744-620 | 0811-922-747 (SMS/ Whatsapp).<br>
                        <abbr title="Email">E-Mail:</abbr>
                        <a href="mailto:#">qonitaumroh@gmail.com</a>
                    </address>
                </div>
            </div>
        </div>

        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?= base_url('assets/'); ?>js/<?= $js; ?>"></script>
    <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- cetak Nota -->
    <script>
        function cetakNota() {
            window.print();
        }
    </script>

    <!-- script untuk mengganti label picture -->
    <script>
        $('.custom-file-input').on('change', function() {
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
        });
    </script>

    <!-- WhatsHelp.io widget -->
    <script type="text/javascript">
        (function() {
            var options = {
                whatsapp: "+62851782435458", // WhatsApp number
                telegram: "+62851782435458", // Telegram bot username
                call_to_action: "Assalamualaikum, Ayah/ Bunda?", // Call to action
                button_color: "#129BF4", // Color of button
                position: "right", // Position may be 'right' or 'left'
                order: "whatsapp,telegram", // Order of buttons
            };
            var proto = document.location.protocol,
                host = "whatshelp.io",
                url = proto + "//static." + host;
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = url + '/widget-send-button/js/init.js';
            s.onload = function() {
                WhWidgetSendButton.init(host, proto, options);
            };
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        })();
    </script>
    <!-- /WhatsHelp.io widget -->

    <!-- back to top icon -->


    </body>

    </html>