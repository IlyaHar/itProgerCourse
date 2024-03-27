<?php

namespace App;

class Form
{
    protected string $login;
    protected string $password;
    protected string $email;
    protected string $webUrl;

    public function __construct(
        string $login,
        string $password,
        string $email = '',
        string $webUrl = ''
    )
    {
        $this->setLogin($login);
        $this->setPassword($password);
        $this->setEmail($email);
        $this->setWebURL($webUrl);
    }

    public function getLogin(): string
    {
        return $this->login;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getWebUrl(): string
    {
        return $this->webUrl;
    }

    public function setLogin(string $login): void
    {
        $this->login = $login;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function setEmail(string $email): bool
    {
        if (strpos($email, '@') && strpos($email, '.')) {
            $this->email = $email;
            return true;
        }
        return false;
    }

    public function setWebURL($webURL): mixed
    {
        if (empty($webURL)) {
            return false;
        }

        $file_headers = @get_headers($webURL);

        if(!$file_headers || $file_headers[0] == 'HTTP/1.1 404 Not Found') {
            return false;
        }
        return $this->webUrl = $webURL;
    }
}