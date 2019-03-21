<?php


namespace application\controllers;


use application\core\Controller;
use application\lib\Db;

class MainController extends Controller
{

  public function indexAction()
  {
    // переопределяем вид
    //$this->view->path = 'test/test';
    // переопределяем шаблон
    //$this->view->layout = 'custom';

    // передача переменных в вид
    /*$data = [
      'keywords' => 'Ключевые слова',
      'description' => 'Описание',
      'data' => [
        1,
        3,
        4,
      ]
    ];
    $db = new Db();

    $data = $db->row('SELECT name FROM users WHERE id = :id', ['id' => 1]);
    debug($data);*/
    $news = $this->model->getNews();

    $vars = [
      'news' => $news
    ];
    $this->view->render('Главная', $vars);
  }

}