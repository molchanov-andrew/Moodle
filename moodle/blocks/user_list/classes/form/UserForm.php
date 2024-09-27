<?php

/**
 * UserForm.php
 * Author: Andrii Molchanov
 * Email: andymolchanov@gmail.com
 * 25.09.2024
 */
// moodleform is defined in formslib.php
global $CFG;
require_once("$CFG->libdir/formslib.php");
require_once($CFG->dirroot . '/blocks/user_list/classes/models/User.php');

class UserForm extends moodleform
{
    // Add elements to form.
    public function definition()
    {
        $model = new User();
        $userList = $model->getUserList();
        // A reference to the form is stored in $this->form.
        // A common convention is to store it in a variable, such as `$mform`.
        $mform = $this->_form; // Don't forget the underscore!


        foreach ($userList as $user) {
            // Add elements to your form.
            $mform->addElement('hidden', 'user_id['. $user->id .']' , $user->id);
            $mform->addElement('text', 'estimate_' . $user->id, get_string('estimate'));
            $mform->addElement('text', 'username_' . $user->id, get_string('username'));
            $mform->addElement('text', 'email_' . $user->id, get_string('email'));
            $mform->addElement('header', 'estimate_' . $user->id, get_string('estimate', 'modulename'));


            // Set type of element.
            $mform->setType('estimate_' . $user->id, PARAM_NOTAGS);
            $mform->setType('username_' . $user->id, PARAM_NOTAGS);
            $mform->setType('email_' . $user->id, PARAM_NOTAGS);

            // Default value.
            $mform->setDefault('estimate_' . $user->id, '1');
            $mform->setDefault('username_' . $user->id, $user->username);
            $mform->setDefault('email_' . $user->id, $user->username);

            $this->add_action_buttons($cancel = false);
        }
    }

    // Custom validation should be added here.
    function validation($data, $files)
    {
        return [];
    }
}
