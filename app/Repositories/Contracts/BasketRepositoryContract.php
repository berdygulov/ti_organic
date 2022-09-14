<?php


namespace App\Repositories\Contracts;


interface BasketRepositoryContract
{
    /* Add item to the basket*/
    public function add(int $id, int $qty): void;

    /* Get items current quantity */
    public function getCurrentQty(int $id): int;

    /* Get all items in the basket */
    public function all(): array;

    /* Remove item from the basket */
    public function remove(int $id): void;
}
