<?php
class Photos
{
    use Model;
    public function listerPhotos()
    {
        if (!is_null($this->pdo)) {
            $stmt = $this->pdo->query('SELECT * FROM photo');
        }
        $photos = [];
        while ($photo = $stmt->fetchObject('Photo')) {
            $photos[] = $photo;
        }
        return $photos;
    }
}