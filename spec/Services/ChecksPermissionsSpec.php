<?php namespace spec\LaraTicket\Services;

use Illuminate\Support\Collection;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Mockery as m;

class ChecksPermissionsSpec extends ObjectBehavior {

    function let()
    {
        $this->beConstructedWith($this->mockAuth());
    }


    function it_is_initializable()
    {
        $this->shouldHaveType('LaraTicket\Services\ChecksPermissions');
    }

    function it_throws_exception_when_the_user_is_null()
    {
        $this->shouldThrow('LaraTicket\Exceptions\NoPermissionsException')->during('check', ['perm']);
    }

    function it_throws_exception_when_the_user_has_no_permission()
    {
        $user = $this->mockUserWithPermissions();

        $this->beConstructedWith($this->mockAuth($user));
        
        $this->shouldThrow('LaraTicket\Exceptions\NoPermissionsException')->during('check', ['perm']);
    }

    function it_continues_if_user_has_permission()
    {
        $user = $this->mockUserWithPermissions(['perm' => 'perm']);

        $this->beConstructedWith($this->mockAuth($user));

        $this->check('perm')->shouldReturn(null);
    }


    private function mockAuth($user = null)
    {
        $auth = m::mock('Illuminate\Auth\AuthManager');
        $auth->shouldReceive('user')->once()->andReturn($user);

        return $auth;
    }

    private function mockUserWithPermissions($perms = null)
    {
        $user = m::mock('LaraTicket\User');
        $user->shouldReceive('getPermissions')->once()->andReturn(new Collection($perms));

        return $user;
    }
}
