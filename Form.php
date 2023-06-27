<?php
class Form
{

    protected $_inputs;

    /**
     * Constructor for the Form class.
     * Form is like a bag that holds all the inputs.
     *
     * Initializes a new form object with the given inputs.
     *
     * @param object $inputs The array of objects which are instances of class that extends Input.
     */
    public function __construct(Input ...$inputs)
    {
        $this->_inputs = $inputs;
    }

    /**
     *  Adds a new input to the form
     * 
     * @param Input $input The input to be added to the form.
     */
    public function addInput(Input $input)
    {
        $this->_inputs[] = $input;
    }

    /**
     * Iterates over all inputs managed by this form and returns false
     * if any of them don't validate according to their respective validation rules.
     *
     * @return boolean
     */
    public function validate()
    {
        foreach ($this->_inputs as $input) {
            if (!$input->validate()) {
                return false;
            }
        }

        return true;
    }

    /**
     * Returns the value of the input by $name, through its own getValue
     *
     * @return string
     */
    public function getValue($name)
    {
        foreach ($this->_inputs as $input) {
            if ($input->getName() === $name) {
                return $input->getValue();
            }
        }

        return null;
    }

    /**
     * Draws the outer form element, and the markup for each input
     *
     * @return void
     */
    public function display()
    {
        echo '
            <form
                class="form-container"
                style="
                    margin: 1rem auto;
                    padding: 1rem;
                    border: 1px solid #ccc;
                    border-radius: 4px;
                    height: 210px;"
                action="Sample.php"
                method="post">
            ';
        foreach ($this->_inputs as $input) {
            echo '
                <div 
                    class="input-container"
                    style="
                        display: flex;
                        flex-direction: column;
                        margin-bottom: 1rem;
                        height: 65px;"
                >
            ';
            $input->render();
            echo '</div>';
        }
        echo '
            <input 
                type="submit"
                value="Submit"
                class="submit-button"
                style="
                    display: block;
                    height: 40px;
                    width: 100%;
                    padding: 10px;
                    background-color: #4caf50;
                    color: white;
                    font-size: 16px;
                    border: none;
                    border-radius: 4px;
                    cursor: pointer;
                "
            >';
        echo '</form>';
    }
}
