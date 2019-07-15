<?php

namespace Javck\Easyweb2\FormFields;

use TCG\Voyager\FormFields\AbstractHandler;

class ConstantFormField extends AbstractHandler
{
    protected $codename = 'constant dropdown';

    public function createContent($row, $dataType, $dataTypeContent, $options)
    {
        $_options = null;
        $default = null;
        if (isset($options->key)) {
            //$_options = Constant::${$options->key};
            $_options = json_decode(setting('constant.' . $options->key));
        } else {

        }
        if (isset($options->default)) {
            $default = $options->default;
        }
        return view('easyweb2::formFields.constantFormField', [
            'row' => $row,
            'default' => $default,
            'options' => $_options,
            'dataType' => $dataType,
            'dataTypeContent' => $dataTypeContent,
        ]);
    }
}
