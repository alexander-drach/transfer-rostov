<main class="page">
  <h2 class="title-section">Заполните форму</h2>
  <form action="">
    <fieldset>
      <label for="name">
        <input id="name" type="text" name="name" placeholder="Ваше имя*" required="">
      </label>

      <label for="phone">
        <input id="tel" type="tel" name="phone" placeholder="Телефон*" required="">
      </label>

      <label for="email">
        <input id="email" type="email" name="email" placeholder="Ваш email">
      </label>

      <label for="info">
        <input id="info" type="text" name="info" placeholder="Дополнительная информация*" required="">
      </label>

      <label for="where">
        <input id="where" type="text" name="where" placeholder="Откуда*" required="">
      </label>

      <label for="somewhere">
        <input id="somewhere" type="text" name="somewhere" placeholder="Куда*" required="">
      </label>

      <label for="time">
        <input id="time" type="datetime-local" name="time" placeholder="Дата / время*" required="">
      </label>

      <label for="passengers">
        <input id="passengers" type="number" name="passengers" placeholder="Количество пассажиров*" required="">
      </label>

      <label for="children">
        <input id="children" type="number" name="children" placeholder="Количество детей*" required="">
      </label>

      <label for="luggage">
        <span>Крупногабаритный багаж*</span>
        <span><input id="luggage" type="radio" name="radio-item" value="yes">Да</span>
        <span><input id="luggage" type="radio" name="radio-item" value="no">Нет</span>
      </label>

      <label for="rate">
        <input id="rate" type="text" name="rate" placeholder="Выберите тариф*" required="">
      </label>
      
    </fieldset>
  </form>
</main>