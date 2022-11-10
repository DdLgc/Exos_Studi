Le fait de centraliser, au même endroit, des données et les actions effectuées sur ces données s'appelle l'encapsulation.

Lorsque l'on créée une classe, on met à disposition des développeurs une interface, c'est-à-dire un ensemble de méthodes qui pourront être utilisées.

        <!-- Exos -->

<!-- Pour une application de gestion d'articles de journaux, nous avons besoin d'encapsuler la gestion textes dans une classe. Vous devez donc créer une classe Text qui sera utilisée par l'équipe développement et qui comportera l'interface suivante :

Une méthode getSentences() : array qui retourne un tableau de phrases composant le texte. Pour simplifier le problème, on considère que seuls les points seront utilisés dans nos textes pour séparer les phrases, et que toutes les phrases seront bien formées (une phrase à la fin de chacune).

Une méthode getTextLength() : int qui retourne le nombre de caractères de notre texte.

Une méthode getSentencesCount() : int qui retourne le nombre de phrases dans notre texte. -->
<?php
class Text
{
    public string $text;
    public function __construct(string $text)
    {
        $this->text = $text;
    }
    public function getSentences(): array
    {
        $sentences = explode('.', $this->text);
        array_pop($sentences); //On enlève le dernier élément, toujours vide
        return $sentences;
    }
    public function getTextLength(): int
    {
        return strlen($this->text);
    }
    public function getSentencesCount(): int
    {
        return count($this->getSentences());
    }
}
$text = new Text('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lacinia quam sed lacinia blandit. In et viverra elit. Nullam molestie quam eget porta venenatis. Aenean blandit auctor turpis, eu rhoncus libero pulvinar id. Aenean euismod enim ac sagittis accumsan. Fusce venenatis purus orci, in euismod erat porttitor in. Morbi semper dignissim felis a tincidunt.');
print_r($text->getSentences());
echo 'Le texte possède '.$text->getSentencesCount().' phrases et '.$text->getTextLength().' caractères.';