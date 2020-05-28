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
 * Definition of log events for the quizsecurity module.
 *
 * @package    mod_quizsecurity
 * @category   log
 * @copyright  2010 Petr Skoda (http://skodak.org)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$logs = array(
    array('module'=>'quizsecurity', 'action'=>'add', 'mtable'=>'quizsecurity', 'field'=>'name'),
    array('module'=>'quizsecurity', 'action'=>'update', 'mtable'=>'quizsecurity', 'field'=>'name'),
    array('module'=>'quizsecurity', 'action'=>'view', 'mtable'=>'quizsecurity', 'field'=>'name'),
    array('module'=>'quizsecurity', 'action'=>'report', 'mtable'=>'quizsecurity', 'field'=>'name'),
    array('module'=>'quizsecurity', 'action'=>'attempt', 'mtable'=>'quizsecurity', 'field'=>'name'),
    array('module'=>'quizsecurity', 'action'=>'submit', 'mtable'=>'quizsecurity', 'field'=>'name'),
    array('module'=>'quizsecurity', 'action'=>'review', 'mtable'=>'quizsecurity', 'field'=>'name'),
    array('module'=>'quizsecurity', 'action'=>'editquestions', 'mtable'=>'quizsecurity', 'field'=>'name'),
    array('module'=>'quizsecurity', 'action'=>'preview', 'mtable'=>'quizsecurity', 'field'=>'name'),
    array('module'=>'quizsecurity', 'action'=>'start attempt', 'mtable'=>'quizsecurity', 'field'=>'name'),
    array('module'=>'quizsecurity', 'action'=>'close attempt', 'mtable'=>'quizsecurity', 'field'=>'name'),
    array('module'=>'quizsecurity', 'action'=>'continue attempt', 'mtable'=>'quizsecurity', 'field'=>'name'),
    array('module'=>'quizsecurity', 'action'=>'edit override', 'mtable'=>'quizsecurity', 'field'=>'name'),
    array('module'=>'quizsecurity', 'action'=>'delete override', 'mtable'=>'quizsecurity', 'field'=>'name'),
    array('module'=>'quizsecurity', 'action'=>'view summary', 'mtable'=>'quizsecurity', 'field'=>'name'),
);