<?php
/* Template Name: conditions */
get_header();
?>

<main>
  <section class="conditions">
    <div class="container-conditions">
 <div class="title-wrapper">
        <h1 class="conditions__title">Умови співпраці</h1>
        </div>
      <div class="promo-conditions">
        <img class="conditions__cooperation-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/rate/cooperation.svg" alt="cooperation">
        <p class="text-promo__conditions">  
          Умови оплати при розробці сайту під замовлення можуть бути різними в залежності від специфіки проекту та угоди між сторонами. Однак, зазвичай умови оплати можуть виглядати наступним чином:
        </p>
        <img class="conditions__madea-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/rate/payment.svg" alt="payment">
      </div>

      <div class="conditions__blocks">
        <article class="conditions__block conditions__block-one">
          <h3 class="conditions__block-title">Аванс</h3>
          
          <div class="conditions__block-content">
            <div class="conditions__block-text">
              <p class="conditions__text">Зазвичай перед початком роботи на проектом замовник сплачує певну суму як аванс, що підтверджує його серйозність та зацікавленість у співпраці</p>
            </div>
          </div>
        </article>

        <article class="conditions__block conditions__block-one">
          <h3 class="conditions__block-title">Часткова оплата під час виконання робіт</h3>
          
          <div class="conditions__block-content">
            <div class="conditions__block-text">
              <p class="conditions__text">Під час розробки сайту можуть бути визначені етапи, на кожному з яких передбачена часткова оплата за виконану роботу</p>
            </div>
          </div>
        </article>

        <article class="conditions__block conditions__block-one">
          <h3 class="conditions__block-title">Остаточна оплата</h3>
          
          <div class="conditions__block-content">
            <div class="conditions__block-text">
              <p class="conditions__text">Після завершення всіх робіт та затвердження проекту замовником, передбачається остаточна оплата за послуги</p>
            </div>
          </div>
        </article>

    
      </div>
      <div class="final__conditions">
          <p class="final__text-conditions">  
            Ці умови можуть бути адаптовані під конкретні потреби та умови кожного проекту, з метою забезпечення взаємовигідної співпраці між сторонами.
          </p>
          
        </div>
    </div>
  </section>

  <div class="modal-btn">
  <button class="open-modal" id="open-modal">Зворотній зв'язок</button>
  
  </div>
<!-- Модальне вікно -->
<div id="modal" class="modal"> <!-- Було "dividd" та "class" -->
  <!-- Вміст модального вікна -->
  <div class="modal-content"> <!-- Було "odal-content" -->
    
    <img id="close-modal" class="close-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/rate/close-mini.svg" alt="Багатосторінковий сайт">
    <?php echo do_shortcode('[contact-form-7 id="acbd235" title="Контактна форма 1"]'); ?>
  </div>
</div>
</main>

<?php
get_footer();
?>
