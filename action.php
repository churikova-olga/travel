<?php 
include "template/header.php";
?>
<style>
    .row-indent-title{
        padding-top: 50px;
        margin-top: 50px;
        padding-bottom: 50px;
    }
    .row-indent-info{
        background-color: wheat;
        padding: 20px;
        border-radius: 10px;
    }
    .col-title{
        font-size: 32px;
        text-align: center;
    }
    .col-info{
        font-size: 24px;
        text-align: center;
    }
    .hotel-title{
        padding: 20px;
    }
    
    .container{
        background-color: white;
    }
    .row-card-hotel{
        background-color: wheat;
    }
    .row-indent-buy{
        padding-top: 10px;
        margin-bottom: 20px;
    }
    .btn{
      position: relative;
      background-color: #FCFF6D;
      color: black;
      border-color: black;
      border-radius: 20px;
      width: 150px;
    }
    .col-buy{
        font-size: 24px;
        text-align: center;
    }
    .col-btn-rewiev{
        text-align: right;
        padding-bottom: 50px;
    }
    .review-title{
        padding-left: 50px;
    }
    .card-review{
        background-color: #FDFCF2;
        /* border: 1px solid grey; */
        border-radius: 30px;
 
    }
    .crad-indent-rewiev{
        padding-top: 25px;
        padding-bottom: 25px;
    }
</style>
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

<div class="crad-indent-rewiev">
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

<div class="crad-indent-rewiev">
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

<div class="crad-indent-rewiev">
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