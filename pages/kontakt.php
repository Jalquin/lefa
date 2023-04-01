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
                                <i class="fas fa-map-marker-alt me-0"></i>
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
                    <i class="fa fa-envelope me-0"></i>
                </span>
                <div class="ts-service-box-content">
                    <h4>Napište nám</h4>
                    <a href="mailto:info@lefaservis.cz" target=”_blank”><p class="info-text">
                            info@lefaservis.cz</p></a>
                </div>
            </div>

            <div class="ts-service-box-bg">
                <span class="ts-service-icon icon-round">
                    <i class="fa fa-phone-square me-0"></i>
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

                // Validate form fields
                if (empty($name) || empty($email) || empty($tel) || empty($message)) {
                    $alert_status = "danger";
                    $alert_message = "Všechna pole jsou povinná. Prosím vyplňte všechny pole.";
                } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $alert_status = "danger";
                    $alert_message = "Zadejte platnou emailovou adresu.";
                } elseif (!preg_match("/^(\+420)?\s?\d{3}\s?\d{3}\s?\d{3}$/", $tel)) {
                    $alert_status = "danger";
                    $alert_message = "Zadejte platné telefonní číslo.";
                } elseif (strlen($message) < 10) {
                    $alert_status = "danger";
                    $alert_message = "Zpráva musí být delší než 10 znaků.";
                } else {
                    // Construct the email message
                    $to = "cervenyjakub98@gmail.com";
                    $subject = "Zpráva z lefaservis.cz od $name";
                    $body = "Jméno: $name\n\nEmail: $email\n\nTelefon: $tel\n\nZpráva:\n$message";

                    // Send the email
                    if (mail($to, $subject, $body)) {
                        $alert_status = "success";
                        $alert_message = "Děkujeme za Vaši zprávu. Budeme Vás kontaktovat co nejříve.";
                        // Reset form fields
                        $name = '';
                        $email = '';
                        $tel = '';
                        $message = '';
                    } else {
                        $alert_status = "danger";
                        $alert_message = "Při odesílání vaší zprávy došlo k chybě. Prosím zkuste to znovu později.";
                    }
                }

                // Generate alert message
                $alert =
                    '<div class="alert alert-' . $alert_status . ' alert-dismissible fade show" role="alert">
                    ' . $alert_message .
                    '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
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
                            <label class="form-label" for="name">Jméno</label>
                            <input class="form-control" id="name" name="name" placeholder="Jan Novák"
                                   required type="text"
                                   value="<?php
                                   if (isset($name)) {
                                       echo htmlspecialchars($name);
                                   } ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label" for="email">E-mail</label>
                            <input class="form-control" id="email" name="email"
                                   placeholder="jan.novak@email.cz" required
                                   type="email"
                                   value="<?php if (isset($email)) {
                                       echo htmlspecialchars($email);
                                   } ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label" for="tel">Telefon</label>
                            <input class="form-control" id="tel" name="tel"
                                   placeholder="777 777 777" required
                                   type="tel"
                                   value="<?php if (isset($tel)) {
                                       echo htmlspecialchars($tel);
                                   } ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label" for="message">Zpráva</label>
                    <textarea class="form-control" id="message" name="message"
                              placeholder="Vaše zpráva" required
                              rows="10"><?php if (isset($message)) {
                            echo htmlspecialchars($message);
                        } ?></textarea>
                </div>
                <p>Vámi zadané osobní údaje budeme zpracovávat za účelem odpovědi. Bližší informace naleznete v
                    <ins><a class="read-more" href="gdpr">zásadách zpracování osobních údajů.</a></ins>
                </p>
                <div class="text-right">
                    <button class="btn btn-primary solid blank" type="submit">Odeslat</button>
                </div>
            </form>
        </div>

    </div><!-- Content row -->
</section><!-- Main container end -->