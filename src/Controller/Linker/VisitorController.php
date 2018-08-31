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

    private $locate;

    protected $host;


    public function __construct()
    {
            $uuid = Uuid::uuid4();
            $uu = $uuid->toString();
//            $visitor = new Visitor;
//            $visitor->$this->setVisitor(Uuid::uuid4());
            $this->visitor = $uu;
            $this->locate = 1;
            $this->host = $this->get();
    }

    /**
     * @return mixed
     */
    public function getVisitor()
    {
        return $this->visitor;
    }

    private function get()
    {
        return 21;
    }

    /**
     * @param mixed $visitor
     */
    public function setVisitor($visitor): void
    {
        $this->visitor = $visitor;
    }
}