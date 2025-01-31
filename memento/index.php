<?php
declare(strict_types=1);

require_once dirname(__FILE__) . "/Person.php";
require_once dirname(__FILE__) . "/PersonHistory.php";

$history = new PersonHistory();

$john = new Person("One", "Simms", "He is a cool guy");
$history->push($john->createState());
print "<p>1: ".$john."</p>";

$john->setName("Two");
$history->push($john->createState());
print "<p>2: ".$john."</p>";

$john->setName("Three");
$john->setSurname("Davids");
$john->setBio("This guy is just the best");
$history->push($john->createState());
print "<p>3: ".$john."</p>";

$john->setName("Four");
$history->push($john->createState());
print "<p>4: ".$john."</p>";

$john->setName("Five");
$john->setSurname("Barry");
$john->setBio("He's ok");
$history->push($john->createState());
print "<p>5: ".$john."</p>";

print "<p><hr>WALK BACK<hr></p>";

while ($state = $history->pop()) {
    $john->restoreState($state);
    print "<p>Undo: ".$john."</p>";
}
