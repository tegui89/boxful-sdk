<?php
namespace Boxful\Entities;

use Boxful\Entity;

class Customer extends Entity
{
    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $fname;

    /**
     * @var string
     */
    protected $lname;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $area_code;

    /**
     * @var string
     */
    protected $phone;

    /**
     * @var \DateTime
     */
    protected $created_at;

    /**
     * @var \DateTime
     */
    protected $updated_at;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var \DateTime
     */
    protected $birthdate;

    /**
     * @var \DateTime
     */
    protected $terms_accepted_at;

    /**
     * @var string
     */
    protected $doc_type;

    /**
     * @var string
     */
    protected $doc_number;

    /**
     * @var string
     */
    protected $tax_id_type;

    /**
     * @var string
     */
    protected $tax_id_number;

    /**
     * @var string
     */
    protected $metadata;
}
