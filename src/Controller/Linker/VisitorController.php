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
    public $visitor;

    public function new($uu)
    {
            $uuid = Uuid::uuid4();
            $uu = $uuid->toString();
//            $visitor = new Visitor;
//            $visitor->$this->setVisitor(Uuid::uuid4());
            return $uu;

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