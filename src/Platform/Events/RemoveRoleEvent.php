<?php

declare(strict_types=1);

namespace Orchid\Platform\Events;

use Orchid\Platform\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Queue\SerializesModels;

class RemoveRoleEvent
{
    use SerializesModels;

    /**
     * The authenticated user.
     *
     * @var User
     */
    public $user;

    /**
     * Roles.
     *
     * @var Collection
     */
    public $roles;

    /**
     * Create a new event instance.
     *
     * @param $user
     * @param $role
     */
    public function __construct($user, $role)
    {
        $this->user = $user;
        $this->roles = collect($role);
    }
}
