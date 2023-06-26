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
     * This method is intended to be used by subclasses for customization.
     * Subclasses can override this method to add additional HTML markup or settings specific to the TextInput.
     * For example, they can render any additional attributes or settings for the TextInput.
     */
    protected function _renderSetting()
    {
        echo '<input type="text" name="' . $this->_name .
            '" id="' . $this->_name . '" value="' . $this->_initVal .
            '" class="custom-class">';
    }

    /**
     * Constructor for the Input class.
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

    /**
     * Renders the HTML and CSS for the TextInput element.
     *
     * @return void
     */
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
