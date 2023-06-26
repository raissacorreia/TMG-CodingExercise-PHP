<?php
class Form
{

    protected $_inputs;

    public function __construct(Input ...$inputs)
    {
        $this->_inputs = $inputs;
    }

    /**
     *  adds an input instance to the collection of inputs managed by this 
     * form object
     */
    public function addInput(Input $input)
    {
        $this->_inputs[] = $input;
    }

    /**
     *  iterates over all inputs managed by this form and returns false if 
     * any of them don't validate
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
     * returns the value of the input by $name
     */
    public function getValue($name)
    {
        foreach ($this->_inputs as $input) {
            if ($input->getName() === $name) {
                return $input->getValue();
            }
        }

        // If input with the specified name is not found
        return null;
    }

    /**
     *  draws the outer form element, and the markup for each input, one input per row
     */
    public function display()
    {
        echo '
            <style>
                .form-container {
                    margin: 1rem auto;
                    padding: 1rem;
                    border: 1px solid #ccc;
                    border-radius: 4px;
                    height: 210px;
                }
            </style>
            <form
                class="form-container"
                action="Sample.php"
                method="post">
            ';
        foreach ($this->_inputs as $input) {
            echo '
                <style>
                    .input-container {
                        display: flex;
                        flex-direction: column;
                        margin-bottom: 1rem;
                        height: 65px;
                    }
                </style>
                <div class="input-container">
            ';
            $input->render();
            echo '</div>';
        }

        echo '
        <style>
            .submit-button {
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
            }
            .submit-button:hover {
                background-color: #45a049;
            }
            .submit-button:active {
                background-color: #3c903c;
            }
        </style>
        <input type="submit" value="Submit" class="submit-button">';
        echo '</form>';
    }
}
