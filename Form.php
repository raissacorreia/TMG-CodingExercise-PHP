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
        $file = 'Sample.php';
        if (file_exists($file)) {
            echo '<form class="form-container" action="Sample.php" method="post">';

            foreach ($this->_inputs as $input) {
                echo '<div>';
                $input->render();
                echo '</div>';
            }

            echo '<input type="submit" value="Submit" class="submit-button">';
            echo '</form>';
        } else {
            echo "The file does not exist.";
        }
    }
}
