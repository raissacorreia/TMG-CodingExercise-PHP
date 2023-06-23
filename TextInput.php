<?php
require_once 'Input.php';
class TextInput extends Input
{
    protected $name;
    protected $label;
    protected $value;

    /* Implement the validation logic for the TextInput
    * You can customize the validation rules according to your requirements
    */
    public function validate()
    {
        return !empty($this->value);
    }
    /* Implement the rendering of any additional settings for the TextInput
     * This method is intended to be used by subclasses for customization
     * You can add additional HTML markup or settings specific to the TextInput
     * Example: Render any additional attributes or settings for the TextInput
     */
    protected function _renderSetting()
    {
        echo '<input class="form-input" type="text" name="' . $this->name . '" id="' . $this->name . '" value="' . $this->value . '" class="custom-class">';
    }

    public function __construct($name, $label, $value = '')
    {
        $this->name = $name;
        $this->label = $label;
        $this->value = $value;
    }

    public function render()
    {
        echo '<label class="form-label" for="' . $this->name . '">' . $this->label . '</label>';
        echo '<input class="form-input" type="text" name="' . $this->name . '" id="' . $this->name . '" value="' . $this->value . '">';
    }
}
