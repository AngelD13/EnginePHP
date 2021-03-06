<?php
/**
 * Простой движок на PHP
 * @author Angel 
 */
class Engine {
 
    private $_page_file = null;
    private $_error = null;
 
    public function __construct() {
        if (isset($_GET["page"])) { //Если открыта какая-нибудь страница
            //Записываем в переменную имя открытого файла (из GET запроса)
            $this->_page_file =basename($_GET["page"]);
 
             //Проверяем, если шаблон не существует
            if (!file_exists("templates/main/" . $this->_page_file . ".php")) {
                $this->_setError("Шаблон не найден"); //Ошибку на экран
                $this->_page_file = "main"; //Открываем главную страницу
            }
        }
         //Если в GET запросе нет переменной page, то открываем главную
        else $this->_page_file = "main";
    }
 
    /**
     * Записывает ошибку в переменную _error
     * @param string $error - текст ошибки
     */
    private function _setError($error) {
        $this->_error = $error;
    }
 
    /**
     * Возвращает текст ошибки
     */
    public function getError() {
        return $this->_error;
    }
 
    /**
     * Возвращает текст открытой страницы
     */
    public function getContentPage() {
        include("templates/main/" . $this->_page_file . ".php");
        
    }
 
    /**
     * Возвращает тег заголовок открытой страницы
     * @return string 
     */
    public function getTitle() {
        switch ($this->_page_file) {
            case "main":
                return "Главная страница";
                break;
            case "about":
                return "Про Новый Мир";
                break;
            case "news":
                return "Новости";
                break;
            case "polls":
                return "Опрос";
                break;
            case "login":
                return "Вход";
                break;
            case "signup":
                return "Регистрация";
                break;
            default:
                break;
        }
    }
 
}
?>
