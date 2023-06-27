<?php
abstract class Input
{
    protected $_name;
    protected $_label;
    protected $_initVal;

    abstract public function validate();
    abstract protected function _renderSetting();

    /**
     * Constructor for the Input class.
     * Because it is an abstract class it serves as a default constructor for all subclasses.
     *
     * Initializes a new Input object with the given name, label, and initial value.
     *
     * @param string $name The name of the input.
     * @param string $label The label of the input.
     * @param string $initVal The initial value of the input (optional, defaults to an empty string).
     */
    public function __construct($name, $label, $initVal)
    {
        $this->_name = $name;
        $this->_label = $label;
        $this->_initVal = $initVal;
    }

    /**
     * Implements a simple getter method for the _name of a given input field.
     *
     * @return string _name
     */
    public function getName()
    {
        return $this->_name;
    }


    /**
     * Renders the HTML section in common for all Inputs in this case is the label
     * and its respective style class.
     * 
     * @return void
     */
    public function render()
    {
        echo '
        <label 
            class="form-label"
            style="
                display: block;
                font-weight: bold;
                margin-bottom: 5px;"
            for="' . $this->_name . '">' .
            $this->_label . '</label>';
        $this->_renderSetting();
    }

    /**
     * Implements a simple getter method for the _initVal of a given input field.
     * Which is always the initial value of such field.
     *
     * @return string _initVal
     */
    public function getValue()
    {
        return $this->_initVal;
    }
}
