<?php
    const GREATER = [0, 10, 20, 50, 100, 200, 500, 1000];
    const LESSER = [10, 50, 100, 200, 500, 2000, 5000, 10000];
    function getSelectGreater($params = [])
    {
        $html = '';
        $html .= "<select name='greater' id='so-chuong-2'>";
        foreach (GREATER as $item) {
            if ($params && isset($params['greater']) && $params['greater'] == $item) {
                $html .= "<option value='$item' selected>Số Chương < $item</option>";
            } else {
                $html .= "<option value='$item'>Số Chương > $item</option>";
            }
        }
        $html .= "</select>";
        return $html;
    }

    function getSelectLesser($params = [])
    {
        $html = '';
        $html .= "<select name='lesser' id='so-chuong-2'>";
        foreach (LESSER as $item) {
            if ($params && isset($params['lesser']) && $params['lesser'] == $item) {
                $html .= "<option value='$item' selected>Số Chương < $item</option>";
            } else {
                $html .= "<option value='$item'>Số Chương < $item</option>";
            }
        }
        $html .= "</select>";
        return $html;
    }



