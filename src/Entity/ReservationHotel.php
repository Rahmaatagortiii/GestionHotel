<?php

namespace App\Entity;

use App\Repository\ReservationHotelRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity(repositoryClass=ReservationHotelRepository::class)
 */
class ReservationHotel
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     * @Assert\NotBlank(message="Date Debut is required")
     */
    private $date_debut;

    /**
     * @ORM\Column(type="date")
     * @Assert\NotBlank(message="Date Fin is required")
     */
    private $date_fin;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Type is required")
     */
    private $type;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="Nombre de Chambre is required")
     */
    private $nombre_chambre;

    /**
     * @ORM\ManyToOne(targetEntity=Hotel::class, inversedBy="reservationHotels")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotBlank(message="Nom Hotel is required")
     */
    private $NomHotel;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->date_debut;
    }

    public function setDateDebut(\DateTimeInterface $date_debut): self
    {
        $this->date_debut = $date_debut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->date_fin;
    }

    public function setDateFin(\DateTimeInterface $date_fin): self
    {
        $this->date_fin = $date_fin;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getNombreChambre(): ?int
    {
        return $this->nombre_chambre;
    }

    public function setNombreChambre(int $nombre_chambre): self
    {
        $this->nombre_chambre = $nombre_chambre;

        return $this;
    }

    public function getNomHotel(): ?Hotel
    {
        return $this->NomHotel;
    }

    public function setNomHotel(?Hotel $NomHotel): self
    {
        $this->NomHotel = $NomHotel;

        return $this;
    }
}
