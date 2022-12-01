<!DOCTYPE html>

  <html lang="fr">

    <head>
      <meta name="author" content="Gauthier Baras" />
      <meta charset="utf-8" />
      <link rel="stylesheet" href="index.css" />
      <title>Générateur de mot de passe</title>
    </head>

    <body>

    <div class="Head">
      <h1 class="Title">Générateur De Mot De Passe</h1>
    </div>

    <div class="Generateur">

      <h2 class="Subtitle">Sélectionnez les options de votre mot de passe sécurisé:</h2>

      <form method="POST" action="index.php">

        <label class="Chiffre">Avec des chiffres [ 0 1 2 3 4 5 6 7 8 9 ] :<input type="checkbox" name="Num"></label><br />
        <label class="Min">Avec des lettres minuscules [ a b c ... x y z ] :<input type="checkbox" name="Min"></label><br />
        <label class="Maj">Avec des lettres majuscules [ A B C ... X Y Z ]<input type="checkbox" name="Maj"></label><br />
        <label class="Spc">Avec des caractères spéciaux [ ~ ! @ # $ % ^ & * ( ) - _ = + [ ] { } ; : , . < > / ? | ] :<input type="checkbox" name="Spc"></label><br />

        <select name="NumberCar" class="NumberCar">
          <option value="4">4</options>
          <option value="5">5</options>
          <option value="6">6</options>
          <option value="7">7</options>
          <option value="8">8</options>
          <option value="9">9</options>
          <option value="10">10</options>
          <option value="11">11</options>
          <option value="12">12</options>
          <option value="13">13</options>
          <option value="14">14</options>
          <option value="15">15</options>
          <option value="16">16</options>
          <option value="17">17</options>
          <option value="18">18</options>
          <option value="19">19</options>
          <option value="20">20</options>
          <option value="21">21</options>
          <option value="22">22</options>
          <option value="23">23</options>
          <option value="24">24</options>
          <option value="25">25</options>
          <option value="26">26</options>
          <option value="27">27</options>
          <option value="28">28</options>
          <option value="29">29</options>
          <option value="30">30</options>
          <option value="31">31</options>
          <option value="32">32</options>
          <option value="33">33</options>
          <option value="34">34</options>
          <option value="35">35</options>
          <option value="36">36</options>
          <option value="37">37</options>
          <option value="38">38</options>
          <option value="39">39</options>
          <option value="40">40</options>
          <option value="41">41</options>
          <option value="42">42</options>
          <option value="43">43</options>
          <option value="44">44</options>
          <option value="45">45</options>
          <option value="46">46</options>
          <option value="47">47</options>
          <option value="48">48</options>
          <option value="49">49</options>
          <option value="50">50</options>
          <option value="52">52</options>
        </select><br />

        <input type="submit" value="Créer Votre Mot De Passe" name="Bouton" class="Bouton" /><br />

      </form>

    </div>

    </body>

   <div class="Result"><?php include("generator.php"); ?></div><br />

    </html>

