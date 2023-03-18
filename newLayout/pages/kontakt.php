<section class="container">
    <div class="row text-center">
        <div class="col-12">
            <h1 class="section-title">Kontakt</h1>
            <h2 class="column-title-small"><b>LEFA SERVIS</b> - Lenka Fabianková<br>IČO 18411380</h2>
            <h3 class="section-sub-title">Zapsaná v živnostenském rejstříku u Městského úřadu Praha 6</h3>
        </div>
    </div>
    <!--/ Title row end -->

    <div class="row text-center">

        <div class="col-md-5 mb-2 mb-md-0">
            <div class="ts-service-box-bg">
                            <span class="ts-service-icon icon-round">
                                <i class="fas fa-map-marker-alt mr-0"></i>
                            </span>
                <div class="ts-service-box-content">
                    <h4>Adresa</h4>
                    <h5>Osobní návštěva možná jen po předchozí domluvě!</h5>
                    <a href="https://goo.gl/maps/RWXPyaGwrZQLeWMD8" target=”_blank”>
                        <p class="info-text"><b>Budova DELTA A - 5. patro</b><br>
                            Žukovského 888/2<br>
                            161 00 Praha 6-Ruzyně
                        </p>
                    </a>
                </div>
            </div>
            <div class="ts-service-box-bg">
                <span class="ts-service-icon icon-round">
                    <i class="fa fa-envelope mr-0"></i>
                </span>
                <div class="ts-service-box-content">
                    <h4>Napište nám</h4>
                    <a href="mailto:info@lefaservis.cz" target=”_blank”><p class="info-text">
                            info@lefaservis.cz</p></a>
                </div>
            </div>

            <div class="ts-service-box-bg">
                <span class="ts-service-icon icon-round">
                    <i class="fa fa-phone-square mr-0"></i>
                </span>
                <div class="ts-service-box-content">
                    <h4>Zavolejte nám</h4>
                    <h5>Kancelář</h5>
                    <a href="tel:+420775914918"><p class="info-text">+420 775 914 918</p></a>
                    <h5>Technik</h5>
                    <a href="tel:+420603718044"><p class="info-text">+420 603 718 044</p></a>
                </div>
            </div>
        </div><!-- Col 1 end -->

        <div class="col-md-7">
            <iframe allowfullscreen="" class="map"
                    height="450" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1521.9174728647947!2d14.346917661854162!3d50.09471352097142!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd12bc0a8fa639ebd!2sFabiankov%C3%A1%20Lenka!5e0!3m2!1sen!2scz!4v1676226529487!5m2!1sen!2scz"
                    style="border:0;"
                    width="600"></iframe>
        </div>

    </div><!-- 1st row end -->

    <div id="contact-form" class="gap-40"></div>

    <div class="row">
        <div class="col-md-12">
            <h3 class="column-title">Kontaktní formulář</h3>
            <p class="column-title-small">Rádi zodpovíme Vaše dotazy a poskytneme Vám odhad ceny.</p>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Get the form fields
                $name = $_POST["name"];
                $email = $_POST["email"];
                $tel = $_POST["tel"];
                $message = $_POST["message"];

                // Construct the email message
                $to = "cervenyjakub98@gmail.com";
                $subject = "Zpráva z lefaservis.cz od $name";
                $body = "Jméno: $name\n\nEmail: $email\n\nTelefon: $tel\n\nZpráva:\n$message";

                // Send the email
                if (mail($to, $subject, $body)) {
                    $status = "success";
                    $message = "Děkujeme za Vaši zprávu. Budeme Vás kontaktovat co nejříve.";
                } else {
                    $status = "danger";
                    $message = "Při odesílání vaší zprávy došlo k chybě. Prosím zkuste to znovu později.";
                }
                $alert = '<div class="alert alert-' . $status . ' alert-dismissible fade show" role="alert">
                  ' . $message . '
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>';
            } else {
                // Set default alert message
                $alert = '';
            }
            ?>

            <?php echo $alert; ?>
            <form action="#contact-form" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Jméno</label>
                            <input class="form-control form-control-name" id="name" name="name" placeholder=""
                                   required type="text">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input class="form-control form-control-email" id="email" name="email"
                                   placeholder="" required
                                   type="email">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="tel">Telefon</label>
                            <input class="form-control form-control-tel" id="tel" name="tel"
                                   placeholder="" required
                                   type="tel">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="message">Zpráva</label>
                    <textarea class="form-control form-control-message" id="message" name="message"
                              placeholder="" required
                              rows="10"></textarea>
                </div>
                <p>Vámi zadané osobní údaje budeme zpracovávat za účelem odpovědi. Bližší informace naleznete v
                    <ins><a href="gdpr">zásadách zpracování osobních údajů.</a></ins>
                </p>
                <div class="text-right">
                    <button class="btn btn-primary solid blank" type="submit">Odeslat</button>
                </div>
            </form>
        </div>

    </div><!-- Content row -->
</section><!-- Main container end -->