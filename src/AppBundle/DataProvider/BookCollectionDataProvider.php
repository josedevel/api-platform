<?php

namespace AppBundle\DataProvider;

use ApiPlatform\Core\DataProvider\CollectionDataProviderInterface;
use ApiPlatform\Core\Exception\ResourceClassNotSupportedException;
use AppBundle\Entity\Book;

class BookCollectionDataProvider implements CollectionDataProviderInterface
{
    public function getCollection(string $resourceClass, string $operationName = null)
    {
        if (Book::class !== $resourceClass) {
            throw new ResourceClassNotSupportedException();
        }

        $book1 = new Book();
        $book1->setId(1);
        $book1->setName('My first book');

        $book2 = new Book();
        $book2->setId(2);
        $book2->setName('Another book');

        return [$book1, $book2];
    }
}
