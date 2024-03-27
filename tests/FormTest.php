<?php

use App\Form;
use PHPUnit\Framework\TestCase;

class FormTest extends TestCase
{
    private $form;

    protected function setUp(): void
    {
        $this->form = new Form('Ilya', 'test1234');
    }

    public function testCanWeCreateObjectWithTwoParams(): void
    {
        $form = new Form('Ilya', 'test1234');
        $this->assertEquals($form->getLogin(), 'Ilya');
        $this->assertEquals($form->getPassword(), 'test1234');
    }

    public function testCanWeCreateObjectWithFourParams(): void
    {
        $form = new Form('Ilya', 'test1234', 'ilya@gmail.com', 'https://itproger.com');
        $this->assertEquals($form->getLogin(), 'Ilya');
        $this->assertEquals($form->getEmail(), 'ilya@gmail.com');
        $this->assertEquals($form->getPassword(), 'test1234');
        $this->assertEquals($form->getWebUrl(), 'https://itproger.com');
    }

    public function testCanWeSetLogin(): void
    {
        $this->form->setLogin('Bob');
        $this->assertEquals($this->form->getLogin(), 'Bob');
    }

    public function testCanWeSetPassword(): void
    {
        $this->form->setPassword('test1234');
        $this->assertEquals($this->form->getPassword(), 'test1234');
    }

    public function testCanWeSetEmail(): void
    {
        $this->form->setEmail('ilya@gmail.com');
        $this->assertEquals($this->form->getEmail(), 'ilya@gmail.com');
    }

    public function testCanWeSetUrl(): void
    {
        $this->form->setWebUrl('https://itproger.com');
        $this->assertEquals($this->form->getWebUrl(), 'https://itproger.com');
    }

    public function testCanWeSetIncorrectEmail(): void
    {
        $this->assertFalse($this->form->setEmail('ilyagmailcom'));
    }

    public function testCanWeSetIncorrectUrl(): void
    {
        $this->assertFalse($this->form->setWebUrl('https://incorrecturl.com'));
    }

    protected function tearDown(): void
    {
        $this->form = null;
    }
}