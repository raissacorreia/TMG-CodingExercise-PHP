<?php
require_once 'Input.php';
class TextInput extends Input
{
    /**
     * Validates the input value.
     *
     * This method ensure this textfield is not empty.
     *
     * @return bool Returns true if the input value is not empty, false otherwise.
     */
    public function validate()
    {
        return !empty($this->_initVal);
    }

    /**
     * Renders any additional settings for the TextInput.
     *
     * This is the specific section of the TextInput, which is the input itself in this example.
     * 
     * @return void
     */
    protected function _renderSetting()
    {
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

    /**
     * Constructor for the TextInput class.
     *
     * Initializes a new Input object with the given name, label, and initial value.
     *
     * @param string $name The name of the input.
     * @param string $label The label of the input.
     * @param string $value The initial value of the input (optional, defaults to an empty string).
     */
    public function __construct($name, $label, $value = '')
    {
        $this->_name = $name;
        $this->_label = $label;
        $this->_initVal = $value;
    }
}
