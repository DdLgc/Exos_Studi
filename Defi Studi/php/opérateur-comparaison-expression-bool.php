<!-- Notre boîte de messagerie est susceptible d'afficher des messages aux utilisateurs selon l'état de la boîte.
La messagerie est divisée en 4 boîtes :
Les messages non lus (représentés par la variable $unreadMessages)
Les messages lus (représentés par la variable $readMessages)
La corbeille (représentée par la variable $junkMessages)
Les spams (représentés par la variable $spamMessages)
Les utilisateurs peuvent être de simples utilisateurs ou des utilisateurs Premium, selon la valeur de la variable $isPremium.
Les utilisateurs normaux ont une limite de 50 messages, toutes boîtes confondues (représenté par la variable $messageCountLimit), tandis que les utilisateurs Premium ont une limite de 100 messages ($premiumCountLimit). -->

<html>
<head></head>
<body>
<h1>Messagerie</h1>
<?php
$isPremium = true;
$unreadMessages = 10;
$readMessages = 30;
$junkMessages = 10;
$spamMessages = 3;
$messagesCountLimit = 50;
$premiumCountLimit = 100;
$hasUnreadMessages = $hasUnreadMessages !== 0;
$mustCleanMessages = $junkMessages + $spamMessages > 0;
$totalMessages = $unreadMessages + $readMessages + $junkMessages + $spamMessages;
$isMessageboxFull = !$isPremium && $totalMessages > $messagesCountLimit || $isPremium && $totalMessages > $premiumCountLimit;
if ($hasUnreadMessages) {
  echo 'Vous avez '.$unreadMessages.' messages non lus<br>';
}
if ($mustCleanMessages) {
  echo 'Vous avez des messages à nettoyer<br>';
}
if ($isMessageboxFull) {
  echo 'Attention : vous avez dépassé la limite de messages autorisée !<br>';
}
?>
</body>
</html>