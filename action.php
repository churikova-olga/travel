<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset ="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="./css/action.css"> 
    <title>Travel</title>
</head>

<?php 
include "template/header.php";
?>

<div class="row-indent-title">
  <div class="row align-items-start">
    <div class="col">
        <div class="col-title">
            Название тура
        </div>
  </div>
    <div class="col">
        <div class="col-title">
             Цена до скидки
        </div>
    </div>
    <div class="col">
        <div class="col-title">
             Цена после скидки
        </div>
    </div>
  </div>
</div>

<div class="row-indent-info">
  <div class="row align-items-start">
    <div class="col">
        <div class="col-info">
            Страна
        </div>
    </div>
    <div class="col">
        <div class="col-info">
             Дата отправления
        </div>
    </div>
    <div class="col">
        <div class="col-info">  
             Дата приезда
        </div>
    </div>
    <div class="col">
        <div class="col-info">  
            Тип тура
        </div>
    </div>
  </div>
</div>


<h2 class="hotel-title" align="center">Название отеля</h2>
<div class="card mb-12" style="max-width: auto;"> 
  <div class="row-card-hotel"> 
    <div class="row g-0">
      <div class="col-md-4">
        <img src="https://i.pinimg.com/736x/62/9f/ed/629fed28f1d03e33167f38c204ae6692.jpg" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
        <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="row-indent-buy">
  <div class="row align-items-start">
    <div class="col">
        <div class="col-buy">
            Туроператор
        </div>
  </div>
    <div class="col">
        <div class="col-buy">
             Цена со скидкой
        </div>
    </div>
    <div class="col">
        <div class="col-buy">
            <div class="col-12">
            <button class="btn" type="submit">Купить</button>
            </div>
        </div>
    </div>
  </div>
</div>

<h4 class="review-title" >Отзывы</h4>


<div class="card-indent-rewiev">
    <div class="card-review mb-3" style="max-width: auto">
      <div class="row g-0">
        <div class="col-md-1">
          <img src="icon/user-interface.png" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-2">
          <div class="card-body">
            <p class="card-text">АНОНИМ</p>
            <p class="card-text">ДАТА</p>
          </div>
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <p class="card-text">ТЕКСТ</p>
          </div>
        </div>
        <div class="col-md-1">
          <div class="card-body">
            <p class="card-text">ОЦЕНКА</p>
          </div>
        </div>
      </div>
    </div>
</div>




<div class="card-indent-rewiev">
  <div class="card-review mb-3" style="max-width: auto">
    <div class="row g-0">
      <div class="col-md-1">
        <img src="icon/user-interface.png" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-2">
        <div class="card-body">
          <p class="card-text">АНОНИМ</p>
          <p class="card-text">ДАТА</p>
        </div>
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <p class="card-text">ТЕКСТ</p>
        </div>
      </div>
      <div class="col-md-1">
        <div class="card-body">
          <p class="card-text">ОЦЕНКА</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="card-indent-rewiev">
  <div class="card-review mb-3" style="max-width: auto">
    <div class="row g-0">
      <div class="col-md-1">
        <img src="icon/user-interface.png" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-2">
        <div class="card-body">
          <p class="card-text">АНОНИМ</p>
          <p class="card-text">ДАТА</p>
        </div>
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <p class="card-text">ТЕКСТ</p>
        </div>
      </div>
      <div class="col-md-1">
        <div class="card-body">
          <p class="card-text">ОЦЕНКА</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="col-btn-rewiev">
    <div class="col-11">
        <button class="btn" type="submit">Оставить отзыв</button>
    </div>
</div>

<?php 
include "template/footer.php";
?>