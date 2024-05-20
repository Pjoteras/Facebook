<?php
class Profile {
    private int $_id;
    private string $_firstName;
    private string $_lastName;
    private int $_profilePhotoID;

    public function __construct(int $id, string $firstName, string $lastName, int $_profilePhotoID)
    {
        $this->_id = $id;
    }
}