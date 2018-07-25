<?php

class ClassCar
{
    public $name; //название модели
    public $transmission; // тип коробки передач
    public $region; // регион продаж
    public $package; // комплектация
    public $currency; //валюта продаж
    public $exChangeRate; //курс обмена валют к доллару
    public $price; // цена
    public $alarm; // сигнализация

    public function __construct($name, $region, $price)
    {
        $this->name = $name;
        $this->region = $region;
        $this->price = $price;
    }

    public function methodSale($region, $package, $transmission)
    {
        $this->package = $package;
        $this->transmission = $transmission;
        $this->region = $region;
        if ($this->region == 'Russia') {
            echo 'Продажи ограничены!' . 'Доступна комплектация: ' . $this->package . ' с коробкой передач: ' . $this->transmission . '.';
        } elseif ($this->region == 'USA') {
            echo 'Доступен широкий выбор моделей! Позвоните нам для получения дополнительной информации.';
        } else {
            echo 'Да прибудет с вами сила!';
        }
    }
}

$carToyota = new ClassCar('Toyota Avensis', 'Russia', 1200000);
$carToyota->currency = 'RUR';
$carToyota->transmission = 'Manual';
$carToyota->package = 'Sol';
$carBMW = new ClassCar('BMW X5', 'USA', 300000);
$carBMW->currency = 'USD';

class ClassTV
{
    public $model; //название модели
    public $lighting; // подсветка
    public $diagonal; //диагональ экрана
    public $dataFormat;
    public $price;

    public function __construct($model, $diagonal, $dataFormat, $lighting)
    {
        $this->model = $model;
        $this->diagonal = $diagonal;
        $this->dataFormat = $dataFormat;
        $this->lighting = $lighting;
    }

    public function getSurPrise($price, $lighting)
    {
        $this->price = $price;
        $this->lighting = $lighting;
        if ($this->lighting == true) {
            return $this->price . ' HD TV';
        }
        if ($this->lighting == false) {
            return $this->price . ' Подарите это барахло клиентам! Разгрузите склад!';
        }
    }
}

$tvDigital = new ClassTV('iDaTV', '200', '4K', true);
$tvAnalog = new ClassTV('NeDoTV', '100', 'ЭраДоHD', false);

class ClassPen
{
    public $color;
    public $audience;
    public $amount;

    public function __construct($color, $audience, $amount)
    {
        $this->amount = $amount;
        $this->color = $color;
        $this->audience = $audience;
    }
}

$penSchool = new ClassPen('синие', 'Школьники', 100);
$penBusiness = new ClassPen('черные', 'Менеджеры', 200);

class ClassDuck
{
    public $food;
    public $gender;

    public function __construct($food, $gender)
    {
        $this->food = $food;
        $this->gender = $gender;
    }

    public function methodChild()
    {
        if ($this->gender == "girl") {
            return 'Покорми уток-девочек хлебом' . '<br>';
        } elseif ($this->gender == "boy") {
            return 'Покорми уток-мальчиков зерном' . '<br>';
        }
    }
}

$duckHome = new ClassDuck('bred', 'girl');
$duckWild = new ClassDuck('corn', 'boy');

class ClassProduct
{
    public $id;
    public $name;
    public $type;
    public $price;
    public $category;

    public function __construct($id, $type, $name, $category, $price)
    {
        $this->id = $id;
        $this->type = $type;
        $this->name = $name;
        $this->category = $category;
    }

    public function methodSort()
    {
        if ($this->type == 'еда') {
            return 'Положить товар ' . $this->name . ' в холодильник!';
        } elseif ($this->type == 'ПО') {
            return 'Разместить товар ' . $this->name . ' на складе в категории ' . $this->category;
        }
    }
}

$productFood = new ClassProduct(1, 'еда', 'капуста', 'бахчевые', 65);
$productSoft = new ClassProduct(2, 'ПО', 'АРМ', 'ПО для товароведения', 1600);
$productFood1 = new ClassProduct(3, 'еда', 'кабачки', 'бахчевые', 85);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Инкапсуляция</title>
</head>
<body>
<h1>Инкапсуляция</h1>
<p><strong>Инкапсуляция</strong> - принцип ООП, позволяющий объединить весь код, связанный с одной сущностью, в блок -
    класс и назначить коду внутри класса область видимости.</p>
<p>Класс хранит в себе свойства и методы сущности, которые могут быть только введены в классе (без конкретных значений
    или кода) или заданы.</p>
<p><strong>Свойство</strong>- это некоторый признак сущности, описанный в классе (например, цвет, длина, размер и пр.),
    который помимо значения имеет область видимости.</p>
<p><strong>Метод</strong> - это функция\действие, описанная в классе, которые сущность выполняет (двигаться, расти,
    рисовать и пр.), также обладает областью видимости.</p>
<p>Таким образом, инкапсуляция позволяет нам проектировать сущности и далее использовать их для создания конкретных
    объектов с предварительно объявленной областью видимости свойств и методов, а подчас и их значений.</p>
<p>Плюсы объектов:</p>
<ul>
    <li>исходное шаблонирование из класса;</li>
    <li>быстрое изменение свойств и методов из класса;</li>
    <li>фиксация значений, запрещенных к изменению;</li>
    <li>инкапсуляция кода по объекту в рамках одного блока;</li>
    <li>возможность переиспользования объекта в другом объекте - своего рода single-source.</li>
</ul>
<p>Минусы объектов:</p>
<ul>
    <li>ограничения области видимости;</li>
    <li>не работают без параметров;</li>
</ul>
<h2>Машины</h2>
<ul>
    <li><?php echo 'Название модели: ' . $carToyota->name; ?></li>
    <li><?php echo 'Регион продаж: ' . $carToyota->region; ?></li>
    <li><?php echo 'Стоимость от: ' . $carToyota->price . $carToyota->currency; ?></li>
    <li><?php echo 'Информация для диллеров: ';
        echo $carToyota->methodSale('Russia', 'Sol', 'Manual'); ?></li>
</ul>
<ul>
    <li><?php echo 'Название модели: ' . $carBMW->name; ?></li>
    <li><?php echo 'Регион продаж: ' . $carBMW->region; ?></li>
    <li><?php echo 'Стоимость от: ' . $carBMW->price . $carBMW->currency; ?></li>
    <li><?php echo 'Информация для диллеров: ';
        echo $carBMW->methodSale($carBMW->region, $carBMW->package, $carBMW->transmission); ?></li>
</ul>
<?php
echo '<h2>Телевизоры</h2>';
echo 'Стоимость: ' . $tvDigital->getSurPrise(120, true) . '<br>';
echo 'Стоимость: ' . $tvAnalog->getSurPrise(10, false) . '<br>';
echo '<h2>Ручки</h2>';
echo $penSchool->audience . ' Ждут ручки ' . $penSchool->color . ' ' . $penSchool->amount . ' штук ' . '<br>';
echo $penBusiness->audience . ' Получили ручки ' . $penBusiness->color . ' ' . $penBusiness->amount . ' штук ';
echo '<h2>Утки</h2>';
echo 'На наш пруд прилетели редчайшие утки! Нужно накормить их!';
echo $duckHome->methodChild();
echo $duckWild->methodChild();
echo '<h2>Товар</h2>';
echo $productFood->methodSort() . '<br>';
echo $productSoft->methodSort() . '<br>';
echo $productFood1->methodSort() . '<br>';
?>
</body>
</html>
