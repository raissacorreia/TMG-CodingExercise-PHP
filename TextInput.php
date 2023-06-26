<?php
require_once 'Input.php';
class TextInput extends Input
{
    /* Implement the validation logic for the TextInput
    * You can customize the validation rules according to your requirements
    */
    public function validate()
    {
        return !empty($this->_initVal);
    }

    /* Implement the rendering of any additional settings for the TextInput
     * This method is intended to be used by subclasses for customization
     * You can add additional HTML markup or settings specific to the TextInput
     * Example: Render any additional attributes or settings for the TextInput
     */
    protected function _renderSetting()
    {
        echo '<input type="text" name="' . $this->_name .
            '" id="' . $this->_name . '" value="' . $this->_initVal .
            '" class="custom-class">';
    }

    public function __construct($name, $label, $value = '')
    {
        $this->_name = $name;
        $this->_label = $label;
        $this->_initVal = $value;
    }

    public function render()
    {
        echo '
        <style>
            .form-label {
                display: block;
                font-weight: bold;
                margin-bottom: 5px;
            }
        </style>
        <label class="form-label" for="' . $this->_name . '">' .
            $this->_label . '</label>';
        echo '
        <style>
            .form-input {
                display: block;
                padding: 10px;
                margin-bottom: 10px;
                font-size: 16px;
                border: 1px solid #ccc;
                border-radius: 4px;
            }
        </style>
        <input class="form-input" type="text" name="' . $this->_name .
            '" id="' . $this->_name . '" value="' . $this->_initVal . '">';
    }
}
