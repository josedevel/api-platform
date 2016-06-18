<?php

namespace AppBundle\Action;

use AppBundle\Entity\Book;
use Doctrine\Common\Persistence\ManagerRegistry;
use Symfony\Component\Routing\Annotation\Route;

class BookSpecial
{
    private $doctrine;

    public function __construct(ManagerRegistry $doctrine)
    {
        $this->doctrine = $doctrine;
    }

    /**
     * @Route(
     *     name="book_special",
     *     path="/books/{id}/special",
     *     defaults={"_resource_class"=Book::class, "_item_operation_name"="special"}
     * )
     */
    public function __invoke($id)
    {
        return $this->doctrine->getManager()->find(Book::class, $id);
    }
}
