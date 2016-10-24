<?php
/**
 * driver: chromedriver --url-base=wd/hub
 *
 * @var \Codeception\Scenario $scenario
 */

$I = new AcceptanceTester($scenario);
$I->wantTo('Comment a post');
$I->amOnPage('/');
$I->click('Hello world');
$I->fillField('comment', 'What an awesome post!');
$I->fillField('author', 'Henri');
$I->fillField('email', 'henri@localhost.local');
$I->fillField('url', 'http://localhost.local');
$I->click('submit');
$I->see('Your comment is awaiting moderation.', '#comment-2');

// slower please...
//$I->amOnPage('/');
//$I->wait(2);
//$I->click('Hello world');
//$I->wait(2);
//$I->fillField('comment', 'What an awesome post!');
//$I->wait(2);
//$I->fillField('author', 'Henri');
//$I->wait(2);
//$I->fillField('email', 'henri@localhost.local');
//$I->wait(2);
//$I->fillField('url', 'http://localhost.local');
//$I->wait(2);
//$I->click('submit');
//$I->wait(2);
//$I->see('Your comment is awaiting moderation.', '#comment-2');
//$I->wait(2);
