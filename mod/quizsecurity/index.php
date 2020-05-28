<?php

require_once("../../config.php");
require_once("../quiz/locallib.php");

$id = required_param('id', PARAM_INT);
$PAGE->set_url('/mod/quizsecurity/index.php', array('id'=>$id));

if (!$course = $DB->get_record('course', array('id' => $id))) {
    print_error('invalidcourseid');
}

$coursecontext = context_course::instance($id);

require_login($course);

$PAGE->set_pagelayout('incourse');

$params = array(
    'context' => $coursecontext
);

$event = \mod_quizsecurity\event\course_module_instance_list_viewed::create($params);
$event->trigger();

// Print the header.
$strquizzes = get_string("modulenameplural", "quizsecurity");
$PAGE->navbar->add($strquizzes);
$PAGE->set_title($strquizzes);
$PAGE->set_heading($course->fullname);
echo $OUTPUT->header();
echo $OUTPUT->heading($strquizzes, 2);
$table = new html_table();
$table->head = $headings;
$table->align = $align;
$table->data[] = [];
// Display the table.
echo html_writer::table($table);
// Finish the page.
echo $OUTPUT->footer();