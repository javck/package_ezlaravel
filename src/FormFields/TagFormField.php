<?php

namespace Javck\Easyweb2\FormFields;

use App\Tag;
use TCG\Voyager\FormFields\AbstractHandler;

class TagFormField extends AbstractHandler
{
    protected $codename = 'tag dropdown';

    public function createContent($row, $dataType, $dataTypeContent, $options)
    {
        $_options = null;
        $default = null;
        if (isset($options->type)) {
            //$_options = Constant::${$options->key};
            $_options = Tag::where('type', 'like', '%' . $options->type . '%')->where('enabled', 1)->orderBy('sort', 'asc')->pluck('title', 'id');
        }
        if (isset($options->default)) {
            $default = $options->default;
        }
        return view('formFields.tagFormField', [
            'row' => $row,
            'default' => $default,
            'options' => $_options,
            'dataType' => $dataType,
            'dataTypeContent' => $dataTypeContent,
        ]);
    }
}
