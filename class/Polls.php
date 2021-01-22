<?php

//Класс для описания и работы опросов
Class Polls {

    //Выводим <select>
    public function selextItems($items, $selected=0) { 
        $text = "";
        foreach ($items as $key => $value) {
            if ($key === $selected)
                $ch = " selected";
            else
                $ch = "";
            $text .= "<option$ch value='$key'>$value</option>\n";
        }
        return $text;
    }

}
?>