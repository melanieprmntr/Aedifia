<?php require 'header.php';?>
    <title>AEDIFIA, contactez-nous</title>


        <h1 class="main-title"> Nous contacter</h1>

        <div class="container">
            <main class="main">
                <p>
            Vous avez un projet? Vous souhaitez prendre rendez-vous? N'hésitez plus contacter nous!
                </p>
            <form  class="contact" action="contact">
                <div>
                    <label>Civilité :</label>
                    <br>
                    <input type="radio" name="sexe" id="Madame">
                    <label for="Madame">Madame</label>
                    <input type="radio" name="sexe" id="Monsieur">
                    <label for="Monsieur">Monsieur</label>
                </div>
                <div>
                        <label for="name">Nom :</label>
                        <br>
                        <input type="text" name="text"id="name">
                </div>
                <div>
                    <label for="firstname">Prénom :</label>
                    <br>
                    <input type="text" name="text" id="firstname">
                </div>
                <div>
                    <label for="emailinput">Email :</label>
                    <br>
                    <input type="email" name="email" id="emailinput">
                </div>
                <div>
                    <label for="message">Message :</label>
                    <br>
                    <textarea id="message" name="message"></textarea>
                </div>
                <div>
                <input type="submit" value="Envoyer">
                </div>
            </form>
            <br>
            <hr>
    <article class="localisation">
        <h3> Où nous rencontrer? </h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11145.122307403324!2d4.9368506!3d45.7054078!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xff8e9e454f24489b!2sAEDIFIA%20G%C3%A9om%C3%A8tres-Experts!5e0!3m2!1sfr!2sfr!4v1605890683346!5m2!1sfr!2sfr" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" class="img-container"></iframe>
    </article>
    </main>
</div>

<?php require 'footer.php';?>