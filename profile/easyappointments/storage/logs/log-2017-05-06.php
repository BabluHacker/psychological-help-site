<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-05-06 02:01:53 --> Email could not been sent. Mailer Error (Line 137): Could not instantiate mail function.
ERROR - 2017-05-06 02:01:53 --> #0 /var/www/html/psycho_help/profile/easyappointments/application/controllers/Appointments.php(455): EA\Engine\Notifications\Email->sendAppointmentDetails(Array, Array, Array, Array, Array, Object(EA\Engine\Types\Text), Object(EA\Engine\Types\Text), Object(EA\Engine\Types\Url), Object(EA\Engine\Types\Email))
#1 [internal function]: Appointments->ajax_register_appointment()
#2 /var/www/html/psycho_help/profile/easyappointments/system/core/CodeIgniter.php(514): call_user_func_array(Array, Array)
#3 /var/www/html/psycho_help/profile/easyappointments/index.php(353): require_once('/var/www/html/p...')
#4 {main}
