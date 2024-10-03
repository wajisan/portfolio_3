<?php include "header.php" ?>
<link rel="stylesheet" href="css/form.css?v=1.0">
<section>

<div class="container slider-one-active">
  <div class="steps">
    <div class="step step-one">
      <div class="liner"></div>
      <span>Type</span>
    </div>
    <div class="step step-two">
      <div class="liner"></div>
      <span>Budget</span>
    </div>
    <div class="step step-three">
      <div class="liner"></div>
      <span>Vous</span>
    </div>
  </div>
  <div class="line">
    <div class="dot-move"></div>
    <div class="dot zero"></div>
    <div class="dot center"></div>
    <div class="dot full"></div>
  </div>
  <div class="slider-ctr">
    <div class="slider">
      <div class="slider-form slider-one">
	  <h2>Votre besoin concerne ..?</h2>
        <div class="label-ctr">
          <label class="radio">
            <input type="checkbox" value="happy" name="condition">
            <div class="emot">
              <div class="">Site</div>
            </div>
          </label>
          <label class="radio">
            <input type="checkbox" value="happy" name="condition">
            <div class="emot">
				<div class="">Application</div>
            </div>
		  </label>
		  <label class="radio">
            <input type="checkbox" value="happy" name="condition">
            <div class="emot">
				<div class="">Maintenance</div>
            </div>
		  </label>
		  <label class="radio">
            <input type="checkbox" value="happy" name="condition">
            <div class="emot">
				<div class="">Conseil</div>
            </div>
		  </label>
        </div>
        <button class="first next">Ensuite</button>
      </div>
      <div class="slider-form slider-two">
        <h2>Votre budget est de ...</h2>
        <div class="label-ctr">
          <label class="radio">
            <input type="radio" value="happy" name="condition">
            <div class="emot">
              <div class="">550€ - 1000€</div>
            </div>
          </label>
          <label class="radio">
            <input type="radio" value="happy" name="condition">
            <div class="emot">
				<div class="">1001€ - 10000€</div>
            </div>
		  </label>
		  <label class="radio">
            <input type="radio" value="happy" name="condition">
            <div class="emot">
				<div class="">Plus de 10000€</div>
            </div>
		  </label>
        </div>
        <button class="second next">Enfin</button>
      </div>
      <div class="slider-form slider-three">
        <h2>Donnez moi plus de détails</h2>
        <div class="form-coord">
          <input type="text" value="Votre nom et prénom" name="names">
          <input type="text" value="Votre mail" name="mail">
          <input type="text" value="Votre société" name="society">
          <textarea class="form-control" rows="3" placeholder="Plus de détails"></textarea>
        </div>
        <button class="btn">Envoyer</button>
      </div>
    </div>
  </div>
</div>

</section>
<?php include "footer.php" ?>
