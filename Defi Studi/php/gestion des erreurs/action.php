<?php
processForm();
function processForm()
{
    $user = new User();
    $formFields = ['name', 'birthDate', 'email', 'password', 'comment'];
    foreach ($formFields as $field) {
        $user->{'set' . ucfirst($field)}($_POST[$field]);
    }
    echo 'Utilisateur complet';
}
/**
 * Class User
 */
class User
{
    private $name;
    private $birthDate;
    private $email;
    private $password;
    private $comment;
    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }
    /**
     * @param string $birthDate
     */
    public function setBirthDate(string $birthDate)
    {
        $this->birthDate = $birthDate;
    }
    /**
     * @param string $email
     */
    public function setEmail(string $email)
    {
        $this->email = $email;
    }
    /**
     * @param string $password
     */
    public function setPassword(string $password)
    {
        $this->password = $password;
    }
    /**
     * @param string|null $comment
     */
    public function setComment(?string $comment)
    {
        $this->comment = $comment;
    }
    /**
     * @return bool
     */
    public function isFull()
    {
        return !empty($this->name) && !empty($this->password) && !empty($this->birthDate) && !empty($this->email);
    }
}