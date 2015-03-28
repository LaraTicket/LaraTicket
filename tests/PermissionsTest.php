<?php

use Mockery as m;

class PermissionsTest extends TestCase {

    /**
     * @test
     */
    public function it_can_add_permissions_to_roles()
    {
        // this would touch the db, in case we need this test, we need
        // to create an in memory sqlite db.
        // TODO: decide if we want to test Eloquent
    }

    /**
     * @test
     */
    public function it_fetches_permissions_for_users()
    {
        // CheckPermissions -> can('perm')
        // getPermissions() should be called
        // getRoles() should be called
        // assert equals ['perm'] 
    }

}
