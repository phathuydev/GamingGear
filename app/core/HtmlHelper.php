<?php
class HtmlHelper
{
    static function formOpen($method = 'get', $action = '', $enctype = '', $onsubmit = '')
    {
        echo '<form method="' . $method . '" enctype="' . $enctype . '" action="' . $action . '" onsubmit="' . $onsubmit . '">';
    }

    static function formClose()
    {
        echo '</form>';
    }

    static function input($wrapBefore = '', $wrapAfter = '', $type = 'text', $name, $accept = '', $class = '', $id = '', $placeholder = '', $value = '')
    {
        echo $wrapBefore;
        echo '<input type="' . $type . '" name="' . $name . '" accept="' . $accept . '" class="' . $class . '" id="' . $id . '" placeholder="' . $placeholder . '" value="' . $value . '"/>';
        echo $wrapAfter;
    }

    static function selectOption($wrapBefore = '', $wrapAfter = '', $name, $class = '', $none1 = '', $value1 = '', $label1 = '', $none2 = '', $value2 = '', $label2 = '', $none3 = '', $value3 = '', $label3 = '', $none4 = '', $value4 = '', $label4 = '', $none5 = '', $value5 = '', $label5 = '')
    {
        echo $wrapBefore;
        echo '<select name="' . $name . '" class="' . $class . '">';
        echo '<option class="' . $none1 . '" value="' . $value1 . '">' . $label1 . '</option>';
        echo '<option class="' . $none2 . '" value="' . $value2 . '">' . $label2 . '</option>';
        echo '<option class="' . $none3 . '" value="' . $value3 . '">' . $label3 . '</option>';
        echo '<option class="' . $none4 . '" value="' . $value4 . '">' . $label4 . '</option>';
        echo '<option class="' . $none5 . '" value="' . $value5 . '">' . $label5 . '</option>';
        echo '</select>';
        echo $wrapAfter;
    }

    static function submit($wrapBefore = '', $wrapAfter = '', $label, $class = '')
    {
        echo $wrapBefore;
        echo '<button type="submit" class="' . $class . '">' . $label . '</button>';
        echo $wrapAfter;
    }
}
