<?php
/**
 * Created by PhpStorm.
 * User: vbezgin
 * Date: 20.08.18
 * Time: 14:19
 */

namespace App\Controller\Linker;

use App\Entity\Visitor;
use Ramsey\Uuid\Uuid;

class VisitorController
{
    private $visitor;

    public function __construct($visitor)
    {
        if(!$visitor){
            return $this->visitor = $visitor;
        }else{
            $visitor = new Visitor;
            $visitor->$this->setVisitor(Uuid::uuid4());
            return $visitor;
        }
    }

    /**
     * @return mixed
     */
    public function getVisitor()
    {
        return $this->visitor;
    }

    /**
     * @param mixed $visitor
     */
    public function setVisitor($visitor): void
    {
        $this->visitor = $visitor;
    }
}