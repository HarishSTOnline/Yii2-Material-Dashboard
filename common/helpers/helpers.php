<?php

if (!function_exists('ddd')) {
    /**
     * Dump the passed variables and end the script.
     *
     * @param  mixed  $args
     * @return void
     */
    function ddd(...$args) {
        http_response_code(500);

        foreach ($args as $x) {
            echo \yii\helpers\VarDumper::dump($x, 5, true);
        }

        die(1);
    }
}

if (!function_exists('yii_param')) {

    /**
     * Get the param value from params file.
     *
     * @param  string  $name param name
     * @param  string (optional) $default value to be returned if not present
     * @return string
     */
    function yii_param($name, $default = null) {
        if (\yii\helpers\ArrayHelper::getValue(\Yii::$app->params, $name)) {
            return \yii\helpers\ArrayHelper::getValue(\Yii::$app->params, $name);
        } else {
            return $default;
        }
    }

}

if (!function_exists('asset')) {

    /**
     * returns the url of the asset in public folder
     *
     * @param  string  $value string asset path eg: images/logo.png
     * @return string
     */
    function asset($value) {
        return \yii\helpers\Url::to("@web/{$value}", true);
    }

}
if (!function_exists('resize_image')) {

    /**
     *  resize image based on predefined values inside resize controller which is used for image resizing
     *  Global upload path is mentioned in resize controller
     *
     * @param  string  $folder folder name, 
     * @param string $file file name
     * @param $size one of the predefined sizes mentioned in resize controller
     */
    function resize_image($folder, $file, $size) {
        return \yii\helpers\Url::to("@web/resizes/index?type={$folder}&size={$size}&file={$file}", true);
    }

}


if (!function_exists('db_calender_format')) {

    /**
     * formats date from bootstrap calender, to be saved in db
     *
     * @param  string  $date date
     * @return string formatted string, that can be saved in db
     */
    function db_calender_format($date) {
        $datetime = \DateTime::createFromFormat("d/m/Y", $date);
        return \Yii::$app->formatter->asDatetime($datetime, "php:Y-m-d");
    }

}

if (!function_exists('db_calender_format_datepicker')) {

    /**
     * formats date from bootstrap calender, to be saved in db
     *
     * @param  string  $date date
     * @return string formatted string, that can be saved in db
     */
    function db_calender_format_datepicker($date) {
        $datetime = \DateTime::createFromFormat("m/d/Y", $date);
        return \Yii::$app->formatter->asDatetime($datetime, "php:Y-m-d");
    }

}

if (!function_exists('ui_calender_format')) {

    /**
     * formats date from db to be show in bootstrap calender ui
     *
     * @param  string  $date date
     * @return string formatted string, that can be saved in db
     */
    function ui_calender_format($date) {
        $datetime = \DateTime::createFromFormat("Y-m-d", $date);
        return \Yii::$app->formatter->asDatetime($datetime, "php:d/m/Y");
    }

}

if (!function_exists('ui_calender_format_datepicker')) {

    /**
     * formats date from db to be show in bootstrap calender ui
     *
     * @param  string  $date date
     * @return string formatted string, that can be saved in db
     */
    function ui_calender_format_datepicker($date) {
        $datetime = \DateTime::createFromFormat("Y-m-d", $date);
        return \Yii::$app->formatter->asDatetime($datetime, "php:m/d/Y");
    }

}

if (!function_exists('ui_calender_format_with_his')) {

    /**
     * formats datetime from db to be show in bootstrap calender ui
     *
     * @param  string  $date date
     * @return string formatted string, that can be saved in db
     */
    function ui_calender_format_with_his($date) {
        $datetime = \DateTime::createFromFormat("Y-m-d H:i:s", $date);
        return \Yii::$app->formatter->asDatetime($datetime, "php:d/m/Y H:i:s");
    }

}
