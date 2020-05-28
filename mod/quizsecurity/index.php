<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * This script lists all the instances of quiz in a particular course
 *
 * @package    mod_quizsecurity
 * @copyright  1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


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
