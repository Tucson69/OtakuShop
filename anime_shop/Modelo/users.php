<?php
class user 
{
  public int $id;
  public string $mail;
  public string $name;
  public string $password;

  public function __construct(string $mail, string $name, string $password)
  {
    $this->mail = $mail;
    $this->name = $name;
    $this->password = $password;
  }
}
?>