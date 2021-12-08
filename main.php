<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset ="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="./css/main.css"> 
    <title>Travel</title>
</head>

<?php 
include "template/header.php";
?>

<form class="row g-3 needs-validation" novalidate>
  <div class="col-md-3">
    <label for="validationCustom01" class="form-label">Страна</label>
    <input type="text" class="form-control" id="validationCustom01" required>
  </div>
  <div class="col-md-3">
    <label for="validationCustom02" class="form-label">Дата отправления</label>
    <input type="date" name="calendar" class="form-control" id="validationCustom02" value=required>
  </div>
  <div class="col-md-3">
    <label for="validationCustom03" class="form-label">Дата прибытия</label>
    <input type="date" name="calendar" class="form-control" id="validationCustom03" value=required>
  </div>
  <div class="col-md-3">
    <label for="validationCustom04" class="form-label">Тип тура</label>
    <select class="form-select" id="validationCustom04">
        <option selected>Любой</option>
        <option value="1">Все включено</option>
        <option value="2">Без питания</option>
        <option value="3">Завтрак</option>
    </select>
</div>
<div class="col-md-1">
    <label for="validationCustom05" class="form-label">Цена</label>
    <input type="text" class="form-control" id="validationCustom05" placeholder="от" required>
</div>
<div class="col-md-1">    
    <label for="validationCustom06" class="form-label">Цена</label>
    <input type="text" class="form-control" id="validationCustom06" placeholder="до" required>
</div>
<div class="col-md-3">
    <label for="validationCustom07" class="form-label">Питание</label>
    <select class="form-select" id="validationCustom07">
        <option selected>Любой</option>
        <option value="1">Все включено</option>
        <option value="2">Без питания</option>
        <option value="3">Завтрак</option>
    </select>
</div>
<div class="col-md-3">
    <label for="validationCustom08" class="form-label">Количество звезд</label>
    <select class="form-select" id="validationCustom08">
        <option selected>Любой</option>
        <option value="1">Все включено</option>
        <option value="2">Без питания</option>
        <option value="3">Завтрак</option>
    </select>
</div>
<div class="col-md-3" style="flex:1">
    <label for="validationCustom09" class="form-label">Туроператор</label>
    <select class="form-select" id="validationCustom09">
        <option selected>Любой</option>
        <option value="1">Все включено</option>
        <option value="2">Без питания</option>
        <option value="3">Завтрак</option>
    </select>
</div>
  <div class="col-12">
        <button class="btn" type="submit">Поиск</button>
  </div>
</form>


<div class="slider">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="https://www.syl.ru/misc/i/ai/382449/2489919.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>Популярные туры</h5>
            <p>"Незабываемая свадьба"</p>
        </div>
        </div>
        <div class="carousel-item">
        <img src="https://i.pinimg.com/736x/62/9f/ed/629fed28f1d03e33167f38c204ae6692.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>Популярные туры</h5>
            <p>"Забронируй заранее"</p>
        </div>
        </div>
        <div class="carousel-item">
        <img src="https://i.pinimg.com/736x/dd/79/39/dd7939bc35c24259413f57ac0b2028f1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>Популярные туры</h5>
            <p>"Незабываемый Кипр"</p>
        </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>



  <div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel1">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
        <img src="https://www.syl.ru/misc/i/ai/382449/2489919.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
        </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
        <img src="https://i.pinimg.com/736x/dd/79/39/dd7939bc35c24259413f57ac0b2028f1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
        </div>
        </div>
        <div class="carousel-item">
        <img src="https://i.pinimg.com/736x/62/9f/ed/629fed28f1d03e33167f38c204ae6692.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
        </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
</div>


<!-- /// Акции -->
<div class="discount">
<h3 id="discount" align="center">Акции</h3>
<a class="card-link" href="action.php">
<div class="card mb-12" style="max-width: auto;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="https://i.pinimg.com/736x/62/9f/ed/629fed28f1d03e33167f38c204ae6692.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
      <h5 class="card-title">Египет</h5>
        <p class="card-text">Только на этой неделе приобретите тур в Египет, проведите незабываемые 5 дней за 49885 руб.</p>
        <p class="card-text">4 звездочный отель. Все включено.</p>
      </div>
    </div>
  </div>
</div>
</a>

<?php 
include "template/footer.php"
?>