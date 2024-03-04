<?php
namespace App\Model;

class SearchData
{
    private $search;

    public function getSearch(): ?string
    {
        return $this->search;
    }

    public function setSearch(?string $search): self
    {
        $this->search = $search;
        return $this;
    }



    // Ajoutez d'autres méthodes getter et setter selon vos besoins
}