<?php


namespace App\Repositories\Session;


use App\Repositories\Contracts\BasketRepositoryContract;
use Illuminate\Contracts\Session\Session;

class BasketRepository implements BasketRepositoryContract
{
    private Session $session;

    public function __construct(Session $session)
    {
        $this->session = $session;
    }

    public function all(): array
    {
        // TODO: Implement all() method.
        return $this->session->get('basket', []);

    }

    public function add($id, int $qty): void
    {
        $this->session->put($this->identity($id), $qty);
    }

    public function identity(int $id): string
    {
        return 'basket.' . $id;
    }

    public function getCurrentQty(int $id): int
    {
        // TODO: Implement getCurrentQty() method.
        return $this->session->get($this->identity($id), 0);
    }

    public function remove(int $id): void
    {
        // TODO: Implement remove() method.
        $this->session->remove($this->identity($id));
    }
}
