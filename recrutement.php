<?php require 'header.php';?>
    <title>AEDIFIA, nous rejoindre</title>

    <h1 class="main-title">Recrutement</h1>

    <div class="container">
    <main class="main">
        <h3>À la recherche de nouveaux talents :</h3>
        <p>Aedifia est une entreprise à taille humaine en croissance permanente. Nous recherchons régulèrement de nouveaux talents, 
           juniors et expérimentés afin de satisfaire nos clients de plus en plus nombreux.</p>
           <br>
        <p> Vous venez de terminer votre cursus scolaire et vous étes à la recherche d'une première expérience enrichissante 
            au coté d'une équipe à taille humaine? 
            Vous voulez donner un nouvel élan à votre avenir professionnel et vous souhaitez vous investir dans une entreprise en pleine croissance? 
            <br>
            N'hésitez plus! Envoyez-nous votre CV et décrivez-nous votre conception de l'entreprise idéale!
        </p>
        <h3>Candidature spontanée :</h3>
        <form class="post" action="candidature">
        <div>
                <label>Civilité :</label>
                <br>
                <input type="radio" name="sexe" id="monsieur">
                <label for="monsieur">Monsieur</label>
                <input type="radio" name="sexe" id="madame">
                <label for="madame">Madame</label>
        </div>
        <div>
            <label for="name">Nom</label>
            <br>
            <input type="text" name="text" id="name">
        </div>
        <div>
            <label for="firstname">Prénom</label>
            <br>
            <input type="text" name="text" id="firstname">
        </div>
        <div>
            <label for="emailinput">Email</label>
            <br>
            <input type="email" name="email"id="emailinput">
        </div>
        <div>
            <label for="message">Quelle est votre description de l'entreprise idéale?</label>
            <br>
            <textarea id="message" name="message"></textarea>
        </div>
        <div>
            <label for="fileinput">Pièces jointes (CV et lettre de motivations)</label>
            <br>
            <input type="file" name="file" id="fileinput">
            <br>
            <input type="file" name="file" id="fileinput">
        </div>
        <div>
            <input type="submit" value="Je postule">
        </div>
    </form>
    </main>
</div>

<?php require 'footer.php';?>